@extends('layouts.app')

@section('content')

<div class="max-w-6xl mx-auto">

<h1 class="text-3xl font-bold text-gray-700 mb-8">
📊 Dashboard
</h1>

<div class="grid grid-cols-1 md:grid-cols-2 gap-6">

<!-- Authors Card -->

<div class="bg-white p-6 rounded-xl shadow hover:shadow-lg transition">

<h2 class="text-gray-500 text-lg">
Total Authors
</h2>

<p class="text-4xl font-bold text-blue-600 mt-2">
{{ $totalAuthors }}
</p>

<a href="{{ route('authors.create') }}"
class="mt-4 inline-block bg-blue-600 text-white px-4 py-2 rounded hover:bg-blue-700">
Add Author
</a>

</div>

<!-- Books Card -->

<div class="bg-white p-6 rounded-xl shadow hover:shadow-lg transition">

<h2 class="text-gray-500 text-lg">
Total Books
</h2>

<p class="text-4xl font-bold text-green-600 mt-2">
{{ $totalBooks }}
</p>

<a href="{{ route('books.create') }}"
class="mt-4 inline-block bg-green-600 text-white px-4 py-2 rounded hover:bg-green-700">
Add Book
</a>

</div>

</div>

<!-- Quick Navigation -->

<div class="mt-10 bg-white p-6 rounded-xl shadow">

<h2 class="text-xl font-bold mb-4">
Quick Links
</h2>

<div class="flex gap-4">

<a href="{{ route('authors.index') }}"
class="bg-blue-500 text-white px-5 py-2 rounded hover:bg-blue-600">
View Authors
</a>

<a href="{{ route('books.index') }}"
class="bg-green-500 text-white px-5 py-2 rounded hover:bg-green-600">
View Books
</a>

</div>

</div>

</div>

@endsection