<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'BAPPEDA Kabupaten')</title>
    <script src="https://cdn.tailwindcss.com"></script>
    @vite(['resources/css/app.css'])
</head>
<body class="h-screen">
    <div class="bg-[url('/image/bg-main.png')] bg-cover bg-center bg-no-repeat h-full w-full">
        
        {{-- Header --}}
        <header class="absolute top-5 left-5 flex items-center">
            <img src="/logo/icon.svg" alt="logo" class="h-16 md:h-20">
            <div class="pl-4">
                <h1 class="text-lg md:text-xl font-bold text-gray-800">BAPPEDA</h1>
                <p class="text-sm md:text-base font-semibold text-gray-700">KABUPATEN</p>
                <p class="text-xs md:text-sm text-gray-600">AFILA MEDIA KARYA</p>
            </div>
        </header>

        {{-- Content --}}
        <main class="h-full flex items-center justify-center">
            @yield('content')
        </main>

    </div>
</body>
</html>