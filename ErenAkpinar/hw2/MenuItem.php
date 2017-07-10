<?php
/**
 * Created by PhpStorm.
 * User: eren
 * Date: 06/07/2017
 * Time: 21:30
 */

namespace FoodBasket;


class MenuItem
{
    protected $id;
    protected $itemId;
    protected $menuId;

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
    public function getItemId()
    {
        return $this->itemId;
    }

    /**
     * @param mixed $itemId
     */
    public function setItemId($itemId)
    {
        $this->itemId = $itemId;
    }

    /**
     * @return mixed
     */
    public function getMenuId()
    {
        return $this->menuId;
    }

    /**
     * @param mixed $menuId
     */
    public function setMenuId($menuId)
    {
        $this->menuId = $menuId;
    }

    public function addMenuItem()
    {

    }

    public function setMenuItem()
    {

    }

    public function dropMenuItem()
    {

    }
}