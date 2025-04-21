<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\UserController;


// Halaman utama
Route::get('/', function () {
    return view('welcome');
})->name('welcome');

// Login
Route::get('/login', [LoginController::class, 'showLoginForm'])->name('login');
Route::post('/login', [LoginController::class, 'login']);
Route::post('/login', [LoginController::class, 'login'])->name('login.process');


// Logout
Route::post('/logout', [LoginController::class, 'logout'])->name('logout');

// Register
Route::get('/register', [RegisterController::class, 'showRegistrationForm'])->name('register');
Route::post('/register', [RegisterController::class, 'register']);

// User routes - protected by auth middleware
Route::middleware(['auth'])->prefix('user')->name('user.')->group(function () {
    // Profile
    Route::get('/profile', [UserController::class, 'profile'])->name('profile');
    
    // Change Password
    Route::get('/password', [UserController::class, 'showChangePassword'])->name('password');
    Route::post('/password', [UserController::class, 'updatePassword'])->name('updatePassword');
    
    // Jadwal Lapangan
    Route::get('/jadwal', [UserController::class, 'jadwal'])->name('jadwal');
    
    // Pesanan/Riwayat
    Route::get('/pesanan', [UserController::class, 'pesanan'])->name('pesanan');
    
    // Booking
    Route::prefix('booking')->name('booking.')->group(function () {
        Route::get('/create', [BookingController::class, 'create'])->name('create');
        Route::post('/store', [BookingController::class, 'store'])->name('store');
        
        // Different booking types
        Route::get('/reguler', [BookingController::class, 'showReguler'])->name('reguler');
        Route::get('/membership', [BookingController::class, 'showMembership'])->name('membership');
        Route::get('/event', [BookingController::class, 'showEvent'])->name('event');
    });
});
