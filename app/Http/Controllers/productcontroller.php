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

    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        // $category = ProductCategory::find($id);
        // $editproduct = product::find($id);

        // return View('dashboard.product.product_edit', compact('editproduct','category'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update($id)
    {

        // $editCategory = ProductCategory::find($id);
         // Find Data and Update it
    //      $updatepro = product::find($id);

    //     $updatepro->product_name = $request->product_name;
    //     $updatepro->product_description = $request->product_description;
    //     $updatepro->product_categories_id = $request->product_categories_id;
    //     $updatepro->image = $request->image;

    //     $img = $request->image;



    //     if ($img) {
    //         $imgName = time() . '.' . $img->getClientOriginalExtension();

    //         $request->image->move('images/news', $imgName);

    //         $updatepro->image = $imgName;
    //     }

    //   $updatepro->save();

    //   return redirect()->route('news.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
{
  //
}


}
