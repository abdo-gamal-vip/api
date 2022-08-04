<?php
include "connect.php";
$stmt = $conct->prepare("DELETE FROM `items` WHERE `i_id` = 24");
$stmt->execute();
$conct = $stmt->rowCount();
if ($conct > 0 ){
    echo"<br>";
    echo "SUCSSES   ";
}

else 
{
    
    echo"<br>";

    echo " FAILED";
}
?>