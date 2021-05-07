<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
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
    }

    public function showLogin(){
        return view('auth.registration');
    }

    public function login(){

    }
}
