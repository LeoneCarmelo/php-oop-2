<?php 

class Desktop extends Computer{
    public function __construct(public string $powerSupply, public string $case) {
        $this->powerSupply = $powerSupply;
        $this->case = $case;
    }
}