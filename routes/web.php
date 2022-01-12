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
    return view('layouts.pages.home');
});
Route::get('/about-us', function () {
    return view('layouts.pages.about-us');
});
Route::get('/services', function () {
    return view('layouts.pages.services');
});
Route::get('/services-details', function () {
    return view('layouts.pages.details-services');
});
Route::get('/our-work', function () {
    return view('layouts.pages.work');
});
Route::get('/works-details', function () {
    return view('layouts.pages.details-works');
});
Route::get('/testimonials', function () {
    return view('layouts.pages.testimonial');
});
Route::get('/contact-us', function () {
    return view('layouts.pages.contact-us');
});
