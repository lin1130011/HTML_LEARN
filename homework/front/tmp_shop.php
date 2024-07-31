<?php


$_SESSION['time'] += 1;
$name = $_POST['text'];
$price = $_POST['price'];
$total = $_POST['price'] * $_POST['total'];

$_SESSION['shop'][] = [
    'name' => $name,
    'price' => $price,
    'total' => $total
];


header("location:?do=main#shop");
