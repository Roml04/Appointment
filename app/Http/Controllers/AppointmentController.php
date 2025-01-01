<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateAppointmentRequest;
use App\Models\Appointment;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AppointmentController extends Controller
{
    public function index() {

        $appointments = Appointment::where('patient_id', Auth::user()->patient->id)->orderBy('appointment_date', 'asc')->get();

        foreach($appointments as $appointment) {
            $appointment['appointment_date'] = Carbon::createFromFormat('Y-m-d', $appointment['appointment_date'])->format('M d, Y');
            $appointment['appointment_time'] = Carbon::createFromFormat('H:i:s', $appointment['appointment_time'])->format('h:i A');
            $appointment['docFullName'] = $appointment->doctor->user->firstname . " " . $appointment->doctor->user->lastname;
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
        
        Appointment::create($validatedRequest);
        return redirect()->route('auth.appointment.index');
        
    }

    public function schedule($doctor_id) {

        $appointmentObj = Appointment::where('doctor_id', $doctor_id)->get();

        foreach($appointmentObj as $appointment) {
            $docFullName = $appointment->doctor->user['firstname'] . " " . $appointment->doctor->user['lastname'];
            $doctor['specialization'] = $appointment->doctor['specialization'];
            $doctor['docFullName'] = $docFullName;
        }
        
        return view('schedule', ["doctor_id" => $doctor_id, "doctor" => $doctor]);
    }

    public function delete($appointment_id) {
        
        Appointment::whereId($appointment_id)->delete();
        return redirect()->route('auth.appointment.index');

    }

}