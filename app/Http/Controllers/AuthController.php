<?php

namespace App\Http\Controllers;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class AuthController extends Controller
{
    //
    public function register(Request $request){
        $validatedData = $request->validate([
            'name'=> 'required|max:255|',
            'email'=> 'required|email|max:255|unique:users',
            'password'=>'required|min:8|confirmed',
        ]);

        //create users records

        User::create([
            'name'=> $validatedData['name'],
            'email'=> $validatedData['email'],
            'password'=> bcrypt($validatedData['password']),
        ]);
        return redirect()->route('login');

    }

    public function login(Request $request){
        $validatedData = $request->validate([
            'email'=> 'required|email|max:255',
            'password'=> 'required|min:8',
        ]);

        if(Auth::attempt($validatedData, $request->filled('remember'))){
            return redirect()->route('welcome.page');
        }

        return back()->withErrors([
            'email' => 'The provided credentials do not match our records.',
        ])->onlyInput('email');
    }

    public function logout(Request $request)
    {
        Auth::logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('welcome');
    }

    public function showLoginForm(){
        return view('auth.login');
    }



}
