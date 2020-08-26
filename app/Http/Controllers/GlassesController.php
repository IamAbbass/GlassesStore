<?php

namespace App\Http\Controllers;

use App\Glasses;
use Illuminate\Http\Request;

class GlassesController extends Controller
{
    function __construct()
    {
        $this->middleware('auth');
    }
    
    public function index()
    {
        $glasses = Glasses::all();
        return view('glasses.index',[
            'glasses' => $glasses,
        ]);
    }
    
    public function create()
    {
        //
    }
    
    public function store(Request $request)
    {
        //
    }
    
    public function show(Glasses $glasses)
    {
        //
    }
    
    public function edit(Glasses $glasses)
    {
        //
    }
    
    public function update(Request $request, Glasses $glasses)
    {
        //
    }
    
    public function destroy(Glasses $glasses)
    {
        //
    }
}
