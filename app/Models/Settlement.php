<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Settlement extends Model
{
    use HasFactory;

    public function zipcode()
    {
        return $this->belongsTo(Zipcode::class);
    }

    public function settlementtype(){
        return $this->belongsTo(Settlementtype::class);
    }
}
