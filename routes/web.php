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

/*
|--------------------------------------------------------------------------
| Frontend Web Routes
|--------------------------------------------------------------------------
|
|
*/
Route::get('/', 'HomeController@index')->name('home');
Route::get('posts', 'HomeController@posts')->name('posts');
Route::get('single-post', 'HomeController@singlePost')->name('single-post');
Route::get('tag', 'HomeController@tag')->name('tag');