<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\User;
class AuthController extends Controller
{
    public function login()
    {
        return view('auths.login');
    }

    public function postlogin(Request $request)
    {
        if(Auth::attempt($request->only('email','password'))){
            if(auth()->user()->role == 'user'){
                return redirect('/dashboard');
            }
            return redirect('/bis');
        }
        return redirect('/login');
    }

    public function register()
    {
        return view('auths.register');
    }

    public function create(Request $request)
    {
        $user = User::create([
            'role' => 'user',
            'name' => $request->name,
            'email' => $request->email,
            'password' => bcrypt($request->password),
            'remember_token' => str_random('60')
        ]);

        return redirect('/login');
    }


    public function logout()
    {
        Auth::logout();
        return redirect('/login');
    }
}
