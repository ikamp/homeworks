<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Food extends Model
{
    protected $table = 'food';
    public $timestamps = false;

    public function restaurant()
    {
        return self::hasOne('App\Model\Restaurant', 'id');
    }
}
