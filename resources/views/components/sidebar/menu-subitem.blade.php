@props([
    'href' => '#',
    'label' => 'Submenu',
    'collapsed' => false,
])

<a href="{{ $href }}" 
   @class([
        'flex items-center px-3 py-2 rounded text-sm transition-colors group',
        'text-white/90 hover:bg-[#3B82F6]' => true,
        'justify-center' => $collapsed,
    ])
   title="{{ $collapsed ? $label : '' }}">
    
    <!-- Dot indicator -->
    @if(!$collapsed)
        <span class="w-1.5 h-1.5 bg-blue-300 rounded-full mr-3"></span>
        <span>{{ $label }}</span>
    @else
        <span class="w-2 h-2 bg-blue-300 rounded-full"></span>
        
        <!-- Tooltip untuk mode collapsed -->
        <div class="absolute left-full ml-2 px-2 py-1 bg-gray-900 text-white text-sm rounded opacity-0 
                    invisible group-hover:opacity-100 group-hover:visible transition-all duration-200 
                    whitespace-nowrap z-50">
            {{ $label }}
        </div>
    @endif
</a>