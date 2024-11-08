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

        // Search by Date of Registration (Inschrijving)
        if ($request->has('inschrijving') && $request->input('inschrijving') != '') {
            // Convert the date format from YYYY-MM-DD to DD/MM/YYYY
            $inschrijvingDate = \Carbon\Carbon::createFromFormat('Y-m-d', $request->input('inschrijving'))->format('d/m/Y');

            // Apply the filter using the converted date format
            $query->where('Datum inschrijving', '=', $inschrijvingDate);
        }

        // Fetch the filtered students (limiting to 50 for pagination)
        $students = $query->limit(50)->get();

        // Pass the students data to the view
        return view('welcome', compact('students'));
    }
}
