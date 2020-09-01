<?php

namespace App\Http\Controllers;

use App\Order;
use App\Glasses;
use App\Customer;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $glass=Glasses::all();
        $customer=Customer::all();
        $orders=Order::where('is_deleted','=',1)->get();
        return view('Order.index',['orders'=>$orders,'glass'=>$glass,'customer'=>$customer]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $glasses=Glasses::where('is_deleted','=',1)->get();
       $customers=Customer::where('is_deleted','=',1)->get();
        return view('Order.Add_Order',['glasses'=>$glasses,'customers'=>$customers]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'name'=>'required|max:30!min:3',
            'phone'=>'required',
            'address'=>'required|max:60!min:10',
            'location'=>'required|max:30!min:10',
            'notes'=>'required|max:30!min:3',
            'status'=>'required|max:30!min:3',
            'image'=>'required',
        ]);

        $image=$request->file('image');
        $new_name=rand().'.'.$image->getClientOriginalName();
        $image->move(public_Path('/Img/order'),$new_name);
       
        $is_verified;
        if ($request->get('is_verified')== null) {
            $is_verified=1;
        } else {
            $is_verified=0;
        }
        $is_deleted=1;
        $order_data=array(
            'customer_id'=>$request->customer_id,
            'glass_id'=>$request->glass_id,
            'name'=>$request->name,
            'phone'=>$request->phone,
            'address'=>$request->address,
            'location'=>$request->location,
            'notes'=>$request->notes,
            'gender'=>$request->gender,
            'status'=>$request->status,
            'is_verified'=>$is_verified,
            'is_deleted'=>$is_deleted,
            'image'=>$new_name
        );
      


        Order::create($order_data);
        return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Order  $order
     * @return \Illuminate\Http\Response
     */
    public function show(Order $order)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Order  $order
     * @return \Illuminate\Http\Response
     */
    public function edit(Order $order)
    {
        $glass=Glasses::all();
        $customer=Customer::all();
        $order_edit=Order::findOrFail($order->id);
        return view('Order.Update_Order',['order_edit'=>$order_edit,'glasses'=>$glass,'customers'=>$customer]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Order  $order
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Order $order)
    {
        
        $image_name=$request->hidden_image;
        $image = $request->file('image');
        if ($image != '') {

            // // When User Wants To update in image then older img will be delete

            $orders=Order::findOrFail($order->id);
            $image_path=public_Path().'/Img/order/'.$orders->image;
            unlink($image_path);

            $image_name=rand().'.'.$image->getClientOriginalName();
            $image->move(public_Path('/Img/order/'),$image_name);
        }
        else{

        }
 $is_verified;
        if ($request->get('is_verified') == null) {
        $is_verified = 1;
        }
        else{
            $is_verified=0;
        }
       
        $update_order=array(
            'customer_id'=>$request->customer_id,
            'glass_id'=>$request->glass_id,
            'name'=>$request->name,
            'phone'=>$request->phone,
            'address'=>$request->address,
            'location'=>$request->location,
            'notes'=>$request->notes,
            'gender'=>$request->gender,
            'status'=>$request->status,
            'is_verified'=>$is_verified,
            'image'=>$image_name,
          
        );
      Order::whereId($order->id)->update($update_order);
       return redirect('/order');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Order  $order
     * @return \Illuminate\Http\Response
     */
    public function destroy(Order $order)
    {
    
        $soft_delete=array('is_deleted'=>0);

        Order::whereId($order->id)->update($soft_delete);
        return redirect()->back();
       
        // Order::destroy($order->id);
        // return redirect('/order');
    }
}
