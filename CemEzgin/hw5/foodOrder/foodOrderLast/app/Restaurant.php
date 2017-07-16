<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Restaurant extends Model
{
    protected $table = 'restaurant';
    public $timestamps = 'false';

    public function foods()
    {
        return $this->hasMany('App\Food', 'restaurantId','id');
    }
}
