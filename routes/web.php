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

Route::get('/', function () {
    return view('index');
    
});

Route::get('products', [prodectsController::class, 'show'])->name('products');

Route::get('products2', [prodectsController::class, 'show2'])->name('products_2');

Route::get('contact', [prodectsController::class, 'contact'])->name('contact');


Route::get('about', [prodectsController::class, 'about'])->name('about');

Route::get('why', [prodectsController::class, 'why'])->name('why');

Route::get('newproduct', [prodectsController::class, 'newproduct'])->name('newproduct');

Route::get('work', [prodectsController::class, 'work'])->name('work');

// Route::get('lang/{lang}', ['as' => 'lang.switch', 'uses' => '\App\Http\Controllers\LanguagesController@switchLang']); //للوصول الى الفونكشن الموجوده في الكنترولر

Route::get('locale/{lang}',[LanguagesController::class,'setlang']);