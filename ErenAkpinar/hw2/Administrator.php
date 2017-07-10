<?php
/**
 * Created by PhpStorm.
 * User: eren
 * Date: 06/07/2017
 * Time: 21:07
 */

namespace FoodBasket;


class Administrator extends Person
{
    protected $role;

    /**
     * @return mixed
     */
    public function getRole()
    {
        return $this->role;
    }

    /**
     * @param mixed $role
     */
    public function setRole($role)
    {
        $this->role = $role;
    }
}