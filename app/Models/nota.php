<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class nota extends Model
{
    //protected $primaryKey = 'user_id';
    use HasFactory;

    public function user(){
        return $this->belongsTo(User::class,  'user_id');
    }
    public function materia(){
        return $this->belongsTo(Materia::class,  'materia_id');
    }
}
