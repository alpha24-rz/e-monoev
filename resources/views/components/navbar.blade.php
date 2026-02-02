@props(['collapsed' => false])

<div class="bg-white border-b">

    {{-- Countdown Banner --}}
    <x-countdown-banner
        deadline="2024-12-31 23:59:59"
        title="Realisasi / Realisasi Triwulan I"
        :show="true"
        :scheduleInfo="[
            'Triwulan I',
            'Triwulan II',
            'Laporan Tahunan'
        ]"
    />

    <div class="flex items-center justify-between w-full px-6 py-4">

        <!-- LEFT : Toggle + Logo -->
        <div class="flex items-center gap-4">

            {{-- Toggle Sidebar --}}
            <button
                @click="$dispatch('sidebar-toggled', { collapsed: !collapsed })"
                class="p-2 rounded-md hover:bg-gray-100 transition"
                aria-label="Toggle Sidebar"
            >
                <svg xmlns="http://www.w3.org/2000/svg"
                    class="w-6 h-6 text-gray-700"
                    fill="none"
                    viewBox="0 0 24 24"
                    stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M4 6h16M4 12h16M4 18h16" />
                </svg>
            </button>

            {{-- Logo & Title --}}
            <div class="flex items-center gap-3">
                <img src="/logo/Icon.svg" alt="Logo" class="h-10 w-auto object-contain">
                <div class="text-sm text-gray-700 font-semibold leading-tight">
                    <p>KABUPATEN</p>
                    <p>AFILA MEDIA KARYA</p>
                </div>
            </div>
        </div>

        <!-- RIGHT : Tahun Penganggaran + Actions -->
        <div
            x-data="{ year: 2024, isOpen: false }"
            class="flex items-center gap-4 relative"
        >

            <!-- Label -->
            <div class="px-4 py-2 bg-[#7676801F] rounded-s-lg">
                <span class="text-sm text-[#3C3C43BF]">
                    Tahun Penganggaran
                </span>
            </div>

            <!-- Dropdown -->
            <div class="relative">
                <button
                    @click="isOpen = !isOpen"
                    @keydown.escape="isOpen = false"
                    class="inline-flex items-center gap-2 bg-white border-2 border-[#3C3C4340]
                           rounded-e-lg px-4 py-2 text-sm font-semibold text-gray-700"
                >
                    <span x-text="year"></span>
                    <svg class="h-4 w-4 transition-transform"
                        :class="{ 'rotate-180': isOpen }"
                        viewBox="0 0 20 20"
                        fill="currentColor">
                        <path
                            d="M5.22 8.22a.75.75 0 0 1 1.06 0L10 11.94l3.72-3.72a.75.75 0 1 1 1.06 1.06l-4.25 4.25a.75.75 0 0 1-1.06 0L5.22 9.28a.75.75 0 0 1 0-1.06Z" />
                    </svg>
                </button>

                <!-- Menu -->
                <div
                    x-show="isOpen"
                    x-cloak
                    @click.outside="isOpen = false"
                    x-transition
                    class="absolute left-0 z-50 mt-1 w-28 rounded-md bg-white shadow-lg ring-1 ring-black ring-opacity-5"
                >
                    <template x-for="y in [2022, 2023, 2024, 2025, 2026]" :key="y">
                        <button
                            @click="year = y; isOpen = false"
                            class="block w-full px-4 py-2 text-left text-sm hover:bg-gray-100"
                            :class="{
                                'bg-blue-50 text-blue-600 font-semibold': y === year
                            }"
                            x-text="y"
                        ></button>
                    </template>
                </div>
            </div>

            <!-- Icons -->
            <div class="flex items-center gap-1">
                <button class="p-2 rounded-md hover:bg-[#7676801F]">
                    <img src="/icons/search-line.svg" alt="">
                </button>
                <button class="p-2 rounded-md hover:bg-[#7676801F]">
                    <img src="/icons/function-line.svg" alt="">
                </button>
                <button class="p-2 rounded-md hover:bg-[#7676801F]">
                    <img src="/icons/sun-line.svg" alt="">
                </button>
            </div>

        </div>
    </div>
</div>
