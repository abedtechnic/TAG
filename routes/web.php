<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\prodectsController;
use App\Http\Controllers\products2Controller;
use App\Http\Controllers\LanguagesController;
use App\Http\Controllers\tagProductController;
use App\Http\Controllers\TestController;
use App\Http\Controllers\WhyController;

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
Route::get('/', [prodectsController::class, 'index'])->name('index');
Route::get('pages/contact', [prodectsController::class, 'contact'])->name('contact');
Route::get('pages/about', [prodectsController::class, 'about'])->name('about');
Route::get('pages/newproduct', [prodectsController::class, 'newproduct'])->name('newproduct');
Route::get('pages/work', [prodectsController::class, 'work'])->name('work');


// language routes

// Route::get('lang/{lang}', ['as' => 'lang.switch', 'uses' => '\App\Http\Controllers\LanguagesController@switchLang']); //للوصول الى الفونكشن الموجوده في الكنترولر
Route::get('locale/{lang}',[LanguagesController::class,'setlang']);




///////dynamic

// Route::get('/products', [tagProductController::class, 'indexproduct']);
// في routes/web.php



Route::get('products/create', [tagProductController::class, 'create'])->name('products.create');
// Route::post('products/store', [tagProductController::class, 'store'])->name('products.store');
Route::get('/test', [TestController::class, 'show' ])->name('test');

Route::resource('test', TestController::class);
Route::resource('why', WhyController::class);
