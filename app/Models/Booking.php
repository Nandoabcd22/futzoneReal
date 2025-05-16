<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Casts\Attribute;

class Booking extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'lapangan_id',
        'tanggal',
        'jam_mulai',
        'jam_selesai',
        'total_harga',
        'status',
        'jenis_booking',
        'payment_proof',
        'payment_bank',
        'payment_date'
    ];

    protected $casts = [
        'tanggal' => 'date',
        'jam_mulai' => 'datetime:H:i:s',
        'jam_selesai' => 'datetime:H:i:s',
        'total_harga' => 'decimal:2',
        'jenis_booking' => 'string',
        'payment_date' => 'datetime'
    ];

    /**
     * Get the start time.
     */
    protected function jamMulai(): Attribute
    {
        return Attribute::make(
            get: fn ($value) => $value ? date('H:i:s', strtotime($value)) : null,
            set: fn ($value) => $value ? date('H:i:s', strtotime($value)) : null
        );
    }

    /**
     * Get the end time.
     */
    protected function jamSelesai(): Attribute
    {
        return Attribute::make(
            get: fn ($value) => $value ? date('H:i:s', strtotime($value)) : null,
            set: fn ($value) => $value ? date('H:i:s', strtotime($value)) : null
        );
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function field()
    {
        return $this->belongsTo(Lapangan::class, 'lapangan_id');
    }

    public function customer()
    {
        return $this->belongsTo(User::class, 'user_id');
    }
}