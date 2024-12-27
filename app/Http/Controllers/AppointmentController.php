<?php

namespace App\Http\Controllers;

use App\Models\Appointment;
use Carbon\Carbon;
use Illuminate\Http\Request;

class AppointmentController extends Controller
{
    public function index() {
        $appointments = Appointment::all();

        foreach($appointments as $appointment) {
            $date = $appointment['appointment_date'];
            $formattedDate = Carbon::createFromFormat('Y-m-d', $date)->format('M d, Y');

            $time = $appointment['appointment_time'];
            $formattedTime = Carbon::createFromFormat('H:m:s', $time)->format('h:i A');

            $appointment['appointment_date'] = $formattedDate;
            $appointment['appointment_time'] = $formattedTime;
        }

        return view('/appointments', ["appointments" => $appointments, "pagename" => "Appointments"]);
    }

}
