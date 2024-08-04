<?php

if (!empty($_POST)) {
    $_SESSION['time'] += 1;
    $id = $_POST['id'];
    $name = $_POST['name'];
    $price = $_POST['price'];
    $quantity = $_POST['quantity'];
    $total_price = $_POST['price'] * $_POST['quantity'];

    $_SESSION['cart'][] = [
        'shop_id' => $id,
        'shopname' => $name,
        'price' => $price,
        'quantity' => $quantity,
        'total_price' => $total_price,
    ];
}


header("location:?do=main#shop");
