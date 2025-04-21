<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Models\User;
use App\Models\Customer;
use App\Models\Field;
use App\Models\Booking;

class AdminController extends Controller
{
    public function dashboard()
    {
        // Count data for dashboard
        $customerCount = Customer::count();
        $fieldCount = Field::count();
        $bookingCount = Booking::count();
        
        return view('admin.dashboard', compact('customerCount', 'fieldCount', 'bookingCount'));
    }
    
    public function dataCustomer()
    {
        $customers = Customer::all();
        return view('admin.data_customer', compact('customers'));
    }
    
    public function dataLapangan()
    {
        $fields = Field::all();
        return view('admin.data_lapangan', compact('fields'));
    }
    
    public function transaksi()
    {
        $bookings = Booking::with(['customer', 'field'])->get();
        return view('admin.transaksi', compact('bookings'));
    }
    
    public function laporan()
    {
        return view('admin.laporan');
    }
    
    public function passwordForm()
    {
        return view('admin.ubah_password');
    }
    
    public function updatePassword(Request $request)
    {
        $request->validate([
            'current_password' => 'required',
            'new_password' => 'required|min:8|confirmed',
        ]);
        
        $user = auth()->user();
        
        if (!Hash::check($request->current_password, $user->password)) {
            return back()->withErrors(['current_password' => 'Password lama tidak sesuai']);
        }
        
        $user->update([
            'password' => Hash::make($request->new_password)
        ]);
        
        return back()->with('success', 'Password berhasil diubah');
    }
}