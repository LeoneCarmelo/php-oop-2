<?php

require_once __DIR__ . '/Models/Computer.php';
require_once __DIR__ . '/Models/Desktop.php';
require_once __DIR__ . '/Models/Laptop.php';

$lenovo = new Desktop('Lenovo', 'Intel core i9', 8, 'Asus', 'https://assets.mmsrg.com/isr/166325/c1/-/ASSET_MMS_95083407/fee_786_587_png', '600W', '65x55x25');
$dell = new Laptop('Dell', 'Intel core i5', 20, 'Asus', 'https://assets.mmsrg.com/isr/166325/c1/-/ASSET_MMS_100433846/fee_786_587_png', ' 2 cels', 'G3-15');

$lenovo->setQuantity(0);
$dell->setQuantity(1);

$computers = [

    $acer = new Laptop('Acer', 'Intel core i3', 4, 'Foxconn', 'https://assets.mmsrg.com/isr/166325/c1/-/ASSET_MMS_89371452/fee_786_587_png', ' 2 cels', 'As3c'),
    $asus = new Laptop('Asus', 'Intel core i7', 4, 'Asus', 'https://assets.mmsrg.com/isr/166325/c1/-/ASSET_MMS_101882122/fee_786_587_png', '2 cels', 'Fx-50asd'),
    $msi = new Desktop('MSI', 'Intel core i7', 8, 'Msi', 'https://assets.mmsrg.com/isr/166325/c1/-/ASSET_MMS_88582664/fee_786_587_png', '650W', '60x50x25'),
    $hp = new Desktop('HP', 'Intel core i5', 8, 'Foxconn', 'https://assets.mmsrg.com/isr/166325/c1/-/ASSET_MMS_105654035/fee_786_587_png', '700W', '70x55x25'),

];

array_unshift($computers, $dell);
array_push($computers, $lenovo);


//var_dump($dell);
//var_dump($msi);
//echo $dell->brand;
//var_dump($computers);

/* foreach ($computers as $computer) {
    # code...
    echo $computer->brand;
}
*/

?>

<!doctype html>
<html lang="en">

<head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS v5.2.1 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">

</head>

<body>
    <!-- Header -->
    <header class="bg-dark text-white">
        <h1 class="text-center py-5">Product List</h1>
    </header>
    <!-- Main -->
    <main>
        <div class="container">
            <div class="row row-cols-1 row-cols-md-3">
                <?php foreach ($computers as $computer) : ?>
                    <div class="col">
                        <div class="card my-3 p-5">
                            <img class="card-img-top" src="<?= $computer->img; ?>"></img>
                            <h3 class="text-center py-2">
                                <?= $computer->brand; ?>
                            </h3>
                            <h5 class="text-center">
                                <?php
                                //if ($computer instanceof Desktop) {
                                //  echo 'Desktop';
                                //} else {
                                //    echo 'Laptop';
                                //}
                                echo $computer->getType();
                                ?>
                            </h5>
                            <ul>
                                <!-- checking is a property is null -->
                                <?php
                                if (!$computer->model == null) : ?>
                                    <li>Model:
                                        <?= $computer->model; ?>
                                    </li>
                                <?php else : ?>
                                    <?php unset($computer->model); ?>
                                <?php endif; ?>

                                <li>Cpu:
                                    <?= $computer->cpu; ?>
                                </li>
                                <li>Ram:
                                    <?= $computer->ram; ?> Gb
                                </li>
                                <li>Motherboard:
                                    <?= $computer->motherboard; ?>
                                </li>
                                <!-- checking is a property is null -->
                                <?php
                                if (!$computer->battery == null) : ?>
                                    <li>Battery:
                                        <?= $computer->battery; ?>
                                    </li>
                                <?php else : ?>
                                    <?php unset($computer->battery); ?>
                                <?php endif; ?>
                                <!-- checking is a property is null -->
                                <?php
                                if (!$computer->case == null) : ?>
                                    <li>Case Dimension:
                                        <?= $computer->case; ?>
                                    </li>
                                <?php else : ?>
                                    <?php unset($computer->case); ?>
                                <?php endif; ?>
                                <li class="<?php $computer->getQuantity();?>">
                                    <?php $computer->getQuantity(); ?>
                                </li>
                            </ul>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
    </main>
    <footer>
        <!-- place footer here -->
    </footer>
    <!-- Bootstrap JavaScript Libraries -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous">
    </script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.min.js" integrity="sha384-7VPbUDkoPSGFnVtYi0QogXtr74QeVeeIs99Qfg5YCF+TidwNdjvaKZX19NZ/e6oz" crossorigin="anonymous">
    </script>
</body>

</html>