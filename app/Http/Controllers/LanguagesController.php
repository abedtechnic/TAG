<?php 
namespace App\Http\Controllers;
 use Illuminate\Support\Facades\Config;
  use Illuminate\Support\Facades\Session;
  use Illuminate\Support\Facades\App;
   use Illuminate\Support\Facades\Redirect;
   
   class LanguagesController extends Controller
    {
    //  public function switchLang($lang) 
    //  { 
    //     if (array_key_exists($lang, Config::get('languages'))) { Session::put('applocale', $lang); } 
    //     return Redirect::back(); 
    // } 

    public function setlang($locale){
      app::setLocale($locale);
      session::put ('locale' ,$local);
      return redirect()->back();
    }
    
    }
