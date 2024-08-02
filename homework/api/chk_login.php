<?php
include_once "./base.php";
$User = new DB("users");

if ($User->count($_POST)) {
    $type = $User->getOne($_POST);
    $_SESSION['type'] = $type['type'];
    $_SESSION['user'] = $_POST['acc'];
    $_SESSION['time'] = 0;
    $_SESSION['cart'] = [];
    if (isset($_SESSION['type'])) {
        echo $_SESSION['type'];
    }
}
