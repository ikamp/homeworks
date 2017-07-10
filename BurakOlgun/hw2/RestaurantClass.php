<?php
 /**
 * Class Restaurant
 */
class Restaurant
{
    private $restaurantName;
    private $adress;
    private $foods;

    /**
     * @param Food $food
     */
    protected function addFood(Food $food)
    {
        return;
    }

    /**
     * @return mixed
     */
    protected function getRestaurantName()
    {
        return $this->restaurantName;
    }

    /**
     * @param mixed $restaurantName
     */
    protected function setRestaurantName($restaurantName)
    {
        $this->restaurantName = $restaurantName;
    }

    /**
     * @return mixed
     */
    protected function getAdress()
    {
        return $this->adress;
    }

    /**
     * @param mixed $adress
     */
    protected function setAdress($adress)
    {
        $this->adress = $adress;
    }

    /**
     * @return mixed
     */
    protected function getFoods()
    {
        return $this->foods;
    }

    /**
     * @param mixed $foods
     */
    protected function setFoods($foods)
    {
        $this->foods = $foods;
    }

    /**
     * @return mixed
     */
    protected function getMinTotal()
    {
        return $this->minTotal;
    }

    /**
     * @param mixed $minTotal
     */
    protected function setMinTotal($minTotal)
    {
        $this->minTotal = $minTotal;
    }

    /**
     * @return mixed
     */
    protected function getComments()
    {
        return $this->comments;
    }

    /**
     * @param mixed $comments
     */
    protected function setComments($comments)
    {
        $this->comments = $comments;
    }

    /**
     * @return mixed
     */
    protected function getOrders()
    {
        return $this->orders;
    }

    /**
     * @param mixed $orders
     */
    protected function setOrders($orders)
    {
        $this->orders = $orders;
    }
    private $minTotal;
    private $comments;
    private $orders;
}


