<?php

use App\Http\Controllers\StoreController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/store', [StoreController::class, 'index'])->name('store.index');
Route::get('/store/create', [StoreController::class, 'create'])->name('store.create');
Route::get('/store/{store}/edit', [StoreController::class, 'edit'])->name('store.edit');
Route::get('/store/{store}', [StoreController::class, 'show'])->name('store.show');

