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

Route::get('/','FrontController@index');
Route::get('/principal','FrontController@principal');
Route::get('/users','FrontController@users');
Route::get('/log','FrontController@log');
Route::get('/landing','FrontController@landing');



Route::resource('/cliente','ClienteController');
Route::resource('/personal','PersonalController');
Route::resource('/personalA','PersonalController@create');
Route::resource('/inventario','InventarioController');
Route::resource('/inventarioA','InventarioController@create');
Route::resource('/servicio','ServicioController');
Route::resource('/reservacion','ReservacionController');
Route::get('/add','ReservacionController@listing');
Route::resource('pdf', 'PdfController');
Route::resource('reserva','ReservasController');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
