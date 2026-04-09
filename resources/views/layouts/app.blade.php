<!doctype html>
<html>

<head>
    <title>@yield('title')</title>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    @vite('resources/css/app.css')
    <script src="https://cdn.jsdelivr.net/npm/@tailwindplus/elements@1" type="module"></script>
    <link rel="stylesheet" href="https://rsms.me/inter/inter.css" />
</head>

<body class="min-h-screen bg-gray-100">

    {{-- Navbar --}}
    @include('partials.navbar')

    {{-- Content --}}
    <div class="py-10 mx-auto max-w-7xl px-4 sm:px-6 lg:px-8 bg-white shadow-sm">
        @yield('content')
    </div>

</body>

</html>
