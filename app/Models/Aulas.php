<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Aulas extends Model
{
    use HasFactory;
    protected $fillable = [
        'numero',
        'aulascol',
        'edificio',
        'planta',
        'centro_id'
    ];
}
