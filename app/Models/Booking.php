<?php

namespace App\Models;

use Faker\Provider\ar_EG\Payment;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Booking extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'user_id',
        'field_id',
        'regular_booking_id',
        'booking_date',
        'time_start',
        'duration',
        'price',
        'status',
        'payment_id'
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array
     */
    protected $casts = [
        'booking_date' => 'date',
        'price' => 'float',
    ];

    /**
     * Get the user that owns the booking.
     */
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    /**
     * Get the field that is booked.
     */
    public function field()
    {
        return $this->belongsTo(Field::class);
    }

    /**
     * Get the regular booking that this booking belongs to.
     */
    public function regularBooking()
    {
        return $this->belongsTo(RegularBooking::class);
    }

    /**
     * Get the payment associated with this booking.
     */
    public function payment()
    {
        return $this->belongsTo(Payment::class);
    }
}