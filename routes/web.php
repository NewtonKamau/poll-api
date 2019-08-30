<?php



Auth::routes();

Route::get('/home', 'AppController@index')->name('home');
