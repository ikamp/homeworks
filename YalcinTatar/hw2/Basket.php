<?php
/**
 * Created by PhpStorm.
 * User: yalcin
 * Date: 07.07.2017
 * Time: 06:38
 */
class Basket extends Items
{
    protected $BasketId;

    protected $itemName;
    protected $itemPrice;

    /**
     * @return mixed
     */
    public function getBasketId()
    {
        return $this->BasketId;
    }

    /**
     * @param mixed $BasketId
     */
    public function setBasketId($BasketId)
    {
        $this->BasketId = $BasketId;
    }

    /**
     * @return mixed
     */
    public function getItemName()
    {
        return $this->itemName;
    }

    /**
     * @param mixed $itemName
     */
    public function setItemName($itemName)
    {
        $this->itemName = $itemName;
    }

    /**
     * @return mixed
     */
    public function getItemPrice()
    {
        return $this->itemPrice;
    }

    /**
     * @param mixed $itemPrice
     */
    public function setItemPrice($itemPrice)
    {
        $this->itemPrice = $itemPrice;
    }







}
