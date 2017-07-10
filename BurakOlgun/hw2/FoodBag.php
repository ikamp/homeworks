<?php
use FoodAbstractBag;
/**
 * Class FoodBag
 */
class FoodBag extends FoodAbstractBag
{
    private $addedFoods;
    private $totalPrice;
    private $status;
    private $restaurantName;

    function addFood(Food $food)
    {
        return;
    }

    /**
     * @return mixed
     */
    public function getAddedFoods()
    {
        return $this->addedFoods;
    }

    /**
     * @param mixed $addedFoods
     */
    public function setAddedFoods($addedFoods)
    {
        $this->addedFoods = $addedFoods;
    }

    /**
     * @return mixed
     */
    public function getTotalPrice()
    {
        return $this->totalPrice;
    }

    /**
     * @param mixed $totalPrice
     */
    public function setTotalPrice($totalPrice)
    {
        $this->totalPrice = $totalPrice;
    }

    /**
     * @return mixed
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * @param mixed $status
     */
    public function setStatus($status)
    {
        $this->status = $status;
    }

    /**
     * @return mixed
     */
    public function getRestaurantName()
    {
        return $this->restaurantName;
    }

    /**
     * @param mixed $restaurantName
     */
    public function setRestaurantName($restaurantName)
    {
        $this->restaurantName = $restaurantName;
    }


}