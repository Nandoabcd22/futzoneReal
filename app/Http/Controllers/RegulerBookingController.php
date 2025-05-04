<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\RegularBooking;
use App\Models\Field;
use App\Models\Booking;
use App\Models\TimeSlot;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;

class RegularBookingController extends Controller
{
    public function index()
    {
        $fields = Field::all();
        return view('users.booking.reguler', compact('fields'));
    }

    public function showBookingForm()
    {
        return view('users.booking.form');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'field_id' => 'required|exists:fields,id',
            'day_of_week' => 'required|integer|between:1,7',
            'start_date' => 'required|date|after_or_equal:today',
            'time_start' => 'required',
            'duration' => 'required|integer|min:1|max:5',
            'duration_months' => 'required|integer|min:1|max:12',
        ]);

        $startDate = Carbon::parse($validated['start_date']);
        $endDate = $startDate->copy()->addMonths($validated['duration_months'])->subDay();

        $regularBooking = RegularBooking::create([
            'user_id' => Auth::id(),
            'day_of_week' => $validated['day_of_week'],
            'start_date' => $validated['start_date'],
            'end_date' => $endDate,
            'time_start' => $validated['time_start'],
            'duration' => $validated['duration'],
            'duration_months' => $validated['duration_months'],
            'status' => 'pending',
        ]);

        $this->generateIndividualBookings($regularBooking, $validated['field_id']);

        return redirect()->route('user.pesanan')->with('success', 'Booking reguler berhasil dibuat! Silakan lakukan pembayaran untuk mengkonfirmasi.');
    }

    private function getAvailableTimeSlots()
    {
        return [
            '08:00' => '08:00',
            '09:00' => '09:00',
            '10:00' => '10:00',
            '11:00' => '11:00',
            '12:00' => '12:00',
            '13:00' => '13:00',
            '14:00' => '14:00',
            '15:00' => '15:00',
            '16:00' => '16:00',
            '17:00' => '17:00',
            '18:00' => '18:00',
            '19:00' => '19:00',
            '20:00' => '20:00',
            '21:00' => '21:00',
            '22:00' => '22:00',
        ];
    }

    private function generateIndividualBookings($regularBooking, $fieldId)
    {
        $startDate = Carbon::parse($regularBooking->start_date);
        $endDate = Carbon::parse($regularBooking->end_date);
        $dayOfWeek = $regularBooking->day_of_week;

        $currentDate = $startDate->copy();
        while ($currentDate->dayOfWeek != $dayOfWeek % 7) { // Sesuaikan karena Carbon: 0=minggu
            $currentDate->addDay();
        }

        while ($currentDate->lte($endDate)) {
            Booking::create([
                'user_id' => $regularBooking->user_id,
                'field_id' => $fieldId,
                'regular_booking_id' => $regularBooking->id,
                'booking_date' => $currentDate->format('Y-m-d'),
                'time_start' => $regularBooking->time_start,
                'duration' => $regularBooking->duration,
                'status' => 'pending',
                'price' => $this->calculatePrice($fieldId, $regularBooking->duration),
            ]);

            $currentDate->addWeeks(1);
        }
    }

    private function calculatePrice($fieldId, $duration)
    {
        $field = Field::findOrFail($fieldId);
        $pricePerHour = $field->price_per_hour;
        return $pricePerHour * $duration;
    }
}
