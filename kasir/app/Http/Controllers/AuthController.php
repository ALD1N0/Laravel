<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    // halaman login
    public function showLogin()
    {
        return view('auth.login');
    }

    // proses login (PAKAI AUTH LARAVEL)
    public function login(Request $request)
    {
        // validasi
        $credentials = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],
        ]);

        // cek login
        if (Auth::attempt($credentials)) {

            // regenerate session (WAJIB)
            $request->session()->regenerate();

            return redirect()->intended('/'); // ke halaman utama
        }

        return back()->with('error', 'Email atau password salah');
    }

    // logout
    public function logout(Request $request)
    {
        Auth::logout();

        // hapus session
        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect('/login');
    }
}