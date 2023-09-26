<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Critical_rate extends Model
{
    use HasFactory;
   
    public function Movies() {
        return $this->hasMany(Movie::class,'movie_id');
    }
}
