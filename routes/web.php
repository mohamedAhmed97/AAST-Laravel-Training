<?php

use App\Http\Controllers\BookController;
use App\Models\Book;
use App\Models\User;
use Illuminate\Http\Request;
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

// Route::get('books',[BookController::class,'index'])->name("books.index");
// Route::get('books/create',[BookController::class,'create'])->name("books.create");
// Route::post('books',[BookController::class,'store'])->name("books.store");
// Route::get('books/{book}',[BookController::class,'show'])->name("books.show");
Route::resource('books',BookController::class);