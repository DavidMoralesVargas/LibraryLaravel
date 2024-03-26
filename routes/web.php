<?php

use App\Http\Controllers\AuthorController;
use App\Http\Controllers\BooksController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/authors', [AuthorController::class, 'index'])->name('author.index');

Route::get('/authors/create', [AuthorController::class, 'create'])->name('author.create');

Route::get('/authors/edit/{id}', [AuthorController::class, 'edit'])->name('author.edit');

Route::post('/authors/store', [AuthorController::class, 'store'])->name('author.store');

Route::put('/authors/update', [AuthorController::class, 'update'])->name('author.update');

Route::delete('/authors/delete/{id}', [AuthorController::class, 'delete'])->name('author.delete');



Route::get('/books', [BooksController::class, 'index'])->name('books.index');

Route::get('/books/create', [BooksController::class, 'create'])->name('books.create');

Route::get('/books/edit/{id}', [BooksController::class, 'edit'])->name('books.edit');

Route::post('/books/store', [BooksController::class, 'store'])->name('books.store');

Route::put('/books/update', [BooksController::class, 'update'])->name('books.update');

Route::delete('/books/delete/{id}', [BooksController::class, 'delete'])->name('books.delete');
