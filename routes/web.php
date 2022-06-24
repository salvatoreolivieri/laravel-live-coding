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

    $data = config('products');

    return view('home', ['products'=>$data]);
})->name('home');

Route::get('/about', function (){
    return view('about');
})->name('about');

Route::get('/testimonials', function (){
    return view('testimonials');
})->name('testimonials');

Route::get('/start-here', function (){
    return view('starthere');
})->name('starthere');


