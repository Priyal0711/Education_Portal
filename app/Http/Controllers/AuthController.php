<?php

namespace App\Http\Controllers;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


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
            'password' => 'required|min:3|confirmed',
            'mobile' => 'required|min:10',
            'city' => 'required',


        ]);

        User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => \Hash::make($request->password),
            'mobile' => $request->mobile,
            'city' => $request->city,


        ]);
        
        //login user
        if(\Auth::attempt($request->only('email','password')))
        {
            return redirect('home');
        }
        return redirect('register')->withError('Error');
    }
    public function adduser_view()
    {
        return view('auth.adduser');
        
    }
    public function adduser(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:250',
            'email' => 'required|email|max:250|unique:users',
            'password' => 'required|min:3|confirmed',
            'mobile' => 'required|min:10',
            'city' => 'required',
        ]);

        User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => \Hash::make($request->password),
            'mobile' => $request->mobile,
            'city' => $request->city,

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
    public function listUsers()
    {
       
        if (!Auth::check()) {
            return redirect()->route('login');
        }

        $users = User::all();

        return view('user.list', compact('users'));
    }
    public function editUser($id)
    {
        
        if (!Auth::check()) {
            return redirect()->route('login');
        }

        
        $user = User::findOrFail($id);

        return view('user.edit', compact('user'));
    }

    public function updateUser(Request $request, $id)
    {
       
    }
   
    public function delete($id)
    {
        $user=User::find($id);
        $user->delete();
        return redirect()->route('list-users');
        
    }

    public function edit($id)
    {
        $user = User::findOrFail($id);
        return view('users.edit', compact('user'));
    }

    public function update(Request $request, $id)
    {
        $user = User::findOrFail($id);
        // Update the user data based on the input fields from the edit form
        $user->update($request->all());

        return redirect()->route('users.show', $user->id);
    }

    public function show($id)
    {
        $user = User::findOrFail($id);
        return view('users.show', compact('user'));
    }
}

