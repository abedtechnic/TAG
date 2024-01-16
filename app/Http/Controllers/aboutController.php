<?php

namespace App\Http\Controllers;

use App\Models\about;
use Illuminate\Http\Request;

class aboutController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $aboutData = about::all();

        return view('pages.about', compact('aboutData'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
         return view('dashboard.about.about_create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        $about = new about;

        $about->main_title = $request->main_title;
        $about->description = $request->description;
        $about->image = $request->image;

        $img = $request->image;

        $imgName = time() . '.' . $img->getClientOriginalExtension();

        $request->image->move('images/about', $imgName);

        $about->image = $imgName;

        $about->save();
        //   $news->fill(['image' => $file_name, 'card_image' => $file_name2])->save();

        return redirect()->back();
    }

    /**
     * Display the specified resource.
     */
    public function show(string $idt)
    {
        $data = about::all();
        return view('dashboard.about.about_show', compact('data'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $editabout = about::find($id);
        // $editabout = $about;


        return View('dashboard.about.about_edit', compact('editabout'));
    }
    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $updateAbout = about::find($id);

        $updateAbout->main_title = $request->main_title;
        $updateAbout->description = $request->description;
        // $updateAbout->image = $request->image;

        $img = $request->image;

        if ($img) {
            $imgName = time() . '.' . $img->getClientOriginalExtension();

            $request->image->move('images/about', $imgName);

            $updateAbout->image = $imgName;
        }

        $updateAbout->save();

        return redirect()->back()->with('success');
    }



    /**
     * Remove the specified resource from storage.
     */
    public function destroy(about $about)
    {
        $delete = about::find($about->id);

        if ($delete) {
            // حذف ملف الصورة
            $imagePath = 'images/about  /' . $delete->image;
            if (file_exists($imagePath)) {
                unlink($imagePath);
            }

            // حذف السجل
            $delete->delete();

            return redirect()->back()->with('success', 'تم حذف السجل بنجاح');
        } else {
            return redirect()->back()->with('error', 'لم يتم العثور على السجل للحذف');
        }
    }
}
