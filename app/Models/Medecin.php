<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Medecin extends Model
{
    public $timestamps = false;

    protected $fillable = ["nom", "prenom", "adresse", "tel", "spe", "departement"];

    use HasFactory;
}
