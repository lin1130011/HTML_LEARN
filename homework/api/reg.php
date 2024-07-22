<?php
include_once "./base.php";

dd($_POST);

if ($User->count('acc', $_POST['pwd'] > 0)) {
    echo "已存在";
} else {
    $User->store($_POST);
}
