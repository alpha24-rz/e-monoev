<?php $attributes ??= new \Illuminate\View\ComponentAttributeBag;

$__newAttributes = [];
$__propNames = \Illuminate\View\ComponentAttributeBag::extractPropNames(([
    'href' => '#',
    'label' => 'Submenu',
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
    'href' => '#',
    'label' => 'Submenu',
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
        'flex items-center px-3 py-2 rounded text-sm transition-colors group',
        'text-white/90 hover:bg-[#3B82F6]' => true,
        'justify-center' => $collapsed,
    ]); ?>"
   title="<?php echo e($collapsed ? $label : ''); ?>">
    
    <!-- Dot indicator -->
    <?php if(!$collapsed): ?>
        <span class="w-1.5 h-1.5 bg-blue-300 rounded-full mr-3"></span>
        <span><?php echo e($label); ?></span>
    <?php else: ?>
        <span class="w-2 h-2 bg-blue-300 rounded-full"></span>
        
        <!-- Tooltip untuk mode collapsed -->
        <div class="absolute left-full ml-2 px-2 py-1 bg-gray-900 text-white text-sm rounded opacity-0 
                    invisible group-hover:opacity-100 group-hover:visible transition-all duration-200 
                    whitespace-nowrap z-50">
            <?php echo e($label); ?>

        </div>
    <?php endif; ?>
</a><?php /**PATH C:\Users\alfak\Herd\emonev\resources\views/components/sidebar/menu-subitem.blade.php ENDPATH**/ ?>