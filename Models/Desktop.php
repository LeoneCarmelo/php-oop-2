<?php 

class Desktop extends Computer{
    public function __construct($brand, $cpu, $ram, $motherboard, $img, public string $powerSupply, public string $case) {
        parent::__construct($brand, $cpu ,$ram, $motherboard, $img);
        $this->powerSupply = $powerSupply;
        $this->case = $case;
    }


}