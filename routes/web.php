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

use Illuminate\Support\Facades\Auth;

Route::get('/albuns', 'AlbumController@index')->name('listar_album');

Route::get('/albuns/create', 'AlbumController@create');
Route::post('/albuns', 'AlbumController@store');

Route::get('/albuns/{id}/edit', 'AlbumController@edit');
Route::put('/albuns/{id}', 'AlbumController@update');

Route::delete('/albuns/{id}', 'AlbumController@destroy');

Route::get('/albuns/{albumId}/dados', 'DadoController@index')->name('listar_dados');

Route::get('/albuns/{albumId}/dados/create', 'DadoController@create');
Route::post('/albuns/{albumId}/dados', 'DadoController@store');

Route::get('/albuns/{albumId}/dados/{id}/edit', 'DadoController@edit');
Route::put('/albuns/{albumId}/dados/{id}', 'DadoController@update');

Route::delete('/albuns/{albumId}/dados/{id}', 'DadoController@destroy');

Auth::routes();

Route::get('/login', 'Auth\LoginController@index')->name('login');
Route::post('/login', 'Auth\LoginController@login');
Route::get('/logout', 'Auth\LoginController@logout');
Route::get('/register', 'Auth\RegisterController@create');
Route::post('/register', 'Auth\RegisterController@store');
