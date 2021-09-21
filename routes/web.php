<?php

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/home', function () {
    return view('home');
});

Route::prefix('views')->group(function () {
    Route::get('/product', function () {
        // Matches The "/admin/users" URL
    });
});

Route::get('/about-us', function () {
    return view('about-us');
});

Route::get('/news', function () {
    return view('news');
});

Route::get('/contact-us', function () {
    return view('contact-us');
});
