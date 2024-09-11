@extends('layouts.app')

@section('title', 'Book Details')

@section('content')
<div class="container mx-auto px-4 py-8">
    <h1 class="text-4xl font-bold mb-6">Book Details</h1>

    <div class="bg-white shadow-md rounded p-6 mb-4">
        <h2 class="text-2xl font-semibold mb-4">{{ $book->name }}</h2>
        
        <p class="text-gray-700 mb-2"><strong>Year Published:</strong> {{ $book->years }}</p>
        <p class="text-gray-700 mb-2"><strong>Author:</strong> {{ $book->author }}</p>
        <p class="text-gray-700"><strong>Slug:</strong> {{ $book->slug }}</p>
    </div>

    <div class="flex space-x-4">
        <a href="{{ route('books.edit', $book->id) }}" class="bg-yellow-500 text-white py-2 px-4 rounded hover:bg-yellow-600">Edit</a>

        <form action="{{ route('books.destroy', $book->id) }}" method="POST" class="inline-block">
            @csrf
            @method('DELETE')
            <button type="submit" class="bg-red-500 text-white py-2 px-4 rounded hover:bg-red-600">Delete</button>
        </form>
    </div>

    <div class="mt-6">
        <a href="{{ route('books.index') }}" class="text-blue-500 hover:underline">Back to Books List</a>
    </div>
</div>
@endsection