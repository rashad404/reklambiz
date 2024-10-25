<!-- resources/views/components/layout.blade.php -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Reklam.biz')</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css">
</head>
<body class="bg-gray-100 text-gray-900">
    <nav class="bg-white p-4 shadow-md">
        <div class="container mx-auto">
            <a href="{{ route('home') }}" class="mr-4">Home</a>
            <a href="{{ route('about') }}" class="mr-4">About</a>
            <a href="{{ route('services') }}" class="mr-4">Services</a>
        </div>
    </nav>
    <main class="container mx-auto py-8">
        {{ $slot }}
    </main>
    <footer class="bg-white p-4 text-center border-t mt-8">
        <p>&copy; {{ date('Y') }} Reklam.biz - All rights reserved.</p>
    </footer>
</body>
</html>
