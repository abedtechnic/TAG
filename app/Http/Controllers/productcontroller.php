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

        $img = $request->image;

        $imgName = time() . '.' . $img->getClientOriginalExtension();

        $request->image->move('images/products', $imgName);

        $product->image = $imgName;

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
