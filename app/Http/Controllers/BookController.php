<?php

namespace App\Http\Controllers;

use App\Book;
use App\Rack;
use Illuminate\Http\Request;

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
        return view('admin.books.view', compact('books'));

    }

    public function userIndex()
    {
        $books = Book::all();
        return view('user.books.view', compact('books'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.books.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $rack_id = $request->rack_id;
        $rack = Rack::where('id',$rack_id)->first();

        //recounting number of books in specific
        $books_count = Book::where('rack_id', $rack->id)->get();
        $count = count($books_count);


        $rack->books_count +=1;
        if ($rack->books_count >10)
            return back()->with('error', 'book limit is full!');


        $rack->save();


        $books = new Book();
        $books->id = $request->id;
        $books->title = $request->title;
        $books->author = $request->author;
        $books->published_year = $request->published_year;
        $books->rack_id = $request->rack_id;
        $books->save();
        return redirect()->route('books');



    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Book  $book
     * @return \Illuminate\Http\Response
     */
    public function show(Book $book)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Book  $book
     * @return \Illuminate\Http\Response
     */
    public function edit(Book $book)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Book  $book
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Book $book)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Book  $book
     * @return \Illuminate\Http\Response
     */
    public function destroy(book $book)
    {
        Book::find($book->id)->delete();

        return back()->with('message', 'Category Deleted Successfully!');
    }
}
