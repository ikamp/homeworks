<?php

 class Items
{
    protected $id;
    protected $itemName;
    protected $itemPrice;

    /**
     * @return mixed
     */
    public function getItemname()
    {
        return $this->itemName;
    }

    /**
     * @param mixed $itemname
     */
    public function setItemname($itemname)
    {
        $this->itemName = $itemname;
    }
    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param mixed $id
     */
    public function setId($id)
    {
        $this->id = $id;
    }

    /**
     * @return mixed
     */
    public function getItemprice()
    {
        return $this->itemPrice;
    }

    /**
     * @param mixed $itemprice
     */
    public function setItemprice($itemprice)
    {
        $this->itemPrice = $itemprice;
    }

    public function AddItemsToBasket()
    {


    }
}
