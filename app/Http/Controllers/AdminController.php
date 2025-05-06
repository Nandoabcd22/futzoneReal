<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Models\Customer;
use App\Models\Field;
use App\Models\Booking;
use App\Models\User;

class AdminController extends Controller
{
    // Dashboard Admin
    public function dashboard()
    {
        $customerCount = Customer::count();
        $fieldCount = Field::count();
        $bookingCount = Booking::count();

        return view('admin.dashboard', compact('customerCount', 'fieldCount', 'bookingCount'));
    }

    // Data Customer
    public function dataCustomer()
    {
        $customers = Customer::all();
        return view('admin.data_customer', compact('customers'));
    }

    // Data Lapangan
    public function dataLapangan()
    {
        $fields = Field::all();
        return view('admin.data_lapangan', compact('fields'));
    }

    // Transaksi
    public function transaksi()
    {
        $bookings = Booking::with(['customer', 'field'])->get();
        return view('admin.transaksi', compact('bookings'));
    }

    // Laporan
    public function laporan()
    {
        return view('admin.laporan');
    }

    // Form Ubah Password
    public function passwordForm()
    {
        return view('admin.ubah_password');
    }

    // Update Password
    public function updatePassword(Request $request)
    {
        $request->validate([
            'current_password' => 'required',
            'new_password' => 'required|min:8|confirmed',
        ]);

        /** @var User $user */
        $user = auth()->user();

        if (!Hash::check($request->current_password, $user->password)) {
            return back()->withErrors(['current_password' => 'Password lama tidak sesuai']);
        }

        $user->update([
            'password' => Hash::make($request->new_password),
        ]);

        return back()->with('success', 'Password berhasil diubah');
    }
}
