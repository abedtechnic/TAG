<?php

namespace App\Http\Controllers;
use App\Models\item;
use App\Models\Category;
use Illuminate\Http\Request;

class itemController extends Controller
{


    // public function createmaneger()
    // {
    //     $categories1 = Category::where('id', '1');
    //     return view('dashboard.mainPage.item_create', compact('categories1'));
    // }



    /////////////////////////////////

    public function index()
    {
        $categories1 = Category::where('id',1)->get();
        $categories2 = Category::where('id',2)->get();
        $categories3 = Category::where('id',3)->get();
        $categories4 = Category::where('id',4)->get();
        $categories5 = Category::where('id',5)->get();

        return view('index',compact(['categories1','categories2','categories3','categories4','categories5']));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $categories1 = Category::all();
        $categories2 = Category::all();
        $categories3 = Category::all();
        $categories4 = Category::all();
        $categories5 = Category::all();
        return view('dashboard.mainPage.item_create'
        ,compact(['categories1','categories2','categories3','categories4','categories5'])
    );
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $item = new item;

        $item->title = $request->title;
        $item->sub_title = $request->sub_title;
        $item->description = $request->description;
        $item->sub_description = $request->sub_description;
        $item->image_url = $request->image_url;
        $item->category_id = $request->category_id;



        $img = $request->image_url;

        $imgName = time() . '.' . $img->getClientOriginalExtension();

        $request->image_url->move('images/mainpage', $imgName);

        $item->image_url = $imgName;

        $item->save();


        return redirect()->back();


    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
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
    public function destroy(string $id)
    {
        //
    }
}
