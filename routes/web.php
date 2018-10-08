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

Auth::routes();

Route::get('/', 'PostController@index')->name('/');
Route::get('category/{category}', 'HomeController@category')->name('category');
Route::get('dashboard', 'DashboardController@index')->name('dashboard');
Route::get('users', 'UserController@index')->name('users.index');
Route::get('users/{user}', 'UserController@show')->name('users.show');
Route::resource('posts', 'PostController');
Route::post('comments/{id}', 'CommentController@store')->name('comments.store');
