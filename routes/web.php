<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\AuthorController;
use App\Http\Controllers\BookController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ProcurementController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/home', [BookController::class, 'home']);
Route::get('/admin', [AdminController::class, 'admin']);
Route::get('/procurement', [ProcurementController::class, 'procurement']);
Route::get('/book', [BookController::class, 'view']);
Route::get('/book/{id}/edit', [BookController::class, 'edit']);
Route::get('/category', [CategoryController::class, 'view']);
Route::get('/author', [AuthorController::class, 'view']);
Route::get('/author/{id}/edit', [AuthorController::class, 'edit']);

Route::post('/book/add', [BookController::class, 'store']);
Route::put('/book/{id}/edit', [BookController::class, 'update']);
Route::delete('/book/{id}/delete', [BookController::class, 'delete']);
Route::post('/category/add', [CategoryController::class, 'store']);
Route::delete('/category/{id}/delete', [CategoryController::class, 'delete']);
Route::post('/author/add', [AuthorController::class, 'store']);
Route::put('/author/{id}/edit', [AuthorController::class, 'update']);
Route::delete('/author/{id}/delete', [AuthorController::class, 'delete']);
