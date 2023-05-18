<?php 

require_once __DIR__ . '/Computer.php';
require_once __DIR__ . '/../Traits/Stock.php';

class Desktop extends Computer{
    use Stock;

    public function __construct($brand, $cpu, $ram, $motherboard, $img, public string $powerSupply, public string $case) {
        parent::__construct($brand, $cpu ,$ram, $motherboard, $img);
        $this->powerSupply = $powerSupply;
        $this->case = $case;
    }
    public function getType() {
        return 'Desktop';                                            
    }

}