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

Route::get('/', function () { return view('site'); })->name('site');


Auth::routes();

Route::get('/admin', 'AdminController@index')->name('admin')->middleware('can:usuario');

Route::middleware(['auth'])->prefix('admin')->namespace('Admin')->group(function(){

  Route::resource('usuarios', 'UsuariosController')->middleware('can:eAdmin');

});

