<?php

namespace App\Http\Controllers;

use App\Models\contact;
use Illuminate\Http\Request;

class contactcontroller extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = contact::all(); 

        return view('pages.contact.contact',compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        // return view('dashboard.contact_create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // $contact = new contact;
        // $contact->title_desc= $request->title_desc;
        // $contact->company_title= $request->company_title;
        // $contact->company_num= $request->company_num;
        // $contact->company_email= $request->company_email;


        // $contact->Save();

        // return redirect()->route('contact.index');
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $data = contact::all();
        return view('dashboard.contact_show', ['data' => $data]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $editcontact = contact::find($id);
        return view('dashboard/contact_edit', compact('editcontact'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        //find data and update
        $updatecontact = contact::find($id);

        $updatecontact->title_desc= $request->title_desc;
        $updatecontact->company_title= $request->company_title;
        $updatecontact->company_num= $request->company_num;
        $updatecontact->company_email= $request->company_email;

        $updatecontact->update();

        return redirect()->route('contact.index');

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(contact $contact)
    {
        //
    }
}
