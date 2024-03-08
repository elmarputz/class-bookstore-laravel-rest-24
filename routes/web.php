<?php

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Route;

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
    $books = DB::table('books')->get();
    return view('books.index', compact('books'));
});

Route::get('/books/{id}', function($id) {
    $book = DB::table('books')->find($id);
    return view('books.show', compact('book'));

});
