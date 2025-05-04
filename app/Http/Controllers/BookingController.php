<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Field;
use App\Models\TimeSlot;
use App\Models\MembershipPackage;

class BookingController extends Controller
{
    /**
     * Halaman booking reguler.
     */
    public function showReguler()
{
    $fields = Field::all();  // Ambil semua lapangan
    $timeSlots = TimeSlot::where('is_active', true)->get(); // Ambil slot waktu yang aktif

    return view('users.booking.reguler', compact('fields', 'timeSlots'));
}

    /**
     * Halaman form booking (pilih field dan slot waktu).
     */
    public function showForm($id)
{
    $field = Field::findOrFail($id);  // Ambil lapangan berdasarkan ID
    $daysOfWeek = [
        'monday' => 'Senin',
        'tuesday' => 'Selasa',
        'wednesday' => 'Rabu',
        'thursday' => 'Kamis',
        'friday' => 'Jumat',
        'saturday' => 'Sabtu',
        'sunday' => 'Minggu',
    ];

    $timeSlots = TimeSlot::where('is_active', true)->get();  // Ambil slot waktu yang aktif

    return view('users.booking.form', compact('field', 'daysOfWeek', 'timeSlots'));
}

    /**
     * Halaman booking membership.
     */
    public function showMembership()
    {
        $fields = Field::all();
        $packages = MembershipPackage::where('is_active', true)->get();

        return view('users.booking.membership', compact('fields', 'packages'));
    }

    /**
     * Halaman booking event.
     */
    public function showEvent()
    {
        $fields = Field::all();

        return view('users.booking.event', compact('fields'));
    }

    // Tambahan untuk cek slot (jika diperlukan di frontend)
    public function checkAvailability(Request $request)
    {
        // Logika pengecekan slot
    }

    public function getAvailableTimeSlots()
    {
        return TimeSlot::where('is_active', true)->get();
    }
}
