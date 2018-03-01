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

Route::get('/','PessoasController@index');
Route::get('/create_pessoas','PessoasController@create');
Route::post('/create_pessoas','PessoasController@store');
Route::get('/edit_pessoas/{id}','PessoasController@edit');
//Route::put('/edit_pessoas/{id}','PessoasController@update');
Route::get('/welcome/{locale}', function ($locale) {
    App::setLocale($locale);    
});

