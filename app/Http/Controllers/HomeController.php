<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $data=Product::all();
        return view('index',['products'=>$data]);
    }
    public function login()
    {
        return view('login.index');
    }
    
  
}
