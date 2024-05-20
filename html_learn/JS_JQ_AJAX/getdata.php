<?php

$data = [
    [
        'id' => 1,
        'name' => '珍珠奶茶',
        'pic' => 'cake.jpg',
        'price' => '100'
    ],
    [
        'id' => 2,
        'name' => '咖啡',
        'pic' => 'cake2.jpg',
        'price' => '150'
    ],
    [
        'id' => 3,
        'name' => '花茶',
        'pic' => 'cake3.jpg',
        'price' => '200'
    ]
];
var_dump($data);
$result = json_encode($data);
