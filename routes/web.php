<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\CustomerController;
use App\Http\Controllers\BookingController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\RegulerBookingController;
use App\Http\Controllers\Admin\LapanganController;


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
        Route::post('/process', [RegulerBookingController::class, 'processBooking'])->name('process');
        Route::post('/payment', [RegulerBookingController::class, 'processPayment'])->name('payment');
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
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
    
    // Customer Management
    Route::get('/data-customer', [CustomerController::class, 'index'])->name('data.customer');
    Route::post('/customer', [CustomerController::class, 'store'])->name('customer.store');
    Route::put('/customer/{customer}', [CustomerController::class, 'update'])->name('customer.update');
    Route::delete('/customer/{customer}', [CustomerController::class, 'destroy'])->name('customer.destroy');
    
    Route::get('/data-lapangan', [AdminController::class, 'dataLapangan'])->name('data.lapangan');
    Route::get('/transaksi', [AdminController::class, 'transaksi'])->name('transaksi');
    Route::get('/laporan', [AdminController::class, 'laporan'])->name('laporan');

    // Ganti Password
    Route::get('/ubah-password', [AdminController::class, 'passwordForm'])->name('password.form');
    Route::post('/ubah-password', [AdminController::class, 'updatePassword'])->name('password.update');

    // Konfirmasi dan Tolak Booking
    Route::post('/booking/confirm', [AdminController::class, 'confirmBooking'])->name('booking.confirm');
    Route::post('/booking/reject', [AdminController::class, 'rejectBooking'])->name('booking.reject');
    
    // New route for updating booking status
    Route::put('/booking/{bookingId}/status', [AdminController::class, 'updateBookingStatus'])
        ->name('booking.update.status');
});

Route::middleware(['auth'])->group(function () {
    Route::get('/pesanan', [OrderController::class, 'index'])->name('pesanan');
    Route::get('/api/orders/{type}', [OrderController::class, 'getOrdersByType']);
});

Route::prefix('booking')->group(function () {
    Route::get('/', [BookingController::class, 'showBookingForm'])->name('booking.form');
    Route::post('/process', [BookingController::class, 'processBooking'])->name('booking.process');
    Route::get('/payment/{booking}', [BookingController::class, 'showPaymentForm'])->name('booking.payment');
    Route::post('/payment/{booking}', [BookingController::class, 'processPayment'])->name('booking.payment.process');
    Route::get('/success/{booking}', [BookingController::class, 'showSuccessPage'])->name('booking.success');
    Route::post('/bookings', [BookingController::class, 'store'])->name('bookings.store');
});

// Admin Lapangan Routes
Route::middleware(['auth', 'admin'])->group(function () {
    Route::get('/admin/lapangan', [LapanganController::class, 'index'])->name('admin.data.lapangan');
    Route::post('/admin/lapangan', [LapanganController::class, 'store'])->name('admin.lapangan.store');
    Route::put('/admin/lapangan/{lapangan}', [LapanganController::class, 'update'])->name('admin.lapangan.update');
    Route::delete('/admin/lapangan/{lapangan}', [LapanganController::class, 'destroy'])->name('admin.lapangan.destroy');
});