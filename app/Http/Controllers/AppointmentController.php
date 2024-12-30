<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateAppointmentRequest;
use App\Models\Appointment;
use Carbon\Carbon;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Auth;

class AppointmentController extends Controller
{
    public function index() {
        $appointments = Appointment::all();

        foreach($appointments as $appointment) {
            $appointment['appointment_date'] = Carbon::createFromFormat('Y-m-d', $appointment['appointment_date'])->format('M d, Y');
            $appointment['appointment_time'] = Carbon::createFromFormat('H:m:s', $appointment['appointment_time'])->format('h:i A');
        }

        return view('appointments', ["appointments" => $appointments, "pagename" => "Appointments"]);
    }

    public function create(CreateAppointmentRequest $request, $doctor_id) {

        $validatedRequest = $request->validated();
        
        $validatedRequest['patient_id'] = Auth::user()->id;
        $validatedRequest['doctor_id'] = $doctor_id;
        
        Appointment::create($validatedRequest);
        return redirect()->route('auth.doctors.index');
        
    }

}
