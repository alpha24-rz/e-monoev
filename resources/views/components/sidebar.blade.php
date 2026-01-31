<aside class="w-64 min-h-screen bg-[#2563EB] border-r shadow-sm font-inter">
    {{-- Brand --}}
    <div class="flex px-6 py-8 border-b border-blue-400 gap-2">
        <img src="/icons/Logo E-Monev.svg" alt="" class="h-11">
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
            <button @click="openAdmin = !openAdmin" :class="openViz ? 'bg-[#1D4ED8]' : ''"
                class="w-full flex items-center justify-between bg-[#1D4ED8] px-4 py-2 rounded-lg hover:bg-[#3B82F6]">

                <div class="flex items-center gap-3">
                    <img src="/icons/bank-fill.svg" alt="" class="h-5">
                    <span class="text-white font-medium">Super Admin</span>
                </div>

                <svg class="h-4 w-4 text-white transition-transform duration-200" :class="openAdmin ? 'rotate-45' : ''"
                    fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M9 5l7 7-7 7" />
                </svg>
            </button>

            <!-- Dropdown -->
            <div x-show="openAdmin" x-transition class="space-y-1 w-full">

                <a href="/dashboard"
                    class="flex w-full items-center gap-3 px-4 py-2 rounded-md text-sm text-white/90 hover:bg-[#3B82F6]">
                    <img src="/icons/dashboard-line.svg" alt="" class="h-5">
                    Dashboard
                </a>

                <a href="/program-unggulan"
                    class="flex items-center gap-3 px-4 py-2 rounded-md text-sm text-white/90 hover:bg-[#3B82F6]">
                    <img src="/icons/Frame.svg" alt="" class="h-5">
                    Program Unggulan
                </a>

                {{-- VISUALISASI DATA --}}
                <div x-data="{ openViz: false }">
                    <button @click="openViz = !openViz" :class="openViz ? 'bg-[#1D4ED8]' : ''"
                        class="w-full flex items-center justify-between pr-4 py-2 rounded-md text-sm text-white/90 hover:bg-[#3B82F6]">

                        <div class="flex items-center gap-3 pl-4">
                            <img src="/icons/Frame (1).svg" alt="" class="">
                            Visualisasi Data
                        </div>

                        <svg class="h-4 w-4 transition-transform" :class="openViz ? 'rotate-45' : ''" fill="none"
                            stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M9 5l7 7-7 7" />
                        </svg>
                    </button>

                    <div x-show="openViz" x-transition class="gap-3">
                        <a href="/visualisasi/grafik"
                            class="w-full pl-5.75 rounded-md flex items-center gap-4.5 py-2 text-sm text-[#BFDBFE] hover:bg-[#3B82F6]">
                            <span class="w-1 h-1 bg-[#BFDBFE] rounded-full"></span>
                            Progres Triwulan
                        </a>
                        <a href="/visualisasi/grafik"
                            class="w-full pl-5.75 rounded-md flex items-center gap-4.5 py-2 text-sm text-[#BFDBFE] hover:bg-[#3B82F6]">
                            <span class="w-1 h-1 bg-[#BFDBFE] rounded-full"></span>
                            Daftar Alokasi
                        </a>
                        <a href="/visualisasi/grafik"
                            class="w-full pl-5.75 rounded-md flex items-center gap-4.5 py-2 text-sm text-[#BFDBFE] hover:bg-[#3B82F6]">
                            <span class="w-1 h-1 bg-[#BFDBFE] rounded-full"></span>
                            Mapping Paket
                        </a>
                    </div>
                </div>

                {{-- REFERENSI --}}
                <div x-data="{ openViz: false }">
                    <button @click="openViz = !openViz" :class="openViz ? 'bg-[#1D4ED8]' : ''"
                        class="w-full flex items-center justify-between pr-4 py-2 rounded-md text-sm text-white/90 hover:bg-[#3B82F6]">

                        <div class="flex items-center gap-3 px-4">
                            <img src="/icons/file-search-line.svg" alt="" class="h-5">
                            Referensi
                        </div>

                        <svg class="h-4 w-4 transition-transform" :class="openViz ? 'rotate-45' : ''" fill="none"
                            stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M9 5l7 7-7 7" />
                        </svg>
                    </button>

                    <div x-show="openViz" x-transition class="gap-3">
                        <a href="/visualisasi/grafik"
                            class="w-full pl-5.75 rounded-md flex items-center gap-4.5 py-2 text-sm text-[#BFDBFE] hover:bg-[#3B82F6]">
                            <span class="w-1 h-1 bg-[#BFDBFE] rounded-full"></span>
                            Progres Triwulan
                        </a>
                        <a href="/visualisasi/grafik"
                            class="w-full pl-5.75 rounded-md flex items-center gap-4.5 py-2 text-sm text-[#BFDBFE] hover:bg-[#3B82F6]">
                            <span class="w-1 h-1 bg-[#BFDBFE] rounded-full"></span>
                            Daftar Alokasi
                        </a>
                        <a href="/visualisasi/grafik"
                            class="w-full pl-5.75 rounded-md flex items-center gap-4.5 py-2 text-sm text-[#BFDBFE] hover:bg-[#3B82F6]">
                            <span class="w-1 h-1 bg-[#BFDBFE] rounded-full"></span>
                            Mapping Paket
                        </a>
                    </div>
                </div>

                <span class="w-full block px-4 py-2 text-xs font-light text-[#93C5FD]">
                    PERENCANAAN
                </span>

                {{-- RPJMD --}}
                <a href="/dashboard"
                    class="flex w-full items-center gap-3 px-4 py-2 rounded-md text-sm text-white/90 hover:bg-[#3B82F6]">
                    <img src="/icons/government-line.svg" alt="" class="">
                    RPJMD
                </a>

                {{-- Program Prioritas --}}
                <div x-data="{ openViz: false }">
                    <button @click="openViz = !openViz" :class="openViz ? 'bg-[#1D4ED8]' : ''"
                        class="w-full flex items-center justify-between pr-4 py-2 rounded-md text-sm text-white/90 hover:bg-[#3B82F6]">

                        <div class="flex items-center gap-3 px-4">
                            <img src="/icons/bookmark-3-line.svg" alt="" class="">
                            Program Prioritas
                        </div>

                        <svg class="h-4 w-4 transition-transform" :class="openViz ? 'rotate-45' : ''" fill="none"
                            stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M9 5l7 7-7 7" />
                        </svg>
                    </button>

                    <div x-show="openViz" x-transition class="gap-3">
                        <a href="/visualisasi/grafik"
                            class="w-full pl-5.75 rounded-md flex items-center gap-4.5 py-2 text-sm text-[#BFDBFE] hover:bg-[#3B82F6]">
                            <span class="w-1 h-1 bg-[#BFDBFE] rounded-full"></span>
                            Prioritas Nasional
                        </a>
                        <a href="/visualisasi/grafik"
                            class="w-full pl-5.75 rounded-md flex items-center gap-4.5 py-2 text-sm text-[#BFDBFE] hover:bg-[#3B82F6]">
                            <span class="w-1 h-1 bg-[#BFDBFE] rounded-full"></span>
                            Prioritas Provinsi
                        </a>
                        <a href="/visualisasi/grafik"
                            class="w-full pl-5.75 rounded-md flex items-center gap-4.5 py-2 text-sm text-[#BFDBFE] hover:bg-[#3B82F6]">
                            <span class="w-1 h-1 bg-[#BFDBFE] rounded-full"></span>
                            Prioritas Daerah
                        </a>
                    </div>
                </div>

                {{-- RENSTRA --}}
                <a href="/dashboard"
                    class="flex w-full items-center gap-3 px-4 py-2 rounded-md text-sm text-white/90 hover:bg-[#3B82F6]">
                    <img src="/icons/bar-chart-2-line.svg" alt="" class="">
                    RENSTRA
                </a>

                {{-- DPA --}}
                <div x-data="{ openViz: false }">
                    <button @click="openViz = !openViz" :class="openViz ? 'bg-[#1D4ED8]' : ''"
                        class="w-full flex items-center justify-between pr-4 py-2 rounded-md text-sm text-white/90 hover:bg-[#3B82F6]">

                        <div class="flex items-center gap-3 px-4">
                            <img src="/icons/file-text-line.svg" alt="" class="">
                            DPA
                        </div>

                        <svg class="h-4 w-4 transition-transform" :class="openViz ? 'rotate-45' : ''" fill="none"
                            stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M9 5l7 7-7 7" />
                        </svg>
                    </button>

                    <div x-show="openViz" x-transition class="gap-3">
                        <a href="/visualisasi/grafik"
                            class="w-full pl-5.75 rounded-md flex items-center gap-4.5 py-2 text-sm text-[#BFDBFE] hover:bg-[#3B82F6]">
                            <span class="w-1 h-1 bg-[#BFDBFE] rounded-full"></span>
                            Sub Kegiatan
                        </a>
                        <a href="/visualisasi/grafik"
                            class="w-full pl-5.75 rounded-md flex items-center gap-4.5 py-2 text-sm text-[#BFDBFE] hover:bg-[#3B82F6]">
                            <span class="w-1 h-1 bg-[#BFDBFE] rounded-full"></span>
                            Paket
                        </a>
                    </div>
                </div>

                {{-- APBN --}}
                <a href="/dashboard"
                    class="flex w-full items-center gap-3 px-4 py-2 rounded-md text-sm text-white/90 hover:bg-[#3B82F6]">
                    <img src="/icons/wallet-2-line.svg" alt="" class="">
                    APBN
                </a>
            </div>
        </div>
    </nav>
</aside>
