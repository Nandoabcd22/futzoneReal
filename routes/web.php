<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\BookingController;

// Halaman utama
Route::get('/', function () {
    return view('welcome');
})->name('welcome');

// Login Routes
Route::get('/login', [LoginController::class, 'showLoginForm'])->name('login');
Route::post('/login', [LoginController::class, 'login'])->name('login.process');
Route::post('/logout', [LoginController::class, 'logout'])->name('logout');

// Register Routes
Route::get('/register', [RegisterController::class, 'showRegistrationForm'])->name('register');
Route::post('/register', [RegisterController::class, 'store'])->name('register.store');

// Routes for authenticated users
Route::middleware(['auth'])->group(function () {

    // Admin Routes
    Route::prefix('admin')->name('admin.')->group(function () {
        Route::get('/dashboard', [AdminController::class, 'dashboard'])->name('dashboard');
        Route::get('/customers', [AdminController::class, 'dataCustomer'])->name('dataCustomer');
        Route::get('/fields', [AdminController::class, 'dataLapangan'])->name('dataLapangan');
        Route::get('/bookings', [AdminController::class, 'transaksi'])->name('transaksi');
        Route::get('/reports', [AdminController::class, 'laporan'])->name('laporan');
        Route::get('/password', [AdminController::class, 'passwordForm'])->name('passwordForm');
        Route::post('/password', [AdminController::class, 'updatePassword'])->name('updatePassword');
    });

    // User Routes
    Route::prefix('user')->name('user.')->group(function () {
        Route::get('/profile', [UserController::class, 'profile'])->name('profile');
        Route::get('/password', [UserController::class, 'showChangePassword'])->name('password');
        Route::post('/password', [UserController::class, 'updatePassword'])->name('updatePassword');
        Route::get('/jadwal', [UserController::class, 'jadwal'])->name('jadwal');
        Route::get('/pesanan', [UserController::class, 'pesanan'])->name('pesanan');

        // Booking Routes
        Route::prefix('booking')->name('booking.')->group(function () {
            Route::get('/create', [BookingController::class, 'create'])->name('create');
            Route::post('/store', [BookingController::class, 'store'])->name('store');
            
            // Different booking types
            Route::get('/reguler', [BookingController::class, 'showReguler'])->name('reguler');
            Route::get('/membership', [BookingController::class, 'showMembership'])->name('membership');
            Route::get('/event', [BookingController::class, 'showEvent'])->name('event');
        });
    });
});

