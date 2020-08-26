<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\Glasses;

class ApiController extends Controller
{
    function __construct(Request $request)
    {
        $this->middleware('auth:api')->except(['list']);
    }

    public function list(){
        return Glasses::all();
    }
}
