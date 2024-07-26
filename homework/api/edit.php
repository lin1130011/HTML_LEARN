<?php
include_once "./base.php";
$Banner = new DB('banner');
dd($_FILES);
dd($_POST);
$Banner->update($_POST);
