<?php

class Order {
    /** @orderId Integer */
    private $orderId;
    /** @menuId Integer */
    private $menuId;
    /** @customerId Integer */
    private $customerId;
    /** @quantity Integer */
    private $quantity;

    private function updateQuantity(): void
    {

    }

    private function deleteItem(): void
    {

    }

    private function getCustomerInfo()
    {
        return $this->customerId = new Customer();
    }

    private function getMenu()
    {
        return $this->menuId = new Menu();
    }
}

?>
