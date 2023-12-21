<?php

namespace App\Http\Controllers;

use App\Models\products;

use Illuminate\Http\Request;

class tagProductController extends Controller
{
    public function show()
{
    $showAllbrand = products::all();

    //Go To Screen With Data
    return view('pages.newproduct');
}

public function create()
{
    return view('products.create');
}

public function store(Request $request)
{

    $product = new products;

    $product->title = $request->title;
    $product->description = $request->description;

    $product->save();

    // ... (كود حفظ البيانات الجديدة)
    return redirect()->route('products.create')->with('success', 'تمت إضافة المنتج بنجاح.');
}


// public function create()
// {
//     return view('products.create');
// }

// public function store(Request $request)
// {
//     $validatedData = $request->validate([
//         'category' => 'required',
//         'title' => 'required',
//         'description' => 'required',
//     ]);

//     Product::create($validatedData);

//     return redirect('/products')->with('success', 'تمت إضافة المنتج بنجاح');
// }
// public function newproduct()
// {
//     // عرض صفحة جديدة لإضافة منتج
//     return view('products.newproduct');
// }
}
