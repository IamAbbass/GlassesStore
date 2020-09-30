<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    if(auth()->check()){
        return redirect('/home');
        // there is somthing i wanna learn   return redirect('/home');
    }else{
        return redirect('/login');
    }
});

Route::get('/profile/{id}','WebAppController@profile');
Route::post('/profile/{id}','WebAppController@profileupdate');

Route::get('/webapp','WebAppController@index');
Route::get("/webapp/{id}",'WebAppController@findglass');
Route::get("/allglasses/{gender}",'WebAppController@allglasses');

Auth::routes();
// ['reset'=>false,'register'=>true]

Route::resource('/glass', 'GlassesController');
Route::resource('/customer','CustomerController');
Route::resource('/order','OrderController');

Route::post('/ordernow/{id}','WebAppController@ordernow');
Route::get('/MyOrder/{id}' , 'WebAppController@myorder');
