<?php
include_once "./base.php";
$Order = new DB('ck_orders');
$Store = new DB('ck_store');

$cart = ($_SESSION['cart']);

$sum_price = 0;
foreach ($cart as $key => $value) {
    $sum_price += $value['total_price'];
    $store = $Store->getOne($value['shop_id']);
    $good = ['id' => $value['shop_id'], 'good' => $store['good'] + 1];

    // dd($good);
    $Store->update($good);
}
$_POST['order_no'] = date("Y-m-d") . "-" . rand(100000, 9999);
$_POST['cilent'] = $_SESSION['user'];
$_POST['carts'] = serialize($_SESSION['cart']);
$_POST['sum_price'] = $sum_price;
$_POST['order_date'] = date("Y-m-d");
$Order->store($_POST);
unset($_SESSION['cart']);
$_SESSION['time'] = 0;
