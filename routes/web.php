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

use Illuminate\Http\Request;

Auth::routes();

//if all these routes need login
Route::middleware(['auth'])->group(function () {
    Route::get('/', 'HomeController@index')->name('home');
    Route::get('/users', 'UserController@user_index');
    Route::get('/projects', 'ProjectController@project_index');
    Route::get('/search', 'SearchController@searchUsersProjectsByTag');
});

Route::view('/test', 'test');
