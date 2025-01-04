<?php

namespace App\Http\Controllers;

use App\Models\Appointment;
use App\Models\Doctor;
use App\Models\Patient;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PatientController extends Controller
{
    public function viewDashboard() {

        $user = Auth::user();

        $dashBoardInfo['patFullName'] = $user->firstname . " " . $user->lastname;
        $dashBoardInfo['numOfDoctors'] = Doctor::count();
        $dashBoardInfo['numOfPatients'] = Patient::count();

        $incomingAppointments = Appointment::where('patient_id', $user->patient->id)->orderBy('appointment_date', 'asc')->take(3)->get();

        foreach($incomingAppointments as $appointment) {
            $doctor = $appointment->doctor->user;
            $appointment['docFullName'] = $doctor->firstname . " " . $doctor->lastname;
        }

        return view('dashboard', ["dashBoardInfo" => $dashBoardInfo, "incomingAppointments" => $incomingAppointments, 'pagename' => 'Dashboard']);
    }
}
