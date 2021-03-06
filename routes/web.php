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
    return view('auth.login');
})->middleware('auth')->name('welcome');

Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');

Route::get('/project/{url}', 'ProjectsController@getProject');

// alle projecten
//Route::get('/portfolio', 'ProjectsController@portfolio')->name('portfolio');

// workshop
Route::get('/portfolio', 'WorkshopController@index')->name('workshop');