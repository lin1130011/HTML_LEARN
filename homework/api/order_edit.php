<?php
include_once "./base.php";
$Order = new DB("ck_orders");
$_POST['order_status'] = 1;

echo $Order->update($_POST);
