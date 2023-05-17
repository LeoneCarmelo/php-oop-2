<?php 

require_once __DIR__ . '/Models/Computer.php';
require_once __DIR__ . '/Models/Desktop.php';
require_once __DIR__ . '/Models/Laptop.php';

$dell = new Laptop('Dell', 'Intel core i5', 20 , 'Asus', ' 2 celle', 'G3-15');
$acer = new Laptop('Acer', 'Intel core i3', 4 , 'Foxconn', ' 2 celle', 'As3c');
$asus = new Laptop('Asus', 'Intel core i7', 4 , 'Asus', ' 2 celle', 'Fx-50asd');
$msi = new Desktop('MSI', 'Intel core i7', 8, 'Msi', '650W', '60x50x25');
$hp = new Desktop('HP', 'Intel core i5', 8, 'Foxconn', '700W', '70x55x25');

$computers = [$dell, $acer, $asus, $msi, $hp];
//var_dump($dell);
//var_dump($msi);
//echo $dell->brand;
//var_dump($computers);


?>

