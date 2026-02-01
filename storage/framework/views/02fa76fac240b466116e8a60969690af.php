<div class="bg-white border-b">

     <!-- Countdown Banner -->
    <?php if(!request()->routeIs('dashboard')): ?> 
        <?php if (isset($component)) { $__componentOriginalf892f157735addcd406070a31e25e40f = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginalf892f157735addcd406070a31e25e40f = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.countdown-banner','data' => ['deadline' => '2024-03-31 23:59:59','title' => 'Realisasi Triwulan I','show' => true]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('countdown-banner'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['deadline' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute('2024-03-31 23:59:59'),'title' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute('Realisasi Triwulan I'),'show' => true]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginalf892f157735addcd406070a31e25e40f)): ?>
<?php $attributes = $__attributesOriginalf892f157735addcd406070a31e25e40f; ?>
<?php unset($__attributesOriginalf892f157735addcd406070a31e25e40f); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalf892f157735addcd406070a31e25e40f)): ?>
<?php $component = $__componentOriginalf892f157735addcd406070a31e25e40f; ?>
<?php unset($__componentOriginalf892f157735addcd406070a31e25e40f); ?>
<?php endif; ?>
    <?php endif; ?>

    <div class="flex items-center justify-between w-full px-6 py-4">

        <!-- LEFT : Logo & Title -->
        <div class="flex items-center gap-3">
            <img src="/logo/Icon.svg" alt="Logo" class="h-10 w-auto object-contain">
            <div class="text-sm text-gray-700 font-inter font-semibold leading-tight">
                <p>KABUPATEN</p>
                <p>AFILA MEDIA KARYA</p>
            </div>
        </div>

        <!-- RIGHT : Tahun Penganggaran -->
        <div x-data="{
            year: 2024,
            isOpen: false
        }" class="flex items-center relative">

            <div dir="ltr" class="relative inline-block px-4 py-2 items-center bg-[#7676801F] rounded-s-lg">
                <span class="text-sm text-[#3C3C43BF]">
                    Tahun Penganggaran
                </span>

            </div>


            <!-- Dropdown Container -->
            <div class="relative inline-block  ">
                <!-- Dropdown Button -->
                <button @click="isOpen = !isOpen" @keydown.escape="isOpen = false"
                    class="inline-flex items-center gap-2 bg-white border-[#3C3C4340] border-2 rounded-e-lg  px-4 py-2 text-sm font-semibold text-gray-700 transition"
                    :aria-expanded="isOpen">
                    <span x-text="year"></span>
                    <svg class="h-4 w-4 text-gray-500 transition-transform" :class="{ 'rotate-180': isOpen }"
                        viewBox="0 0 20 20" fill="currentColor">
                        <path
                            d="M5.22 8.22a.75.75 0 0 1 1.06 0L10 11.94l3.72-3.72a.75.75 0 1 1 1.06 1.06l-4.25 4.25a.75.75 0 0 1-1.06 0L5.22 9.28a.75.75 0 0 1 0-1.06Z" />
                    </svg>
                </button>

                <!-- Dropdown Menu -->
                <div x-show="isOpen" x-cloak @click.outside="isOpen = false"
                    x-transition:enter="transition ease-out duration-100" x-transition:enter-start="opacity-0 scale-95"
                    x-transition:enter-end="opacity-100 scale-100" x-transition:leave="transition ease-in duration-75"
                    x-transition:leave-start="opacity-100 scale-100" x-transition:leave-end="opacity-0 scale-95"
                    class="absolute left-0 z-50 mt-1 w-23 origin-top-right rounded-md bg-white shadow-lg ring-1 ring-black ring-opacity-5 focus:outline-none">
                    <div class="py-1">
                        <template x-for="y in [2022, 2023, 2024, 2025, 2026]" :key="y">
                            <button @click="year = y; isOpen = false"
                                class="block w-full px-4 py-2 text-left text-sm text-gray-700 hover:bg-gray-100 hover:text-gray-900 transition"
                                :class="{ 'bg-blue-50 text-blue-600 font-medium': y === year }" x-text="y"></button>
                        </template>
                    </div>
                </div>
            </div>

            <div class="flex relative px-2 ">
                <button class="p-2 hover:bg-[#7676801F] rounded-md">
                    <img src="/icons/search-line.svg" alt="">
                </button>
                <button class="p-2 hover:bg-[#7676801F] rounded-md">
                    <img src="/icons/function-line.svg" alt="" class="">
                </button>
                <button class="p-2 hover:bg-[#7676801F] rounded-md">
                    <img src="/icons/sun-line.svg" alt="" class="">
                </button>
            </div>

        </div>

    </div>
</div>
<?php /**PATH C:\Users\alfak\Herd\emonev\resources\views/components/navbar.blade.php ENDPATH**/ ?>