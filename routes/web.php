<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\BookingController;

Route::get('/', function () {
    return view('welcome');
})->name('welcome');

<<<<<<< HEAD
// Login Routes
=======
// =======================
// Login
// =======================
>>>>>>> 2467f850399edaf692270b32139c212837d4716e
Route::get('/login', [LoginController::class, 'showLoginForm'])->name('login');
Route::post('/login', [LoginController::class, 'login'])->name('login.process');
Route::post('/logout', [LoginController::class, 'logout'])->name('logout');

<<<<<<< HEAD
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
=======
// =======================
// Register
// =======================
Route::get('/register', [RegisterController::class, 'showRegistrationForm'])->name('register');
Route::post('/register', [RegisterController::class, 'store']);

// =======================
// User Routes (Protected)
// =======================
Route::middleware(['auth'])->prefix('user')->name('user.')->group(function () {
    // Profile & Password
    Route::get('/profile', [UserController::class, 'profile'])->name('profile');
    Route::get('/password', [UserController::class, 'showChangePassword'])->name('password');
    Route::post('/password', [UserController::class, 'updatePassword'])->name('updatePassword');

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
>>>>>>> 2467f850399edaf692270b32139c212837d4716e
    });
});

<<<<<<< HEAD
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

=======
// =======================
// Booking API Routes
// =======================
Route::middleware(['auth'])->prefix('booking')->group(function () {
    Route::post('/check-availability', [BookingController::class, 'checkAvailability'])->name('booking.check-availability');
    Route::get('/available-time-slots', [BookingController::class, 'getAvailableTimeSlots'])->name('booking.available-time-slots');
});

// =======================
// Admin Routes
// =======================
Route::middleware(['auth', 'admin'])->prefix('admin')->name('admin.')->group(function () {
    Route::get('/dashboard', [AdminController::class, 'dashboard'])->name('dashboard');
    Route::get('/data-customer', [AdminController::class, 'dataCustomer'])->name('data.customer');
    Route::get('/data-lapangan', [AdminController::class, 'dataLapangan'])->name('data.lapangan');
    Route::get('/transaksi', [AdminController::class, 'transaksi'])->name('transaksi');
    Route::get('/laporan', [AdminController::class, 'laporan'])->name('laporan');
    Route::get('/ubah-password', [AdminController::class, 'passwordForm'])->name('password.form');
    Route::post('/ubah-password', [AdminController::class, 'updatePassword'])->name('password.update');
});
>>>>>>> 2467f850399edaf692270b32139c212837d4716e
