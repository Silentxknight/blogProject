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
Route::get('/','PageController@Index');
Route::get('/AboutUs','PageController@AboutUs');
Route::get('/Services','PageController@Services');
// Route::domain('https://www.youtube.com/', );
Route::resource('posts','PostsController');

Route::fallback('PageController@ere');
Route::get('posts/create','PostsController@create')->middleware('auth');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('dashboard');
