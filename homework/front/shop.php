<?php
$Store = new DB('store');

$store = $Store->getOne($_POST['id']);
$tmp = [];
$tmp[][] = $store;

dd($store);
echo "<hr>";
dd($tmp);
