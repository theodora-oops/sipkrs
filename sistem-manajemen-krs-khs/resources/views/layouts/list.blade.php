<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'My App')</title>

    <!-- tailwindcss -->
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 flex flex-col min-h-screen">

    <!-- header -->
    <header class="bg-gray-800 text-white">
        @include('components.header')
    </header>

    <!-- content -->
    <main class="flex-grow">
        <div class="max-w-5xl mx-auto mt-8 bg-white p-6 rounded-lg shadow">
            @yield('content')
        </div>
    </main>

    <!-- footer -->
    <footer class="bg-gray-760 text-white">
        @include('components.footer')
    </footer>

</body>
</html>