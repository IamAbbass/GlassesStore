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
        $glasses = Glasses::all();
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
        $image->move(public_Path('/Img'),$new_name);
       
        $is_available;
        if ($request->get('is_available')== null) {
            $is_available=1;
        } else {
            $is_available=0;
        }
        $glasses_data=array(
            'name'=>$request->name,
            'brand'=>$request->brand,
            'description'=>$request->description,
            'color'=>$request->color,
            'price'=>$request->price,
            'is_available'=>$is_available,
            'image'=>$new_name
        );
        Glasses::create($glasses_data);
        return redirect('/home');
    }
    
    public function show(Glasses $glasses)
    {
        //
    }
    
    public function edit(Glasses $glasses,$id)
    {
        $glasses=Glasses::findOrFail($id);
        return view('glasses.Update_glass',['glasses'=>$glasses]);
    }
    
    public function update(Request $request, $id)
    {
        $image_name=$request->hidden_image;
        $image = $request->file('image');
        if ($image != '') {
            $image_name=rand().'.'.$image->getClientOriginalName();
            $image->move(public_Path('/Img'),$image_name);
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
            'description'=>$request->description,
            'price'=>$request->price,
            'image'=>$image_name,
            'is_available'=>$is_available
        );
       Glasses::whereId($id)->update($update_glasses);
       return redirect('/home');
     
    }
    
    public function destroy($id)
    {
     
        $glasses=Glasses::findOrFail($id);
        $image_path=public_Path().'/Img/'.$glasses->image;
        unlink($image_path);
        Glasses::destroy($glasses->id);
        return redirect('/home');
    }
}
