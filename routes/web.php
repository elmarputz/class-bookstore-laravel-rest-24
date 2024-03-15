<?php

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Route;
use App\Models\Book;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/


Route::get('/books', function () {
    $books = Book::all();
    return view('books.index', compact('books'));
});

Route::get('/books/{id}', function($id) {
    $book = Book::find($id);
    return view('books.show', compact('book'));

});

