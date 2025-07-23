<?php

use App\Http\Controllers\BookController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/home', [BookController::class, 'home']);
Route::get('/home/book/{id}', [BookController::class, 'show']);
Route::get('/home/book/{id}/edit', [BookController::class, 'edit']);
Route::post('/book/{id}/add', [BookController::class, 'storeData']);
Route::put('/book/{id}/edit', [BookController::class, 'update']);
Route::delete('/book/{id}/delete', [BookController::class, 'deleteData']);
