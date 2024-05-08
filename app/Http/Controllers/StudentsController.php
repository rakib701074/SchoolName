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
      //   $url = url('/addStudent');
      // $title = "Create form";
      // $data = compact('url', 'title');
        return view('form');
    }
    // insert
    public function updateStudent(Request $request){
        $students = new students;
        $students->name = $request['name'];
        $students->email = $request['email'];
        $students->city = $request['city'];
        $students->state = $request['state'];
        $students->save();
        return redirect('/students');
    }
    // delete
    public function delete($id){
        $students = students::find($id);
        $students->delete();
        return redirect('/students');
    }


    // edit....................................
     public function edit($id){
     $students = students::find($id);
      // echo "<pre>";
      $data = compact('students');
      // print_r($students->toArray());exit;
      return view('update')->with($data);

      }
      public function update($id, Request $request){
        $students = students::find($id);
        $students->name = $request['name'];
        $students->email = $request['email'];
        $students->city = $request['city'];
        $students->state = $request['state'];
        $students->save();
        return redirect('/students');
      }
    


    // public function edit($id){
    //     $students = students::find($id);
    //     if(is_null($students)){
    //       //not found
    //       return redirect('/teachers');
    //     }else{
    //       //found
    //       $title = "update students";
    //       $url = url('students/update') . "/" . $id;
    //       $data = compact('students','url','title');
    //       return view('update')->with($data);
    //     }

    //   }
    //   public function update($id, Request $request){
    //     $students = students::find($id);
    //     $students->name = $request['name'];
    //     $students->email = $request['email'];
    //     $students->city = $request['city'];
    //     $students->state = $request['state'];
    //     $students->save();
    //     return redirect('/students');
    //   }





}
