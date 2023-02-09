<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    use HasFactory;
    
    protected $guarded = []; 

    public function requirements()
    {
        return $this->belongsToMany(Requirement::class, 'courses_requirements', 'course_id','requirement_id');    
    }

    public function categories()
    {
        return $this->belongsToMany(Category::class, 'courses_categories', 'course_id','category_id');    
    }

    public function phones()
    {
        return $this->belongsToMany(Phone::class, 'courses_phones', 'course_id','phone_id');    
    }

    public function emails()
    {
        return $this->belongsToMany(Email::class, 'courses_emails', 'course_id','email_id');    
    }

    public function fetchFromDB($title)
    {
        $start_time = now();
        $courses = Course::where('title', 'like', "%{$title}%")->get();
        $finish_time = now();

        return response()->json([
            'data' => [
                'courses' => $courses,
                'duration_in_milliseconds' => $finish_time->diffInMilliseconds($start_time)
            ],
        ]);
    }
}
