<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EmployeeController;

// Route::get('/', function () {
//     return view('welcome');
// });

//  Route::get('/', function () {
//     return view('index');
//  });

Route::get('/', [EmployeeController::class,'index']);
Route::get('/dashboard', [EmployeeController::class,'index'])->name('dashboard');


//  Route::get('/log', [EmployeeController::class,'login']);
Route::get('/rakib', function(){
    return view('log');
});
Route::get('/log', [EmployeeController::class,'login'])->name('log');

Route::get('/student', function(){
    return view('table');
});
Route::get('/table', [EmployeeController::class,'datatable'])->name('table');