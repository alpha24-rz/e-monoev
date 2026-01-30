<aside class="w-64 min-h-screen bg-[#2563EB] border-r shadow-sm font-inter">
    {{-- Brand --}}
    <div class="flex px-6 py-8 border-b border-blue-400 gap-2">
        <img src="/icons/Logo E-Monev.svg" alt="" class="h-[44px]">
        <div>
            <h1 class="text-xl font-bold text-white">monev</h1>
            <p class="text-xs text-[#93C5FD]">Versi 3.1</p>
        </div>
    </div>

    {{-- Menu --}}
    <nav class="px-4 py-6 space-y-2">

        {{-- SUPER ADMIN --}}
        <div x-data="{ openAdmin: false }" class="space-y-2">

            <!-- Header -->
            <button @click="openAdmin = !openAdmin"
                class="w-full flex items-center justify-between bg-[#1D4ED8] px-4 py-2 rounded-lg hover:bg-blue-700">

                <div class="flex items-center gap-3">
                    <img src="/icons/bank-fill.svg" alt="">
                    <span class="text-white font-medium">Super Admin</span>
                </div>

                <svg class="w-4 h-4 text-white transition-transform duration-200"
                    :class="openAdmin ? 'rotate-45' : ''"
                    fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M9 5l7 7-7 7" />
                </svg>
            </button>

            <!-- Dropdown -->
            <div x-show="openAdmin" x-transition class="pl-2 space-y-1">

                <a href="/dashboard"
                    class="flex items-center gap-2 px-3 py-2 rounded-md text-sm text-white/90 hover:bg-blue-700">
                    <img src="/icons/dashboard-fill.svg" alt="">
                    Dashboard
                </a>

                <a href="/program-unggulan"
                    class="flex items-center gap-2 px-3 py-2 rounded-md text-sm text-white/90 hover:bg-blue-700">
                    <img src="/icons/Frame.svg" alt="">
                    Program Unggulan
                </a>

                {{-- VISUALISASI DATA --}}
                <div x-data="{ openViz: false }">
                    <button @click="openViz = !openViz"
                        class="w-full flex items-center justify-between px-3 py-2 rounded-md text-sm text-white/90 hover:bg-blue-700">

                        <div class="flex items-center gap-2">
                            <img src="/icons/Vector.svg" alt="">
                            Visualisasi Data
                        </div>

                        <svg class="w-4 h-4 transition-transform"
                            :class="openViz ? 'rotate-45' : ''"
                            fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M9 5l7 7-7 7" />
                        </svg>
                    </button>

                    <div x-show="openViz" x-transition class="pl-6 space-y-1">
                        <a href="/visualisasi/grafik"
                            class="block px-3 py-1 text-xs text-white/80 hover:text-white">
                            Grafik
                        </a>
                        <a href="/visualisasi/peta"
                            class="block px-3 py-1 text-xs text-white/80 hover:text-white">
                            Peta
                        </a>
                    </div>
                </div>

                {{-- REFERENSI --}}
                <div x-data="{ openRef: false }">
                    <button @click="openRef = !openRef"
                        class="w-full flex items-center justify-between px-3 py-2 rounded-md text-sm text-white/90 hover:bg-blue-700">

                        <div class="flex items-center gap-2">
                            <img src="/icons/Vector (1).svg" alt="">
                            Referensi
                        </div>

                        <svg class="w-4 h-4 transition-transform"
                            :class="openRef ? 'rotate-45' : ''"
                            fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M9 5l7 7-7 7" />
                        </svg>
                    </button>

                    <div x-show="openRef" x-transition class="pl-6 space-y-1">
                        <a href="/referensi/indikator"
                            class="block px-3 py-1 text-xs text-white/80 hover:text-white">
                            Indikator
                        </a>
                        <a href="/referensi/dokumen"
                            class="block px-3 py-1 text-xs text-white/80 hover:text-white">
                            Dokumen
                        </a>
                    </div>
                </div>

                <span class="block px-3 py-2 text-xs font-light text-[#93C5FD]">
                    PERENCANAAN
                </span>
            </div>
        </div>
    </nav>
</aside>
