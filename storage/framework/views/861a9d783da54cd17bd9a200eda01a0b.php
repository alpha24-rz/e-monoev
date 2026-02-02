<?php $attributes ??= new \Illuminate\View\ComponentAttributeBag;

$__newAttributes = [];
$__propNames = \Illuminate\View\ComponentAttributeBag::extractPropNames(([
    'icon' => '',
    'label' => 'Menu',
    'collapsed' => false,
]));

foreach ($attributes->all() as $__key => $__value) {
    if (in_array($__key, $__propNames)) {
        $$__key = $$__key ?? $__value;
    } else {
        $__newAttributes[$__key] = $__value;
    }
}

$attributes = new \Illuminate\View\ComponentAttributeBag($__newAttributes);

unset($__propNames);
unset($__newAttributes);

foreach (array_filter(([
    'icon' => '',
    'label' => 'Menu',
    'collapsed' => false,
]), 'is_string', ARRAY_FILTER_USE_KEY) as $__key => $__value) {
    $$__key = $$__key ?? $__value;
}

$__defined_vars = get_defined_vars();

foreach ($attributes->all() as $__key => $__value) {
    if (array_key_exists($__key, $__defined_vars)) unset($$__key);
}

unset($__defined_vars, $__key, $__value); ?>

<div x-data="{ open: false }" class="relative">
    
    <!-- Dropdown Trigger -->
    <button @click="open = !open"
            class="<?php echo \Illuminate\Support\Arr::toCssClasses([
                'flex items-center w-full px-3 py-2 rounded-lg transition-colors group',
                'justify-center' => $collapsed,
                'hover:bg-[#3B82F6]' => true,
            ]); ?>"
            title="<?php echo e($collapsed ? $label : ''); ?>">
        
        <!-- Icon -->
        <img src="<?php echo e($icon); ?>" alt="<?php echo e($label); ?>" class="w-5 h-5 flex-shrink-0">
        
        <!-- Label (hidden saat collapsed) -->
        <?php if(!$collapsed): ?>
            <span class="ml-3 font-medium text-sm flex-1 text-left">
                <?php echo e($label); ?>

            </span>
            
            <!-- Arrow -->
            <svg :class="open ? 'rotate-90' : ''" 
                 class="w-4 h-4 text-white/70 transition-transform duration-200" 
                 fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
            </svg>
        <?php endif; ?>
        
        <!-- Tooltip untuk mode collapsed -->
        <?php if($collapsed): ?>
            <div class="absolute left-full ml-2 px-2 py-1 bg-gray-900 text-white text-sm rounded opacity-0 
                        invisible group-hover:opacity-100 group-hover:visible transition-all duration-200 
                        whitespace-nowrap z-50">
                <?php echo e($label); ?>

            </div>
        <?php endif; ?>
    </button>
    
    <!-- Dropdown Content -->
    <div x-show="open" x-transition 
         class="<?php echo \Illuminate\Support\Arr::toCssClasses([
            'space-y-1 mt-1',
            'pl-0' => $collapsed,
            'pl-10' => !$collapsed,
         ]); ?>"
         <?php if($collapsed): ?>
            style="position: fixed; left: 80px;"
         <?php endif; ?>>
        
        <?php echo e($slot); ?>

        
    </div>
</div><?php /**PATH C:\Users\alfak\Herd\emonev\resources\views/components/sidebar/menu-dropdown.blade.php ENDPATH**/ ?>