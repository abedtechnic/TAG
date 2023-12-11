<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\prodectsController;
use App\Http\Controllers\products2Controller;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// Route::get('/', function () {
//     return view('index');
    
// });

// pages route
Route::get('pages/index', [prodectsController::class, 'index'])->name('index');
Route::get('pages/contact', [prodectsController::class, 'contact'])->name('contact');
Route::get('pages/about', [prodectsController::class, 'about'])->name('about');
Route::get('pages/why', [prodectsController::class, 'why'])->name('why');
Route::get('pages/newproduct', [prodectsController::class, 'newproduct'])->name('newproduct');
Route::get('pages/work', [prodectsController::class, 'work'])->name('work');


// language routes

// Route::get('lang/{lang}', ['as' => 'lang.switch', 'uses' => '\App\Http\Controllers\LanguagesController@switchLang']); //للوصول الى الفونكشن الموجوده في الكنترولر
Route::get('locale/{lang}',[LanguagesController::class,'setlang']);