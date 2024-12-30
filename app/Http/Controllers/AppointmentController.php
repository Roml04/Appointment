<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateAppointmentRequest;
use App\Models\Appointment;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;

class AppointmentController extends Controller
{
    public function index() {

        $appointments = Appointment::where('patient_id', Auth::user()->patient->id)->orderBy('appointment_date', 'asc')->get();

        foreach($appointments as $appointment) {
            $appointment['appointment_date'] = Carbon::createFromFormat('Y-m-d', $appointment['appointment_date'])->format('M d, Y');
            $appointment['appointment_time'] = Carbon::createFromFormat('H:m:s', $appointment['appointment_time'])->format('h:i A');
        }

        return view('appointments', ["appointments" => $appointments, "pagename" => "Appointments"]);
    }

    public function create(CreateAppointmentRequest $request, $doctor_id) {

        $validatedRequest = $request->validated();
        
        $validatedRequest['patient_id'] = Auth::user()->patient->id;
        $validatedRequest['doctor_id'] = $doctor_id;

        // dd($validatedRequest);
        
        Appointment::create($validatedRequest);
        return redirect()->route('auth.doctors.index');
        
    }

    public function schedule($doctor_id) {
        return view('schedule', ["doctor_id" => $doctor_id]);
    }

}