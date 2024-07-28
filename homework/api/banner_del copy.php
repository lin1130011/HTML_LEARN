<?php
include_once "./base.php";
// dd($_POST);
$Banner = new DB('banner');
// dd($_POST['id']);
echo $Banner->del($_POST);
