<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <title>@yield('title')</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
    @vite('resources/css/app.css')
</head>

<body class="bg-[#F5F5F5] font-inter">

    <div class="flex h-screen">
        {{-- Sidebar --}}
        <x-sidebar />
        <div class="flex flex-col flex-1">
            
            <x-navbar />

            {{-- Content --}}
            <main class="flex-1 p-6">
                @yield('content')
            </main>

        </div>

    </div>
    <script src="//unpkg.com/alpinejs" defer></script>
</body>

</html>
