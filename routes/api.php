<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::group(
    [
        'middleware' => 'api',
        'namespace' => 'App\Http\Controllers',
        'prefix' => 'auth'
    ],
    function ($router) {
        Route::post('login', 'AuthController@login');
        Route::post('register', 'AuthController@register');
        Route::post('logout', 'AuthController@logout');
        Route::post('profile', 'AuthController@profile');
        Route::post('refresh', 'AuthController@refresh');
    }
);

Route::group([
    'middleware' => 'api', 'namespace' => 'App\Http\Controllers',
], function () {
    Route::get('/kendaraan', 'KendaraanController@index');
    Route::get('/kendaraan', 'KendaraanController@getMobil');
    Route::get('/kendaraan', 'KendaraanController@getMotor');
});
Route::group(['middleware' => 'api'], function () {
    Route::get('/laporan', 'OrderController@laporan');
    Route::post('penjualan', 'OrderCOntroller@jual');
});
