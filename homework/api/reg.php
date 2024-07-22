<?php
include_once "./base.php";
$User = new DB('users');

$try = $User->count($_POST);

if ($try == 0) {
    $User->store($_POST);
    echo 1;
} else {
    echo 0;
}
