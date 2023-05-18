<?php 

class Computer {
    public function __construct(public string $brand, public string $cpu, public int $ram, public string $motherboard, public string $img) {
        $this->brand = $brand;
        $this->cpu = $cpu;
        $this->ram = $ram;
        $this->motherboard = $motherboard;
        $this->img = $img;
    }

    public function getType() {
        return 'Computer';                                            
    }


}