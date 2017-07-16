<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Food extends Model
{
    public $timestamps = false;
    protected $table = 'food';

    public function restaurant()
     {
         return $this::hasOne('App\Restaurant' , 'id');
     }


}
