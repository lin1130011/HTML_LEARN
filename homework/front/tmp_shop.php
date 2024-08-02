<?php

if (!empty($_POST)) {
    $_SESSION['time'] += 1;
    $name = $_POST['text'];
    $user = $_SESSION['user'];
    $price = $_POST['price'];
    $count = $_POST['total'];
    $total = $_POST['price'] * $_POST['total'];
    $date = date("Y-m-d");

    $_SESSION['cart'][] = [
        'user' => $user,
        'shopname' => $name,
        'price' => $price,
        'count' => $count,
        'total' => $total,
        'buydate' => $date
    ];
}


header("location:?do=main#shop");
