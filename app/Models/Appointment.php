<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Appointment extends Model
{
    use HasFactory;

    protected $table = "appointments";

    public $fillable = [
        'id',
        'nom',
        'prenom',
        'tele',
        'type_maladie',
        'montant',
        'date_appointment',
        'heure_appointment',
        'status',
        'created_at'
    ];
    
    protected $casts = [
    'created_at' => 'date', 
    'date_appointment' => 'date'
    ];
}
