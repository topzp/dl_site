<?php

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

// Route::get('/', function () {
//     return view('welcome');
// });
Route::get('/', 'PageViewController@index');
Route::get('/website', 'PageViewController@website');
Route::get('/wechat', 'PageViewController@wechat');
Route::get('/customize', 'PageViewController@customize');
Route::get('/aboutUs', 'PageViewController@aboutUs');
Route::get('/news', 'PageViewController@news');
Route::get('/newsCreate', 'PageViewController@newsCreate');