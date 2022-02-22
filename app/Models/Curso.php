<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Curso extends Model
{
    use HasFactory;

    protected $fillable = [
        'shortname',
        'fullname',
        'summay',
        'showgrades',
        'startdate',
        'verificado'
    ];

    public function user(){
        return $this->belongsToMany(User::class, 'user_id');
    }
}
