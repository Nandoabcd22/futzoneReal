<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;    // Auth untuk proses login/logout
use Illuminate\Support\Facades\Hash;    // Hash hanya dibutuhkan jika kamu ingin membandingkan manual

class LoginController extends Controller
{
    // Menampilkan form login
    public function showLoginForm()
    {
        return view('login');
    }

    // Proses login
    public function login(Request $request)
    {
        // Validasi input
        $credentials = $request->validate([
            'email'    => ['required', 'email'],
            'password' => ['required'],
        ]);

        // Coba autentikasi menggunakan Auth::attempt
        if (Auth::attempt($credentials)) {
            $request->session()->regenerate(); // Hindari session fixation
            return redirect()->intended('/');  // Redirect ke halaman tujuan setelah login
        }

        // Jika gagal
        return back()->withErrors([
            'email' => 'Email atau password salah.',
        ])->onlyInput('email');
    }

    // Logout
    public function logout(Request $request)
    {
        Auth::logout();                          // Logout user
        $request->session()->invalidate();       // Invalidate session
        $request->session()->regenerateToken();  // Regenerate CSRF token
        return redirect('/login');
    }
}
