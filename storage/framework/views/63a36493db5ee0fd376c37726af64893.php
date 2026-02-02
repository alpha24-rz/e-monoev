<?php $attributes ??= new \Illuminate\View\ComponentAttributeBag;

$__newAttributes = [];
$__propNames = \Illuminate\View\ComponentAttributeBag::extractPropNames(([
    'icon' => '',
    'href' => '#',
    'label' => 'Menu',
    'active' => false,
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
    'href' => '#',
    'label' => 'Menu',
    'active' => false,
    'collapsed' => false,
]), 'is_string', ARRAY_FILTER_USE_KEY) as $__key => $__value) {
    $$__key = $$__key ?? $__value;
}

$__defined_vars = get_defined_vars();

foreach ($attributes->all() as $__key => $__value) {
    if (array_key_exists($__key, $__defined_vars)) unset($$__key);
}

unset($__defined_vars, $__key, $__value); ?>

<a href="<?php echo e($href); ?>" 
   class="<?php echo \Illuminate\Support\Arr::toCssClasses([
        'flex items-center px-3 py-2 rounded-lg transition-colors group',
        'bg-[#1D4ED8] text-white' => $active,
        'text-white/90 hover:bg-[#3B82F6]' => !$active,
        'justify-center' => $collapsed,
    ]); ?>"
   title="<?php echo e($collapsed ? $label : ''); ?>">
    
    <!-- Icon -->
    <img src="<?php echo e($icon); ?>" alt="<?php echo e($label); ?>" class="w-5 h-5 flex-shrink-0">
    
    <!-- Label (hidden saat collapsed) -->
    <?php if(!$collapsed): ?>
        <span class="ml-3 font-medium text-sm transition-all duration-300 opacity-100">
            <?php echo e($label); ?>

        </span>
    <?php endif; ?>
    
    <!-- Tooltip untuk mode collapsed -->
    <?php if($collapsed): ?>
        <div class="absolute left-full ml-2 px-2 py-1 bg-gray-900 text-white text-sm rounded opacity-0 
                    invisible group-hover:opacity-100 group-hover:visible transition-all duration-200 
                    whitespace-nowrap z-50">
            <?php echo e($label); ?>

        </div>
    <?php endif; ?>
</a><?php /**PATH C:\Users\alfak\Herd\emonev\resources\views/components/sidebar/menu-item.blade.php ENDPATH**/ ?>