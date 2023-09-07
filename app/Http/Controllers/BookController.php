<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreBookRequest;
use App\Models\Book;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class BookController extends Controller
{
    function index()
    {
        //books 
        $books = Book::paginate(10);
        return view('books.index', [
            'books' => $books,
        ]);
    }

    function create()
    {
        //create
        $categories = Category::all();
        return view("books.create", [
            'categories' => $categories
        ]);
    }

    function store(StoreBookRequest $request)
    {
        $fileName = Book::uploadFile($request, $request->upload_image);

        //book
        $book = Book::create([
            'name' => $request->name,
            'price' => $request->price,
            'description' => $request->description,
            'image' => 'books/' . $fileName,
            'cat_id'=>$request->cat_id
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
