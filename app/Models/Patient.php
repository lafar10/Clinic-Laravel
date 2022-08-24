<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Patient extends Model
{
    use HasFactory;

    protected $table = "patients";

    public $fillable = [
        'id',
        'nom',
        'prenom',
        'maladie_type',
        'tele',
        'email',
        'created_at'
    ];
}
