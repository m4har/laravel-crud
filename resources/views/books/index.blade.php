@extends('layouts.app')

@section('content')
<div class="container mx-auto px-4 py-8">
    <h1 class="text-4xl font-bold mb-6 text-center">Books List</h1>
    
    <div class="flex justify-end mb-4">
        <a href="{{ route('books.create') }}" class="bg-blue-500 text-white py-2 px-4 rounded hover:bg-blue-600">Create New Book</a>
    </div>

    @if(session('success'))
        <div class="bg-green-100 text-green-700 p-4 mb-6 rounded">
            {{ session('success') }}
        </div>
    @endif

    <table class="min-w-full bg-white shadow-md rounded">
        <thead>
            <tr>
                <th class="py-3 px-6 text-left text-gray-700 uppercase">Name</th>
                <th class="py-3 px-6 text-left text-gray-700 uppercase">Years</th>
                <th class="py-3 px-6 text-left text-gray-700 uppercase">Author</th>
                <th class="py-3 px-6 text-right text-gray-700 uppercase">Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach($books as $book)
                <tr class="border-b hover:bg-gray-50">
                    <td class="py-3 px-6">{{ $book->name }}</td>
                    <td class="py-3 px-6">{{ $book->years }}</td>
                    <td class="py-3 px-6">{{ $book->author }}</td>
                    <td class="py-3 px-6 text-right">
                        <a href="{{ route('books.show', $book->id) }}" class="bg-blue-500 text-white py-2 px-4 rounded hover:bg-blue-600">Show</a>
                        <a href="{{ route('books.edit', $book->id) }}" class="bg-yellow-500 text-white py-2 px-4 rounded hover:bg-yellow-600">Edit</a>
                        <form action="{{ route('books.destroy', $book->id) }}" method="POST" class="inline-block">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="bg-red-500 text-white py-1 px-4 rounded hover:bg-red-600">Delete</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection