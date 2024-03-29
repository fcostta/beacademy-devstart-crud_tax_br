<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\{
                UserController,
                TaxController
                };


require __DIR__ . '/auth.php';


Route::get('/', function () {
    return view('welcome');
});

Route::middleware(['auth'])->group(function () {

    //Users
    Route::delete('/users/{id}', [UserController::class , 'destroyUsers'])->name('users.destroy');
    Route::get('/users/{id}/edit', [UserController::class , 'editUsers'])->name('users.edit');
    Route::put('/users/{id}', [UserController::class , 'updateUsers'])->name('users.update');
    Route::post('/users', [UserController::class , 'storeUsers'])->name('users.store');
    Route::get('/users/create', [UserController::class , 'createUsers'])->name('users.create');
    Route::get('/users/{id}', [UserController::class , 'showUsers'])->name('users.show');
    Route::get('/users', [UserController::class , 'listUsers'])->name('users.list');

    //Taxs
    Route::get('/taxes/create', [TaxController::class , 'createTaxes'])->name('taxes.create');
    Route::post('/taxes', [TaxController::class , 'storeTaxes'])->name('taxes.store');
    Route::get('/taxes', [TaxController::class , 'listTaxes'])->name('taxes.list');
    Route::get('/taxes/{id}', [TaxController::class , 'showTaxes'])->name('taxes.show');
    Route::get('/taxes/{id}/edit', [TaxController::class , 'editTaxes'])->name('taxes.edit');
    Route::put('/taxes/{id}', [TaxController::class , 'updateTaxes'])->name('taxes.update');
    Route::delete('/taxes/{id}', [TaxController::class , 'destroyTaxes'])->name('taxes.destroy');
});




//Route::get('/dashboard', function () {
//    return view('dashboard');
//})->middleware(['auth'])->name('dashboard');