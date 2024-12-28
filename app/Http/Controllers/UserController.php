<?php

namespace App\Http\Controllers;

use App\Models\User;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;

class UserController extends Controller
{
    public function index() {
        // 
    }

    public function register(Request $request) {
        
        $validatedCredentials = $request->validate([
            'firstname' => 'required|string|max:255',
            'middlename' => 'required|string|max:255',
            'lastname' => 'required|string|max:255',
            'birthdate' => 'required|date|before:today',
            'usertype' => 'required',
            'email' => 'required|email',
            'password' => 'required|min:8|max:255'
        ]);

        $capitalizeFields = ['firstname', 'middlename', 'lastname'];

        foreach($capitalizeFields as $field) {
            if(isset($validatedCredentials[$field])) {
                $validatedCredentials[$field] = Str::title($validatedCredentials[$field]);
            }
        }

        User::create($validatedCredentials);

        if(Auth::attempt($validatedCredentials)) {
            $request->session()->regenerate();

            return redirect()->route('auth.dashboard');
        }
        
        // create an error if the attempt() function somehow fails...
    }
}
