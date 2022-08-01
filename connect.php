<?php
$dsn = "mysql:host:localhost;dbname=e_commerce_app";
$user="root";
$pass="";
$oprion=array(
    PDO:: MYSQL_ATTR_INIT_COMMAND => "SET NAMES UTF8",
);
$conct=new PDO($dsn,$user,$pass,$oprion);
?>