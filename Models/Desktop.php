<?php 

class Desktop extends Computer{
    public function __construct($brand, $cpu, $ram, $motherboard, public string $powerSupply, public string $case) {
        parent::__construct($brand, $cpu ,$ram, $motherboard);
        $this->powerSupply = $powerSupply;
        $this->case = $case;
    }
}