<aside class="w-64 min-h-screen bg-[#2563EB] border-r shadow-sm">
    
    <div class="flex px-6 py-8 border-b border-blue-400 gap-2">
        <img src="/icons/Logo E-Monev.svg" alt="" class="h-[44px]">
        <div>
            <h1 class="text-xl font-bold text-white">
                monev
            </h1>
            <p class="text-xs text-[#93C5FD]">Versi 3.1</p>
        </div>
    </div>

    
    <nav class="px-4 py-6 space-y-2">

        
        <div x-data="{ open: false }" class="space-y-2">

            <!-- Header -->
            <button
                @click="open = !open"
                class="w-full flex items-center justify-between bg-[#1D4ED8] px-4 py-2 rounded-lg">

                <div class="flex items-center gap-3">
                    <img src="/icons/bank-fill.svg" alt="">
                    <span class="text-white font-medium">Super Admin</span>
                </div>

                <!-- Arrow -->
                <svg
                    class="w-4 h-4 text-white transition-transform duration-200"
                    :class="open ? 'rotate-90' : ''"
                    fill="none"
                    stroke="currentColor"
                    stroke-width="2"
                    viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round"
                        d="M9 5l7 7-7 7" />
                </svg>
            </button>

            <!-- Dropdown Menu -->
            <div
                x-show="open"
                x-transition
                class="flex flex-col gap-1">

                <a href="/"
                    class="flex gap-2 px-3 py-2 rounded-md text-sm text-white/90 hover:bg-blue-700">
                    <img src="/icons/dashboard-fill.svg" alt="">
                    Dashboard
                </a>

                <a href="#"
                    class="px-3 py-2 rounded-md text-sm text-white/90 hover:bg-blue-700">
                    👥 Manajemen User
                </a>

                <a href="#"
                    class="px-3 py-2 rounded-md text-sm text-white/90 hover:bg-blue-700">
                    📑 Laporan
                </a>
            </div>
        </div>

        
        <a href="/"
            class="flex items-center gap-3 px-4 py-2 rounded-lg text-white/90 hover:bg-blue-700">
            <span>🧩</span>
            <span>Pilih Layanan</span>
        </a>

        
        <hr class="my-4 border-blue-400">

        
        <form method="POST" action="<?php echo e(route('logout')); ?>">
            <?php echo csrf_field(); ?>
            <button type="submit"
                class="w-full flex items-center gap-3 px-4 py-2 rounded-lg
                text-red-200 hover:bg-red-500/20 transition">
                <span>🚪</span>
                <span>Logout</span>
            </button>
        </form>

    </nav>
</aside>
<?php /**PATH C:\Users\alfak\Herd\emonev\resources\views/components/sidebar.blade.php ENDPATH**/ ?>