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

Route::get('/', function () {
    return view('vendor.adminlte.auth.login');
});

Route::group(['middleware' => 'auth'], function () {

    Route::get('/Tickets/rHggzTfqae', 'ComplaintsController@rHggzTfqae');
    Route::get('/Tickets/VVvarLnNDb', 'ComplaintsController@VVvarLnNDb');
    Route::get('/Tickets/ajPqZqzAYd', 'ComplaintsController@ajPqZqzAYd');
    Route::get('/Tickets/qPRxTCuQpe', 'ComplaintsController@qPRxTCuQpe');
    Route::get('/Tickets/J5apvq8zq', 'ComplaintsController@J5apvq8zq');
    Route::post('/Enviar', 'ComplaintsController@guardar');
    Route::post('/Fichas', 'ComplaintsController@fichas');

});


Route::get('/Tickets/VallesBiobio', 'ComplaintsController@VallesBiobio');
Route::get('/Tickets/RdelAlgarrobo', 'ComplaintsController@RdelAlgarrobo');
Route::get('/Tickets/VdelDesierto', 'ComplaintsController@VdelDesierto');
Route::get('/Tickets/RdelLimari', 'ComplaintsController@RdelLimari');
Route::get('/Tickets/RdelDesierto', 'ComplaintsController@RdelDesierto');

