<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Doctor extends Model
{
    use HasFactory;

    protected $table = "doctors";

    public $fillable = [
        'id',
        'nom',
        'prenom',
        'tele',
        'adresse',
        'email',
        'specialite',
        'created_at'
    ];
}
