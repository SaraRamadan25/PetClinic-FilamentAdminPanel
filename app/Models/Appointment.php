<?php

namespace App\Models;

use App\Enums\AppointmentStatus;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Appointment extends Model
{
    use HasFactory;

    protected $casts = [
        'status'=>AppointmentStatus::class
    ];
    protected $fillable = [
        'date',
        'start',
        'end',
        'description',
        'pet_id',
    ];
    public function pet(): BelongsTo
    {
        return $this->belongsTo(Pet::class);
    }
}
