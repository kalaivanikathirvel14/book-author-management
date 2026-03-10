@extends('layouts.app')

@section('content')

<div class="max-w-lg mx-auto bg-white p-6 rounded-lg shadow">

<h2 class="text-2xl font-bold mb-6">
➕ Add Book
</h2>

<form action="{{ route('books.store') }}" method="POST">

@csrf

<div class="mb-4">
<label class="block mb-1">Book Title</label>

<input type="text"
name="title"
class="w-full border p-2 rounded">
</div>

<div class="mb-4">
<label class="block mb-1">Price</label>

<input type="number"
name="price"
class="w-full border p-2 rounded">
</div>

<div class="mb-4">
<label class="block mb-1">Author</label>

<select name="author_id"
class="w-full border p-2 rounded">

@foreach($authors as $author)

<option value="{{ $author->id }}">
{{ $author->name }}
</option>

@endforeach

</select>

</div>

<button class="bg-green-600 text-white px-4 py-2 rounded">
Save Book
</button>

<a href="{{ route('books.index') }}"
class="ml-3 text-gray-600">
Cancel
</a>

</form>

</div>

@endsection