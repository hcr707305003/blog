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
//用户模块
Route::get('list', "Main\BackController@user_list")->name('list');
Route::get('/del/user/{id?}', "Main\BackController@del_user");
Route::any('/edit/user/{id?}', "Main\BackController@edit_user");
Route::post('/edit/handle/user', "Main\BackController@edit_handle_user");
Route::get('/add/user', "Main\BackController@add_user");
Route::post('/add/handle/user', "Main\BackController@add_handle_user");
//文章模块
Route::get('/back/article_list', "Main\BackController@article_list");
Route::get('/del/article/{id?}', "Main\BackController@del_article");
Route::get('/edit/article/{id?}', "Main\BackController@edit_article");
Route::post('/edit/handle/user', "Main\BackController@edit_handle_article");
Route::get('/add/article', "Main\BackController@add_article");
Route::get('/add/handle/article', "Main\BackController@add_handle_article");
/*Route::get('/login', function () {
    return view('back/login');
});*/