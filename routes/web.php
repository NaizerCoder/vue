<?php

use App\Http\Controllers\Person\StoreController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('app');
});

Auth::routes();
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

/*
Route::group(['namespace' => 'App\Http\Controllers\Person', 'prefix' => 'people'], function () {
    Route::post('/', 'StoreController');

});
*/

Route::fallback(function ()
{
    return redirect()->to('/');
});
