@extends('layouts.app')

@section('title', 'Login')

@section('content')
    <div class="w-full max-w-md mx-4 font-inter">
        <div class="bg-white/80 backdrop-blur-sm rounded-3xl shadow-2xl border border-white/20 pt-12 px-12">

            {{-- Header --}}
            <div class="text-center mb-6 font-inter">
                <h1 class="text-2xl font-bold text-gray-800 mb-2">
                    Selamat datang 👋
                </h1>
                <p class="text-gray-600 text-sm">
                    Masuk dengan akun Anda untuk mengakses <br> layanan E-Monev dan E-Sakip dalam satu portal.
                </p>
            </div>

            {{-- Login Form --}}
            <form method="POST" action="{{ route('login') }}">
                @csrf

                {{-- Username --}}
                <div class="mb-4">
                    <div class="relative">
                        <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                            <img src="/icons/account-circle-fill.svg" alt="" class="h-5.25 w-5.25 text-gray-400">
                        </div>
                        <input type="text" name="username" required autofocus
                            class="w-full pl-10 px-4 py-2 bg-white rounded-lg border
                   focus:ring-2 focus:ring-blue-500 focus:border-blue-500 
                   outline-none transition items-center"
                            placeholder="Nama Pengguna">
                    </div>
                    @error('username')
                        <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                    @enderror
                </div>

                {{-- Password --}}
                <div class="mb-6">
                    <div class="relative">
                        <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                            <img src="/icons/lock-2-fill.svg" alt="" class="h-5 w-5 text-gray-400">
                        </div>
                        <input type="password" name="password" required id="password"
                            class="w-full pl-10 px-4 py-2 bg-white rounded-lg border
                   focus:ring-2 focus:ring-blue-500 focus:border-blue-500 
                   outline-none transition"
                            placeholder="Kata Sandi">

                        {{-- Icon Mata (Tertutup) --}}
                        <button type="button" id="togglePassword"
                            class="absolute inset-y-0 right-0 pr-3 flex items-center">
                            <svg id="eyeClosed" class="h-5 w-5 text-gray-400 hover:text-gray-600" fill="none"
                                stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z" />
                            </svg>

                            {{-- Icon Mata (Terbuka) -- tersembunyi default --}}
                            <svg id="eyeOpen" class="h-5 w-5 text-gray-400 hover:text-gray-600 hidden" fill="none"
                                stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M13.875 18.825A10.05 10.05 0 0112 19c-4.478 0-8.268-2.943-9.543-7a9.97 9.97 0 011.563-3.029m5.858.908a3 3 0 114.243 4.243M9.878 9.878l4.242 4.242M9.878 9.878L6.59 6.59m7.532 7.532l3.29 3.29M3 3l3.59 3.59m0 0A9.953 9.953 0 0112 5c4.478 0 8.268 2.943 9.543 7a10.025 10.025 0 01-4.132 5.411m0 0L21 21" />
                            </svg>
                        </button>

                    </div>
                    @error('password')
                        <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                    @enderror
                </div>

                {{-- Submit Button --}}
                <button type="submit"
                    class="w-full bg-blue-600 text-white py-2 rounded-lg font-medium
                           hover:bg-blue-700 focus:ring-2 focus:ring-blue-500 
                           focus:ring-offset-2 transition">
                    Masuk
                </button>
            </form>

            <div class="pb-5 pt-7 w-full text-center">
                <p class="text-sm text-gray-600 flex items-center justify-center">
                    Crafted by
                    <img src="/logo/icon.svg" alt="Logo" class="h-5 mx-2">
                    <span class="font-semibold text-blue-600">AFILA MEDIA KARYA</span>
                </p>
            </div>

        </div>
    </div>

    <script>
    document.addEventListener('DOMContentLoaded', function() {
        const togglePassword = document.getElementById('togglePassword');
        const passwordInput = document.getElementById('password');
        const eyeClosed = document.getElementById('eyeClosed');
        const eyeOpen = document.getElementById('eyeOpen');

        togglePassword.addEventListener('click', function() {
            // Toggle tipe input
            const type = passwordInput.getAttribute('type') === 'password' ? 'text' : 'password';
            passwordInput.setAttribute('type', type);

            // Toggle icon
            if (type === 'text') {
                eyeClosed.classList.add('hidden');
                eyeOpen.classList.remove('hidden');
            } else {
                eyeClosed.classList.remove('hidden');
                eyeOpen.classList.add('hidden');
            }
        });
    });
</script>
@endsection


