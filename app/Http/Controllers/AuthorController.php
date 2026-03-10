<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Author;

class AuthorController extends Controller
{

    // Show all authors
    public function index()
    {
        $authors = Author::all();
        return view('authors.index', compact('authors'));
    }

    // Show create form
    public function create()
    {
        return view('authors.create');
    }

    // Store author
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:authors',
            'bio' => 'nullable'
        ]);

        Author::create($request->all());

        return redirect()->route('authors.index')
        ->with('success','Author added successfully');
    }

    // Show edit form
    public function edit($id)
    {
        $author = Author::findOrFail($id);
        return view('authors.edit', compact('author'));
    }

    // Update author
    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email'
        ]);

        $author = Author::findOrFail($id);
        $author->update($request->all());

        return redirect()->route('authors.index')
        ->with('success','Author updated successfully');
    }

    // Delete author
    public function destroy($id)
    {
        $author = Author::findOrFail($id);
        $author->delete();

        return redirect()->route('authors.index')
        ->with('success','Author deleted successfully');
    }
}