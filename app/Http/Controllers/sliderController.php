<?php

namespace App\Http\Controllers;

use App\Models\slider;
use Illuminate\Http\Request;

class sliderController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    // public function index()
    // {
    //     $sliders = slider::all();

    //     return view('index', compact('sliders'));
    // }

    /**
     * Show the form for creating a new resource.
     */
    // public function create()
    // {
    //      return view('dashboard.mainPage.slider.slider_create');
    // }

    /**
     * Store a newly created resource in storage.
     */
    // public function store(Request $request)
    // {

    //     $slider = new slider;

    //     $slider->main_title = $request->main_title;
    //     $slider->description = $request->description;
    //     $slider->image = $request->image;

    //     $img = $request->image;

    //     $imgName = time() . '.' . $img->getClientOriginalExtension();

    //     $request->image->move('images/slider', $imgName);

    //     $slider->image = $imgName;

    //     $slider->save();
    //     //   $news->fill(['image' => $file_name, 'card_image' => $file_name2])->save();

    //     return redirect()->back();
    // }

    /**
     * Display the specified resource.
     */
    // public function show(string $idt)
    // {
    //     $data = slider::all();
    //     return view('dashboard.mainPage.slider.slider_show', compact('data'));
    // }

    /**
     * Show the form for editing the specified resource.
     */
    // public function edit(slider $slider)
    // {
    //     $editslider = slider::find($id);

    //     return View('dashboard.mainPage.slider.slider_edit', compact('editslider'));
    // }
    /**
     * Update the specified resource in storage.
     */
    // public function update(Request $request, slider $slider)
    // {
    //     $updateSlider = slider::find($id);

    //     $updateSlider->main_title = $request->main_title;
    //     $updateSlider->description = $request->description;
    //   $img = $request->image;



    //     if ($img) {
    //         $imgName = time() . '.' . $img->getClientOriginalExtension();

    //         $request->image->move('images/slider', $imgName);

    //         $updateSlider->image = $imgName;
    //     }

    //     $updateSlider->save();

    //     return redirect()->back()->with('success');



    //      }



    /**
     * Remove the specified resource from storage.
     */
//     public function destroy(slider $slider)
// {
//     $delete = slider::find($slider->id);

//     if ($delete) {
        // حذف ملف الصورة
        // $imagePath = 'images/slider/' . $delete->image;
        // if (file_exists($imagePath)) {
        //     unlink($imagePath);
        }

        // حذف السجل
//         $delete->delete();

//         return redirect()->back()->with('success', 'تم حذف السجل بنجاح');
//     } else {
//         return redirect()->back()->with('error', 'لم يتم العثور على السجل للحذف');
//     }
// }
// }
