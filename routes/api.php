<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');


Route::group(['namespace' => 'App\Http\Controllers\Person', 'prefix' => 'people'], function(){

    Route::post('/', 'StoreController');
    Route::get('/', 'IndexController');

});

