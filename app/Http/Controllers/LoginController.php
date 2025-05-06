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
        // Validasi form login
    $validated = $request->validate([
        'email' => 'required|email',
        'password' => 'required|min:8',
        ]);
        
        // Set credentials dengan tambahan opsi untuk hash driver
        $credentials = [
            'email' => $request->email,
            'password' => $request->password
        ];
        
        // Coba autentikasi menggunakan Auth::attempt dengan pengaturan hash
        if (Auth::attempt($credentials)) {
            $request->session()->regenerate(); // Hindari session fixation
             // Check user role and redirect accordingly
    if (Auth::user()->role === 'admin') {
        return redirect()->route('admin.dashboard');
    } else { 
            // Redirect ke halaman user profile setelah login
            return redirect()->intended(route('user.profile'));
        }
        
        // Jika gagal
        
    }
        return back()->withErrors([
            'email' => 'Email atau password salah.',
        ])->onlyInput('email');
}
    // Logout
    public function logout(Request $request)
    {
        Auth::logout();                         // Logout user
        $request->session()->invalidate();      // Invalidate session
        $request->session()->regenerateToken(); // Regenerate CSRF token
        return redirect('/login');
    }
}