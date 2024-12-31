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
            // dump("controller-before carbon" . $appointment['appointment_time']);
            $appointment['appointment_time'] = Carbon::createFromFormat('H:i:s', $appointment['appointment_time'])->format('h:i A');
            // dump("controller-after carbon" . $appointment['appointment_time']);
        }

        return view('appointments', ["appointments" => $appointments, "pagename" => "Appointments"]);
    }

    public function display($appointment_id) {

        
        $appointmentDetails = Appointment::findOrFail($appointment_id);

        $appointmentDetails['docFullName'] = $appointmentDetails->doctor->user->firstname . " " . $appointmentDetails->doctor->user->lastname;
        $appointmentDetails['docSpecialization'] = $appointmentDetails->doctor->specialization;
        $appointmentDetails['patFullName'] = $appointmentDetails->patient->user->firstname . " " . $appointmentDetails->patient->user->lastname;
        $appointmentDetails['appointment_date'] = Carbon::createFromDate($appointmentDetails['appointment_date'])->format('M d, Y');
        $appointmentDetails['appointment_time'] = Carbon::createFromDate($appointmentDetails['appointment_time'])->format('h:i A');

        return view('appointment-details', ["appointmentDetails" => $appointmentDetails, "pagename" => "Appointment Details"]);

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