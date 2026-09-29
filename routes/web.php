<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BooksController;

Route::get('/books/create', [BooksController::class, 'create']);
Route::get('/',  [BooksController::class, 'index']);
Route::get('/books/{id}', [BooksController::class, 'show']);
Route::get('/books/{id}/edit', [BooksController::class, 'edit']);
Route::post('/books/store', [BooksController::class, 'store']);
Route::post('/books/{id}/update', [BooksController::class, 'update']);
Route::get('/books/{id}/delete', [BooksController::class, 'destroy']);
//Route::resource('books', BooksController);



