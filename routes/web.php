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
Route::get('/', 'MainController@index')->name('home');

Route::get('/admin', 'AdminsController@index')->name('admin');
Route::post('/admin', 'AdminsController@login')->name('login');
Route::get('/admin/logout', 'AdminsController@logout')->name('logout');

Route::get('/projects', 'ProjectsController@index')->name('projects');
Route::get('/projects/create', 'ProjectsController@create')->name('create');
Route::get('/projects/{id}/edit', 'ProjectsController@edit')->name('edit');

Route::post('/projects', 'ProjectsController@store')->name('store');
Route::put('/projects/{id}', 'ProjectsController@update')->name('update');
Route::delete('/projects/{id}', 'ProjectsController@destroy')->name('destroy');
