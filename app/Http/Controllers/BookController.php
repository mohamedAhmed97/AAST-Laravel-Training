<?php

namespace App\Http\Controllers;

use App\Models\Book;
use Illuminate\Http\Request;

class BookController extends Controller
{
    function index()
    {
        $books = Book::all();
        return view('books.index', ['books' => $books]);
    }

    function create()
    {
        return view("books.create");
    }

    function store(Request $request)
    {
        $book = Book::create([
            'name' => $request->name,
            'price' => $request->price,
            'description' => $request->description
        ]);

        return redirect()->route("books.index");
    }

    function show($book)
    {
        // select with book
        $book = Book::findOrFail($book);
        return view('books.show', ["book" => $book]);
    }
}
