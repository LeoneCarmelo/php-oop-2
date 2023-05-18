<?php 

class Laptop extends Computer {
    public function __construct($brand, $cpu, $ram, $motherboard, $img, public string $battery, public string $model) {
        parent::__construct($brand, $cpu ,$ram, $motherboard, $img);
        $this->battery = $battery;
        $this->model = $model;
    }

    public function getType() {
        return 'Laptop';                                            
    }
}