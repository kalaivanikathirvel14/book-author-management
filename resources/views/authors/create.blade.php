@extends('layouts.app')

@section('content')

<div class="max-w-lg mx-auto bg-white p-6 rounded shadow">

<h2 class="text-2xl font-bold mb-4">Add Author</h2>

<form action="{{ route('authors.store') }}" method="POST">

@csrf

<div class="mb-4">
<label class="block text-gray-700">Name</label>
<input type="text" name="name"
class="w-full border p-2 rounded">
</div>

<div class="mb-4">
<label class="block text-gray-700">Email</label>
<input type="email" name="email"
class="w-full border p-2 rounded">
</div>

<div class="mb-4">
<label class="block text-gray-700">Bio</label>
<textarea name="bio"
class="w-full border p-2 rounded"></textarea>
</div>

<button class="bg-green-600 text-white px-4 py-2 rounded">
Save Author
</button>

<a href="{{ route('authors.index') }}"
class="ml-3 text-gray-600">
Cancel
</a>

</form>

</div>

@endsection