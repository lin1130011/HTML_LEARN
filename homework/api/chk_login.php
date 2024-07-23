<?php
include_once "./base.php";
$User = new DB("users");

if ($User->count($_POST) == 1) {
    $tmp = $User->getOne($_POST);
    echo $tmp['type'];
} else {
    echo 0;
}
