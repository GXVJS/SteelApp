<?php

use Illuminate\Support\Facades\Route;

/*Маршрут для главной*/
Route::get('/', 'App\Http\Controllers\MainController@home');

/*Маршрут для описания*/
Route::get('/about', 'App\Http\Controllers\MainController@about');

/*Маршрут для отзывов*/
Route::get('/review', 'App\Http\Controllers\MainController@review')->name('review');

/*Маршрут для списка отзывов*/
Route::post('/review/check', 'App\Http\Controllers\MainController@review_check');


