<?php
include_once "./base.php";
// dd($_POST);
$Store = new DB('ck_store');
// dd($_POST['id']);
echo $Store->del($_POST);
