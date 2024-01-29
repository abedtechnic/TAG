<?php

namespace App\Http\Controllers;
use App\Models\ProductCategory;
use App\Models\product;
use Illuminate\Http\Request;

class ProductCategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $pro = ProductCategory::all();

        $data = ProductCategory::all();
        return view('dashboard.product.product_category_create', compact('data','pro'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $category = new ProductCategory;

        $category->product_title = $request->product_title;
        // $category->product_desc = $request->product_desc;
        $category->save();

         return redirect()->back();
    }

    /**
     * Display the specified resource.
     */
    public function show( $id)
    {
        $data = product::all();
        return view('dashboard.product.product_show', compact('data'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {

    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {

    }
}
