<?php

namespace App\Http\Controllers;

use App\Models\product;
use Illuminate\Http\Request;

class productcontroller extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $showDataProduct = product::all();

        return view('pages.products.newproduct',compact('showDataProduct'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('dashboard.product_create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $product = new product;

        $product->maintitle = $request->maintitle;
        $product->secondarytitle = $request->secondarytitle;
        $product->descriptiontitle = $request->descriptiontitle;
        $product->productname = $request->productname;
        $product->productdescription = $request->productdescription;
        $product->image = $request->image;

        // $request->validate([

        //     'image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048', // قواعد الصورة
        // ]);


// //   add image to var
//         $img = $request->image;

//         // // get image name
           $file_extension = $request -> image -> getClientOriginalExtension();

           //save image with time
           $file_name = time().'.'.$file_extension;

        // // move image with name to folder in public
           $path = 'images/products';

           $request->image->move(public_path('images/products'), $file_name);
         // // / send name of image to culomn in databasew
        $product->image = $file_name;

        $product->Save();

        return redirect()->route('product.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(product $product)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(product $product)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, product $product)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(product $product)
    {
        //
    }
}
