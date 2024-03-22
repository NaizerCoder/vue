<?php

use App\Http\Controllers\IndexController;
use Illuminate\Support\Facades\Route;

//Route::get('/', function () {
//    return view('app');
//});

Auth::routes();
//Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/{page}', IndexController::class)->where('page','.*');

Route::fallback(function ()
{
    return redirect()->to('/');
});
