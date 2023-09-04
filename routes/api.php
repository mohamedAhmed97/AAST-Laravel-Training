<?php

use App\Http\Controllers\api\Bookcontroller;
use App\Models\Book;
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

// Route::get('books', [Bookcontroller::class, 'index']);
// Route::post('books', [Bookcontroller::class, 'store']);
// Route::get('books/{book}', [Bookcontroller::class, 'show']);
Route::apiResource('books',Bookcontroller::class);
