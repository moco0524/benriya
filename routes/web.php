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

Route::get('/top/{place?}/{page?}/{flg?}', 'TopController@index');

Route::get('/contact/{place?}/{page?}/{flg?}', 'TopController@contact');

Route::get('/about/{place?}/{page?}/{flg?}', 'TopController@about');

Route::get('/area/{place?}/{page?}/{flg?}', 'TopController@area');

Route::get('/campaign/{place?}/{page?}/{flg?}', 'TopController@campaign');

Route::post('/mail/send/{place?}/{page?}/{flg?}', 'RegisterController@register');
