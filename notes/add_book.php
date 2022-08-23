<?php
include "../connect.php";
$n_id  = filterRequest("n_id");
$n_bookmark  = filterRequest("n_bookmark");







$stmt = $conct->prepare("UPDATE `notes` SET `n_bookmark`=? WHERE n_id = ?");
$stmt->execute(array($n_bookmark , $n_id));
$count = $stmt->rowCount();
if ($count > 0){
    echo json_encode(array("status" => "success" , ));

}
else {
    echo json_encode(array("status" => "fail"));
}
?>