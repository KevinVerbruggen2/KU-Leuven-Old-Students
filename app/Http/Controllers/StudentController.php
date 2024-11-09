<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    public function index(Request $request)
    {
        // Start a query to fetch students
        $query = Student::query();

        // Apply filters if search parameters are present

        // Search by First Name (Voornaam)
        if ($request->has('voornaam') && $request->input('voornaam') != '') {
            $query->where('Voornaam', 'like', '%' . $request->input('voornaam') . '%');
        }

        // Search by Last Name (Naam)
        if ($request->has('naam') && $request->input('naam') != '') {
            $query->where('Naam', 'like', '%' . $request->input('naam') . '%');
        }

        // Search by Herkomst (Origin)
        if ($request->has('herkomst') && $request->input('herkomst') != '') {
            $query->where('Herkomst - modern', 'like', '%' . $request->input('herkomst') . '%');
        }

        // Search by Date of Registration (Datum inschrijving)
        if ($request->has('inschrijving') && $request->input('inschrijving') != '') {
            $inschrijvingDate = \Carbon\Carbon::createFromFormat('Y-m-d', $request->input('inschrijving'))->format('d/m/Y');
            $query->where('Datum inschrijving', '=', $inschrijvingDate);
        }

        // Search by Studiegebied (Study Field)
        if ($request->has('studiegebied') && $request->input('studiegebied') != '') {
            $query->where('Studiegebied', '=', $request->input('studiegebied'));
        }

        // Search by Cat inschrijving (Category of Registration)
        if ($request->has('cat_inschrijving') && $request->input('cat_inschrijving') != '') {
            // Use the correct column name 'Cat inschrijving'
            $query->where('Cat inschrijving', '=', $request->input('cat_inschrijving'));
        }

        // Search by Pedagogie
        if ($request->has('pedagogie') && $request->input('pedagogie') != '') {
            $query->where('Pedagogie', '=', $request->input('pedagogie'));
        }

        // Search by School (School Selectie)
        if ($request->has('school_selectie') && $request->input('school_selectie') != '') {
            $query->where('School (humaniora)', '=', $request->input('school_selectie'));
        }

        // Fetch the filtered students (limiting to 50 for pagination)
        $students = $query->limit(50)->get();

        // Pass the students data to the view
        return view('welcome', compact('students'));
    }
}
