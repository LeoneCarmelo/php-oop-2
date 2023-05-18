<?php

trait Stock
{

    private $quantity;

    public function getQuantity() {
        echo $this->quantity;
    }

    public function setQuantity(int $_quantity) {
        if ($_quantity > 0) {
            return $this->quantity = 'In Stock';
        } else {
            return $this->quantity = 'Out of Stock';
        }
    }
}
