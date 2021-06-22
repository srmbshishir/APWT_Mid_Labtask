<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\LoginRequest;
use validator;
use Illuminate\Support\Facades\DB;
use App\Models\Person;

class LoginController extends Controller
{
    public function index(){
        return view('Login.login');
    }

    public function verify(LoginRequest $req){
        $result = DB::table('user')
        ->where('email', $req->email)
        ->where('password', $req->password)
        ->first();

        if(count(array($result)) > 0){
                $req->session()->put('name', $result->name);
                $req->session()->put('type', $result->type);

                return redirect('/home');
        }
        else{
            $req->session()->flash('msg', 'Invalid username or password!');
            return redirect('/login');
        }
    }
    public function home(){
        return view('Home.index');
    }
}
