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

Route::get('/', function () {
    return view('home');
});

Route::get('/hello', 'ArticleController@index');
// 			path url, nama controller@nama_fungsi
Route::get('/article/create', 'ArticleController@create');
Route::get('/article/baca/{judul}', 'ArticleController@baca');

Route::get('/category/index', 'CategoryController@index')->middleware('auth_middleware');

Route::get('/category/create', 'CategoryController@create');
Route::post('/category', 'CategoryController@store');
Route::get('/category/delete/{id}', 'CategoryController@destroy');
Route::get('/category/{id}/edit', 'CategoryController@edit');
Route::post('/category/{id}', 'CategoryController@update');

Route::get('/logout', 'AuthController@logout');
Route::get('/login', 'AuthController@index');
Route::post('/login', 'AuthController@login');








