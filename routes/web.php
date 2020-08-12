<?php

use Illuminate\Support\Facades\Route;

Auth::routes();

Route::get('/', 'WelcomeController@index')->name('welcome');

Route::get('/home', 'HomeController@index')->name('home');
