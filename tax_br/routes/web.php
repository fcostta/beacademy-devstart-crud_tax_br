<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\TaxController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/user', [UserController::class , 'index'])->name('index');
Route::get('/tax', [TaxController::class , 'indexTax'])->name('index.tax');