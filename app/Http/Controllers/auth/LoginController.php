<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Log;

class LoginController extends Controller
{
    public function showLoginForm()
    {
        return view('auth.login');
    }

    public function login(Request $request)
    {
        // DEBUG: Log input
        Log::info('Login attempt:', [
            'username' => $request->username,
            'password' => substr($request->password, 0, 3).'...', // Hanya log 3 karakter pertama
        ]);

        $request->validate([
            'username' => 'required|string',
            'password' => 'required|string',
        ]);

        // Cari user berdasarkan username atau email
        $user = \App\Models\User::where('username', $request->username)
            ->orWhere('email', $request->username)
            ->first();

        // DEBUG: Log user yang ditemukan
        if ($user) {
            Log::info('User found:', [
                'id' => $user->id,
                'username' => $user->username,
                'email' => $user->email,
                'password_matches' => \Illuminate\Support\Facades\Hash::check($request->password, $user->password),
            ]);
        } else {
            Log::warning('User not found for:', ['username' => $request->username]);
        }

        // Coba login dengan username
        if (Auth::attempt(['username' => $request->username, 'password' => $request->password])) {
            Log::info('Login successful with username');
            $request->session()->regenerate();

            return redirect()->intended(route('select-service'));
        }

        // Coba login dengan email
        if (Auth::attempt(['email' => $request->username, 'password' => $request->password])) {
            Log::info('Login successful with email');
            $request->session()->regenerate();

            return redirect()->intended(route('select-service'));
        }

        // DEBUG: Log failure
        Log::warning('Login failed for:', ['username' => $request->username]);

        return back()->withErrors([
            'username' => 'Kredensial tidak valid.',
        ])->withInput();
    }

    public function logout(Request $request)
    {
        Auth::logout();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect('/');
    }
}
