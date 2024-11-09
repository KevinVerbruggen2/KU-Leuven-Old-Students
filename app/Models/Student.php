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

    // Define accessors for easier access in views
    public function getFullNameAttribute()
    {
        return "{$this->Voornaam} {$this->Naam}";
    }

    public function getModernHerkomstAttribute()
    {
        return $this->{'Herkomst - modern'} ?? ''; // Default to empty string if value is null
    }

    public function getInschrijvingDateAttribute()
    {
        return $this->{'Datum inschrijving'} ?? ''; // Default to empty string if value is null
    }

    // Accessor for Vol. (ed.)
    public function getVolEdAttribute()
    {
        return $this->{'Vol. (ed.)'} ?? ''; // Default to empty string if value is null
    }

    // Accessor for Bisdom
    public function getBisdomAttribute()
    {
        return $this->{'Bisdom'} ?? ''; // Default to empty string if value is null
    }

    // Accessor for Folio (mss)
    public function getFolioMssAttribute()
    {
        return $this->{'Folio (mss)'} ?? ''; // Default to empty string if value is null
    }

    // Accessor for Cat leeftijd
    public function getCatLeeftijdAttribute()
    {
        return $this->{'Cat leeftijd'} ?? ''; // Default to empty string if value is null
    }

    // Accessor for Studiegied
    public function getStudiegebiedAttribute()
    {
        return $this->{'Studiegebied'} ?? ''; // Default to empty string if value is null
    }

    // Accessor for School Selectie
    public function getSchoolSelectieAttribute()
    {
        return $this->{'School (humaniora)'} ?? ''; // Default to empty string if value is null
    }

    // Accessor for Pedagogie
    public function getPedagogieAttribute()
    {
        return $this->{'Pedagogie'} ?? ''; // Default to empty string if value is null
    }

    // Accessor for Cat inschrijving
    public function getCategoryInschrijvingAttribute()
    {
        return $this->{'Cat inschrijving'} ?? ''; // Default to empty string if value is null
    }

    // Accessor for UUID
    public function getUuidAttribute()
    {
        return $this->{'UUID'} ?? ''; // Default to empty string if value is null
    }
}
