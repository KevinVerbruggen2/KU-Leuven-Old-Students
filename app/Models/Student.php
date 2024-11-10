<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    use HasFactory;

    protected $table = 'studenten'; // Table name
    protected $primaryKey = 'ID';   // Primary key

    public $incrementing = false;
    protected $keyType = 'string';
    public $timestamps = false;

    // Map MySQL columns with spaces or special characters to Laravel attributes
    protected $casts = [
        'ID' => 'string',
        'Vol. (ed.)' => 'string',
        'Voornaam' => 'string',
        'Naam' => 'string',
        'Herkomst' => 'string',
        'Herkomst - modern' => 'string',
        'Bisdom' => 'string',
        'Datum inschrijving' => 'string',
        'Folio (mss)' => 'string',
        'Cat inschrijving' => 'string',
        'Cat leeftijd' => 'string',
        'Pedagogie' => 'string',
        'School (humaniora)' => 'string',
        'Studiegebied' => 'string',
        'UUID' => 'string',
    ];
}
