<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/','EnderecoController@index')->name('home');

Route::get('/buscar','EnderecoController@buscar')->name('buscar');

Route::post('/salvar','EnderecoController@salvar')->name('salvar');

Route::get('/adicionar','EnderecoController@adicionar')->name('adicionar');

