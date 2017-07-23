<?php


class Restaurant
{
    protected $restaurantId;
    protected $restaurantName;
    protected $restaurantPoint;

    /**
     * @return mixed
     */
    public function getRestaurantid()
    {
        return $this->restaurantId;
    }

    /**
     * @param mixed $restaurantid
     */
    public function setRestaurantid($restaurantId)
    {
        $this->restaurantid = $restaurantId;
    }

    /**
     * @return mixed
     */
    public function getRestaurantname()
    {
        return $this->restaurantName;
    }

    /**
     * @param mixed $restaurantname
     */
    public function setRestaurantname($restaurantName)
    {
        $this->restaurantname = $restaurantName;
    }

    /**
     * @return mixed
     */
    public function getRestaurantPoint()
    {
        return $this->restaurantPoint;
    }

    /**
     * @param mixed $restaurantpoint
     */
    public function setRestaurantpoint($restaurantPoint)
    {
        $this->restaurantpoint = $restaurantPoint;
    }

    public function viewallRestaurant()
    {


    }
    public function viewsearchedRestaurant($searchedrestaurant)
    {


    }
}
