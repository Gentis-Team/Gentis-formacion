<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;

    public function requirements()
    {
        return $this->belongsToMany(Course::class, 'courses_categories', 'category_id','course_id');    
    }
}
