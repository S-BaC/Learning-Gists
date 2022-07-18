<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;


class UserController extends Controller
{
    public function create () {
        return view('user.register',[
            'cur_lib' => false,
            'cur_myb' => false,
            'cur_com' => false,
            'cur_pro' => false
        ]);
    }

    public function store (Request $request) {
        $inputs = $request -> validate([
            'name' => 'required',
            'email' => 'required',
            'password' => ['required', 'confirmed']
        ]);

        $inputs['password'] = bcrypt($inputs['password']);

        $user = User::create($inputs);

        auth()->login($user);

        return redirect('/')->with('message', 'user created and logged in.');
    }

    public function logout () {
        auth()->logout();

        return redirect('/')->with('message', 'Logged Out');
    }

    public function login () {
        return view('user.login',[
            'cur_lib' => false,
            'cur_myb' => false,
            'cur_com' => false,
            'cur_pro' => false
        ]);
    }

    public function loginValidate (Request $req) {
        
        $inputs = $req -> validate([
            'name' => 'required',
            'email' => 'required',
            'password' => 'required'
        ]);

        if(auth()->attempt($inputs)){
            $req -> session() -> regenerate();
            return redirect('/')->with('message', 'Logged In');
        } else {
            return redirect('/login')->with('message', 'Invalid');
        }

        
    }
}
