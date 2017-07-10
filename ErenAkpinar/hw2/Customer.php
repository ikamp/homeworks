<?php
/**
 * Created by PhpStorm.
 * User: eren
 * Date: 06/07/2017
 * Time: 21:01
 */

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
}