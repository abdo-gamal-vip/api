<?php
include "../connect.php";


$n_title   = filterRequest("title");
$n_content = filterRequest("content");
$n_users  = filterRequest("users");

    $stmt = $conct->prepare("INSERT INTO `notes`( `n_title`, `n_content`,  `n_users`) VALUES (?,?,?)");
    $stmt->execute(array($n_title , $n_content , $n_users));
    $count = $stmt->rowCount();
    if ($count > 0){
        echo json_encode(array("status" => "success" , ));
    
    }




else {
    echo json_encode(array("status" => "fail"));
}
?>