<?php

namespace App\Http\Controllers;

use App\Models\card;

use Illuminate\Http\Request;

class card_controller extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = card::all();

        return view('pages.about', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('dashboard.about.card_create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        $card = new card;

        $card->main_title = $request->main_title;
        $card->title = $request->title; 
        $card->card_description = $request->card_description;
        $card->image = $request->image;

        $img = $request->image;

        $imgName = time() . '.' . $img->getClientOriginalExtension();

        $request->image->move('images/about', $imgName);

        $card->image = $imgName;

        $card->save();
        //   $news->fill(['image' => $file_name, 'card_image' => $file_name2])->save();

        return redirect()->back();
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $data = card::all();
        return view('dashboard.about.card_show', compact('data'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $editcard = card::find($id);

        return View('dashboard.about.card_edit', compact('editabout'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $updatecard = card::find($id);

        $updatecard->main_title = $request->main_title;
        $updatecard->title = $request->title;
        $updatecard->card_description = $request->card_description;
        $updatecard->image = $request->image;

        $img = $request->image;



        if ($img) {
            $imgName = time() . '.' . $img->getClientOriginalExtension();

            $request->image->move('brands', $imgName);

            $updatecard->image = $imgName;
        }

        $updatecard->save();

        return redirect()->route('about.index');

        // if ($request->has('image') && $request->has('image'))
        //  {
        //     $imageExtension = $request->image->getClientOriginalExtension();
        //     $cardImageExtension = $request->card_image->getClientOriginalExtension();

        //     $file_name = time() . '.' . $imageExtension;
        //     $file_name2 = time() . '.' . $cardImageExtension;

        //     $path = 'images/news';

        //     $request->image->move(public_path($path), $file_name);
        //     $request->card_image->move(public_path($path), $file_name2);

        //     $about->update(['image' => $file_name, 'card_image' => $file_name2]);
        // }

        // return redirect()->route('about.index');

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        if ($deletedata) {
        $deletedata->delete();

        return redirect()->back();
    } else {

        return redirect()->back()->with('error', 'لم يتم العثور على السجل للحذف');
    }
    }
}
