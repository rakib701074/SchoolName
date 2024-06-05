[1mdiff --git a/app/Http/Controllers/StudentsController.php b/app/Http/Controllers/StudentsController.php[m
[1mindex c75f421..8103976 100644[m
[1m--- a/app/Http/Controllers/StudentsController.php[m
[1m+++ b/app/Http/Controllers/StudentsController.php[m
[36m@@ -10,11 +10,7 @@[m [mclass StudentsController extends Controller[m
 {[m
     [m
     public function index(){[m
[31m-        // if(Auth::check()){[m
         return view('index');[m
[31m-        // }else{[m
[31m-            // return redirect()->route('signup');[m
[31m-        // }[m
     }[m
 [m
     public function studentslist(Request $request){[m
[36m@@ -59,17 +55,32 @@[m [mpublic function updateStudent(Request $request){[m
         return redirect('/students');[m
     }[m
     // delete[m
[31m-    public function delete(Request $request){[m
[31m-        $students = students::find($request->input('id'));[m
[31m-        if(!empty($students)){[m
[31m-            $students->delete();[m
[31m-            $data = [[m
[31m-                'status'=>200,[m
[31m-                'message'=>'Student Delete Successfully',[m
[31m-            ];[m
[31m-            echo json_encode($data);[m
[31m-        }[m
[31m-    }[m
[32m+[m[32m    public function delete($id){[m
[32m+[m[32m          $students = students::find($id);[m
[32m+[m[32m        //   echo "<pre>";[m
[32m+[m[32m        //   print_r($students);die;[m
[32m+[m[32m          if (!is_null($students)) {[m
[32m+[m[32m              $students->delete();[m
[32m+[m[32m          }[m
[32m+[m[32m          return redirect('/students');[m
[32m+[m[32m      }[m
[32m+[m
[32m+[m[41m          [m
[32m+[m
[32m+[m
[32m+[m
[32m+[m
[32m+[m
[32m+[m[32m        // $students = students::find($request->input('id'));[m
[32m+[m[32m        // if(!empty($students)){[m
[32m+[m[32m        //     $students->delete();[m
[32m+[m[32m        //     $data = [[m
[32m+[m[32m        //         'status'=>200,[m
[32m+[m[32m        //         'message'=>'Student Delete Successfully',[m
[32m+[m[32m        //     ];[m
[32m+[m[32m        //     echo json_encode($data);[m
[32m+[m[32m        // }[m
[32m+[m[32m    // }[m
 [m
 [m
     // edit....................................[m
[36m@@ -91,20 +102,20 @@[m [mpublic function update($id, Request $request){[m
         return redirect('/students');[m
       }[m
 [m
[31m-      public function search(Request $request)[m
[31m-      {[m
[31m-        $search = $request['search'] ?? "";[m
[31m-        if($search != ""){[m
[31m-            // where[m
[31m-            $students = students::where('name','LIKE',"%$search%")->orWhere('email','LIKE',"%search%")->get();[m
[32m+[m[32m    //   public function search(Request $request)[m
[32m+[m[32m    //   {[m
[32m+[m[32m    //     $search = $request['search'] ?? "";[m
[32m+[m[32m    //     if($search != ""){[m
[32m+[m[32m    //         // where[m
[32m+[m[32m    //         $students = students::where('name','LIKE',"%$search%")->orWhere('email','LIKE',"%search%")->get();[m
 [m
[31m-        }else{[m
[31m-            $students = students::all();[m
[31m-        }[m
[31m-        $students = students::all();[m
[31m-        $data = compact('students','data');[m
[31m-        return view ('table')->with($data);[m
[31m-      }[m
[32m+[m[32m    //     }else{[m
[32m+[m[32m    //         $students = students::all();[m
[32m+[m[32m    //     }[m
[32m+[m[32m    //     $students = students::all();[m
[32m+[m[32m    //     $data = compact('students','data');[m
[32m+[m[32m    //     return view ('table')->with($data);[m
[32m+[m[32m    //   }[m
     [m
 [m
 [m
[1mdiff --git a/app/Http/Controllers/TeacherController.php b/app/Http/Controllers/TeacherController.php[m
[1mindex 029e2ab..64420b0 100644[m
[1m--- a/app/Http/Controllers/TeacherController.php[m
[1m+++ b/app/Http/Controllers/TeacherController.php[m
[36m@@ -32,7 +32,6 @@[m [mpublic function teacherList(request $request){[m
 [m
         $teacher = new teacher;[m
         $teacher->name = $request['name'];[m
[31m-        $teacher->number = $request['number'];[m
         $teacher->age = $request['age'];[m
         $teacher->address = $request['address'];[m
         $teacher->save();[m
[36m@@ -40,17 +39,18 @@[m [mpublic function teacherList(request $request){[m
     }[m
 [m
     // delete[m
[31m-    public function delete(Request $request){[m
[31m-      $teacher = teacher::find($teacher->input('in'));[m
[32m+[m[32m      public function delete($id)[m
[32m+[m[32m      {[m
[32m+[m[32m          $teacher = teacher::find($id);[m
[32m+[m[32m          // echo "<pre>";[m
[32m+[m[32m          // print_r($teacher);die;[m
[32m+[m[32m          if (!is_null($teacher)) {[m
[32m+[m[32m              $teacher->delete();[m
[32m+[m[32m          }[m
[32m+[m[32m          return redirect('/teachers');[m
[32m+[m[32m      }[m
 [m
[31m-            // echo "<pre>";[m
[31m-        // print_r($teacher->toArray());[m
[31m-      [m
[31m-        // }[m
[31m-        // return redirect('/teachers');[m
[31m-      [m
     [m
[31m-      }[m
 [m
 [m
       public function edit($id){[m
[36m@@ -70,7 +70,6 @@[m [mpublic function edit($id){[m
       public function update($id, Request $request){[m
         $teacher = teacher::find($id);[m
         $teacher->name = $request['name'];[m
[31m-        $teacher->number = $request['number'];[m
         $teacher->age = $request['age'];[m
         $teacher->address = $request['address'];[m
         $teacher->save();[m
[36m@@ -84,7 +83,7 @@[m [mpublic function view($id){[m
         $teacher = teacher::find($id);[m
         $data = compact('teacher');[m
         // echo '<pre>';[m
[31m-        // print_r($teacher->toArray());[m
[32m+[m[32m        // print_r($teacher->toArray());exit;[m
         return view('view')->with($data);[m
       }[m
 [m
[1mdiff --git a/app/Http/Middleware/Webguard.php b/app/Http/Middleware/Webguard.php[m
[1mindex 943b708..acc87f8 100644[m
[1m--- a/app/Http/Middleware/Webguard.php[m
[1m+++ b/app/Http/Middleware/Webguard.php[m
[36m@@ -15,17 +15,17 @@[m [mclass Webguard[m
      *[m
      * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next[m
      */[m
[31m-    public function handle(Request $request, Closure $next,string $role): Response[m
[32m+[m[32m    public function handle(Request $request, Closure $next): Response[m
     {    [m
       [m
[31m-      if(Auth::user()->role == $role){[m
[31m-        return $next($request);[m
[31m-      }elseif(Auth::user()->role == "reader"){[m
[31m-        return redirect()->route('register');[m
[31m-      }else{[m
[31m-        return redirect()->route('login');[m
[31m-      }[m
[31m-    } [m
[32m+[m[32m    //   if(Auth::user()->role == $role){[m
[32m+[m[32m    //     return $next($request);[m
[32m+[m[32m    //   }elseif(Auth::user()->role == "reader"){[m
[32m+[m[32m    //     return redirect()->route('register');[m
[32m+[m[32m    //   }else{[m
[32m+[m[32m    //     return redirect()->route('login');[m
[32m+[m[32m    //   }[m
[32m+[m[41m    [m
 [m
 [m
 [m
[36m@@ -34,38 +34,15 @@[m [mpublic function handle(Request $request, Closure $next,string $role): Response[m
 [m
 [m
 [m
[31m-    }[m
[32m+[m[41m    [m
 [m
[31m-      //    if(Auth::check()){  [m
[31m-      //     return $next($request);[m
[31m-      // //   // return redirect('/');[m
[31m-      // }else{[m
[31m-      //   return redirect('signup')->with('msg','Please Login First');[m
 [m
[31m-      // }[m
 [m
 [m
 [m
 [m
 [m
 [m
[31m-[m
[31m-[m
[31m-[m
[31m-[m
[31m-[m
[31m-[m
[31m-[m
[31m-[m
[31m-[m
[31m-[m
[31m-[m
[31m-        // if(Auth::user()->role == $role){[m
[31m-        //   return $next($request);[m
[31m-[m
[31m-        // }elseif(Auth::user()->role == "re")[m
[31m-            [m
[31m-[m
           // if(auth()->check()){[m
           //  [m
           // }[m
[36m@@ -80,11 +57,11 @@[m [mpublic function handle(Request $request, Closure $next,string $role): Response[m
           // }[m
     // }[m
 [m
[31m-          //   if(Auth::check() && Auth::user()->role == $role){[m
[31m-          //     return $next($request);[m
[31m-          //   }else{[m
[31m-          //     return redirect()->route('login');[m
[31m-          //   }[m
[31m-          // } [m
[31m-        [m
[31m-// }[m
[32m+[m[32m            if(Auth::check() ){[m
[32m+[m[32m              return $next($request);[m
[32m+[m[32m            }else{[m
[32m+[m[32m              return redirect()->route('login');[m
[32m+[m[32m            }[m
[32m+[m[32m          }[m[41m [m
[32m+[m[32m}[m
[41m+[m
[1mdiff --git a/public/frontend/css/app.v1.css b/public/frontend/css/app.v1.css[m
[1mindex 915eec2..bdda0c5 100644[m
[1m--- a/public/frontend/css/app.v1.css[m
[1m+++ b/public/frontend/css/app.v1.css[m
[36m@@ -13022,6 +13022,10 @@[m [m.bg-dark .bg {[m
     background-color: #2e3e4e;[m
 }[m
 [m
[32m+[m[32ma{[m
[32m+[m[32m    padding: 5px 15px;[m
[32m+[m[32m    color: black;[m
[32m+[m[32m}[m
 .bg-dark a {[m
     color: #adbece;[m
 }[m
[36m@@ -13633,7 +13637,7 @@[m [m.pos-abt {[m
 }[m
 [m
 .line {[m
[31m-    *width: 100%;[m
[32m+[m[32m    width: 100%;[m
     height: 2px;[m
     margin: 10px 0;[m
     font-size: 0;[m
[36m@@ -14340,5 +14344,13 @@[m [m@media (max-width: 767px) {[m
     .wrapper-lg {[m
         padding: 15px;[m
     }[m
[32m+[m[32m    /* .FormTeacher{[m
[32m+[m[32m        position: absolute;[m
[32m+[m[32m        left: 20%;[m
[32m+[m[32m    } */[m
[32m+[m[32m  h3{[m
[32m+[m[32m    position: absolute;[m
[32m+[m[32m    left: 20%;[m
[32m+[m[32m  }[m
 }[m
 [m
[1mdiff --git a/resources/views/auth/login.blade.php b/resources/views/auth/login.blade.php[m
[1mindex fe6d01b..56f9564 100644[m
[1m--- a/resources/views/auth/login.blade.php[m
[1m+++ b/resources/views/auth/login.blade.php[m
[36m@@ -15,16 +15,16 @@[m
 [m
 <body class="">[m
     <section id="content" class="m-t-lg wrapper-md animated fadeInUp">[m
[31m-        <div class="container aside-xxl"> <a class="navbar-brand block" href="index.html">Notebook</a>[m
[32m+[m[32m        <div class="container aside-xxl"> <a class="navbar-brand block"></a>[m
             <section class="panel panel-default bg-white m-t-lg">[m
[31m-                <header class="panel-heading text-center"> <strong>Sign in</strong> </header>[m
[32m+[m[32m                <header class="panel-heading text-center"> <strong>LOGIN</strong> </header>[m
                 [m
                 <form action="{{route('login')}}" class="panel-body wrapper-lg" method="post">[m
                     @csrf[m
                     <div class="form-group">[m
                          <label class="control-label">Email</label>[m
                         <input type="email" name="email"[m
[31m-                            placeholder="test@example.com" class="form-control input-lg"> [m
[32m+[m[32m                            placeholder="Enter Your Email" class="form-control input-lg">[m[41m [m
                             [m
                             <x-input-error :messages="$errors->get('email')" class="mt-2" />[m
                         </div>[m
[36m@@ -35,40 +35,35 @@[m
                              [m
                             <x-input-error :messages="$errors->get('password')" class="mt-2" />[m
                          </div>[m
[31m-                    <div class="checkbox"> <label> <input type="checkbox">[m
[31m-                        <span class="ms-2 text-sm text-gray-600">{{ __('Remember me') }}</span>[m
[31m-                    </label> [m
[32m+[m[32m                    <div>[m
[32m+[m[32m                         {{-- <label>  --}}[m
[32m+[m[32m                        {{-- <input type="checkbox">[m
[32m+[m[32m                        <span class="ms-2 text-sm text-gray-600 text-center">{{ __('Remember me') }}</span> --}}[m
[32m+[m[32m                    {{-- </label>  --}}[m
                 </div>[m
[31m-[m
[32m+[m[41m                [m
                 @if (Route::has('password.request'))[m
                      <a  href="{{ route('password.request') }}"[m
[31m-                        class="pull-right m-t-xs">[m
[32m+[m[32m                        class="pull-left m-t-xs text-bold">[m
                         <small>[m
                           [m
[31m-                            Forgot password?[m
[32m+[m[32m                            Forgot password ?[m
 [m
                         </small>[m
                     </a> [m
                         @endif[m
[31m-                        [m
[32m+[m
[32m+[m[32m                        <div class="pull-right">[m
                         <button type="submit"[m
[31m-                        class="btn btn-primary">Sign in</button>[m
[31m-                    <div class="line line-dashed"></div> [m
[31m-                    <a href="#" class="btn btn-facebook btn-block m-b-sm"><i[m
[31m-                            class="fa fa-facebook pull-left"></i>Sign in with Facebook</a> <a href="#"[m
[31m-                        class="btn btn-twitter btn-block"><i class="fa fa-twitter pull-left"></i>Sign in with[m
[31m-                        Twitter</a>[m
[32m+[m[32m                         class="btn btn-primary">Sign in</button>[m
[32m+[m[32m                        </div><br><br>[m
                     <div class="line line-dashed"></div>[m
[31m-                    <p class="text-muted text-center"><small>Do not have an account?</small></p> <a href="{{url('/signup')}}"[m
[32m+[m[32m                    {{-- <p class="text-muted text-center"><small>Do not have an account?</small></p> --}}[m
[32m+[m[32m                     <a href="{{url('/register')}}"[m
                         class="btn btn-default btn-block">Create an account</a>[m
                 </form>[m
                  <br>[m
 [m
[31m-                {{-- @if (Session('msg'))[m
[31m-                {{-- <div class="alert alert-danger"> --}}[m
[31m-                    {{-- <strong>{{Session('msg')}}</strong> --}}[m
[31m-                {{-- </div> --}}[m
[31m-                {{-- @endif --}} -[m
 [m
             </section>[m
         </div>[m
[1mdiff --git a/resources/views/backup b/resources/views/backup[m
[1mindex e893368..8f3734c 100644[m
[1m--- a/resources/views/backup[m
[1m+++ b/resources/views/backup[m
[36m@@ -132,4 +132,17 @@[m
 </body>[m
 [m
 [m
[31m-</html>[m
\ No newline at end of file[m
[32m+[m[32m</html>[m
[41m+[m
[41m+[m
[41m+[m
[41m+[m
[41m+[m
[41m+[m
[41m+[m
[41m+[m
[41m+[m
[41m+[m
[41m+[m
[41m+[m
[41m+[m
[1mdiff --git a/resources/views/components/nav-link.blade.php b/resources/views/components/nav-link.blade.php[m
[1mindex 5c101a2..925dbda 100644[m
[1m--- a/resources/views/components/nav-link.blade.php[m
[1m+++ b/resources/views/components/nav-link.blade.php[m
[36m@@ -2,7 +2,7 @@[m
 [m
 @php[m
 $classes = ($active ?? false)[m
[31m-            ? 'inline-flex items-center px-1 pt-1 border-b-2 border-indigo-400 text-sm font-medium leading-5 text-gray-900 focus:outline-none focus:border-indigo-700 transition duration-150 ease-in-out'[m
[32m+[m[32m            ? 'inline-flex items-center px-1 pt-1 border-b-2 text-center border-indigo-400 text-sm font-medium leading-5 text-gray-900 focus:outline-none focus:border-indigo-700 transition duration-150 ease-in-out'[m
             : 'inline-flex items-center px-1 pt-1 border-b-2 border-transparent text-sm font-medium leading-5 text-gray-500 hover:text-gray-700 hover:border-gray-300 focus:outline-none focus:text-gray-700 focus:border-gray-300 transition duration-150 ease-in-out';[m
 @endphp[m
 [m
[1mdiff --git a/resources/views/components/responsive-nav-link.blade.php b/resources/views/components/responsive-nav-link.blade.php[m
[1mindex 43b91e7..a8eb2e1 100644[m
[1m--- a/resources/v