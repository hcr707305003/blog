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

//前台
Route::get('/', "Main\IndexController@index");
Route::get('/article_list', "Main\IndexController@article_list");
Route::get('/detail/{id?}', "Main\IndexController@article_detail");

//后台
Route::get('/back/login', "Main\BackController@login");
Route::get('/back/home', "Main\BackController@back_page");
/*Route::get('/login', function () {
    return view('back/login');
});*/