<?php

namespace App\Http\Controllers;

use App\Http\Requests\LoginUserRequest;
use App\Http\Requests\RegisterUserRequest;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function index() {
        // 
    }

    public function login(LoginUserRequest $request) {
        
        $validatedCredentials = $request->validated();
        return redirect()->route('auth.dashboard');

        if(Auth::attempt(($validatedCredentials))) {
            $request->session()->regenerate();

        }
        
    }

    public function register(RegisterUserRequest $request) {

        // vvv place this in the app/Http/Requests vvv

        $validatedCredentials = $request->validated();

        // ^^^ place this in the app/Http/Requests ^^^
        
        User::create($validatedCredentials);

        if(Auth::attempt($validatedCredentials)) {
            $request->session()->regenerate();

            return redirect()->route('auth.dashboard');
        }
        
        // create an error if the attempt() function somehow fails...
    }
}
