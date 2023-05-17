<?php 

class Computer {
    public function __construct(public string $brand, public string $cpu, public int $ram, public string $motherboard) {
        $this->brand = $brand;
        $this->cpu = $cpu;
        $this->ram = $ram;
        $this->motherboard = $motherboard;
    }
}