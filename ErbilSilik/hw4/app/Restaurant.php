<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Restaurant extends Model
{
    protected $table = "restaurant";

      /**
     * An restaurant can have many food
     * 
     * @return Illuminate\Database\Eloquent\Relations\HasMany; 
     */
      public function food()
      {
       return $this->hasMany('App\Food', 'restaurantid', 'id');
    }
 }
