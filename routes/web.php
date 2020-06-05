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
Route::match(['get', 'post'], '/contact', 'PagesController@contact')->name('contact_us');
Route::post('/subscription', 'SubscriptionsController@subscribe')->name('subscribe');
Route::resource('/members', 'MembersController');
Route::resource('/staff', 'StaffController');
Route::resource('/categories', 'CategoryController');
Route::resource('/gallery', 'GalleryController');
Route::resource('/news','NewsController');
Route::resource('/posts','PostsController');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::group(['prefix' => 'admin'], function () {
    Route::get('/','Auth\AdminLoginController@create')->name('admin.login.show');
    Route::post('/','Auth\AdminLoginController@login')->name('admin.login');
    Route::get('/home','AdminController@index')->name('admin.dashboard');
});
