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

Route::middleware(['auth'])->group(function () {

    Route::get('/', function () {
        //return view('welcome');
        return redirect('/home');
    });

    Route::get('/home', 'HomeController@index')->name('home');

    Route::resource('batches', 'BatchesController');

    Route::get('books', 'BookController@index')->name('books.index');;
    Route::get('books/create', 'BookController@create');
    Route::get('books/{id}', 'BookController@show');
    Route::post('books', 'BookController@store')->name('books.store');
    // Route::post('upload', 'BudgetController@store');

});