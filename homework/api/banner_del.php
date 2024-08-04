<?php
include_once "./base.php";
// dd($_POST);
$Banner = new DB('ck_banner');
// dd($_POST['id']);
echo $Banner->del($_POST);
