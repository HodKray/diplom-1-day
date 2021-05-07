<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function showRegistration(){
        return view('auth.registration');
    }
    public function registration(Request $request){
       User::create([
           'email',
           'phone',
           'password',
           'admin',
       ]);
    }

    public function showLogin(){
        return view('auth.registration');
    }

    public function login(){

    }
}
