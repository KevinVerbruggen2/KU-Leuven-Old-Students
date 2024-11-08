<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;

class StudentController extends Controller
{

    public function index()
    {
        // Fetch the first 50 students
        $students = Student::limit(50)->get();

        // Pass the students data to the view
        return view('students.index', compact('students'));
    }

}


