<?php
class Baskets
{
    protected $basketId;
    protected $itemName;
    protected $itemPrice;

    /**
     * @return mixed
     */
    public function getBasketId()
    {
        return $this->basketId;
    }

    /**
     * @param mixed $BasketId
     */
    public function setBasketId($basketId)
    {
        $this->BasketId = $basketId;
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
