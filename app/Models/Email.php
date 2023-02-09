<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Email extends Model
{
    use HasFactory;

    public function courses()
    {
        return $this->belongsToMany(Course::class, 'courses_email', 'email_id','course_id');    
    }
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
