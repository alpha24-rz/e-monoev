<div class="bg-white border-b">
    <div class="flex items-center justify-between w-full px-6 py-4">

        <!-- LEFT : Logo & Title -->
        <div class="flex items-center gap-3">
            <img
                src="/logo/Icon.svg"
                alt="Logo"
                class="h-10 w-auto object-contain"
            >

            <div class="text-sm text-gray-700 font-inter font-semibold leading-tight">
                <p>KABUPATEN</p>
                <p>AFILA MEDIA KARYA</p>
            </div>
        </div>

        <!-- RIGHT : Tahun Penganggaran -->
        <div
            x-data="{ year: 2024 }"
            class="flex items-center gap-3"
        >
            <span class="text-sm text-gray-600">
                Tahun Penganggaran
            </span>

            <el-dropdown class="inline-block">
                <button
                    class="inline-flex items-center gap-2 rounded-md bg-[#7676801F] px-4 py-2 text-sm font-semibold text-gray-700 hover:bg-gray-200 transition"
                >
                    <span x-text="year"></span>
                    <svg
                        class="h-4 w-4 text-gray-500"
                        viewBox="0 0 20 20"
                        fill="currentColor"
                    >
                        <path
                            d="M5.22 8.22a.75.75 0 0 1 1.06 0L10 11.94l3.72-3.72a.75.75 0 1 1 1.06 1.06l-4.25 4.25a.75.75 0 0 1-1.06 0L5.22 9.28a.75.75 0 0 1 0-1.06Z"
                        />
                    </svg>
                </button>

                <el-menu
                    anchor="bottom end"
                    popover
                    class="w-28 rounded-md bg-white shadow-lg border"
                >
                    <template x-for="y in [2022, 2023, 2024, 2025]" :key="y">
                        <button
                            @click.outside="open = false"
                            class="block w-full px-4 py-2 text-left text-sm hover:bg-gray-100 transition"
                            x-text="y"
                        >Contents...</button>
                    </template>
                </el-menu>
            </el-dropdown>
        </div>

    </div>
</div>
