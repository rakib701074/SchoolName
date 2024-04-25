<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;

class StudentsController extends Controller
{
    
    public function index(){
        return view('index');
    }

    public function studentslist(){
        $student = Student::all();
        // echo "<pre>";
        // print_r($student->toArray());die;
        return view('table');
    }
    public function studentprofile(){
        return view('profile');
    }
}
