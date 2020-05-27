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

/*Главные страницы*/

Route::get('/index', function () {
    return view('index');
});

Route::get('/films', function () {
    return view('films');
});

Route::get('/serials', function () {
    return view('serials');
});

Route::get('/rating', function () {
    return view('rating');
});

Route::get('/contact', function () {
    return view('contact');
});

/*Фильмы и сериалы*/

Route::get('/matrix', function () {
    return view('matrix');
});

Route::get('/max', function () {
    return view('max');
});

Route::get('/show', function () {
    return view('show');
});

Route::get('/cloud', function () {
    return view('cloud');
});

Route::get('/dead', function () {
    return view('dead');
});

Route::get('/breakingbad', function () {
    return view('breakingbad');
});

Route::get('/silicon', function () {
    return view('silicon');
});

Route::get('/xfiles', function () {
    return view('xfiles');
});