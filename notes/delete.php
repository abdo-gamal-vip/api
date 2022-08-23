<?php
include "../connect.php";
$n_id   = filterRequest("n_id");
$imagename=filterRequest("imagename");

$stmt = $conct->prepare("DELETE FROM `notes` WHERE `n_id` = ? ");
$stmt->execute(array($n_id));
$count = $stmt->rowCount();
if ($count > 0){
    deleteFile("../upload",$imagename);
    echo json_encode(array("status" => "success" , ));

}
else {
    echo json_encode(array("status" => "fail"));
}
?>