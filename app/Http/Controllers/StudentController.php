<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    public function index(Request $request)
    {
        $query = Student::query();

        if ($request->has('voornaam') && $request->input('voornaam') != '') {
            $query->where('Voornaam', 'like', '%' . $request->input('voornaam') . '%');
        }

        if ($request->has('naam') && $request->input('naam') != '') {
            $query->where('Naam', 'like', '%' . $request->input('naam') . '%');
        }

        if ($request->has('herkomst') && $request->input('herkomst') != '') {
            $herkomst = $request->input('herkomst');
            $query->where(function ($subQuery) use ($herkomst) {
                $subQuery->where('Herkomst', 'like', '%' . $herkomst . '%')
                    ->orWhere('Herkomst - modern', 'like', '%' . $herkomst . '%');
            });
        }

        if ($request->has('inschrijving') && $request->input('inschrijving') != '') {
            $inschrijvingDate = \Carbon\Carbon::createFromFormat('Y-m-d', $request->input('inschrijving'))->format('d/m/Y');
            $query->where('Datum inschrijving', '=', $inschrijvingDate);
        }

        if ($request->has('studiegebied') && $request->input('studiegebied') != '') {
            $query->where('Studiegebied', '=', $request->input('studiegebied'));
        }

        if ($request->has('cat_inschrijving') && $request->input('cat_inschrijving') != '') {
            $query->where('Cat inschrijving', '=', $request->input('cat_inschrijving'));
        }

        if ($request->has('cat_leeftijd') && $request->input('cat_leeftijd') != '') {
            $query->where('Cat leeftijd', '=', $request->input('cat_leeftijd'));
        }

        if ($request->has('pedagogie') && $request->input('pedagogie') != '') {
            $query->where('Pedagogie', '=', $request->input('pedagogie'));
        }

        if ($request->has('school_selectie') && $request->input('school_selectie') != '') {
            $query->where('School (humaniora)', '=', $request->input('school_selectie'));
        }

        $students = $query->paginate(50);

        return view('welcome', compact('students'));
    }
}
