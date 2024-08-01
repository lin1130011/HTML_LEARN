<?php

if (!empty($_POST)) {
    $_SESSION['time'] += 1;
    $name = $_POST['text'];
    $price = $_POST['price'];
    $count = $_POST['total'];
    $total = $_POST['price'] * $_POST['total'];

    $_SESSION['shop'][] = [
        'name' => $name,
        'price' => $price,
        'count' => $count,
        'total' => $total
    ];
}


header("location:?do=main#shop");
