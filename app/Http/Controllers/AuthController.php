<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Models\User;

class AuthController extends Controller
  {
    public function showLoginForm()
    {
        return view('auth.login');
    }

    public function home(){
        return view('welcome');
    }
    

    public function login(Request $request){
        $request->validate([
            'email' => 'required|email:users',
            'password' => 'required'
        ]);
        if(Auth::attempt(['email'=> $request->email,'password' => $request->password])){
            return redirect()->route('home')->with('success','berhasil login');
        }else{
            return back()->withErrors('Waduh ada yang salah!');
        }
    }

    public function showRegisterForm()
    {
        return view('auth.register');
    }

    public function register(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:8',
        ]);

        User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => bcrypt($request->password),
        ]);

        return redirect()->route('login')->with('success', 'Registrasi berhasil. Silakan login.');
    }
  }

