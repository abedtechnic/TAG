<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class prodectsController extends Controller
 {
    public function index()
    {
        return view('pages/index');
    }


//     public function show()
// {
//     return view('products');
// }

// public function show2() 
//     {
//         return view('products_2');
//     }
   

  

    ///////

    public function contact()
    {
        return view('pages/contact');
    }
    
    public function about()
    {
        return view('pages/about');
    }

    public function why()
    {
        return view('pages/why');
    }
    public function newproduct(){
        return view('pages/newproduct');
    }
    public function work(){
        return view('pages/work');
    }
    
   
}


