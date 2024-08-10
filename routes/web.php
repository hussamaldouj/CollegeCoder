<?php

use Illuminate\Support\Facades\Route;



Auth::routes();
Route::get('/', function () {
    return view('auth.login');
});
Route::get('/setting', function () {
    return view('setting.index');
})->name('setting');
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
