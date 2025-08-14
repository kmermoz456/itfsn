<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    protected $fillable = [
        'prenom','nom','email','phone','whatsapp','date_naissance','sexe',
        'ville','adresse','niveau','semestre','filiere','annee_bac','serie_bac',
        'moyenne_bac','mode','responsable_nom','responsable_tel',
    ];
}
