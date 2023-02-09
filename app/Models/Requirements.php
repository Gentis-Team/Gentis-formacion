<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Requirements extends Model
{
    use HasFactory;
    
    public function requirements()
    {
        return $this->belongsToMany(Requirements::class, 'courses_requirements', 'courses_id','requirements_id');    
    }
}
