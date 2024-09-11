@extends('layouts.app')
@section('title', 'Edit Book')
@section('content')
<div class="container mx-auto px-4 py-8">
    <h1 class="text-4xl font-bold mb-6">{{ isset($book) ? 'Edit Book' : 'Create New Book' }}</h1>

    <form action="{{ isset($book) ? route('books.update', $book->id) : route('books.store') }}" method="POST" class="bg-white shadow-md rounded px-8 pt-6 pb-8 mb-4">
        @csrf
        @if(isset($book))
            @method('PUT')
        @endif

        <div class="mb-4">
            <label for="name" class="block text-gray-700 text-sm font-bold mb-2">Name:</label>
            <input type="text" name="name" id="name" value="{{ old('name', $book->name ?? '') }}" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
        </div>

        <div class="mb-4">
            <label for="years" class="block text-gray-700 text-sm font-bold mb-2">Years:</label>
            <input type="text" name="years" id="years" value="{{ old('years', $book->years ?? '') }}" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
        </div>

        <div class="mb-4">
            <label for="author" class="block text-gray-700 text-sm font-bold mb-2">Author:</label>
            <input type="text" name="author" id="author" value="{{ old('author', $book->author ?? '') }}" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
        </div>

        <div class="flex items-center justify-between">
            <button type="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline">
                {{ isset($book) ? 'Update' : 'Create' }}
            </button>
        </div>
    </form>
</div>
@endsection