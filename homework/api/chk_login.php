<?php
include_once "./base.php";
$User = new DB("users");

if ($User->count($_POST) == 1) {
    echo 1;
} else {
    echo 0;
}
