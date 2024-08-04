<?php
include_once "./base.php";
// dd($_SESSION['cart']);

if (isset($_POST['id'])) {

    unset($_SESSION['cart'][$_POST['id']]);
    $_SESSION['time'] = $_SESSION['time'] - 1;
    dd($_SESSION['time']);
}
