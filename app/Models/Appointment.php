<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Appointment extends Model
{
    use HasFactory;

    protected $guarded = [];

    protected $with = ['doctor'];
    public function doctor():BelongsTo {
        return $this->belongsTo(doctor::class);
    }

    protected $fillable = [
        
        'name',
        'appointment_date',
        'appointment_time',
        'appointment_type',
        'doctor_id',

    ];

}
