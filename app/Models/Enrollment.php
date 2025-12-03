<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Enrollment extends Model
{
     protected $fillable = [
        'studentId',
        'courseId',
        'professorId',
        'mark'
    ];

     public function student()
     {
        return $this->belongsTo(Student::class,'studentId','id');
     }
      public function course()
     {
        return $this->belongsTo(Course::class,'courseId','id');
     }
      public function professor()
     {
        return $this->belongsTo(Professor::class,'professorId','id');
     }
}

