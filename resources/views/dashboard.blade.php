@extends('layouts.app')

@section('title', 'Dashboard')

@section('content')
<div class="w-full max-w-4xl mx-4">
    <div class="bg-[#2563EB] backdrop-blur-sm rounded-3xl shadow-2xl border border-white/20 p-8">
        
        {{-- Header --}}
        <div class="flex justify-between items-center mb-8">
            <div>
                <h1 class="text-2xl font-bold text-gray-800">
                    Halo, {{ $user->name }}! 👋
                </h1>
                <p class="text-gray-600">
                    Selamat datang di Dashboard
                </p>
            </div>
            <form method="POST" action="{{ route('logout') }}">
                @csrf
                <button type="submit"
                        class="px-4 py-2 bg-red-500 text-white rounded-lg 
                               hover:bg-red-600 transition">
                    Logout
                </button>
            </form>
        </div>

        {{-- Services Cards --}}
        <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mb-8">
            {{-- E-Monev --}}
            <div class="bg-gradient-to-br from-blue-50 to-white rounded-2xl p-6 
                        border border-blue-100 shadow-lg">
                <div class="flex items-center mb-4">
                    <img src="/icons/Logo E-Monev.svg" alt="E-Monev" class="h-12">
                    <div class="ml-4">
                        <h3 class="text-xl font-bold text-gray-800">E-Monev</h3>
                        <span class="text-xs bg-blue-100 text-blue-800 px-2 py-1 rounded">
                            Versi 3.1
                        </span>
                    </div>
                </div>
                <p class="text-gray-600 text-sm mb-4">
                    Sistem Monitoring dan Evaluasi Rencana Pembangunan Daerah
                </p>
                <button class="w-full bg-blue-600 text-white py-2 rounded-lg 
                               hover:bg-blue-700 transition">
                    Akses Aplikasi
                </button>
            </div>

            {{-- E-Sakip --}}
            <div class="bg-gradient-to-br from-green-50 to-white rounded-2xl p-6 
                        border border-green-100 shadow-lg">
                <div class="flex items-center mb-4">
                    <img src="/icons/Logo E-Sakip.svg" alt="E-Sakip" class="h-12">
                    <div class="ml-4">
                        <h3 class="text-xl font-bold text-gray-800">E-Sakip</h3>
                        <span class="text-xs bg-green-100 text-green-800 px-2 py-1 rounded">
                            Versi 2.0
                        </span>
                    </div>
                </div>
                <p class="text-gray-600 text-sm mb-4">
                    Sistem Akuntabilitas Kinerja Instansi Pemerintah Daerah
                </p>
                <button class="w-full bg-green-600 text-white py-2 rounded-lg 
                               hover:bg-green-700 transition">
                    Akses Aplikasi
                </button>
            </div>
        </div>

        {{-- Stats --}}
        <div class="bg-gray-50 rounded-2xl p-6">
            <h3 class="font-bold text-gray-800 mb-4">Informasi Akun</h3>
            <div class="grid grid-cols-1 md:grid-cols-3 gap-4">
                <div class="bg-white p-4 rounded-lg">
                    <p class="text-sm text-gray-600">Username</p>
                    <p class="font-bold">{{ $user->username }}</p>
                </div>
                <div class="bg-white p-4 rounded-lg">
                    <p class="text-sm text-gray-600">Email</p>
                    <p class="font-bold">{{ $user->email }}</p>
                </div>
                <div class="bg-white p-4 rounded-lg">
                    <p class="text-sm text-gray-600">Role</p>
                    <p class="font-bold">{{ ucfirst($user->role ?? 'User') }}</p>
                </div>
            </div>
        </div>

    </div>
</div>
@endsection