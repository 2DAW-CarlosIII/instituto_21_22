<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Falta_alumno extends Model
{
    use HasFactory;
    protected $table = 'faltas_alumnos';

    protected $fillable = [
        'alumno',
        'asiste',
        'retraso',
        'justificada'
    ];
}
