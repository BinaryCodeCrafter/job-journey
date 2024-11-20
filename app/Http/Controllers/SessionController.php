<?php

namespace App\Http\Controllers;

use Auth;
use Illuminate\Http\Request;
use Illuminate\Validation\Rules\Password;
use Illuminate\Validation\ValidationException;

class SessionController extends Controller
{
    public function create(){
        return view('auth.login');
    }
    
    public function store(){
        $validated = request()->validate([
            'email' => ['required' , 'email'],
            'password' => ['required' , Password::min(6)]
        ]);

        if(!Auth::attempt($validated)){
            throw ValidationException::withMessages([
                'email' => 'these credentials do not match'
            ]);
        }

        request()->session()->regenerate();

        return redirect('/');
    }


    public function destroy(){
        Auth::logout();
        return redirect('/');
    }
}

