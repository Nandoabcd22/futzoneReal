<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Booking extends Model
{
    use HasFactory;

    protected $fillable = [
        'customer_id',
        'field_id',
        'booking_date',
        'start_time',
        'end_time',
        'total_price',
        'status',
        // tambahkan kolom lain yang diperlukan
    ];

    // Relation dengan customer
    public function customer()
    {
        return $this->belongsTo(Customer::class);
    }

    // Relation dengan field
    public function field()
    {
        return $this->belongsTo(Field::class);
    }
}