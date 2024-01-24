<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\WhyController;
use App\Http\Controllers\contactcontroller;
use App\Http\Controllers\productcontroller;
use App\Http\Controllers\newsController;
use App\Http\Controllers\itemController;
use App\Http\Controllers\aboutController;
use App\Http\Controllers\contactinfoController;
use App\Http\Controllers\categoryController;
use App\Http\Controllers\ProductCategoryController;
use App\Http\Controllers\propycategoryController;
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
Route::resource('test', TestController::class);
Route::resource('why', WhyController::class);
Route::resource('contact', contactcontroller::class);
Route::resource('contact_info', contactinfoController::class);
Route::resource('product', productcontroller::class);
Route::resource('ProductCategory', ProductCategoryController::class);

Route::resource('news', newsController::class);
Route::resource('category', categoryController::class);
Route::resource('about', aboutController::class);
Route::resource('proByCate', propycategoryController::class);
Route::resource('/', ItemController::class, [
    'names' => [
        // 'index' => 'items.index',
        'create' => 'items.create',
        'store' => 'items.store',
        'show' => 'items.show',
        'edit' => 'items.edit',
        'update' => 'items.update',
        'destroy' => 'items.destroy',
    ]
]);

// Route::get('/', function () {
//     return view('/');
// });

Route::get('/dashboard/main', function () {
    return view('/dashboard/main');
})->middleware(['auth', 'verified'])->name('dash');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
