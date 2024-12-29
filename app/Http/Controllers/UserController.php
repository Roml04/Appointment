<?php

namespace App\Http\Controllers;

use App\Http\Requests\RegisterUserRequest;
use App\Models\User;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;

class UserController extends Controller
{
    public function index() {
        // 
    }

    public function login(Request $request) {
        $validatedCredentials = $request->validate([
            'email' => 'required|email',
            'password' => 'required|min:8|max:255'
        ]);

        
    }

    public function register(RegisterUserRequest $request) {

        // vvv place this in the app/Http/Requests vvv

        $validatedCredentials = $request->validated();
        
        $capitalizeFields = ['firstname', 'middlename', 'lastname'];
        
        foreach($capitalizeFields as $field) {
            if(array_key_exists($field, $validatedCredentials)) {
                $validatedCredentials[$field] = $validatedCredentials[$field] !== null 
                ? Str::title($validatedCredentials[$field]) 
                : null;
                
            }
        }

        // ^^^ place this in the app/Http/Requests ^^^
        
        User::create($validatedCredentials);

        if(Auth::attempt($validatedCredentials)) {
            $request->session()->regenerate();

            return redirect()->route('auth.dashboard');
        }
        
        // create an error if the attempt() function somehow fails...
    }
}
