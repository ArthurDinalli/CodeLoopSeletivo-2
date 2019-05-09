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

Route::get('/alunos/{id?}', 'AlunoController@index');
Route::post('/alunos', 'AlunoController@store');
Route::post('/alunos/{id}', 'AlunoController@update');
Route::delete('/alunos/{id}', 'AlunoController@destroy');
