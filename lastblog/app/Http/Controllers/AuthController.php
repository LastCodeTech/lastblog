<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function login(){
        return view('auth.login');
    }

    public function register(){
        return view('auth.register');
    }

    //processing the signup
    public function registerProcess(Request $request){
        $validate=$request->validate([
            'name'=>'required|string|min:5',
            'email'=>'required|email|unique:users',
            'password'=>'string|min:5|required|confirmed',
        ]);
      $user=User::create($validate);
      Auth::login($user);
      return redirect()->route('index');
    }

    //processing the login
    public function loginProcess(Request $request){
$validate=$request->validate([
    'email'=>'required|email',
    'password'=>'required'
]);
if(Auth::attempt($validate)){
return redirect()->route('index');
}
else{
    return redirect()->route('register')->with('message','email or password is incorrect');
}
    }
}
