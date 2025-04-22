<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\AdminController;

// Halaman utama
Route::get('/', function () {
    return view('welcome');
})->name('welcome');

// Login
Route::get('/login', [LoginController::class, 'showLoginForm'])->name('login');
Route::post('/login', [LoginController::class, 'login']);
Route::post('/login', [LoginController::class, 'login'])->name('login.process');

// Dari:
Route::post('/register', [App\Http\Controllers\RegisterController::class, 'register'])->name('register');

// Menjadi:
Route::post('/register', [App\Http\Controllers\RegisterController::class, 'store'])->name('register');
// Logout
Route::post('/logout', [LoginController::class, 'logout'])->name('logout');

// Register
Route::get('/register', [RegisterController::class, 'showRegistrationForm'])->name('register');
Route::post('/register', [RegisterController::class, 'register']);
// Dari:
Route::post('/register', [RegisterController::class, 'register']);

// Menjadi:
Route::post('/register', [RegisterController::class, 'store']);
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

// Route::get('/admin/dashboard', [App\Http\Controllers\AdminController::class, 'dashboard'])->name('admin.dashboard');
// Route::prefix('admin')->name('admin.')->group(function () {
//     Route::get('/dashboard', [App\Http\Controllers\AdminController::class, 'dashboard'])->name('dashboard');
//     Route::get('/data-customer', [App\Http\Controllers\AdminController::class, 'dataCustomer'])->name('data.customer');
//     Route::get('/data-lapangan', [App\Http\Controllers\AdminController::class, 'dataLapangan'])->name('data.lapangan');
//     Route::get('/transaksi', [App\Http\Controllers\AdminController::class, 'transaksi'])->name('transaksi');
//     Route::get('/laporan', [App\Http\Controllers\AdminController::class, 'laporan'])->name('laporan');
//     Route::get('/ubah-password', [App\Http\Controllers\AdminController::class, 'passwordForm'])->name('password.form');
//     Route::post('/ubah-password', [App\Http\Controllers\AdminController::class, 'updatePassword'])->name('password.update');
// });
// Route::middleware(['auth', 'admin'])->prefix('admin')->group(function () {
//     Route::get('/dashboard', [AdminController::class, 'dashboard'])->name('admin.dashboard');
//     Route::get('/data-customer', [AdminController::class, 'dataCustomer'])->name('admin.data_customer');
//     Route::get('/data-lapangan', [AdminController::class, 'dataLapangan'])->name('admin.data_lapangan');
//     Route::get('/transaksi', [AdminController::class, 'transaksi'])->name('admin.transaksi');
//     Route::get('/laporan', [AdminController::class, 'laporan'])->name('admin.laporan');
//     Route::get('/ubah-password', [AdminController::class, 'passwordForm'])->name('admin.ubah_password');
//     Route::post('/ubah-password', [AdminController::class, 'updatePassword'])->name('admin.update_password');
// });
// Route::middleware(['auth'])->group(function () {
//     Route::get('/profile', function() {
//         return view('user.profile');
//     })->name('user.profile');
// });

// // Redirect home ke login jika tidak ada route lain
// Route::get('/', function () {
//     return redirect('/login');
// });
});