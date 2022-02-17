<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Materia extends Model
{
    use HasFactory;

    protected $fillable = [
        'nombre'
    ];
    public function notas(){
        return $this->hashMany(nota::class,  'materia_id');
    }
}
