<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Settlementtype extends Model
{
    use HasFactory;

    public function settlements(){
        return $this->hasMany(Settlement::class);
    }
}
