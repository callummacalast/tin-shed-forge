<?php

// use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
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

// Disables the register route and redirects to the login to stop people  from registering for an account
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
Route::post('/contact', [App\Http\Controllers\ContactController::class, 'store']);


Route::get('/gallery', [App\Http\Controllers\GalleryController::class, 'index']);


Auth::routes();


// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
// Route::get('/home', [App\Http\Controllers\HomeController::class, 'show']);

Route::get('/home', function () {
    $contacts = DB::table('contact_details')->get();

    return view('home', ['contact_details' => $contacts]);
});
