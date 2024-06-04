<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Students;
use PharIo\Manifest\Email;

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


       $request->validate([
        'name' => 'required',
        'email' => 'required|email|unique:students',
       ]);
      
        $students = new students;
        $students->name = $request['name'];
        $students->email = $request['email'];
        $students->state = $request['state'];
        $students->address = $request['address'];
        $students->save();
        return redirect('/students');
    }
    // delete
    public function delete(Request $request){
        $students = students::find($request->input('id'));
        if(!empty($students)){
            $students->delete();
            $data = [
                'status'=>200,
                'message'=>'Student Delete Successfully',
            ];
            echo json_encode($data);
        }
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
        $students->state = $request['state'];
        $students->address = $request['address'];
        $students->save();
        return redirect('/students');
      }

      public function search(Request $request)
      {
        $search = $request['search'] ?? "";
        if($search != ""){
            // where
            $students = students::where('name','LIKE',"%$search%")->orWhere('email','LIKE',"%search%")->get();

        }else{
            $students = students::all();
        }
        $students = students::all();
        $data = compact('students','data');
        return view ('table')->with($data);
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






