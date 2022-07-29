<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\TaxController;


//Users

Route::post('/users', [UserController::class , 'storeUsers'])->name('users.store');
Route::get('/users/create', [UserController::class , 'createUsers'])->name('users.create');
Route::get('/users/{id}', [UserController::class , 'showUsers'])->name('users.show');
Route::get('/users', [UserController::class , 'listUsers'])->name('users.list');

//Taxs
Route::get('/tax', [TaxController::class , 'indexTax'])->name('index.tax');























// Route::get('/', function () {
//     return view('welcome');
// });