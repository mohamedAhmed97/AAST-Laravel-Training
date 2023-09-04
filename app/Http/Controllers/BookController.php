<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreBookRequest;
use App\Models\Book;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class BookController extends Controller
{
    function index()
    {
        //books 
        $books = Book::all();
        return view('books.index', ['books' => $books]);
    }

    function create()
    {
        //create
        return view("books.create");
    }

    function store(StoreBookRequest $request)
    {
        //book
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
