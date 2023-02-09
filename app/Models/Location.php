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
        $location = Location::firts();
        $location->courses;
        //building a query
        $location->courses()->where('is_admin', true)->get();
    }
}
