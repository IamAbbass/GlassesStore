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
    }else{
        return redirect('/login');
    }
});

Route::get('/webapp','WebAppController@index');
Route::get("/webapp/{id}",'WebAppController@findglass');

Auth::routes(['reset'=>false,'register'=>false]);
Route::resource('/glass', 'GlassesController');
Route::resource('/customer','CustomerController');
Route::resource('/order','OrderController');
