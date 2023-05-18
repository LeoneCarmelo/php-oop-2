<?php 

require_once __DIR__ . '/Computer.php';
require_once __DIR__ . '/../Traits/Stock.php';

class Laptop extends Computer {
    use Stock;
    public function __construct($brand, $cpu, $ram, $motherboard, $img, public string $battery, public string $model) {
        parent::__construct($brand, $cpu ,$ram, $motherboard, $img);
        $this->battery = $battery;
        $this->model = $model;
    }

    public function getType() {
        return 'Laptop';                                            
    }
}