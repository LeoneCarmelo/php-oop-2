<?php 

class Laptop extends Computer {
    public function __construct(public string $battery, public string $model) {
        parent::__construct($brand, $cpu ,$ram, $motherboard);
        $this->battery = $battery;
        $this->model = $model;
    }
}