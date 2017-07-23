<?php

namespace App\Model;

class User extends BaseModel
{
    protected $table = 'user';
    public $timestamps = false;

    public static function getUserOrders($id)
    {
        return self::with('order')->find($id);
    }

    public function orders()
    {
        return self::hasMany('App\Model\Order', 'userId');
    }
}
