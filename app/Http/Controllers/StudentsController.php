<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Students;

class StudentsController extends Controller
{
    
    public function index(){
        return view('index');
    }

    public function studentslist(){
           $students = students::all();
           $data = compact('students');
        return view('table')->with($data);
    }
    public function studentprofile(){
        return view('profile');
    }
    public function addStudent(){
        return view('form');
    }
    public function updateStudent(Request $request){
        $student = new students;
        $student->name = $request['name'];
        $student->email = $request['email'];
        $student->city = $request['city'];
        $student->state = $request['state'];
        $student->save();
        return redirect('/students');
    }
}
