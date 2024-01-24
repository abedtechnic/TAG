<?php

namespace App\Http\Controllers;

use App\Models\product;
use App\Models\ProductCategory;

use Illuminate\Http\Request;

class productcontroller extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // $showDataProduct = product::all();

        // return view('pages.products.newproduct',compact('showDataProduct'));
        // $categories1 = ProductCategory::where('id',1)->get();
        // $categories2 = ProductCategory::where('id',2)->get();
        // return view('pages.products.newproduct');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $category = ProductCategory::all();

        return view('dashboard.product.product_create',compact('category'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $product = new product;

        $product->product_name = $request->product_name;
        $product->product_description = $request->product_description;
        $product->product_categories_id = $request->categorie_id;
        $product->image = $request->image;

        $img = $request->image;

        $imgName = time() . '.' . $img->getClientOriginalExtension();

        $request->image->move('images/products', $imgName);

        $product->image = $imgName;

        $product->Save();

        return redirect()->back();
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
