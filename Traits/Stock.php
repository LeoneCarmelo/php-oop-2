<?php

trait Stock
{

    private $quantity;

    public function getQuantity() {
        if (isset($this->quantity)){
            if ($this->quantity > 0) {
            echo $this->quantity = 'In-Stock';
        } else {
            echo $this->quantity = 'Out-of-Stock';
        }
        }
    }

    public function setQuantity(int $_quantity) {
        if(is_int($_quantity)){
                return $this->quantity = $_quantity;
        } else {
            throw new Exception('Insert a number');
        }
    }
}
