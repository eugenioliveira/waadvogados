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

// Páginas estáticas
Route::get('/', 'PagesController@home')->name('home');
Route::get('institucional', 'PagesController@about')->name('about');
Route::get('areasdeatuacao', 'PagesController@areas')->name('areas');
Route::get('profissionais', 'PagesController@ourpeople')->name('ourpeople');
Route::get('noticias', 'PagesController@news')->name('news');

Route::get('contato', 'ContactController@index')->name('contact');
Route::post('contato', 'ContactController@store')->name('sendContact');
