<?php
include_once "./base.php";
dd($_FILES);
dd($_POST);
$Banner = new DB('ck_banner');
if (!empty($_FILES['img']['tmp_name'])) {
    move_uploaded_file($_FILES['img']['tmp_name'], "../images/banner/" . $_FILES['img']['name']);
    $_POST['img'] = $_FILES['img']['name'];
    dd($_POST);
    $Banner->store($_POST);
    header("location:../admin.php?do=banner");
}
