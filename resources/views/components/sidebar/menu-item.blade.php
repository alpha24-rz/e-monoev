@props([
    'icon' => '',
    'href' => '#',
    'label' => 'Menu',
    'active' => false,
    'collapsed' => false,
])

<a href="{{ $href }}" 
   @class([
        'flex items-center px-3 py-2 rounded-lg transition-colors group',
        'bg-[#1D4ED8] text-white' => $active,
        'text-white/90 hover:bg-[#3B82F6]' => !$active,
        'justify-center' => $collapsed,
    ])
   title="{{ $collapsed ? $label : '' }}">
    
    <!-- Icon -->
    <img src="{{ $icon }}" alt="{{ $label }}" class="w-5 h-5 flex-shrink-0">
    
    <!-- Label (hidden saat collapsed) -->
    @if(!$collapsed)
        <span class="ml-3 font-medium text-sm transition-all duration-300 opacity-100">
            {{ $label }}
        </span>
    @endif
    
    <!-- Tooltip untuk mode collapsed -->
    @if($collapsed)
        <div class="absolute left-full ml-2 px-2 py-1 bg-gray-900 text-white text-sm rounded opacity-0 
                    invisible group-hover:opacity-100 group-hover:visible transition-all duration-200 
                    whitespace-nowrap z-50">
            {{ $label }}
        </div>
    @endif
</a>