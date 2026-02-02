<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <title>@yield('title')</title>

    {{-- CSS via Vite --}}
    @vite(['resources/css/app.css', 'resources/js/app.js'])

    {{-- Alpine --}}
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
    <script defer src="https://unpkg.com/@alpinejs/collapse@3.x.x/dist/cdn.min.js"></script>
    <script defer src="https://unpkg.com/alpinejs@3.x.x/dist/cdn.min.js"></script>

    <style>
        .layout-transition {
            transition: padding-left 0.3s cubic-bezier(0.4, 0, 0.2, 1);
        }
    </style>
</head>

<body class="bg-[#F5F5F5] font-inter">

    <div x-data="{ sidebarCollapsed: false }" @sidebar-toggled.window="sidebarCollapsed = $event.detail.collapsed" class="min-h-screen">
        {{-- SIDEBAR --}}
        <x-sidebar :collapsed="false" />

        <!-- Main Content -->
        <div class="flex flex-col min-h-screen transition-all duration-300"
            :class="sidebarCollapsed ? 'pl-20' : 'pl-64'">
            <!-- Navbar -->
            <x-navbar />

            <main class="flex-1 p-6">
                @yield('content')
            </main>
        </div>
    </div>

    {{-- Optional scripts --}}
    <script src="{{ asset('js/countdown-banner-vanilla.js') }}"></script>
    <script src="{{ asset('js/menu-sidebar.js') }}"></script>

</body>

</html>
