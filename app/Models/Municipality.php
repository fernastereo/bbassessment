<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Municipality extends Model
{
    use HasFactory;

    public function federal_entity(){
        return $this->belongsTo(Federal_entity::class);
    }

    public function zipcodes(){
        return $this->hasMany(Zipcode::class);
    }
}
