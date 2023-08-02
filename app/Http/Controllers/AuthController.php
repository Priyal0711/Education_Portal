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
            'password' => 'required|min:3|confirmed'
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
    public function adduser_view()
    {
        return view('auth.adduser');
        
    }
    public function adduser(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:250',
            'email' => 'required|email|max:250|unique:users',
            'password' => 'required|min:3|confirmed'
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
        // Check if the user is authenticated before proceeding
        if (!Auth::check()) {
            return redirect()->route('login');
        }

        // Fetch the user data from the database
        $user = User::findOrFail($id);

        return view('user.edit', compact('user'));
    }

    public function updateUser(Request $request, $id)
    {
        // ... (rest of the updateUser method)
    }
    public function deleteUser($id)
    {
        // Check if the user is authenticated before proceeding
        if (!Auth::check()) {
            return redirect()->route('login');
        }

        // Fetch the user data from the database
        $user = User::findOrFail($id);

        return view('user.delete', compact('user'));
    }

    public function delete($id)
    {
        $user=User::find($id);
        $user->delete();
        return redirect()->route('list-users');
        
    }

    
}
