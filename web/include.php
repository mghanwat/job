<?php 

include_once './config.php';
include "./MysqliDb.php";
$connection = new MysqliDb($DBhost, $DBuser, $DBpass, $database);
?>
