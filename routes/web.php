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

Route::get('/', 'WebController@index')->name('web.home');

Route::middleware(['auth'])->group(function () {
    Route::get('/dashboard', 'HomeController@index')->name('dashboard');

    Route::prefix('users')->group(function () {
        Route::get('/', 'UserController@index')->name('users.list');
        Route::prefix('{modelId}')->group(function () {
            Route::get('/', 'UserController@show')->name('users.show');
            Route::get('/edit', 'UserController@edit')->name('users.edit');
        });
    });
});

