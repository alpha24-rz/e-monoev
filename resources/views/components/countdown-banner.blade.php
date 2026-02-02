@props([
    'deadline' => 'March 31, 2024 23:59:59',
    'title' => 'Realisasi / Realisasi Triwulan I',
    'show' => true,
    'scheduleInfo' => [
        'Jadwal Penginputan Realisasi Triwulan I',
        'Jadwal Penginputan Realisasi Triwulan II',
        'Jadwal Penginputan Realisasi Tahunan',
    ],
])

<div id="countdownBanner-{{ $uniqueId = uniqid() }}"
    class="countdown-banner bg-[#1E3A8A] items-center py-2 w-full font-inter gap-3 relative" 
    data-deadline="{{ $deadline }}"
    data-title="{{ $title }}" 
    data-show="{{ $show ? 'true' : 'false' }}"
    data-schedule-info="{{ json_encode($scheduleInfo) }}">

    <div class="flex items-center justify-center w-full px-4 md:px-6 py-1">
        <!-- Navigation dots vertikal di kiri -->
        <div class="schedule-dots-vertical hidden md:flex flex-col items-center justify-center gap-2 mr-4 md:mr-6">
            @foreach ($scheduleInfo as $index => $info)
                <button class="schedule-dot-vertical w-2 h-2 rounded-full bg-blue-300/30 transition-all duration-300 {{ $index === 0 ? 'bg-blue-300 h-2' : '' }}"
                        data-index="{{ $index }}" 
                        title="{{ $info }}">
                </button>
            @endforeach
        </div>

        <div class="flex justify-center items-center gap-1 md:gap-6 w-full">
            <div class="flex justify-center items-center  gap-10">

                <!-- Informasi Jadwal (SLIDER VERTIKAL) -->
                <div class="text-center md:text-center w-full md:w-auto order-1 relative overflow-hidden">
                    <h3 class="text-xs font-medium pt-2 text-[#EBEBF5BF] uppercase tracking-wider">
                        Informasi Jadwal
                    </h3>

                    <!-- Container untuk slider vertikal -->
                    <div id="scheduleSlider-{{ $uniqueId }}"
                        class="schedule-slider-vertical h-9 overflow-hidden relative">

                        <!-- Slider items vertikal -->
                        <div class="schedule-items-vertical transition-transform duration-500 ease-in-out">
                            @foreach ($scheduleInfo as $index => $info)
                                <div class="schedule-item-vertical absolute w-full text-base md:text-lg font-medium text-white leading-tight md:whitespace-nowrap transition-opacity duration-500"
                                    data-index="{{ $index }}"
                                    style="transform: translateY({{ $index * 100 }}%); opacity: {{ $index === 0 ? '1' : '0' }};">
                                    {{ $info }}
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>

                <!-- Hitung Mundur -->
                <div class="w-full md:w-auto flex-1 min-w-0 order-3 md:order-2">
                    <div class="flex justify-center gap-2">
                        <!-- Hari -->
                        <div class="text-center">
                            <div class="px-2 md:px-3 min-w-10 md:min-w-12.5">
                                <span id="days-{{ $uniqueId }}" class="text-[24px] font-bold text-white">00</span>
                            </div>
                            <span class="text-xs text-blue-200">Hari</span>
                        </div>

                        <!-- Jam -->
                        <div class="text-center">
                            <div class="px-2 md:px-3 min-w-10 md:min-w-12.5">
                                <span id="hours-{{ $uniqueId }}" class="text-[24px] font-bold text-white">00</span>
                            </div>
                            <span class="text-xs text-blue-200">Jam</span>
                        </div>

                        <!-- Menit -->
                        <div class="text-center">
                            <div class="px-2 md:px-3 min-w-10 md:min-w-12.5">
                                <span id="minutes-{{ $uniqueId }}" class="text-[24px] font-bold text-white">00</span>
                            </div>
                            <span class="text-xs text-blue-200">Menit</span>
                        </div>

                        <!-- Detik -->
                        <div class="text-center">
                            <div class="px-2 md:px-3 min-w-10 md:min-w-12.5">
                                <span id="seconds-{{ $uniqueId }}" class="text-[24px] font-bold text-white">00</span>
                            </div>
                            <span class="text-xs text-blue-200">Detik</span>
                        </div>
                    </div>
                </div>

                <!-- Tombol Aksi -->
                <div class="w-full md:w-auto shrink-0 order-2 md:order-3 flex items-center gap-2">
                    <button id="inputBtn-{{ $uniqueId }}"
                        class="w-full md:w-auto text-white bg-blue-500 hover:bg-blue-400 font-medium py-2 px-4 md:px-6 rounded-full transition text-sm flex items-center justify-center gap-2">
                        <img src="/icons/edit-2-line.svg" alt="Edit" class="w-4 h-4">
                        <span class="text-sm font-inter text-white">Input Sekarang</span>
                    </button>
                </div>

                <!-- Tombol Close di Pojok Kanan -->
                <button id="closeBtn-{{ $uniqueId }}"
                    class="absolute right-4 text-blue-200 hover:text-white p-1 rounded-full hover:bg-blue-700/30 transition"
                    title="Sembunyikan banner">
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                    </svg>
                </button>

            </div>
        </div>
    </div>
</div>

<style>
    /* Animasi untuk schedule slider vertikal */
    .schedule-slider-vertical {
        perspective: 1000px;
    }

    .schedule-item-vertical {
        backface-visibility: hidden;
        transform-style: preserve-3d;
    }

    /* Animation untuk slide vertical */
    @keyframes slideDown {
        0% {
            transform: translateY(-100%);
            opacity: 0;
        }
        20% {
            transform: translateY(0);
            opacity: 1;
        }
        80% {
            transform: translateY(0);
            opacity: 1;
        }
        100% {
            transform: translateY(100%);
            opacity: 0;
        }
    }

    /* Dots vertikal styling */
    .schedule-dots-vertical .schedule-dot-vertical {
        transition: all 0.3s ease;
    }

    .schedule-dots-vertical .schedule-dot-vertical:hover {
        background-color: rgba(147, 197, 253, 0.7);
        transform: scale(1.5);
    }

    /* Untuk mobile, sembunyikan dots vertikal */
    @media (max-width: 768px) {
        .schedule-dots-vertical {
            display: none !important;
        }
        
        /* Tampilkan dots horizontal di mobile */
        .schedule-dots-horizontal {
            display: flex;
            position: absolute;
            bottom: -20px;
            left: 50%;
            transform: translateX(-50%);
            gap: 6px;
        }
        
        .schedule-dot-horizontal {
            width: 8px;
            height: 8px;
            border-radius: 50%;
            background-color: rgba(96, 165, 250, 0.3);
            transition: all 0.3s ease;
        }
        
        .schedule-dot-horizontal.active {
            background-color: rgba(96, 165, 250, 1);
            width: 24px;
            border-radius: 4px;
        }
    }
</style>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        initializeCountdownBanner('{{ $uniqueId }}');
        initializeVerticalScheduleSlider('{{ $uniqueId }}');
    });

    function initializeVerticalScheduleSlider(bannerId) {
        const banner = document.getElementById(`countdownBanner-${bannerId}`);
        if (!banner) return;

        const scheduleInfo = JSON.parse(banner.dataset.scheduleInfo || '[]');
        if (scheduleInfo.length <= 1) return;

        const sliderContainer = document.getElementById(`scheduleSlider-${bannerId}`);
        const scheduleItems = sliderContainer.querySelectorAll('.schedule-item-vertical');
        const scheduleDots = document.querySelectorAll(`#countdownBanner-${bannerId} .schedule-dot-vertical`);
        const itemsContainer = sliderContainer.querySelector('.schedule-items-vertical');

        let currentIndex = 0;
        let intervalId = null;
        const intervalTime = 5000; // 5 detik

        // Function untuk menampilkan item tertentu dengan animasi vertikal
        function showScheduleItem(index) {
            // Update current index
            currentIndex = index;

            // Update posisi semua items (animasi vertical slide)
            scheduleItems.forEach((item, i) => {
                const itemIndex = parseInt(item.dataset.index);
                const offset = (i - currentIndex) * 100;

                item.style.transform = `translateY(${offset}%)`;
                item.style.opacity = i === currentIndex ? '1' : '0';
                item.style.zIndex = i === currentIndex ? '10' : '1';

                // Tambah animation class untuk active item
                if (i === currentIndex) {
                    item.classList.add('animate-[slideDown_5s_ease-in-out]');
                    setTimeout(() => {
                        item.classList.remove('animate-[slideDown_5s_ease-in-out]');
                    }, 5000);
                }
            });

            // Update dots vertikal
            scheduleDots.forEach((dot, i) => {
                if (i === currentIndex) {
                    dot.classList.add('bg-blue-300', 'h-3');
                    dot.classList.remove('bg-blue-300/30', 'h-2.5');
                } else {
                    dot.classList.remove('bg-blue-300', 'h-3');
                    dot.classList.add('bg-blue-300/30', 'h-2.5');
                }
            });

            // Untuk mobile: update dots horizontal
            updateMobileDots(bannerId, currentIndex);
        }

        // Update mobile dots (horizontal)
        function updateMobileDots(bannerId, currentIndex) {
            const mobileDots = document.querySelectorAll(`#countdownBanner-${bannerId} .schedule-dot-horizontal`);
            mobileDots.forEach((dot, i) => {
                if (i === currentIndex) {
                    dot.classList.add('active');
                } else {
                    dot.classList.remove('active');
                }
            });
        }

        // Create mobile dots (jika belum ada)
        function createMobileDots() {
            if (window.innerWidth < 768) {
                const existingMobileDots = document.querySelector(`#countdownBanner-${bannerId} .schedule-dots-horizontal`);
                if (!existingMobileDots) {
                    const mobileDotsContainer = document.createElement('div');
                    mobileDotsContainer.className = 'schedule-dots-horizontal';
                    
                    scheduleInfo.forEach((_, i) => {
                        const dot = document.createElement('div');
                        dot.className = `schedule-dot-horizontal ${i === 0 ? 'active' : ''}`;
                        dot.dataset.index = i;
                        dot.addEventListener('click', function() {
                            const index = parseInt(this.dataset.index);
                            showScheduleItem(index);
                            stopSlider();
                            startSlider();
                        });
                        mobileDotsContainer.appendChild(dot);
                    });
                    
                    sliderContainer.appendChild(mobileDotsContainer);
                }
            }
        }

        // Function untuk next item
        function nextScheduleItem() {
            let nextIndex = currentIndex + 1;
            if (nextIndex >= scheduleInfo.length) {
                nextIndex = 0;
            }
            showScheduleItem(nextIndex);
        }

        // Function untuk previous item
        function prevScheduleItem() {
            let prevIndex = currentIndex - 1;
            if (prevIndex < 0) {
                prevIndex = scheduleInfo.length - 1;
            }
            showScheduleItem(prevIndex);
        }

        // Start automatic slider
        function startSlider() {
            if (intervalId) clearInterval(intervalId);
            intervalId = setInterval(nextScheduleItem, intervalTime);
        }

        // Stop slider
        function stopSlider() {
            if (intervalId) {
                clearInterval(intervalId);
                intervalId = null;
            }
        }

        // Event listeners untuk dots vertikal
        scheduleDots.forEach(dot => {
            dot.addEventListener('click', function() {
                const index = parseInt(this.dataset.index);
                showScheduleItem(index);
                stopSlider();
                startSlider();
            });

            dot.addEventListener('mouseenter', function() {
                stopSlider();
            });

            dot.addEventListener('mouseleave', function() {
                startSlider();
            });
        });

        // Hover effect pada slider container
        sliderContainer.addEventListener('mouseenter', stopSlider);
        sliderContainer.addEventListener('mouseleave', startSlider);

        // Responsive: create mobile dots
        createMobileDots();
        window.addEventListener('resize', createMobileDots);

        // Start slider
        startSlider();

        // Export functions untuk kontrol manual
        window[`scheduleSlider_${bannerId}`] = {
            next: nextScheduleItem,
            prev: prevScheduleItem,
            goTo: showScheduleItem,
            start: startSlider,
            stop: stopSlider,
            currentIndex: () => currentIndex
        };
    }
</script>