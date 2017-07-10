<?php
/**
 * Created by PhpStorm.
 * User: eren
 * Date: 06/07/2017
 * Time: 21:15
 */

namespace FoodBasket;


class RestaurantManager extends Person
{
    protected $restaurantId;

    /**
     * @return mixed
     */
    public function getRestaurantId()
    {
        return $this->restaurantId;
    }

    /**
     * @param mixed $restaurantId
     */
    public function setRestaurantId($restaurantId)
    {
        $this->restaurantId = $restaurantId;
    }

}