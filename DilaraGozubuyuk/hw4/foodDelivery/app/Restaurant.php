<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Restaurant extends Model
{
    public $timestamps = false;
    protected $table = 'restaurant';

    public function foods()
    {
        return $this->hasMany('App\Food','restaurant','id');
    }

}
