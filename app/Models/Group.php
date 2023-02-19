<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Group extends Model
{
    use HasFactory;

    protected $guarded = [];
    
    public function courses()
    {
        return $this->belongsToMany(Course::class, 'courses_groups', 'course_id','group_id');    
    }
}