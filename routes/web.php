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
Route::get('/index', 'ApiController@indexAction');
Route::get('/films', 'ApiController@filmsAction');
Route::get('/serials', 'ApiController@serialsAction');
Route::get('/rating', 'ApiController@ratingAction');
Route::get('/contact', 'ApiController@contactAction');
/*Фильмы и сериалы*/
Route::get('/matrix', 'ApiController@matrixAction');
Route::get('/max', 'ApiController@maxAction');
Route::get('/show', 'ApiController@showAction');
Route::get('/cloud', 'ApiController@cloudAction');
Route::get('/dead', 'ApiController@deadAction');
Route::get('/breakingbad', 'ApiController@breakingbadAction');
Route::get('/silicon', 'ApiController@siliconAction');
Route::get('/xfiles', 'ApiController@xfilesAction');
/*Это другое*/
Route::get('/getVideo_list', 'ApiController@getVideo_list');