<?php

namespace FoodBasket;

class Customer extends Person
{
    protected $creditCardInfo;
    protected $point;

    /**
     * @return mixed
     */
    public function getCreditCardInfo()
    {
        return $this->creditCardInfo;
    }

    /**
     * @param mixed $creditCardInfo
     */
    public function setCreditCardInfo($creditCardInfo)
    {
        $this->creditCardInfo = $creditCardInfo;
    }

    /**
     * @return mixed
     */
    public function getPoint()
    {
        return $this->point;
    }

    /**
     * @param mixed $point
     */
    public function setPoint($point)
    {
        $this->point = $point;
    }

    public function register()
    {

    }
}