<?php

namespace App\Http\Controllers;

use App\Models\Author;
use Illuminate\Http\Request;
use App\Models\Book;

class BookController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function index()
    {
        $books = Book::all();
        return view('book.index', ['books' => $books]);
    }


    public function create()
    {
        $authors = Author::all();
        return view('book.create', ['authors' => $authors]);
    }

    public function store(Request $request)
    {
        $book = new Book;
        $book->title = $request->book_title;
        $book->isbn = $request->book_isbn;
        $book->pages = $request->book_pages;
        $book->about = $request->book_about;
        $book->author_id = $request->author_id;
        $book->save();
        return redirect()->route('book.index');
    }

    public function edit(Book $book)
    {
        $authors = Author::all();
       return view('book.edit', ['book' => $book, 'authors' => $authors]);

    }
    public function update(Request $request, Book $book)
    {
        $book->title = $request->book_title;
        $book->isbn = $request->book_isbn;
        $book->pages = $request->book_pages;
        $book->about = $request->book_about;
        $book->author_id = $request->author_id;
        $book->save();
        return redirect()->route('book.index');
 
    }
    public function destroy(Book $book)
    {
        $book->delete();
       return redirect()->route('book.index');

    }
}
