<?php

namespace App\Http\Controllers;

use App\Models\Doctor;

class DoctorController extends Controller
{
    public function index() {
        
        $doctors = Doctor::all();

        return view('doctors',["doctors" => $doctors, "pagename" => 'Doctors']);
    }
}
