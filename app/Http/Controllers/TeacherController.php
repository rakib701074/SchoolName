<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\teacher;

class TeacherController extends Controller
{
    public function tableList(){
        $teacher = teacher::all();
           $data = compact('teacher');
        return view('teachertable')->with($data);
    }
// create
    public function formList(Request $request){
    

      $url = url('/teacher');
      $title = "Create form";
      $data = compact('url', 'title');
        return view('teacherform')->with($data);
    }


    public function teacherList(request $request){
      $request->validate([
        'name' => 'required|string',
        'age' => 'required',
        'address' => 'required',
        
       ]);

        $teacher = new teacher;
        $teacher->name = $request['name'];
        $teacher->age = $request['age'];
        $teacher->address = $request['address'];
        $teacher->save();
        return redirect('/teachers');
    }

    // delete
      public function delete(Request $request){
        if(!empty($request->id)){
          $teacher = teacher::find($request->id);
          if (!is_null($teacher)) {
              $teacher->delete();
          }
          return response()->json([
            'status'=>103,
            'message' => 'Teacher deleted successfully'
          ]);
        }else{
          return response()->json([
            'status'=>500,
            'message' => 'Parameter missing'
          ]);
        }
      }


    

    


      public function edit($id){
        $teacher = teacher::find($id);
        if(is_null($teacher)){
          //not found
          return redirect('/teachers');
        }else{
          //found
          $title = "update teacher";
          $url = url('teacher/update') . "/" . $id;
          $data = compact('teacher','url','title');
          return view('edit')->with($data);
        }

      }
      public function update($id, Request $request){
        $teacher = teacher::find($id);
        $teacher->name = $request['name'];
        $teacher->age = $request['age'];
        $teacher->address = $request['address'];
        $teacher->save();
        return redirect('/teachers');
      }

      // public function search(Request $request){
      //   $output='';
      //   $teacher= teacher::where('name','LIKE','%'.$request->search.'%')->orWhere('email','LIKE','%'.$request->search.'%')->get();

      //   foreach($teacher as $teachers){
      //       $output.=

      //       '<tr>
      //       <td>'.$teachers->name.'</td>
      //       <td>'.$teachers->email.'</td>
      //       </tr>';
      //   }
      //   return response($output);
      // }

      

      // public function view($id){
      //   $teacher = teacher::find($id);
      //   $data = compact('teacher');
      //   // echo '<pre>';
      //   // print_r($teacher->toArray());exit;
      //   return view('view')->with($data);
      // }

      public function view(Request $request){
        if(!empty($request->id)){
          $teacher = teacher::find($request->id);
          if(!is_null($teacher)) {
            $teacher->view();
          }
          return response()->json([
            'status'=>105,
            'message'=>'view successfully' 
          ]);
        }else{
          return response()->json([
            'status'=>400,
            'message'=>'view parameter missing'
          ]);
        }
      }

      public function viewUpdate($id, Request $request){
        $teacher = teacher::find($id);
        $teacher->name = $request['name'];
        $teacher->number = $request['number'];
        $teacher->age = $request['age'];
        $teacher->address = $request['address'];
        $teacher->save();
        return redirect('/teachers');
      }

}