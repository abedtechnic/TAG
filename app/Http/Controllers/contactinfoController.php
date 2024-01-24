<?php

namespace App\Http\Controllers;

use App\Models\contactinfo;
use Illuminate\Http\Request;
use App\Models\ProductCategory;
class contactinfoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $pro = ProductCategory::all();

       $data = contactinfo::all();
   return view('dashboard.contactinfo_show', compact('data','pro'));

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
    //    $request->validate([
    //     'your_name'=>'required',
    //     'email'=>'required',
    //     'number'=>'required',
    //     'message'=>'required',

    //    ]);

    $contact = new contactinfo;

    $contact->name = $request->name;
    $contact->email = $request->email;
    $contact->number = $request->number;
    $contact->message = $request->message;

    $contact->save();

    return redirect()->back();

    }

    /**
     * Display the specified resource.
     */
    public function show()
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(contact_info $contact_info)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, contact_info $contact_info)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(contactinfo $contactinfo)
    {
        $delete = contactinfo::find($contactinfo->id);



        if ($deletedata) {
            $deletedata->delete();

            return redirect()->back();
        } else {

            return redirect()->back()->with('error', 'لم يتم العثور على السجل للحذف');
        }
    }
    }

