<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/store', function () {
    return view('store.index', ['title' => 'Store']);
});
Route::get('/store/create', function () {
    return view('store.create', ['title' => 'Create Store']);
});

Route::get('/store/edit', function () {
    return view('store.edit', ['title' => 'Edit Store']);
});
Route::get('/store/show', function () {
    return view('store.show', ['title' => 'Show Store']);
});