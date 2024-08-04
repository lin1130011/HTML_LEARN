<?php
include_once "./base.php";
$Store = new DB('ck_store');
// dd($_FILES);
// dd($_POST);
if (!empty($_FILES['img']['tmp_name'])) {
    move_uploaded_file($_FILES['img']['tmp_name'], "../images/store/" . $_FILES['img']['name']);
    $_POST['img'] = $_FILES['img']['name'];
    // dd($_POST);
}
$Store->update($_POST);
header("location:../admin.php?do=store");
// $Banner->update($_POST);
// dd($_POST);
