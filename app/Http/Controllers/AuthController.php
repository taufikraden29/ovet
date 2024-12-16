<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function registrasi(){
        // Code
        return view ('auth.registrasi');
    }
    public function login(){
        return view('auth.login');
    }
}
