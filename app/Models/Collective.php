<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Collective extends Model
{
    use HasFactory;
    
    public function courses()
    {
        return $this->belongsToMany(Courses::class, 'courses_collective', 'courses_id','collective_id');    
    }
}
