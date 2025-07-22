<?php

use App\Http\Controllers\BookController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/home', [BookController::class, 'home']);
Route::get('/home/book/{id}', [BookController::class, 'show']);
Route::get('/home/book/{id}/edit', [BookController::class, 'edit']);
Route::post('/home', [BookController::class, 'storeData']);
Route::put('/home/{id}', [BookController::class, 'updateData']);
Route::delete('/home/{id}', [BookController::class, 'deleteData']);
