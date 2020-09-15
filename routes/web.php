<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

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
    return view('home');
});

Route::get('/fullcalendar', 'FullCalendarController@index')->name('calendar');
Route::get('/load-events', 'EventController@loadEvents')->name('routeLoadEvents');
Route::put('/event-update', 'EventController@update')->name('routeEventUpdate');
Route::post('/event-store', 'EventController@store')->name('routeEventStore');



Route::resource('/home', 'HomeController');
Route::resource('/perfil', 'UserController');
Route::resource('/favoritas', 'FavoritasController');
Route::resource('/suspenderUser', 'SuspenderUser');
Route::resource('/suspenderQuadra', 'QuadraController');
Route::resource('/endereco', 'EnderecoController');
Route::resource('/storeQuadra', 'QuadraController');
Route::resource('/quadras', 'QuadrasController');

Auth::routes();

Route::get('/admin', 'AdminController@admin')
    ->middleware('is_admin')
    ->name('admin');
