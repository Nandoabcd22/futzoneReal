<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TimeSlot extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'time',
        'is_active',
        'display_text'
    ];

    /**
     * Get the formatted display time.
     *
     * @return string
     */
    public function getFormattedTimeAttribute()
    {
        $time = str_replace('.00', '', $this->time);
        $nextHour = $time + 1;
        
        return sprintf('%02d:00 - %02d:00', $time, $nextHour);
    }
}