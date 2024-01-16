<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\News;

class newsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
          $showDataNews = news::all();

          return view('pages.news.news', compact('showDataNews'));
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
        $news->introduction = $request->introduction;
        $news->contentone = $request->contentone;
        $news->contenttow = $request->contenttow;
        $image_url = $request->image_url;

        //get image name
        $file_extintion = $request->image_url -> getClientOriginalExtension();

        //save image with time
        $file_name = time().'.'.$file_extintion;

      $path = 'images/news';

      $request->image_url->move(public_path('images/news'), $file_name);

      $news->image_url =$file_name;

      $news->save();

      return redirect()->route('news.index');

    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $data = news::all();
        return view('dashboard.news_show', ['data' => $data]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $editnews = news::find($id);

        return View('dashboard/news_edit', compact('editnews'));
    }


    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
         // Find Data and Update it
         $updatenews = news::find($id);

         $updatenews->title = $request->title;
        $updatenews->introduction = $request->introduction;
        $updatenews->contentone = $request->contentone;
        $updatenews->contenttow = $request->contenttow;
        // $updatenews->image_url = $request->image_url;


        $image_url = $request->image_url;


    //      if ($image_url) {
    //          $imgName = time() . '.' . $image_url->getClientOriginalExtension();

    //          $request->image_url->move('news', $imgName);

    //          $updatebrand->news_img = $imgName;
    //      }

    //      $updatebrand->save();

    //      return redirect()->route('b.index');
    if ($image_url){
    $file_extintion = $request->image_url -> getClientOriginalExtension();

        //save image with time
        $file_name = time().'.'.$file_extintion;

      $path = 'images/news';

      $request->image_url->move(public_path('images/news'), $file_name);

      $news->image_url =$file_name;
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
