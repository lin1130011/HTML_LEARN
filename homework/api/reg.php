<?php
include_once "./base.php";
$User = new DB('ck_users');
$tmp = $_POST;
unset($tmp['pwd']);
if ($User->count($tmp) == 0) {
    echo $User->store($_POST);
}
