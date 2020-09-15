<?php

namespace App\Http\Controllers;

use App\Glasses;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class WebAppController extends Controller
{
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
}
