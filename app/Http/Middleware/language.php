<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use Illuminate\Support\Facades\App; 
use Illuminate\Support\Facades\session;
class language
{
    
    public function handle(Request $request, Closure $next): Response
    {
       if(session::get('local') !=null){
        App::setLocale(session::get("locale"));
       }
       else{
        session::put("local","en");
        App::setLocale(session::get("locale"));
       }


        return $next($request);
    }
    // public function handle(Request $request, Closure $next)
    //  { 
    //     if (Session()->has('applocale') and array_key_exists(Session()->get('applocale'), config('languages')))
    //      { App::setlocale(Session()->get('applocale'));
        
    //     } 
    //     else { App::setlocale(config('app.fallback_locale')); 
        
    //     } 
    // return $next($request); }
}
