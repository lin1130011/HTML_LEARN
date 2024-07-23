<?php
include_once "./base.php";
$User = new DB('users');
$tmp = $_POST;
unset($tmp['pwd']);
if ($User->count($tmp) == 0) {
    echo $User->store($_POST);
}
