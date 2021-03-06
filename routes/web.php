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
Route::resource('/staffs', 'StaffsController');
Route::resource('/leaders', 'LeadersController');
Route::resource('/categories', 'CategoryController');
Route::resource('/gallery', 'GalleryController');
Route::resource('/news','NewsController');
Route::resource('/posts','PostsController');
Route::resource('/branches', 'BranchController');
Route::resource('/ministries', 'MinistriesController');
Route::resource('/roles', 'RolesController');
Route::resource('/bishop/message','BishopMessageController');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::group(['prefix' => 'admin'], function () {
    Route::get('/','Auth\AdminLoginController@create')->name('admin.login.show');
    Route::post('/','Auth\AdminLoginController@login')->name('admin.login');
    Route::get('/home','AdminController@index')->name('admin.dashboard');
    Route::get('/leaders/destroy/{id}','leadersController@destroy' );
    Route::get('/branches/destroy/{id}','BranchController@destroy' );
    Route::get('/ministries/destroy/{id}','MinistriesController@destroy' );
    Route::get('/categories/destroy/{id}', 'CategoryController@destroy');
    Route::get('/roles/destroy/{id}', 'RolesController@destroy');
    Route::get('/staffs/destroy/{id}', 'StaffsController@destroy');
    Route::get('/posts/destroy/{id}', 'PostsController@destroy');
});
Route::group(['prefix' => 'education'], function () {
    Route::get('/', 'EducationController@bibleSchool')->name('bibleschool');
});
