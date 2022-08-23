<?php
include "../connect.php";


$u_id  = filterRequest("u_id");
$imagename = imageUpload('file');

if($imagename!= 'fail'){
    $stmt = $conct->prepare("UPDATE `users` SET `profilepic`= ?  WHERE u_id = ?");
    $stmt->execute(array($imagename , $u_id));
    $count = $stmt->rowCount();
    if ($count > 0){
        echo json_encode(array("status" => "success" , ));
    
    }
}



else {
    echo json_encode(array("status" => "fail"));
}
?>