<?php
include "connect.php";
$stmt = $conct->prepare("INSERT INTO `items`( `i_name`, `i_categories`, `i_price`) VALUES ('s23 samsung','1','9500')");
$stmt->execute();
$count = $stmt->rowCount();
if ($conct > 0 ){
    echo "error";
}
else{echo "sucsses";}
?>