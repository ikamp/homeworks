<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Log;

class User extends Model
{
    protected $table = 'user';
    public $timestamps = false;

    static function addNewuser($username, $email, $password, $adress)
    {
        $user = new User();
        $user->userName = $username;
        $user->email = $email;
        $user->password = $password;
        $user->adress = $adress;
        $user ->save();
        Log::info('User Added: '.$user->userName);
        return $user;
    }
}
