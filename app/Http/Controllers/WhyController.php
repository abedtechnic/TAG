<?php

namespace App\Http\Controllers;

use App\Models\why;
use Illuminate\Http\Request;
use App\Models\ProductCategory;
class WhyController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $pro = ProductCategory::all();

        $showDataWhy = why::all();

        return view('pages.why.why_show',compact('showDataWhy','pro'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('dashboard.why_create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $why = new why;
        $why->title= $request->title;
        $why->description= $request->description;


        $why->Save();

         return redirect()->back();

    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $data = why::all();
        return view('dashboard.why_show', ['data' => $data]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $editWhy = why::find($id);
        return view('dashboard/why_edit', compact('editWhy'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        //find data and update
        $updateWhy = why::find($id);

        $updateWhy->title= $request->title;
        $updateWhy->description= $request->description;

        $updateWhy->update();

        return redirect()->route('why.index')->with('status',"data updated");;

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $deletedata = why::find($id);

        if ($deletedata) {
            $deletedata->delete();

            return redirect()->back();
        } else {

            return redirect()->back()->with('error', 'لم يتم العثور على السجل للحذف');
        }
    }
}
