<?php
/**
 * Created by PhpStorm.
 * User: yalcin
 * Date: 07.07.2017
 * Time: 07:07
 */
class Restaurant
{
    protected $restaurantid;
    protected $restaurantname;
    protected $restaurantpoint;

    /**
     * @return mixed
     */
    public function getRestaurantid()
    {
        return $this->restaurantid;
    }

    /**
     * @param mixed $restaurantid
     */
    public function setRestaurantid($restaurantid)
    {
        $this->restaurantid = $restaurantid;
    }

    /**
     * @return mixed
     */
    public function getRestaurantname()
    {
        return $this->restaurantname;
    }

    /**
     * @param mixed $restaurantname
     */
    public function setRestaurantname($restaurantname)
    {
        $this->restaurantname = $restaurantname;
    }

    /**
     * @return mixed
     */
    public function getRestaurantpoint()
    {
        return $this->restaurantpoint;
    }

    /**
     * @param mixed $restaurantpoint
     */
    public function setRestaurantpoint($restaurantpoint)
    {
        $this->restaurantpoint = $restaurantpoint;
    }

    public function ViewAllRestaurant()
    {


    }
    public function ViewSearchedRestaurant($searchedrestaurant)
    {


    }


}
