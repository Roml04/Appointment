<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Appointment extends Model
{
    protected $fillable = ['status', 'appointment_type', 'appointment_date', 'appointment_time', 'notes'];

    use HasFactory;
}
