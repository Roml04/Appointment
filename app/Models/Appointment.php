<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Appointment extends Model
{
    use HasFactory;

    protected $fillable = ['status', 'appointment_type', 'appointment_date', 'appointment_time', 'notes'];

    public function patient() {

        return $this->belongsTo(Patient::class);
    }
    
    public function doctor() {

        return $this->belongsTo(Doctor::class);
    }
}
