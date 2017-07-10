<?php
/**
 * Created by PhpStorm.
 * User: yalcin
 * Date: 07.07.2017
 * Time: 06:56
 */
abstract class OrderDetails
{
    protected $orderSummary;
    protected $address;
    protected $telephone;
    protected $TotalPrice;

    /**
     * @return mixed
     */
    public function getOrderSummary()
    {
        return $this->orderSummary;
    }

    /**
     * @param mixed $orderSummary
     */
    public function setOrderSummary($orderSummary)
    {
        $this->orderSummary = $orderSummary;
    }

    /**
     * @return mixed
     */
    public function getAddress()
    {
        return $this->address;
    }

    /**
     * @param mixed $address
     */
    public function setAddress($address)
    {
        $this->address = $address;
    }

    /**
     * @return mixed
     */
    public function getTelephone()
    {
        return $this->telephone;
    }

    /**
     * @param mixed $telephone
     */
    public function setTelephone($telephone)
    {
        $this->telephone = $telephone;
    }

    /**
     * @return mixed
     */
    public function getTotalPrice()
    {
        return $this->TotalPrice;
    }

    /**
     * @param mixed $TotalPrice
     */
    public function setTotalPrice($TotalPrice)
    {
        $this->TotalPrice = $TotalPrice;
    }



}
