<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Field extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'type',
        'price',
        'description',
        // tambahkan kolom lain yang diperlukan
    ];

    // Relation dengan booking
    public function bookings()
    {
        return $this->hasMany(Booking::class);
    }
}