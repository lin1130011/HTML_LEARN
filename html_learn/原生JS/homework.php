<?php
header("Content-Type:application/json");
$data = [
    'a' => 10,
    'b' => 11,
    'opt' => ""
];



echo json_encode($data);
