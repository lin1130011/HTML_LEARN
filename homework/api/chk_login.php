<?php
include_once "./base.php";
$User = new DB("users");

if ($User->count($_POST)) {
    $tmp = $User->getOne($_POST);
    $_SESSION['type'] = $tmp['type'];
    echo $_SESSION['type'];
} else {
    echo 3;
}
