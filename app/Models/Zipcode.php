<?php

namespace App\Models;

use App\Transformers\ZipcodeTransformer;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Zipcode extends Model
{
    use HasFactory;

    public $transformer = ZipcodeTransformer::class;

    public function municipality(){
        return $this->belongsTo(Municipality::class);
    }

    public function settlements(){
        return $this->hasMany(Settlement::class);
    }
}
