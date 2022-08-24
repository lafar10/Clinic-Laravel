<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Payment extends Model
{
    use HasFactory;

    protected $table = "payments";

    public $fillable = [
        'id',
        'nom',
        'prenom',
        'maladie_type',
        'montant',
        'payment_method',
        'status',
        'created_at'
    ];
}
