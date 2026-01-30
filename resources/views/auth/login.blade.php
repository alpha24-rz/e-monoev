@extends('layouts.app')

@section('title', 'Login')

@section('content')
    <div class="w-full max-w-md mx-4">
        <div class="bg-white/80 backdrop-blur-sm rounded-3xl shadow-2xl border border-white/20 pt-8 px-8">

            {{-- Header --}}
            <div class="text-center mb-6">
                <h1 class="text-2xl font-bold text-gray-800 mb-2">
                    Selamat datang 👋
                </h1>
                <p class="text-gray-600 text-sm">
                    Masuk dengan akun anda untuk mengakses layanan
                </p>
            </div>

            {{-- Login Form --}}
            <form method="POST" action="/">
                @csrf

                {{-- Username --}}
                <div class="mb-4">
                    <label class="block text-sm font-medium text-gray-700 mb-2">
                        Nama Pengguna
                    </label>
                    <input type="text" name="username" required autofocus
                        class="w-full px-4 py-3 rounded-lg border border-gray-300 
                              focus:ring-2 focus:ring-blue-500 focus:border-blue-500 
                              outline-none transition">
                    @error('username')
                        <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                    @enderror
                </div>

                {{-- Password --}}
                <div class="mb-6">
                    <label class="block text-sm font-medium text-gray-700 mb-2">
                        Kata Sandi
                    </label>
                    <input type="password" name="password" required
                        class="w-full px-4 py-3 rounded-lg border border-gray-300 
                              focus:ring-2 focus:ring-blue-500 focus:border-blue-500 
                              outline-none transition">
                    @error('password')
                        <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                    @enderror
                </div>

                {{-- Submit Button --}}
                <button type="submit"
                    class="w-full bg-blue-600 text-white py-3 rounded-lg font-medium
                           hover:bg-blue-700 focus:ring-2 focus:ring-blue-500 
                           focus:ring-offset-2 transition">
                    Masuk
                </button>
            </form>

            <div class="py-5 w-full text-center">
                <p class="text-sm text-gray-600 flex items-center justify-center">
                    Crafted by
                    <img src="/logo/icon.svg" alt="Logo" class="h-5 mx-2">
                    <span class="font-semibold text-blue-600">AFILA MEDIA KARYA</span>
                </p>
            </div>

        </div>
    </div>
@endsection
