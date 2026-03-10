<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Book;
use App\Models\Author;

class BookController extends Controller
{

    // Show books
    public function index()
    {
        $books = Book::with('author')->get();
        return view('books.index', compact('books'));
    }

    // Show create form
    public function create()
    {
        $authors = Author::all();
        return view('books.create', compact('authors'));
    }

    // Store book
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'price' => 'required|numeric',
            'author_id' => 'required'
        ]);

        Book::create($request->all());

        return redirect()->route('books.index')
        ->with('success','Book added successfully');
    }

    // Show edit form
    public function edit($id)
    {
        $book = Book::findOrFail($id);
        $authors = Author::all();

        return view('books.edit', compact('book','authors'));
    }

    // Update book
    public function update(Request $request, $id)
    {
        $request->validate([
            'title' => 'required',
            'price' => 'required|numeric'
        ]);

        $book = Book::findOrFail($id);
        $book->update($request->all());

        return redirect()->route('books.index')
        ->with('success','Book updated successfully');
    }

    // Delete book
    public function destroy($id)
    {
        $book = Book::findOrFail($id);
        $book->delete();

        return redirect()->route('books.index')
        ->with('success','Book deleted successfully');
    }
}