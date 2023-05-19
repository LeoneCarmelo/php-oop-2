<?php

trait Stock
{

    private $quantity;

    public function getQuantity() {
        if (isset($this->quantity)){
            return $this->quantity;
        }
    }

    public function setQuantity(int $_quantity) {
        if(is_int($_quantity)){
                return $this->quantity = $_quantity;
        } else {
            throw new Exception('Insert a number');
        }
    }

    public function getInfoStock() {
        if($this->getQuantity() > 0) {
            echo 'In-Stock';
        } else {
            echo 'Out-of-Stock';
        }
    }
}
