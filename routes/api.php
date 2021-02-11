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

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::group(['prefix' => 'register'], function () {
    Route::post('/validateAccount', 'SupplierController@validateAccount');
    Route::post('/validatePersonal', 'SupplierController@validatePersonal');
    Route::post('/validateProfessional', 'SupplierController@validateProfessional');
    Route::post('/validateService', 'SupplierController@validateService');
    Route::post('/validateAll', 'SupplierController@validateAll');
});
