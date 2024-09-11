<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>@yield('title', 'Books')</title>

    <!-- Tambahkan CSS (misalnya menggunakan Tailwind) -->
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="bg-gray-100 text-gray-800 flex flex-col h-screen">

    <!-- Navbar -->
    <nav class="bg-blue-500 p-4">
        <div class="container mx-auto">
            <a href="/books" class="text-white text-lg font-semibold">Books</a>
        </div>
    </nav>

    <!-- Main Content -->
    <div class="container mx-auto px-4 py-6 h-full">
        @yield('content')
    </div>

    <!-- Footer -->
    <footer class="bg-gray-800 text-white p-4 mt-8">
        <div class="container mx-auto text-center">
            &copy; {{ date('Y') }} Books.
        </div>
    </footer>
</body>
</html>