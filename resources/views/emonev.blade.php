<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>@yield('title')</title>
    <script src="https://cdn.tailwindcss.com"></script>
    @vite('resources/css/app.css')
</head>
<body class="bg-gray-100">

<div class="flex">
    {{-- Sidebar --}}
    <x-sidebar />

    {{-- Content --}}
    <main class="flex-1 p-6">
        @yield('content')
    </main>
</div>

</body>
</html>
