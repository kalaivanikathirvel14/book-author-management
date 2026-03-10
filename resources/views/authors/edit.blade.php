@extends('layouts.app')

@section('content')

<div class="max-w-lg mx-auto bg-white p-6 rounded-lg shadow">

<h2 class="text-2xl font-bold mb-6 text-gray-700">
✏️ Edit Author
</h2>

<form action="{{ route('authors.update', $author->id) }}" method="POST">

@csrf
@method('PUT')

<!-- Name -->
<div class="mb-4">
<label class="block text-gray-700 font-medium mb-1">
Author Name
</label>

<input type="text"
name="name"
value="{{ $author->name }}"
class="w-full border rounded-lg p-2 focus:ring-2 focus:ring-blue-400">
</div>

<!-- Email -->
<div class="mb-4">
<label class="block text-gray-700 font-medium mb-1">
Email
</label>

<input type="email"
name="email"
value="{{ $author->email }}"
class="w-full border rounded-lg p-2 focus:ring-2 focus:ring-blue-400">
</div>

<!-- Bio -->
<div class="mb-4">
<label class="block text-gray-700 font-medium mb-1">
Bio
</label>

<textarea name="bio"
class="w-full border rounded-lg p-2 focus:ring-2 focus:ring-blue-400">{{ $author->bio }}</textarea>
</div>

<!-- Buttons -->
<div class="flex items-center space-x-3">

<button class="bg-blue-600 hover:bg-blue-700 text-white px-4 py-2 rounded">
Update Author
</button>

<a href="{{ route('authors.index') }}"
class="bg-gray-400 hover:bg-gray-500 text-white px-4 py-2 rounded">
Cancel
</a>

</div>

</form>

</div>

@endsection