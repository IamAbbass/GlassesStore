<?php

namespace App\Http\Controllers;

use App\Customer;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CustomerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $customer=Customer::where('is_deleted','=',1)->get();;
        
        return view('Customer.index',['customer'=>$customer]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
       
        return view('Customer.Add_Customer');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
       
        // this code is for check is_verified value
        $is_verified;
        if ($request->get('is_verified')==null) {
            $is_verified=1;
        } else {
            $is_verified=0;
        }

        // this code id for check is_blocked value
        $is_blocked;
        if ($request->get('is_blocked')==null) {
            $is_blocked=1;
        } else {
            $is_blocked=0;
        }

        $is_deleted=1;
        $customer_data=array(
            'name'=>$request->name,
            'phone'=>$request->phone,
            'is_verified'=>$is_verified,
            'address'=>$request->address,
            'location'=>$request->location,
            'fcm_token'=>$request->fcm_token,
            'notes'=>$request->notes,
            'gender'=>$request->gender,
            'is_blocked'=>$is_blocked,
            'is_deleted'=>$is_deleted
        );
        Customer::create($customer_data);
        return redirect('/customer');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Customer  $customer
     * @return \Illuminate\Http\Response
     */
    public function show(Customer $customer)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Customer  $customer
     * @return \Illuminate\Http\Response
     */
    public function edit(Customer $customer)
    {
        $customer_edit=Customer::findOrFail($customer->id);
        if ($customer_edit->is_deleted==1) {
            return view('Customer.Update_Customer',['customer_edit'=>$customer_edit]);
        } else {
        return $msg="this is not your work";
        }
        
      
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Customer  $customer
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Customer $customer)
    {

       $is_verified;
       if ($request->get('is_verified')==null) {
           $is_verified=1;
       } else {
           $is_verified=0;
       }
       
       $is_blocked;
       if($request->get('is_blocked')==null){
           $is_blocked=1;
       }
       else{
           $is_blocked=0;
       }

        $customer_update=array(
            'name'=>$request->name,
            'phone'=>$request->phone,
            'is_verified'=>$is_verified,
            'address'=>$request->address,
            'location'=>$request->location,
            'fcm_token'=>$request->fcm_token,
            'notes'=>$request->notes,
            'gender'=>$request->gender,
            'is_blocked'=>$is_blocked,
        );
       Customer::whereId($customer->id)->update($customer_update);
       return redirect('/customer');
        


    
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Customer  $customer
     * @return \Illuminate\Http\Response
     */
    public function destroy(Customer $customer)
    {
   
        $soft_delete=array('is_deleted'=>0);

       Customer::whereId($customer->id)->update($soft_delete);
        return redirect()->back();
   
        // Customer::destroy($customer->id);
    // return redirect('/customer');
    }
}
