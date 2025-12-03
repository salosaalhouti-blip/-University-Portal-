<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Department extends Model
{

     protected $fillable = [
        'name',
        'symbol'
    ];

    public function professores()
    {
        return $this->hasMany(Professor::class,'depId','id');
    }
}
