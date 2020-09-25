<?php

namespace App\Http\Controllers;

use App\User;
use App\Glasses;
use App\Customer;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;


class WebAppController extends Controller
{

   // public function __construct()
   //  {
   //      $this->middleware('auth');
   //  }

   public function index(){
      $int = 8;
        $menglasses=Glasses::latest()->limit($int)->where('gender','=','Male')->get();
        $womenglasses=Glasses::latest()->limit($int)->where('gender','=','Female')->get();
        $kidsglasses=Glasses::latest()->limit($int)->where('gender','=','Kids')->get();

       return view('Frontend.Pages.MainPage',['menglasses'=>$menglasses,'womenglasses'=>$womenglasses,'kidsglasses'=>$kidsglasses]);
   }

   public function findglass($glass_id){
      $find=Glasses::findOrFail($glass_id);
      return view("Frontend.Pages.MainPage_Click",['find'=>$find]);
   }
   public function allglasses($gender){
      
      if ($gender==1) {
         $glasses=Glasses::where('gender','=','Male')->get();
         return view('Frontend.Pages.AllGlasses',['glasses'=>$glasses]);
      }
      if ($gender==2) {
         $glasses=Glasses::where('gender','=','Female')->get();
         return view('Frontend.Pages.AllGlasses',['glasses'=>$glasses]);
      }
      if ($gender==3) {
         $glasses=Glasses::where('gender','=','Kids')->get();
         return view('Frontend.Pages.AllGlasses',['glasses'=>$glasses]);
      }
      return view('Frontend.Pages.AllGlasses',['glasses'=>$glasses]);
   }

   public function profile($id){
      $customer=Customer::findOrFail($id);
      $user=User::findOrFail($id);
      return view('Frontend.Pages.Profile',['customer'=>$customer,'user'=>$user]);
      // return $customer.$user;
   }
   public function profileupdate(REQUEST $request, $idd){

      $customer_profile=array(
         'phone'=>$request->phone,
         'address'=>$request->address,
         'location'=>$request->location,
         'gender'=>$request->gender,
      );
      // return $customer_profile;
      if (empty($request->password)) {

         $user_profile=array(
            'email'=>$request->email,
            'name'=>$request->name,
         );
      }

      else {
         $user_profile=array(
            'email'=>$request->email,
            'name'=>$request->name,
            'password'=>Hash::make($request->password),
         );
      }
     

      User::whereId($idd)->update($user_profile);
      Customer::where('customers.user_id' ,'=',$idd)->update($customer_profile);
      
      return "updated user profile";

   //   return $customer_profile['phoneaddress'].$user_profile['email'];

   }

}
