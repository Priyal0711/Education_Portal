<?php

namespace App\Http\Controllers;
use App\Models\User;
use Illuminate\Http\Request;

class AuthController extends Controller
{
    //login
    public function index()
    {
        return view('auth.login');
    }
    public function login(Request $request)
    {
        //validation
        $request->validate([
            'email' => 'required|email',
            'password' => 'required'
        ]);
        
        if(\Auth::attempt($request->only('email','password')))
        {
            return redirect('home');
        }
        return redirect('login')->withError('User is not Registered!!!');
    }
    
    //register
    public function register_view()
    {
        return view('auth.register');
        
    }
    public function register(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:250',
            'email' => 'required|email|max:250|unique:users',
            'password' => 'required|min:8|confirmed'
        ]);

        User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => \Hash::make($request->password)
        ]);
        
        //login user
        if(\Auth::attempt($request->only('email','password')))
        {
            return redirect('home');
        }
        return redirect('register')->withError('Error');
    }
    //home page
    public function home()
    {
        return view('home');
    }

    public function logout()
    {
        \Session::flush();
        \Auth::logout();
        return redirect('');
    }
}
