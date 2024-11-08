<?php

use App\Models\Student;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentController;

// Default route for the home page
Route::get('/', function () {
    // Fetch the first 50 students
    $students = Student::limit(50)->get();

    // Pass the students data to the view
    return view('welcome', compact('students'));
});

// Define the /students route and name it "students.index"
Route::get('/students', [StudentController::class, 'index'])->name('students.index');


