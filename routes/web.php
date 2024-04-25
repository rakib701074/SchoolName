<?php




use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EmployeeController;
use App\Http\Controllers\StudentsController;
use App\Http\Controllers\SigninController;
use App\Http\Controllers\SignupController;
// use App\Http\Controllers\SidebarController;


Route::get('/', [StudentsController::class,'index']);
Route::get('/dashboard', [EmployeeController::class,'index'])->name('dashboard');

// Route::get('/', function (){
//     return view('sidebar');
// });
// Route::get('/sohel', [StudentsController::class,'navbar']);


// Route::get('/', function(){
//     return view('topheader');
// });
// Route::get('/', [EmployeeController::class,'topheader']);


//  Route::get('/log', [EmployeeController::class,'login']);
Route::get('/rakib', function(){
    return view('log');
});
Route::get('/log', [EmployeeController::class,'login'])->name('log');

Route::get('/student', function(){
    return view('table');
});
Route::get('/students', [StudentsController::class,'studentslist'])->name('students');

Route::get('/signin', function(){
    return view('signin');
});
Route::get('/signin', [SigninController::class,'Studentsignin'])->name('signin');

Route::get('/signup', function(){
    return view('signup');
});
Route::get('/signup', [SignupController::class,'Studentsignup'])->name('signup');


Route::get('/profile', function(){
    return view('profile');
});
Route::get('/profile', [StudentsController::class,'studentprofile'])->name('profile');
