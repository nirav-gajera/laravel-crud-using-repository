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


// Route::resource('categories', CategoryController::class);



Route::get('categories', 'CategoryController@index')->name('categories.index');
Route::post('categories', 'CategoryController@store')->name('categories.store');
Route::get('categories/create', 'CategoryController@create')->name('categories.create');
Route::get('categories/{category}', 'CategoryController@show')->name('categories.show');
Route::put('categories/{category}', 'CategoryController@update')->name('categories.update');
Route::delete('categories/{category}', 'CategoryController@destroy')->name('categories.destroy');
Route::get('categories/{category}/edit', 'CategoryController@edit')->name('categories.edit');