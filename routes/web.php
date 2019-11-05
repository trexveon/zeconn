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

Route::get('/', 'polarisController@index');

Route::get('/noticias', 'noticiasController@index');

Route::get('/noticias/visualizar/{id}', 'noticiasController@show');

Route::get('/empreendimentos', 'empreendimentosController@index');

Route::get('/empreendimentos/visualizar/{id}', 'empreendimentosController@show');


Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});
