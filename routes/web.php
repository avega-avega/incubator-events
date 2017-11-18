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

Route::get('/', 'EventsController@index')->name('home');

Route::get('/{tagId}', 'EventsController@findByTag')->name('event.by_tag');

Route::get('/event/{eventId}', 'EventsController@showEvent')->name('event.show');
