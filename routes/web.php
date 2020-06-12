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
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::prefix('employees')->group(function () {
    Route::get('/', 'EmployeeController@index')->name('employees.index');
    Route::get('create', 'EmployeeController@create')->name('employees.create');
    Route::post('store', 'EmployeeController@store')->name('employees.store');
    Route::get('{id}/edit', 'EmployeeController@edit')->name('employees.edit');
    Route::post('{id}/update', 'EmployeeController@update')->name('employees.update');
    Route::get('{id}/delete', 'EmployeeController@destroy')->name('employees.delete');
    Route::get('/search', 'EmployeeController@search')->name('employees.search');
});
