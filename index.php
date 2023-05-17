<?php

require_once __DIR__ . '/Models/Computer.php';
require_once __DIR__ . '/Models/Desktop.php';
require_once __DIR__ . '/Models/Laptop.php';


$computers = [
    $dell = new Laptop('Dell', 'Intel core i5', 20, 'Asus', 'https://picsum.photos/id/1/300/200', ' 2 cels', 'G3-15'),
    $acer = new Laptop('Acer', 'Intel core i3', 4, 'Foxconn', 'https://picsum.photos/id/2/300/200', ' 2 cels', 'As3c'),
    $asus = new Laptop('Asus', 'Intel core i7', 4, 'Asus', 'https://picsum.photos/id/3/300/200', '2 cels', 'Fx-50asd'),
    $msi = new Desktop('MSI', 'Intel core i7', 8, 'Msi', 'https://picsum.photos/id/4/300/200', '650W', '60x50x25'),
    $hp = new Desktop('HP', 'Intel core i5', 8, 'Foxconn', 'https://picsum.photos/id/5/300/200', '700W', '70x55x25'),
    $lenovo = new Desktop('Lenovo', 'Intel core i9', 8, 'Asus', 'https://picsum.photos/id/6/300/200', '600W', '65x55x25'),
];
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
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">

</head>

<body>
    <!-- Header -->
    <header class="bg-dark text-white">
        <h1 class="text-center py-5">Product List</h1>
    </header>
    <!-- Main -->
    <main>
        <div class="container">
            <div class="row row-cols-3">
                <?php foreach ($computers as $computer): ?>
                    <div class="col">
                        <div class="card my-3">
                            <img class="card-img-top" src="<?= $computer->img; ?>"></img>
                            <h3 class="text-center py-2">
                                <?= $computer->brand; ?>
                            </h3>
                            <h5 class="text-center">
                                <?php
                                if ($computer instanceof Desktop) {
                                    echo 'Desktop';
                                } else {
                                    echo 'Laptop';
                                }

                                ?>
                            </h5>
                            <ul>
                                <!-- checking is a property is null -->
                                <?php
                                if (!$computer->model == null): ?>
                                    <li>Model:
                                        <?= $computer->model; ?>
                                    </li>
                                <?php else: ?>
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
                                if (!$computer->battery == null): ?>
                                    <li>Battery:
                                        <?= $computer->battery; ?>
                                    </li>
                                <?php else: ?>
                                    <?php unset($computer->battery); ?>
                                <?php endif; ?>
                                <!-- checking is a property is null -->
                                <?php
                                if (!$computer->case == null): ?>
                                    <li>Case Dimension:
                                        <?= $computer->case; ?>
                                    </li>
                                <?php else: ?>
                                    <?php unset($computer->case); ?>
                                <?php endif; ?>

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
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"
        integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous">
        </script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.min.js"
        integrity="sha384-7VPbUDkoPSGFnVtYi0QogXtr74QeVeeIs99Qfg5YCF+TidwNdjvaKZX19NZ/e6oz" crossorigin="anonymous">
        </script>
</body>

</html>