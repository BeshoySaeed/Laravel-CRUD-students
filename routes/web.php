<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\StudentController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });

// Auth::routes();

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/', [StudentController::class, 'index'])->name('students');

Route::get('student/create', [StudentController::class, 'create'])->name('student-create');

Route::post('student/created', [StudentController::class, 'store'])->name('student-store');

Route::get('/student/{id}', [StudentController::class, 'show'])->name('studetn-data');

Route::get('student/delete/{id}', [StudentController::class, 'destroy'])->name('student-delete');

Route::get('/student/edit/{id}', [StudentController::class, 'edit'])->name('student-edit');

Route::post('/student/update/{id}', [StudentController::class, 'update'])->name('student-update');
