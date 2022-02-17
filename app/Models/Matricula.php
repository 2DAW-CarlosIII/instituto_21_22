<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Matricula extends Model
{
    use HasFactory;

    protected $fillable = [
        'alumno',
        'grupo',
    ];

    public function materia(){
        return $this->hashMany(nota::class, 'materia_id');
    }
}
