<?php
include_once "./base.php";
$Banner = new DB('banner');
// dd($_FILES);
// dd($_POST);
if ($_POST['sh'] == 1) {
    $Banner->q("UPDATE `banner` SET `sh` = '0' WHERE `id` != '{$_POST['id']}'");
}


if (!empty($_FILES['img']['tmp_name'])) {
    move_uploaded_file($_FILES['img']['tmp_name'], "../images/" . $_FILES['img']['name']);
    $_POST['img'] = $_FILES['img']['name'];
    // dd($_POST);
}
$Banner->update($_POST);
header("location:../admin.php?do=banner");
// $Banner->update($_POST);
// dd($_POST);
