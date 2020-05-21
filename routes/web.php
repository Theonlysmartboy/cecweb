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

Route::get('/','PagesController@index')->name('index');
Route::get('/about','PagesController@about')->name('about_us');
Route::match(['get', 'post'], '/contact', 'PagesController@showContact')->name('contact_us');
Route::post('subscription', 'SubscriptionsController@subscribe')->name('subscribe');
Route::resource('news','NewsController');
Route::resource('posts','PostsController');
