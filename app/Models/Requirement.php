<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Requirement extends Model
{
    use HasFactory;
    
    public function courses()
    {
        return $this->belongsToMany(Course::class, 'courses_requirements', 'requirement_id','course_id');    
    }
}
