<?php

namespace App\Http\Controllers;

use App\Models\Appointment;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class SearchController extends Controller
{
    public function search(Request $request) {

        $query = $request->validate([
            "query" => ["required", "string"]
        ]);
        
        $appointments = Appointment::where('id', Auth::user()->id)->get();

    }
}
