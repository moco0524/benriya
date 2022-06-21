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
Route::get('/', 'TopController@index');
Route::get('/top/{page?}/{place?}', 'TopController@index');
Route::get('/contact', 'TopController@contact');
Route::get('/about', 'TopController@about');
Route::get('/area', 'TopController@area');
Route::get('/campaign/{page?}/{place?}', 'TopController@campaign');
Route::post('/mail/send', 'RegisterController@register');
