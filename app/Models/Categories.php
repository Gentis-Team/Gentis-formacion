<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Categories extends Model
{
    use HasFactory;

    public function categories(){
        return $this->belongsTo(Categories::class, 'id_courses');

        //to get all course categories
        $categories = Categories::firts();
        $categories->courses;

        $categories->courses()->where('is_admin', true)->get();
    }
}
