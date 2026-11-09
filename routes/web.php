<?php

use App\Http\Controllers\StoreController;
use Illuminate\Support\Facades\Route;

Route::get('/', [StoreController::class, 'index'])->name('home');
Route::get('/store', [StoreController::class, 'index'])->name('store.index');
Route::get('/store/create', [StoreController::class, 'create'])->name('store.create');
Route::post('/store/store', [StoreController::class, 'store'])->name('store.store');
Route::get('/store/{store}', [StoreController::class, 'show'])->name('store.show');

Route::get('/store/{store}/edit', [StoreController::class, 'edit'])->name('store.edit');
Route::put('/store/{store}/update', [StoreController::class, 'update'])->name('store.update');
Route::get('/store/{store}/destroy', [StoreController::class, 'destroy'])->name('store.destroy');


