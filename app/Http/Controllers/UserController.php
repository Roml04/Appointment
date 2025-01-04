<?php

namespace App\Http\Controllers;

use App\Http\Requests\EditInfoRequest;
use App\Http\Requests\LoginUserRequest;
use App\Http\Requests\RegisterUserRequest;
use App\Models\Doctor;
use App\Models\Patient;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Illuminate\Support\ValidatedInput;

class UserController extends Controller
{

    public function login(LoginUserRequest $request) {
        
        $validatedCredentials = $request->validated();
        
        if(Auth::attempt(($validatedCredentials))) {
            $request->session()->regenerate();
            
            return redirect()->route('auth.dashboard');
        }

        return back()->withErrors([
            'email' => 'The email did not match our records',
            'password' => 'Wrong password'
        ])->onlyInput('email');
        
    }

    public function register(RegisterUserRequest $request) {

        $validatedCredentials = $request->validated();
        
        $user = User::create($validatedCredentials);

        if($validatedCredentials['usertype'] === 'patient') {
            Patient::create(['user_id' => $user->id]);
        }

        if($validatedCredentials['usertype'] === 'doctor') {
            Doctor::create(['user_id' => $user->id]);
        }

        if(Auth::attempt($validatedCredentials)) {
            $request->session()->regenerate();

            return redirect()->route('auth.dashboard');
        }
        
        // create an error if the attempt() function somehow fails...
    }

    public function logout(Request $request) {
        
        $request->session()->invalidate();
        
        $request->session()->regenerateToken();
        
        Auth::logout();

        return redirect()->route('guest.landing');

    }

    public function viewSettings() {

        $user = User::where('id', Auth::user()->id)->get();
        
        foreach($user as $values) {
            $userInfo['firstname'] = $values->firstname;
            $userInfo['middlename'] = $values->middlename;
            $userInfo['lastname'] = $values->lastname;
            $userInfo['birthdate'] = $values->birthdate;
            $userInfo['contact'] = $values->contact;
            $userInfo['email'] = $values->email;
        }
        
        return view('settings', ["userInfo" => $userInfo, "pagename" => "Settings", "isInputDisabled" => true]);

    }

    public function editSettings(EditInfoRequest $request) {

        // dd($request);
        $validatedInfo = $request->validated();

        $updated = User::where('id', Auth::user()->id)->update($validatedInfo);

        return redirect()->route('auth.settings');

    }
    
}
