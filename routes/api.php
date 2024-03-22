<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/books',[\App\Http\Controllers\BookController::class, 'index']);
Route::get('/books/{isbn}',[\App\Http\Controllers\BookController::class, 'findByISBN'] );
Route::get('/books/search/{searchTerm}',[\App\Http\Controllers\BookController::class, 'findBySearchTerm'] );

Route::post('/books', [\App\Http\Controllers\BookController::class, 'save']);
