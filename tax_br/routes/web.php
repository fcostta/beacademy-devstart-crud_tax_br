<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\TaxController;


Route::get('/users/{id}', [UserController::class , 'showUsers'])->name('users.show');
Route::get('/users', [UserController::class , 'listUsers'])->name('users.list');



Route::get('/tax', [TaxController::class , 'indexTax'])->name('index.tax');



// Route::get('/', function () {
//     return view('welcome');
// });