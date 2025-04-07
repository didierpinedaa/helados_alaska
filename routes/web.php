<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
Route::get('helados_alaska', function () {
    return view('helados_alaska');
});
Route::get('dashpag', function () {
    return view('dashpag');
});
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
