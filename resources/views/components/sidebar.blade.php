@props(['collapsed' => false])

<aside x-data="{
    ...sidebar({{ $collapsed ? 'true' : 'false' }}),
    openMenuId: null
}" :class="collapsed ? 'w-20' : 'w-64'"
    class="fixed inset-y-0 left-0 z-50 min-h-screen bg-[#2563EB] shadow-xl overflow-hidden">


    {{-- BRAND --}}
    <div class="relative flex items-center justify-between px-4 py-5 border-b border-blue-400/50">

        <div class="relative h-8 w-full overflow-hidden">
            <div class="flex items-center gap-3 transition-all duration-300"
                :style="collapsed ? 'transform: translateX(-8px)' : ''">
                <img src="/logo/emonev.svg" class="h-8 transition-all duration-300"
                    :class="collapsed ? 'opacity-0 scale-95' : 'opacity-100'">
                <img src="/logo/Icon.svg" class="h-5 absolute left-3.5 transition-all duration-300"
                    :class="collapsed ? 'opacity-100' : 'opacity-0'">
            </div>
        </div>

        {{-- TOGGLE --}}
        <button @click="toggle()"
            class="absolute top-4 -right-3 bg-white text-blue-700 p-2 rounded-lg
                   shadow hover:scale-105 transition">
            <svg class="w-4 h-4 transition-transform" :class="collapsed && 'rotate-180'" fill="none"
                stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-width="2" stroke-linecap="round" stroke-linejoin="round" d="M15 19l-7-7 7-7" />
            </svg>
        </button>
    </div>

    {{-- MENU --}}
    <nav class="px-4 py-4 text-sm text-white space-y-1 overflow-y-auto h-[calc(100vh-96px)] sidebar-scrollbar">

        {{-- SUPER ADMIN --}}
        <template x-for="item in menus.superAdmin" :key="item.id">
            <div class="relative">

                <!-- MENU BUTTON -->
                <component :is="item.children ? 'button' : 'a'" :href="!item.children ? item.href : null"
                    @click= " item.children ? openMenuId = openMenuId === item.id ? null : item.id : null"
                    class="group flex items-center gap-3 w-full px-3 py-2.5 rounded-lg
                           hover:bg-[#1D4ED8]">

                    <!-- ICON -->
                    <img :src="item.icon" class="w-5 h-5 shrink-0">

                    <!-- LABEL -->
                    <span class="flex-1 whitespace-nowrap overflow-hidden transition-all duration-300"
                        :class="collapsed ? 'opacity-0 w-0' : 'opacity-100 w-auto'" x-text="item.label"></span>

                    <!-- ARROW -->
                    <!-- ARROW -->
                    <template x-if="item.children">
                        <svg class="w-4 h-4 transition-transform duration-300"
                            :class="openMenuId === item.id && !collapsed ? 'rotate-90' : ''" fill="none"
                            stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-width="2" stroke-linecap="round" stroke-linejoin="round" d="M9 5l7 7-7 7" />
                        </svg>
                    </template>


                    <!-- TOOLTIP -->
                    <div x-show="collapsed"
                        class="absolute left-full ml-3 px-2 py-1 text-xs rounded
                               bg-gray-900 opacity-0 group-hover:opacity-100
                               pointer-events-none"
                        x-text="item.label"></div>

                </component>

                <!-- SUB MENU -->
                <div x-show="item.children && openMenuId === item.id && !collapsed" x-collapse
                    x-transition:enter="transition ease-out duration-300"
                    x-transition:enter-start="opacity-0 -translate-y-1"
                    x-transition:enter-end="opacity-100 translate-y-0"
                    x-transition:leave="transition ease-in duration-200"
                    x-transition:leave-start="opacity-100 translate-y-0"
                    x-transition:leave-end="opacity-0 -translate-y-1" class="ml-2 mt-1 space-y-1 overflow-hidden">
                    <template x-for="child in item.children" :key="child.id">
                        <a :href="child.href"
                            class="flex items-center gap-4.5 px-3 py-2 rounded-md
                   text-white/90 hover:bg-[#3B82F6]/80
                   transition-colors duration-200">
                            <!-- DOT -->
                            <span class="w-1.5 h-1.5 bg-[#378bf2] rounded-full shrink-0"></span>

                            <!-- LABEL -->
                            <span x-text="child.label"></span>
                        </a>
                    </template>
                </div>



            </div>
        </template>

        {{-- DIVIDER --}}
        <div class="h-px bg-blue-400/30 my-3"></div>

        {{-- PERENCANAAN --}}
        <template x-for="item in menus.perencanaan" :key="item.id">
            <a :href="item.href"
                class="group relative flex items-center gap-3 px-3 py-2.5 rounded-lg
                       hover:bg-[#1D4ED8] transition">
                <img :src="item.icon" class="w-5 h-5 shrink-0">

                <span class="whitespace-nowrap overflow-hidden transition-all duration-300"
                    :class="collapsed ? 'opacity-0 w-0' : 'opacity-100'" x-text="item.label"></span>

                <div x-show="collapsed"
                    class="absolute left-full ml-3 px-2 py-1 text-xs rounded
                           bg-gray-900 opacity-0 group-hover:opacity-100
                           pointer-events-none"
                    x-text="item.label"></div>
            </a>
        </template>

    </nav>
</aside>
