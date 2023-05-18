<?php 

class Computer {
    public $brand;
    public $cpu;
    public $ram;
    public $motherboard;
    public $img;

    public function __construct(string $brand,  string $cpu,  int $ram, string $motherboard, string $img) {
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