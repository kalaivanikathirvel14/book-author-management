@extends('layouts.app')

@section('content')

<div class="max-w-lg mx-auto bg-white p-6 rounded-lg shadow">

<h2 class="text-2xl font-bold mb-6">
✏️ Edit Book
</h2>

<form action="{{ route('books.update', $book->id) }}" method="POST">

@csrf
@method('PUT')

<div class="mb-4">
<label class="block mb-1">Book Title</label>

<input type="text"
name="title"
value="{{ $book->title }}"
class="w-full border p-2 rounded">
</div>

<div class="mb-4">
<label class="block mb-1">Price</label>

<input type="number"
name="price"
value="{{ $book->price }}"
class="w-full border p-2 rounded">
</div>

<div class="mb-4">
<label class="block mb-1">Author</label>

<select name="author_id"
class="w-full border p-2 rounded">

@foreach($authors as $author)

<option value="{{ $author->id }}"
{{ $book->author_id == $author->id ? 'selected' : '' }}>
{{ $author->name }}
</option>

@endforeach

</select>

</div>

<div class="flex gap-3">

<button class="bg-blue-600 text-white px-4 py-2 rounded">
Update Book
</button>

<a href="{{ route('books.index') }}"
class="bg-gray-400 text-white px-4 py-2 rounded">
Cancel
</a>

</div>

</form>

</div>

@endsection