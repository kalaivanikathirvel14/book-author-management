@extends('layouts.app')

@section('content')

<div class="flex justify-between items-center mb-6">

<h2 class="text-3xl font-bold text-gray-700">
📚 Books Management
</h2>

<div class="flex gap-3">

<a href="{{ route('dashboard') }}"
class="bg-gray-600 hover:bg-gray-700 text-white px-5 py-2 rounded-lg shadow">
⬅ Exit
</a>

<a href="{{ route('books.create') }}"
class="bg-green-600 hover:bg-green-700 text-white px-5 py-2 rounded-lg shadow">
+ Add Book
</a>

</div>

</div>

<div class="bg-white shadow-lg rounded-lg overflow-hidden">

<table class="w-full">

<thead class="bg-gray-200">

<tr>
<th class="p-4 text-left">S.No</th>
<th class="p-4 text-left">Title</th>
<th class="p-4 text-left">Price</th>
<th class="p-4 text-left">Author</th>
<th class="p-4 text-center">Actions</th>
</tr>

</thead>

<tbody>

@foreach($books as $book)

<tr class="border-t hover:bg-gray-50">

<td class="p-4 font-medium">
{{ $loop->iteration }}
</td>

<td class="p-4 font-medium">
{{ $book->title }}
</td>

<td class="p-4">
₹ {{ $book->price }}
</td>

<td class="p-4">
{{ $book->author->name }}
</td>

<td class="p-4 text-center space-x-2">

<a href="{{ route('books.edit',$book->id) }}"
class="bg-blue-500 text-white px-3 py-1 rounded">
Edit
</a>

<form action="{{ route('books.destroy',$book->id) }}" method="POST" class="inline">

@csrf
@method('DELETE')

<button class="bg-red-500 text-white px-3 py-1 rounded">
Delete
</button>

</form>

</td>

</tr>

@endforeach

</tbody>

</table>

</div>

@endsection