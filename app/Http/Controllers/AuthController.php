<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    public function showRegistration(){
        return view('auth.registration');
    }
    public function registration(Request $request){
       User::create([
           'email'=>$request->email,
           'phone'=>$request->phone,
           'password'=>Hash::make($request->password),
       ]);
        return redirect('/');
    }

    public function showLogin(){
        return view('auth.login');
    }

    public function login(Request $request){
        Auth::attempt([
            'email'=>$request->email,
            'password'=>$request->password,
        ]);
        return redirect('/');
    }

    public function logout(){
        Auth::logout();
        return redirect('/');
    }
}
