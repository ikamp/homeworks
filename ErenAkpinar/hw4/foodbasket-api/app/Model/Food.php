<?php

namespace App\Model;

class Food extends BaseModel
{
    protected $table = 'food';
    public $timestamps = false;

    public function restaurant()
    {
        return self::belongsTo('App\Model\Restaurant' , 'id');
    }
}
