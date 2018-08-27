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

/*Route::get('/', function () {
    return view('welcome');
});*/

Route::get('/', "Main\IndexController@index");
Route::get('/article_list', "Main\IndexController@article_list");
Route::get('/detail/{id?}', "Main\IndexController@article_detail");

Route::get('/main', function () {
    return view('index');
});