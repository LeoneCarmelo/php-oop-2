<?php 

require_once __DIR__ . '/Models/Computer.php';
require_once __DIR__ . '/Models/Desktop.php';
require_once __DIR__ . '/Models/Laptop.php';

$dell = new Laptop('2 celle','G3-15');
$pcDesktop = new Desktop('650W', '$50x50x25');
var_dump($dell);
var_dump($pcDesktop);
?>