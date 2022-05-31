<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Car extends Model
{
    protected $fillable = [
        'name', 'description'
    ];

    public function purchases()
    {
        return $this->hasMany(Purchases::class);
    }

}
