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
Route::get('/', "Main\IndexController@index")->name('/');
Route::get('/article_list', "Main\IndexController@article_list")->name('article_list');
Route::get('/detail/{id?}', "Main\IndexController@article_detail");

//后台
Route::get('/back/login', "Main\LoginController@login")->name('back/login');
Route::post('/back/handle_login', "Main\LoginController@handle_login");
Route::get('/back/home', "Main\BackController@back_page");
Route::get('forget', "Main\BackController@del_cache");
/*Route::get('/login', function () {
    return view('back/login');
});*/