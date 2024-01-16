<?php

namespace App\Http\Controllers;

use App\Models\counter;
use Illuminate\Http\Request;

class counterController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $counter = counter::all();

        return view('index', compact('counter'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('dashboard.mainPage.counter.counter_create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $counter = new counter;
        $counter->title= $request->title;
        $counter->number= $request->number;

        $counter->Save();

         return redirect()->back();

    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $data = counter::all();
        return view('dashboard.mainPage.counter.counter_edit', compact('data'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $editCounter = counter::all();
        return view('dashboard.mainPage.counter.counter_show', compact('editCounter'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        //find data and update
        $updatecounter = counter::find($id);

        $updatecounter->title= $request->title;
        $updatecounter->number= $request->number;

        $updatecounter->update();

        return redirect()->back()->with('status',"data updated");;

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $deletedata = counter::find($id);

        if ($deletedata) {
            $deletedata->delete();

            return redirect()->back();
        } else {

            return redirect()->back()->with('error', 'لم يتم العثور على السجل للحذف');
        }
    }
}
