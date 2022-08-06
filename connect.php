<?php
include "functions.php";
$dsn = "mysql:host=localhost;dbname=notesapp";
$user="root";
$pass="";
$option=array(
    PDO:: MYSQL_ATTR_INIT_COMMAND => "SET NAMES UTF8",
);
try {
$conct = new PDO($dsn, $user, $pass, $option);
$conct -> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} 
catch(PDOException $e){
    echo $e->getMessage();
    
}
?>
