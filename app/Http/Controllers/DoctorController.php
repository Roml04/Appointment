<?php

namespace App\Http\Controllers;

use App\Models\Doctor;
use App\Models\User;
use Illuminate\Http\Request;

class DoctorController extends Controller
{
    public function index() {
        
        $doctors = User::all(); // Replace with the Doctor model

        return view('/doctors',["doctors" => $doctors]);
    }
}
