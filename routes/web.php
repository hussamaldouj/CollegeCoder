<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('dashboards-education');
});
Route::get('/setting', function () {
    return view('setting.index');
})->name('setting');
