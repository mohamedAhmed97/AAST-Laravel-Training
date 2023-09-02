<?php

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


// worst code \-> optimize

// 1- create view 
// 2- bind data in view 

//books -> hi from books
Route::get('/books', function () {
    $books = [
        [
            'name' => "Java",
            'price' => 100
        ],
        [
            'name' => 'OOP',
            'price' => 80
        ],
        [
            'name' => 'DS',
            'price' => 120
        ],
        [
            'name' => 'Problem solving',
            'price' => 80
        ],
    ];
    // "ul books"
    return view('books', ["books" => $books]);
});

Route::get('/fruits', function () {
    $fruits = [
        [
            'name' => "apple",
            'price' => 100
        ],
        [
            'name' => 'watermalon',
            'price' => 80
        ],
        [
            'name' => 'orange',
            'price' => 120
        ],
        [
            'name' => 'mango',
            'price' => 60
        ],
    ];
    return view('test', [
        "fruits" => $fruits,
    ]);
});

Route::get('admin',function(){
    return view('admin.index');
});