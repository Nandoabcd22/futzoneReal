<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Booking;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Log;

class OrderController extends Controller
{
    public function index()
    {
        return view('users.pesanan');
    }

    public function getOrdersByType($type)
    {
        Log::info('Getting orders for type: ' . $type);
        Log::info('User ID: ' . Auth::id());

        $pendingOrders = Booking::with(['field'])
            ->where('user_id', Auth::id())
            ->where('status', 'pending')
            ->orderBy('created_at', 'desc')
            ->get();

        Log::info('Pending orders count: ' . $pendingOrders->count());
        Log::info('Pending orders:', $pendingOrders->toArray());

        $completedOrders = Booking::with(['field'])
            ->where('user_id', Auth::id())
            ->whereIn('status', ['completed', 'cancelled'])
            ->orderBy('created_at', 'desc')
            ->get();

        Log::info('Completed orders count: ' . $completedOrders->count());

        $pendingOrdersData = $pendingOrders->map(function ($booking) {
            return [
                'user_name' => auth()->user()->name,
                'booking_date' => $booking->tanggal,
                'field_name' => $booking->field->nama ?? 'Lapangan ' . $booking->lapangan_id,
                'duration' => $this->calculateDuration($booking->jam_mulai, $booking->jam_selesai),
                'start_time' => $booking->jam_mulai,
                'end_time' => $booking->jam_selesai,
                'total_price' => floatval($booking->total_harga),
                'status' => $booking->status
            ];
        });

        $completedOrdersData = $completedOrders->map(function ($booking) {
            return [
                'user_name' => auth()->user()->name,
                'booking_date' => $booking->tanggal,
                'field_name' => $booking->field->nama ?? 'Lapangan ' . $booking->lapangan_id,
                'duration' => $this->calculateDuration($booking->jam_mulai, $booking->jam_selesai),
                'start_time' => $booking->jam_mulai,
                'end_time' => $booking->jam_selesai,
                'total_price' => floatval($booking->total_harga),
                'status' => $booking->status
            ];
        });

        return response()->json([
            'pendingOrders' => $pendingOrdersData,
            'completedOrders' => $completedOrdersData
        ]);
    }

    private function calculateDuration($startTime, $endTime)
    {
        $start = strtotime($startTime);
        $end = strtotime($endTime);
        return round(($end - $start) / 3600); // Convert seconds to hours
    }
}