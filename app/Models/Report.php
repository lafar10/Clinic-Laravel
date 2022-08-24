<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Report extends Model
{
    use HasFactory;

    protected $table = "reports";

    public $fillable = [
        'id',
        'nom',
        'prenom',
        'date_creation',
        'content',
        'content2',
        'content3',
        'content4',
        'content5',
        'letter',
        'created_at'
    ];
}
