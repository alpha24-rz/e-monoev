<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>Login page</title>
    @vite('resources/css/app.css')
</head>

<body class="h-screen">

    <div class="bg-[url('/image/bg-main.png')] bg-cover bg-center bg-no-repeat h-full w-full">

        <div class="absolute top-5 left-5 flex ">
            <img src="/logo/icon.svg" alt="logo" class="h-[84px]">
            <p class="text-[18px] font-semibold pl-5">BAPPEDA <br> KABUPATEN <br>AFILA MEDIA KARYA</p>

        </div>

        {{-- box input --}}
        <div class="relative flex justify-center items-center h-full">

            <div class="w-[518px] h-[522px] rounded-3xl bg-white/80 backdrop-blur-sm 
                        shadow-2xl border border-white/20
                        pt-12 pb-8 pr-12 pl-12
                        flex flex-col gap-5">

                {{-- header box --}}

                <div class="text-center font-bold text-2xl">
                    Yuk Pilih Layanan 👀
                </div>
                <div class="text-center text-md font-light">
                    Akses cepat ke dua layanan utama. Pilih salah satu untuk melanjutkan.
                </div>

                {{-- grid --}}

                <div class="grid grid-cols-2 gap-3">

                    <a href="{{ route('emonev') }}" class="bg-white rounded-xl hover:shadow-2xl transition-border px-5 py-5">
                        <img src="/icons/Logo E-Monev.svg" alt="" class="h-10 ">

                        <div class="pt-2">
                            <h2 class="font-semibold text-[24px] font-inter pb-3 ">E-Monev</h2>
                            <p class="text-[14px] font-inter font-normal text-[#3C3C43BF] pb-5">Website Sistem Monitoring dan
                                Evaluasi Rencana Pembangunan Daerah</p>
                            <p class="text-[12px] font-normal text-[#3C3C4380]">Versi 3.1</p>
                        </div>
                    </a>
                    <a href="#" class="bg-white rounded-xl hover:shadow-2xl transition-border px-5 py-5">
                        <img src="/icons/Logo E-Sakip.svg" alt="" class="h-10 ">

                        <div class="pt-2">
                            <h2 class="font-semibold text-[24px] font-inter pb-3 ">E-Sakip</h2>
                            <p class="text-[14px] font-inter font-normal text-[#3C3C43BF] pb-5">Website Sistem Akuntabilitas Kinerja Instansi Pemerintah Daerah</p>
                            <p class="text-[12px] font-normal text-[#3C3C4380]">Versi 2.0</p>
                        </div>
                    </a>
                </div>

                {{-- fotter --}}
                <div class="flex justify-center pt-3 ">
                    <p class="flex text-[#3C3C43BF] font-inter text-[14px]">Crafted by</p>
                    <img src="/logo/icon.svg" alt="" class="px-2">
                    <p class="text-[#3B4FA3] font-inter text-[14px] font-semibold">AFILA MEDIA KARYA</p>
                </div>

            </div>
        </div>
    </div>
</body>

</html>
