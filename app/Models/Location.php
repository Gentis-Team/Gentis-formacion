<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Location extends Model
{
    use HasFactory;

    public function location(){
        return $this->belongsTo(Location::class, 'id_courses');

        //to get all course locations
        $location = Location::find();
        $location->courses;

        //building a query
        // $courses = Courses::where('title', true)->get();
        // $location = Courses::whereBelongsTo($courses)->get();    
    }
}
