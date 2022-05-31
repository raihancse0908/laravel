<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Purchases extends Model
{   
    protected $fillable = [
        'car_id', 'supplier', 'quantity'
    ];

    public function car()
    {
        return $this->belongsTo(Car::class);
    }
}
