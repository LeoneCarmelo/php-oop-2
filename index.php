<?php

require_once __DIR__ . '/Models/Computer.php';
require_once __DIR__ . '/Models/Desktop.php';
require_once __DIR__ . '/Models/Laptop.php';


$computers = [
    $dell = new Laptop('Dell', 'Intel core i5', 20, 'Asus', ' 2 celle', 'G3-15'),
    $acer = new Laptop('Acer', 'Intel core i3', 4, 'Foxconn', ' 2 celle', 'As3c'),
    $asus = new Laptop('Asus', 'Intel core i7', 4, 'Asus', ' 2 celle', 'Fx-50asd'),
    $msi = new Desktop('MSI', 'Intel core i7', 8, 'Msi', '650W', '60x50x25'),
    $hp = new Desktop('HP', 'Intel core i5', 8, 'Foxconn', '700W', '70x55x25'),
    $lenovo = new Desktop('HP', 'Intel core i9', 8, 'Asus', '600W', '650x55x25'),
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
    <header>
        <h1 class="text-center py-5">Product List</h1>
    </header>
    <!-- Main -->
    <main>
        <div class="container">
            <div class="row row-cols-3">
                <?php foreach ($computers as $computer): ?>
                    <div class="col">
                        <div class="card my-3">
                            <h3 class="text-center py-2">
                                <?= $computer->brand; ?>
                            </h3>
                            <ul>
                                <li>
                                    <?= $computer->model; ?>
                                </li>
                                <li>
                                    <?= $computer->cpu; ?>
                                </li>
                                <li>
                                    <?= $computer->ram; ?>
                                </li>
                                <li>
                                    <?= $computer->motherboard; ?>
                                </li>
                                <li>
                                    <?= $computer->battery; ?>
                                </li>
                                <li>
                                    <?= $computer->case; ?>
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
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"
        integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous">
        </script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.min.js"
        integrity="sha384-7VPbUDkoPSGFnVtYi0QogXtr74QeVeeIs99Qfg5YCF+TidwNdjvaKZX19NZ/e6oz" crossorigin="anonymous">
        </script>
</body>

</html>