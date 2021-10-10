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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/perfume/novo','PerfumesController@create')->name('novo_perfume');
Route::post('/perfume/novo','PerfumesController@store')->name('salvar_perfume');
Route::get('/perfume/ver','PerfumesController@index')->name('listar_perfume');
Route::get('/perfume/del/{id}','PerfumesController@destroy')->name('excluir_perfume');
Route::get('/perfume/edit/{id}','PerfumesController@edit')->name('editar_perfume');
Route::post('/perfume/edit/{id}','PerfumesController@update')->name('atualizar_perfume');


Route::get('/fragrancia/nova','FragranciasController@create')->name('nova_fragrancia');
Route::post('/fragrancia/nova','FragranciasController@store')->name('salvar_fragrancia');
Route::get('/fragrancia/ver','FragranciasController@index')->name('listar_fragrancia');
Route::get('/fragrancia/del/{id}','FragranciasController@destroy')->name('excluir_fragrancia');
Route::get('/fragrancia/edit/{id}','FragranciasController@edit')->name('editar_fragrancia');
Route::post('/fragrancia/edit/{id}','FragranciasController@update')->name('atualizar_fragrancia');