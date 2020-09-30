<?php

namespace App\Http\Controllers;

use App\Glasses;
use Illuminate\Http\Request;

class GlassesController extends Controller
{
    // function __construct()
    // {
    //     $this->middleware('auth');
    // }
    
    public function index()
    {
        $glasses = Glasses::where('is_deleted','=',1)->get();
        return view('glasses.index',[
            'glasses' => $glasses,
        ]);
    }
    
    public function create()
    {
        return view('glasses.Add_Glass');
    }
    
    public function store(Request $request)
    {

        $image=$request->file('image');
        $new_name=rand().'.'.$image->getClientOriginalName();
        $image->move(public_Path('/Img/glass/'),$new_name);
       
        $is_available;
        if ($request->get('is_available')== null) {
            $is_available=1;
        } else {
            $is_available=0;
        }
        $is_deleted=1;
        $glasses_data=array(
            'name'=>$request->name,
            'brand'=>$request->brand,
            'description'=>$request->description,
            'color'=>$request->color,
            'price'=>$request->price,
            'gender'=>$request->gender,
            'is_available'=>$is_available,
            'is_deleted'=>$is_deleted,
            'image'=>$new_name
        );
        Glasses::create($glasses_data);
        return redirect('/glass')->with('glass_added','Glass Added SuccessFully');
    }
    
    public function show(Glasses $glasses)
    {
        //
    }
    
    public function edit(Glasses $glasses,$id)
    {
        $glasses=Glasses::findOrFail($id);
        if ($glasses->is_deleted==1) {
            return view('glasses.Update_glass',['glasses'=>$glasses]);
        } else {
          return $msg="this is not your work";
        }
        
        // return view('glasses.Update_glass',['glasses'=>$glasses]);
    }
    
    public function update(Request $request, $id)
    {
        
        $image_name=$request->hidden_image;
        $image = $request->file('image');
        if ($image != '') {

            // When User Wants To update in image then older img will be delete

            $glasses=Glasses::findOrFail($id);
            $image_path=public_Path().'/Img/glass'.$glasses->image;
            unlink($image_path);

            $image_name=rand().'.'.$image->getClientOriginalName();
            $image->move(public_Path('/Img/glass'),$image_name);
        }
        else{

        }
 $is_available;
        if ($request->get('is_available') == null) {
        $is_available = 1;
        }
        else{
            $is_available=0;
        }
       
        $update_glasses=array(
            'name'=>$request->name,
            'brand'=>$request->brand,
            'color'=>$request->color,
            'gender'=>$request->gender,
            'description'=>$request->description,
            'price'=>$request->price,
            'image'=>$image_name,
            'is_available'=>$is_available
        );
       Glasses::whereId($id)->update($update_glasses);
       return redirect('/glass')->with('glass_updated','Glass Updated SuccessFully');
     
    }
    
    public function destroy($id)
    {
     
        $soft_delete=array('is_deleted'=>0);

        Glasses::whereId($id)->update($soft_delete);
        return redirect()->back()->with('glass_deleted','Glass Deleted SuccessFully');
        

        // $glasses=Glasses::findOrFail($id);
        // $image_path=public_Path().'/Img/'.$glasses->image;
        // unlink($image_path);
        // Glasses::destroy($glasses->id);
        // return redirect('/glass');
    }
}
