<?php

use Illuminate\Support\Facades\Route;

Route::get('/layout', [
    App\Http\Controllers\LoginController::class,
    'layout'
]);

Route::get('/', [
    App\Http\Controllers\SupplierController::class,
    'index'
])->name('supplier');

Route::get('/supplier/create', [
    App\Http\Controllers\SupplierController::class,
    'add'
])->name('supplier.create');

Route::post('/supplier/save', [
    App\Http\Controllers\SupplierController::class,
    'save'
])->name('supplier.save');

Route::get('/supplier/update/{id}', [
    App\Http\Controllers\SupplierController::class,
    'update'
 ])->name('supplier.update');

 Route::post('/supplier/update/{id}/save', [
    App\Http\Controllers\SupplierController::class,
    'update_save'
 ])->name('supplier.update.save');

 Route::get('/supplier.delete/{id}', [
    App\Http\Controllers\SupplierController::class,
    'delete'
 ])->name('supplier.delete');
