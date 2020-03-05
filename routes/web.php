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
Route::get('/weChat', 'PageViewController@wechat');
Route::get('/customize', 'PageViewController@customize');
Route::get('/aboutUs', 'PageViewController@aboutUs');
Route::get('/news', 'PageViewController@news');
Route::get('/cases', 'PageViewController@showCases');
Route::get('/create-case', 'CaseController@create');
Route::post('/category', 'CaseController@categoryCreate');
Route::post('/module', 'CaseController@miniModuleCreate');
Route::post('/case/create', 'CaseController@useCaseCreate');
Route::get('/admin', 'PageViewController@admin');
Route::post('/news/create', 'NewsController@newsCreate');




Route::get('/newsCreate', 'PageViewController@newsCreate');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
