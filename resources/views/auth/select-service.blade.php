@extends('layouts.app')

@section('title', 'Pilih Layanan')

@section('content')
    <div class="w-full max-w-129.5 font-inter">
        <div class="relative bg-white/80 backdrop-blur-sm rounded-3xl shadow-2xl border border-white/20 p-8">

            {{-- Logout Icon --}}
            <form action="{{ route('logout') }}" method="POST" class="absolute top-6 right-6">
                @csrf
                <button type="submit" class="text-gray-500 hover:text-red-600 transition duration-200" title="Logout">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24"
                        stroke="currentColor" stroke-width="2">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M17 16l4-4m0 0l-4-4m4 4H7m6 4v1a2 2 0 01-2 2H5a2 2 0 01-2-2V7a2 2 0 012-2h6a2 2 0 012 2v1" />
                    </svg>
                </button>
            </form>

            {{-- Header --}}
            <div class="text-center mb-8">
                <div class="flex gap-3 justify-center items-center">
                    <h1 class="text-2xl font-bold text-gray-800 mb-2">
                        Yuk Pilih Layanan
                    </h1>
                    <img src="/icons/eye.svg" alt="">
                </div>

                <p class="text-gray-600 text-sm">
                    Akses cepat ke dua layanan utama. Pilih salah satu <br> untuk melanjutkan.
                </p>
            </div>

            {{-- Services Grid --}}
            <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mb-8">
                {{-- E-Monev Card --}}
                <a href="{{ route('emonev') }}"
                    class="group bg-white rounded-2xl p-6 shadow-lg hover:shadow-xl transition-all duration-300 border border-gray-100">
                    <div class="flex flex-col items-start">
                        <img src="/icons/Logo E-Monev.svg" alt="E-Monev" class="h-10">
                        <span class="text-[24px] font-semibold text-black py-1">E-Monev</span>
                    </div>
                    <p class="text-[#3C3C43BF] text-sm text-left ">
                        Website Sistem Monitoring dan Evaluasi Rencana Pembangunan Daerah
                    </p>
                    <div class="flex justify-between items-center pt-4">
                        <span class="text-xs text-gray-500">Versi 3.1</span>
                    </div>
                </a>

                {{-- E-Sakip Card --}}
                <a href="{{ route('emonev') }}"
                    class="group bg-white rounded-2xl p-6 shadow-lg hover:shadow-xl transition-all duration-300 border border-gray-100">
                    <div class="flex flex-col items-start">
                        <img src="/icons/Logo E-Sakip.svg" alt="E-Monev" class="h-10">
                        <span class="text-[24px] font-semibold text-black py-1">E-Sakip</span>
                    </div>
                    <p class="text-[#3C3C43BF] text-sm text-left ">
                        Website Sistem Akuntabilitas Kinerja Instansi Pemerintah Daerah
                    </p>
                    <div class="flex justify-between items-center pt-4">
                        <span class="text-xs text-gray-500">Versi 2.0</span>
                    </div>
                </a>
            </div>

            {{-- Footer --}}
            <div class="flex justify-center w-full">
                <div class="flex items-center gap-2 text-sm text-gray-600">
                    <span>Crafted by</span>
                    <img src="/logo/Icon.svg" alt="Aquila Media Karya Logo" class="h-4 w-auto">
                    <span class="font-semibold text-blue-600">
                        AFILA MEDIA KARYA
                    </span>
                </div>
            </div>

        </div>
    </div>
@endsection
