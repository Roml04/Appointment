<?php

namespace App\Http\Controllers;

use App\Models\Doctor;

class DoctorController extends Controller
{
    public function index() {
        
        $doctors = Doctor::all();

        foreach ($doctors as $doctor) {

            $doctorName = $doctor->user;
            $doctor['docFullName'] = $doctorName['firstname'] . " " . $doctorName['lastname'];
            $doctor['specialization'] = $doctor['specialization'] === null ? 'Unknown' : $doctor['specialization'];
            $doctorsColl[] = $doctor;
        }

        return view('doctors',["doctors" => $doctorsColl, "pagename" => 'Doctors']);
    }
}
