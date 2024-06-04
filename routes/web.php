<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EmployeeController;
use App\Http\Controllers\StudentsController;
use App\Http\Controllers\TeacherController;




// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/', function () {  return view('welcome');});
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    Route::get('/students', [StudentsController::class,'studentslist'])->name('students');
});



// Route::get('/', [StudentsController::class,'index']);
Route::get('/dashboard', [EmployeeController::class,'index'])->name('dashboard');

Route::get('/rakib', function(){
    return view('log');
});
Route::get('/log', [EmployeeController::class,'login'])->name('log');

Route::get('/student', function(){
    return view('table');
});
Route::get('/students', [StudentsController::class,'studentslist'])->name('students');


Route::get('/profile', function(){
    return view('profile');
});
Route::get('/profile', [StudentsController::class,'studentprofile'])->name('profile');

// student
Route::post('/student/delete' , [StudentsController::class,'delete'])->name('student-delete');

Route::get('/student/edit/{id}', [StudentsController::class,'edit'])->name('student-edit');
Route::post('/student/update/{id}', [StudentsController::class,'update'])->name('student-update');


Route::get('/addStudent', [StudentsController::class,'addStudent'])->name('add-student');
Route::post('/addStudent', [StudentsController::class,'updateStudent'])->name('add-student');

Route::get('/student',[StudentsController::class, 'search']);





// teachers
Route::get('/teacher' ,function(){
    return view('teacher');
});
Route::get('/teachers', [TeacherController::class,'tableList'])->name('teachers_');

Route::get('/teacher/delete', [TeacherController::class,'delete'])->name('teacher-delete');



Route::get('/eye/view/{id}', [TeacherController::class,'view'])->name('student-view');
Route::get('/eye/table/{id}', [TeacherController::class,'viewUpdate'])->name('view-table');



Route::get('/teacher/edit/{id}', [TeacherController::class,'edit'])->name('teacher-edit');
Route::post('/teacher/update/{id}', [TeacherController::class,'update'])->name('teacher-update');


Route::get('/teacher', [TeacherController::class,'formList'])->name('add-teachers');

Route::POST('/teacher', [TeacherController::class,'teacherList'])->name('add-teachers');

<<<<<<< HEAD
require __DIR__.'/auth.php';
=======


>>>>>>> a4f6043 (bug resolve student and teacher)
