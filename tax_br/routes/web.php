<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\TaxController;


//Users
Route::delete('/users/{id}', [UserController::class , 'destroyUsers'])->name('users.destroy');
Route::get('/users/{id}/edit', [UserController::class , 'editUsers'])->name('users.edit');
Route::put('/users/{id}', [UserController::class , 'updateUsers'])->name('users.update');
Route::post('/users', [UserController::class , 'storeUsers'])->name('users.store');
Route::get('/users/create', [UserController::class , 'createUsers'])->name('users.create');
Route::get('/users/{id}', [UserController::class , 'showUsers'])->name('users.show');
Route::get('/users', [UserController::class , 'listUsers'])->name('users.list');

//Taxs
Route::get('/tax', [TaxController::class , 'listTax'])->name('index.tax');
Route::get('/taxs/create', [TaxController::class , 'createTaxs'])->name('taxs.create');
Route::post('/taxs', [UserController::class , 'storeTaxs'])->name('taxs.store');





















// Route::get('/', function () {
//     return view('welcome');
// });