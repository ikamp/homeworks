<?php
/**
 * Created by PhpStorm.
 * User: yalcin
 * Date: 07.07.2017
 * Time: 06:44
 */
abstract class Items
{
    protected $id;


  protected $itemname;
  protected $itemprice;

    /**
     * @return mixed
     */
    public function getItemname()
    {
        return $this->itemname;
    }

    /**
     * @param mixed $itemname
     */
    public function setItemname($itemname)
    {
        $this->itemname = $itemname;
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
        return $this->itemprice;
    }

    /**
     * @param mixed $itemprice
     */
    public function setItemprice($itemprice)
    {
        $this->itemprice = $itemprice;
    }

    public function AddItemsToBasket()
    {


    }


}
