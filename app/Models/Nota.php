<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Nota extends Model
{
    use HasFactory;

    function notaUser(){
        return $this->belongsTo(User::class, 'user_id');
    }

    function notaMateria(){
        return $this->belongsTo(Materia::class, 'materia_id');
    }
}
