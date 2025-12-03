<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Professor extends Model
{
     protected $fillable = [
        'name',
        'email',
        'password',
        'depId'
    ];
     public function department()
     {
        return $this->belongsTo(Department::class,'depId','id');
     }
}
