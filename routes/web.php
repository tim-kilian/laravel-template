<?php

use Illuminate\Support\Facades\Route;

Auth::routes();

Route::post('/images', 'ImagesController@store');
Route::get('/images/{slug}', 'ImagesController@show');

Route::get('/', 'WelcomeController@index')->name('welcome');

Route::get('/home', 'HomeController@index')->name('home');
