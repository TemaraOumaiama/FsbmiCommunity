<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Etudiant extends Model
{
    use HasFactory;
    protected $fillable =[
        'idEtudiant' ,
         'CodeApogee'
        ,'NomEtud',
        'PrenomEtud',
        'DateNaissance', 
       'Sexe','Email','NumTel',
       'DateCreation',
       'DateMaj',
       'Password',
         'pdp',
        'pdc'
    ];


}
