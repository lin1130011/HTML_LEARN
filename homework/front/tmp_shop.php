<?php


$_SESSION['time'] += 1;
dd($_POST);
$name = $_POST['text'];
$price = $_POST['price'];
$total = $_POST['price'] * $_POST['total'];

$_SESSION['shop'][] = [
    'name' => $name,
    'price' => $price,
    'total' => $total
];


dd($_SESSION['shop']);
