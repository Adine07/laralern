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

Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');

Route::get('/', function () {
    return view('welcome');
});

Route::get('/layout', function () {
    return view('layout.layout');
});

Route::get('/article', 'ArticlesController@index');
Route::get('/article/show', 'ArticlesController@show');
Route::get('/article/create', 'ArticlesController@create');
Route::get('/article/edit', 'ArticlesController@edit');
Route::post('/article/store', 'ArticlesController@store');
Route::delete('/article/delete', 'ArticlesController@destroy');
