<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\LoginRequest;
use validator;

class LoginController extends Controller
{
    public function index(){
        return view('Login.login');
    }

    public function verify(LoginRequest $req){

    }
}
