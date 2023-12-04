<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class prodectsController extends Controller
 {
//     public function index()
//     {
//         return view('index');
//     }


    public function show()
{
    return view('products');
}

public function show2() 
    {
        return view('products_2');
    }
   

  

    ///////

    public function contact()
    {
        return view('contact');
    }
    
    public function about()
    {
        return view('about');
    }

    public function why()
    {
        return view('why');
    }
    public function newproduct(){
        return view('newproduct');
    }
    public function work(){
        return view('work');
    }
}


