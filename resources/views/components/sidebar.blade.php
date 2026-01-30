<aside class="w-64 min-h-screen bg-white border-r shadow-sm">
    {{-- Brand --}}
    <div class="px-6 py-5 border-b">
        <h1 class="text-xl font-bold text-gray-800">
            E-Monev
        </h1>
        <p class="text-xs text-gray-500">Dashboard Panel</p>
    </div>

    {{-- Menu --}}
    <nav class="px-4 py-6 space-y-2">
        {{-- Dashboard --}}
        <a href="/"
           class="flex items-center gap-3 px-4 py-2 rounded-lg
           {{ request()->routeIs('dashboard') ? 'bg-blue-100 text-blue-600 font-semibold' : 'text-gray-700 hover:bg-gray-100' }}">
            <span>📊</span>
            <span>Dashboard</span>
        </a>

        {{-- Select Service --}}
        <a href="/"
           class="flex items-center gap-3 px-4 py-2 rounded-lg
           {{ request()->routeIs('select-service') ? 'bg-blue-100 text-blue-600 font-semibold' : 'text-gray-700 hover:bg-gray-100' }}">
            <span>🧩</span>
            <span>Pilih Layanan</span>
        </a>

        {{-- Divider --}}
        <hr class="my-4">

        {{-- Logout --}}
        <form method="POST" action="{{ route('logout') }}">
            @csrf
            <button type="submit"
                class="w-full flex items-center gap-3 px-4 py-2 rounded-lg
                text-red-600 hover:bg-red-50 transition">
                <span>🚪</span>
                <span>Logout</span>
            </button>
        </form>
    </nav>
</aside>
