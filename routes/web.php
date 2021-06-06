<?php

// use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
Route::get('/register', function() {
    return view('auth.login');
});

Route::get('/', function () {
    return view('welcome');
});

Route::get('/about', function () {
    return view ('about');
});
// Route::get('/contact', function () {
//     return view('contact');
// });

Route::get('/contact', [App\Http\Controllers\ContactController::class, 'index']);

Route::get('/gallery', function () {
    return view('gallery');
});
Route::get('/gallery', [App\Http\Controllers\GalleryController::class, 'index']);


Auth::routes(['register' => false]);


Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
