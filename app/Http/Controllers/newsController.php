<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\News;
use App\Models\ProductCategory;
class newsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $pro = ProductCategory::all();

          $showDataNews = news::all();

          return view('pages.news.news', compact('showDataNews','pro'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('dashboard.news_create');
    }
    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $news = new news;

        $news->title = $request->title;
        $news->contentone = $request->contentone;
        $news->contenttow = $request->contenttow;
        $news->image_url = $request->image_url;


        $img = $request->image_url;

        $imgName = time() . '.' . $img->getClientOriginalExtension();

        $request->image_url->move('images/news', $imgName);

        $news->image_url = $imgName;

        $news->save();

        return redirect()->route('news.index');

    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $data = news::all();
        return view('dashboard.news_show', compact('data'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $editnews = news::find($id);

        return View('dashboard.news_edit', compact('editnews'));
    }


    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
         // Find Data and Update it
         $updatenews = news::find($id);

        $updatenews->title = $request->title;
        $updatenews->contentone = $request->contentone;
        $updatenews->contenttow = $request->contenttow;
        $updatenews->image_url = $request->image_url;

        $img = $request->image_url;



        if ($img) {
            $imgName = time() . '.' . $img->getClientOriginalExtension();

            $request->image_url->move('images/news', $imgName);

            $updatenews->image_url = $imgName;
        }

      $updatenews->save();

      return redirect()->route('news.index');
      }



    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $deletedata = news::find($id);

        if ($deletedata) {
            $deletedata->delete();

            return redirect()->back();
        } else {

            return redirect()->back()->with('error', 'لم يتم العثور على السجل للحذف');
        }

    }
}
