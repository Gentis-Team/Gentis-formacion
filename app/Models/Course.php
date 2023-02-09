<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    use HasFactory;
    
    protected $guarded = []; 

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
