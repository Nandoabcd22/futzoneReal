<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\BookingController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
*/

// =======================
// Halaman Awal
// =======================
Route::get('/', function () {
    return view('welcome');
})->name('welcome');

// =======================
// Auth: Login & Logout
// =======================
Route::get('/login', [LoginController::class, 'showLoginForm'])->name('login');
Route::post('/login', [LoginController::class, 'login'])->name('login.process');
Route::post('/logout', [LoginController::class, 'logout'])->name('logout');

// =======================
// Register
// =======================
Route::get('/register', [RegisterController::class, 'showRegistrationForm'])->name('register');
Route::post('/register', [RegisterController::class, 'store'])->name('register.store');

// =======================
// User Routes (Authenticated Users Only)
// =======================
Route::middleware(['auth'])->prefix('user')->name('user.')->group(function () {
    // Profil & Password
    Route::get('/profile', [UserController::class, 'profile'])->name('profile');
    Route::get('/password', [UserController::class, 'showChangePassword'])->name('password');
    Route::post('/password', [UserController::class, 'updatePassword'])->name('password.update');

    // Jadwal & Pesanan
    Route::get('/jadwal', [UserController::class, 'jadwal'])->name('jadwal');
    Route::get('/pesanan', [UserController::class, 'pesanan'])->name('pesanan');

    // Booking
    Route::prefix('booking')->name('booking.')->group(function () {
        Route::get('/reguler', [BookingController::class, 'showReguler'])->name('reguler');
        Route::get('/membership', [BookingController::class, 'showMembership'])->name('membership');
        Route::get('/event', [BookingController::class, 'showEvent'])->name('event');
        Route::get('/form/{id}', [BookingController::class, 'showForm'])->name('form');
        Route::get('/create', [BookingController::class, 'create'])->name('create');
    });
});

// =======================
// Admin Routes (Authenticated + Admin Only)
// =======================
Route::middleware(['auth', 'admin'])->prefix('admin')->name('admin.')->group(function () {
    Route::get('/dashboard', [AdminController::class, 'dashboard'])->name('dashboard');
    Route::get('/data-customer', [AdminController::class, 'dataCustomer'])->name('data.customer');
    Route::get('/data-lapangan', [AdminController::class, 'dataLapangan'])->name('data.lapangan');
    Route::get('/transaksi', [AdminController::class, 'transaksi'])->name('transaksi');
    Route::get('/laporan', [AdminController::class, 'laporan'])->name('laporan');

    // Ganti Password
    Route::get('/ubah-password', [AdminController::class, 'passwordForm'])->name('password.form');
    Route::post('/ubah-password', [AdminController::class, 'updatePassword'])->name('password.update');
});
