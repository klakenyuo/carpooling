<?php

use Illuminate\Support\Facades\Route;
use  App\Http\Controllers\RidesController;
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

Route::get('/', function () {
    return view('home');
});

Route::get('/s_rides', function () {
    return view('rides');
});

Route::get('/p_rides', [RidesController::class, 'get']);
Route::get('/rides', [RidesController::class, 'get'])->name('rides.create');
Route::post('/rides', [RidesController::class, 'post'])->name('rides.store');
Route::get('/rides_liste', [RidesController::class, 'liste'])->name('rides.liste');


Route::get('/submit', function () {
    return view('submit');
});

Route::get('/blog', function () {
    return view('blog');
});

Route::get('/contact', function () {
    return view('contact');
});


Route::get('/login', function () {
    return view('login');
});


Route::get('/signup', function () {
    return view('signup');
});

