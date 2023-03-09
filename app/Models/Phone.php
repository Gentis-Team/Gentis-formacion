<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Phone extends Model
{
    use HasFactory;

    public function courses()
    {
        return $this->belongsToMany(Course::class, 'courses_phones', 'phone_id','course_id');    
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
