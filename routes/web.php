<?php
use App\Models\Author;
use App\Models\Book;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthorController;
use App\Http\Controllers\BookController;

Route::resource('authors', AuthorController::class);
Route::resource('books', BookController::class);

Route::get('/', function () {
    return redirect('/dashboard');
});



Route::get('/dashboard', function () {

    $totalAuthors = Author::count();
    $totalBooks = Book::count();

    return view('dashboard', compact('totalAuthors','totalBooks'));

})->name('dashboard');