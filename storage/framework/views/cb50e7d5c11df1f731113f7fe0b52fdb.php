

<?php $attributes ??= new \Illuminate\View\ComponentAttributeBag;

$__newAttributes = [];
$__propNames = \Illuminate\View\ComponentAttributeBag::extractPropNames(([
    'deadline' => 'March 31, 2024 23:59:59',
    'title' => 'Realisasi / Realisasi Triwulan I',
    'show' => true,
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
    'deadline' => 'March 31, 2024 23:59:59',
    'title' => 'Realisasi / Realisasi Triwulan I',
    'show' => true,
]), 'is_string', ARRAY_FILTER_USE_KEY) as $__key => $__value) {
    $$__key = $$__key ?? $__value;
}

$__defined_vars = get_defined_vars();

foreach ($attributes->all() as $__key => $__value) {
    if (array_key_exists($__key, $__defined_vars)) unset($$__key);
}

unset($__defined_vars, $__key, $__value); ?>

<div id="countdownBanner" x-data="countdownBanner()" x-init="initCountdown('<?php echo e($deadline); ?>')" x-show="showBanner"
    x-transition:enter="transition ease-out duration-300" x-transition:enter-start="opacity-0 -translate-y-4"
    x-transition:enter-end="opacity-100 translate-y-0" x-transition:leave="transition ease-in duration-200"
    x-transition:leave-start="opacity-100" x-transition:leave-end="opacity-0"
    class="relative bg-[#1E3A8A] w-full font-inter gap-3" :class="{ 'hidden': !showBanner }">

    <div class="flex items-center justify-center w-full px-4 md:px-6 py-3 md:py-4 bg-gradient-to-r from-blue-600 to-blue-800">
        <div class="flex flex-col md:flex-row justify-center items-center gap-1 md:gap-6 w-full max-w-7xl mx-auto">

            <div class="flex justify-center items-center gap-10">
                <!-- Informasi Jadwal -->
            <div class="text-center md:text-center w-full md:w-auto  order-1">
                <h3 class="text-xs md:text-sm font-medium text-[#EBEBF5BF] uppercase tracking-wider">
                    Jadwal Penginputan
                </h3>
                <h2 class="text-base md:text-lg font-medium text-white mt-1 leading-tight md:whitespace-nowrap">
                    <span class="block md:inline">Realisasi /</span>
                    <span class="block md:inline">Realisasi Triwulan I</span>
                </h2>
            </div>

            <!-- Hitung Mundur -->
            <div class="w-full md:w-auto flex-1 min-w-0 order-3 md:order-2 ">
                <div class="flex justify-center gap-2">
                    <!-- Hari -->
                    <div class="text-center">
                        <div class="px-2 md:px-3 min-w-10 md:min-w-12.5">
                            <span id="days" class="text-[24px] font-bold text-white">00</span>
                        </div>
                        <span class="text-xs text-blue-200">Hari</span>
                    </div>

                    <!-- Jam -->
                    <div class="text-center">
                        <div class="px-2 md:px-3 min-w-10 md:min-w-12.5">
                            <span id="hours" class="text-[24px] font-bold text-white">00</span>
                        </div>
                        <span class="text-xs text-blue-200">Jam</span>
                    </div>

                    <!-- Menit -->
                    <div class="text-center">
                        <div class="px-2 md:px-3  min-w-10 md:min-w-12.5">
                            <span id="minutes" class="text-[24px] font-bold text-white">00</span>
                        </div>
                        <span class="text-xs text-blue-200">Menit</span>
                    </div>

                    <!-- Detik -->
                    <div class="text-center">
                        <div class="px-2  md:px-3  min-w-10 md:min-w-12.5">
                            <span id="seconds" class="text-[24px] font-bold text-white">00</span>
                        </div>
                        <span class="text-xs text-blue-200">Detik</span>
                    </div>
                </div>
            </div>

            <!-- Tombol Aksi -->
            <div class="w-full md:w-auto shrink-0 order-2 md:order-3">
                <button
                    class="w-full md:w-auto text-white bg-blue-500 hover:bg-blue-400 font-medium py-2 px-4 md:px-6 rounded-full transition text-sm flex items-center justify-center gap-2">
                    <img src="/icons/edit-2-line.svg" alt="Edit" class="w-4 h-4">
                    <span class="text-sm font-inter text-white">Input Sekarang</span>
                </button>
            </div>

            </div>

            

        </div>
    </div>
</div>

<script>
    function countdownBanner() {
        return {
            showBanner: <?php echo e($show ? 'true' : 'false'); ?>,
            days: 0,
            hours: 0,
            minutes: 0,
            seconds: 0,
            isExpired: false,
            deadlineDate: '',
            countdownInterval: null,

            initCountdown(deadlineString) {
                // Format deadline untuk ditampilkan
                const deadline = new Date(deadlineString);
                this.deadlineDate = this.formatDate(deadline);

                // Check localStorage untuk status banner
                const bannerHidden = localStorage.getItem('countdownBannerHidden');
                if (bannerHidden === 'true') {
                    this.showBanner = false;
                    return;
                }

                // Mulai countdown
                this.startCountdown(deadlineString);
            },

            startCountdown(deadlineString) {
                const deadline = new Date(deadlineString).getTime();

                this.countdownInterval = setInterval(() => {
                    const now = new Date().getTime();
                    const timeLeft = deadline - now;

                    if (timeLeft < 0) {
                        this.isExpired = true;
                        this.days = 0;
                        this.hours = 0;
                        this.minutes = 0;
                        this.seconds = 0;
                        clearInterval(this.countdownInterval);
                        return;
                    }

                    this.days = Math.floor(timeLeft / (1000 * 60 * 60 * 24));
                    this.hours = Math.floor((timeLeft % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
                    this.minutes = Math.floor((timeLeft % (1000 * 60 * 60)) / (1000 * 60));
                    this.seconds = Math.floor((timeLeft % (1000 * 60)) / 1000);
                }, 1000);
            },

            hideBanner() {
                this.showBanner = false;
                // Simpan status di localStorage agar tidak muncul lagi
                localStorage.setItem('countdownBannerHidden', 'true');
            },

            showBannerAgain() {
                this.showBanner = true;
                localStorage.removeItem('countdownBannerHidden');
            },

            openInputForm() {
                if (!this.isExpired) {
                    // Trigger event untuk membuka form input
                    window.dispatchEvent(new CustomEvent('open-input-form'));
                    // Atau buka modal/form
                    alert('Form penginputan akan dibuka!');
                }
            },

            formatDate(date) {
                const options = {
                    day: 'numeric',
                    month: 'long',
                    year: 'numeric'
                };
                return date.toLocaleDateString('id-ID', options);
            }
        }
    }
</script>
<?php /**PATH C:\Users\alfak\Herd\emonev\resources\views/components/countdown-banner.blade.php ENDPATH**/ ?>