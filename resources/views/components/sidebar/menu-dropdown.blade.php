@props([
    'icon' => '',
    'label' => 'Menu',
    'collapsed' => false,
])

<div x-data="{ open: false }" class="relative">
    
    <!-- Dropdown Trigger -->
    <button @click="open = !open"
            @class([
                'flex items-center w-full px-3 py-2 rounded-lg transition-colors group',
                'justify-center' => $collapsed,
                'hover:bg-[#3B82F6]' => true,
            ])
            title="{{ $collapsed ? $label : '' }}">
        
        <!-- Icon -->
        <img src="{{ $icon }}" alt="{{ $label }}" class="w-5 h-5 flex-shrink-0">
        
        <!-- Label (hidden saat collapsed) -->
        @if(!$collapsed)
            <span class="ml-3 font-medium text-sm flex-1 text-left">
                {{ $label }}
            </span>
            
            <!-- Arrow -->
            <svg :class="open ? 'rotate-90' : ''" 
                 class="w-4 h-4 text-white/70 transition-transform duration-200" 
                 fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
            </svg>
        @endif
        
        <!-- Tooltip untuk mode collapsed -->
        @if($collapsed)
            <div class="absolute left-full ml-2 px-2 py-1 bg-gray-900 text-white text-sm rounded opacity-0 
                        invisible group-hover:opacity-100 group-hover:visible transition-all duration-200 
                        whitespace-nowrap z-50">
                {{ $label }}
            </div>
        @endif
    </button>
    
    <!-- Dropdown Content -->
    <div x-show="open" x-transition 
         @class([
            'space-y-1 mt-1',
            'pl-0' => $collapsed,
            'pl-10' => !$collapsed,
         ])
         @if($collapsed)
            style="position: fixed; left: 80px;"
         @endif>
        
        {{ $slot }}
        
    </div>
</div>