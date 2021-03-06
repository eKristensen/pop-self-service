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

// Index
Route::get('/', 'ResetRequestsController@index');

// Password reset related routes
Route::get('/reset/{pass}', 'ResetRequestsController@show')->name('reset.show');
Route::patch('/reset/{pass}', 'ResetRequestsController@patch');
Route::post('/resetPassword', 'ResetRequestsController@store');

// Heartbeat health check
Route::get('/heartbeat', 'HeartbeatController@index');
