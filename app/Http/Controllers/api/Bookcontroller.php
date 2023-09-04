<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use App\Models\Book;
use Illuminate\Http\Request;

class Bookcontroller extends Controller
{
    function index()
    {
        $books = Book::all();
        return response()->json([
            "status" => 200,
            'data' => $books
        ]);
    }

    function store(Request $request)
    {
        $book = Book::create([
            'name' => $request->name,
            'price' => $request->price,
            'description' => $request->description
        ]);

        return response()->json([
            "status" => 202,
            'data' => $book
        ]);
    }

    function show($book)
    {
        $book = Book::findOrFail($book);
        return response()->json([
            "status" => 200,
            'data' => $book
        ]);
    }
}
