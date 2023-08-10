<?php

namespace App\Http\Controllers;
use App\Models\Standard;
use Illuminate\Http\Request;
use App\Models\User;

class Assign_Student_Controller extends Controller
{
    
    public function index(){
        $standards = Standard::all();

        $check = "student";
        $result = User::select('user_access_types.user_id', 'users.name')
        ->join('user_access_types', 'users.id', '=', 'user_access_types.user_id')
        ->join('user_access', 'user_access_types.user_access_id', '=', 'user_access.id')
        ->where('user_access.access_type', $check)
        ->get();

        $students = $result;

        return view('assign_students.index', compact('standards', 'students'));
    }

    public function assign(Request $request)
    {
        $standardID = $request->input('standard');
        $studentId = $request->input('student',[]);

        $standard = Standard::find($standardID);
        $standard->students()->syncWithoutDetaching($studentId);
        return redirect()->route('assign_student.show')->with('success', 'Subject assigned successfully.');
    }
    
}

