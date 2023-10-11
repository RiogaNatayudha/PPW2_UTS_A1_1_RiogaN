<!DOCTYPE html>
<html>
<head>
    <title>@yield('title')</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100">

    <header class="bg-gray-800 p-4 text-white">
        <div class="container mx-auto">
            <h1 class="text-2xl font-semibold">Softeng United</h1>
        </div>
    </header>

    <div class="container mx-auto mt-4">
        @yield('content')
    </div>
</body>
@include ('layouts.footer')
</html>
