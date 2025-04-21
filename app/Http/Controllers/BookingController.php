<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Booking;
use App\Models\Field;

class BookingController extends Controller
{
    /**
     * Show the booking creation form.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\View\View
     */
    public function create(Request $request)
    {
        $fieldId = $request->input('field');
        $time = $request->input('time');
        $date = $request->input('date', date('Y-m-d'));

        return view('users.booking.create', compact('fieldId', 'time', 'date'));
    }

    /**
     * Store a new booking.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(Request $request)
    {
        $request->validate([
            'field_id' => 'required|numeric',
            'date' => 'required|date',
            'time_start' => 'required|string',
            'duration' => 'required|numeric|min:1|max:5',
        ]);

        // In a real application, you would validate availability and create the booking
        // Here we'll just redirect with a success message

        // Calculate price
        $hourlyRate = 150000; // Base price per hour
        $price = $hourlyRate * $request->duration;

        // Parse time
        $timeStart = str_replace('.00', '', $request->time_start);
        $timeEnd = $timeStart + $request->duration;

        // In a real application, you would store the booking in the database
        // For example:
        // $booking = new Booking;
        // $booking->user_id = Auth::id();
        // $booking->field_id = $request->field_id;
        // $booking->date = $request->date;
        // ... and so on
        // $booking->save();

        return redirect()->route('user.pesanan')->with('success', 'Booking berhasil! Menunggu konfirmasi admin.');
    }

    /**
     * Show the regular booking page.
     *
     * @return \Illuminate\View\View
     */
    public function showReguler()
    {
        return view('users.booking.reguler');
    }

    /**
     * Show the membership booking page.
     *
     * @return \Illuminate\View\View
     */
    public function showMembership()
    {
        return view('users.booking.membership');
    }

    /**
     * Show the event booking page.
     *
     * @return \Illuminate\View\View
     */
    public function showEvent()
    {
        return view('users.booking.event');
    }
}