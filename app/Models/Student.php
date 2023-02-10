<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    use HasFactory;

    public function courses()
    {
        return $this->belongsToMany(Course::class, 'courses_student', 'student_id','course_id');    
    }
    public function user()
    {
        return $this->belongsTo(User::class);
}
}