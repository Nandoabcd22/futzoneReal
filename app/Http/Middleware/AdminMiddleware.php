<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminMiddleware
{
    public function handle(Request $request, Closure $next)
    {
        // Cek jika user login dan memiliki role admin
        if (Auth::check() && Auth::user()->role == 'admin') {
            return $next($request);
        }
        
        // Jika bukan admin, redirect ke login
        return redirect('/login')->with('error', 'Anda tidak memiliki akses sebagai admin.');
    }
}