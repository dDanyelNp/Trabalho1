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


Route::get('/', 'ControllerEmpresa@index');
Route::get('/contato', 'ControllerEmpresa@contato');
Route::get('/sobre','ControllerEmpresa@sobre');
