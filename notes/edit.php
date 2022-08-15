<?php
include "../connect.php";
$title   = filterRequest("n_title");
$content = filterRequest("n_content");
$n_id  = filterRequest("n_id");





$stmt = $conct->prepare("UPDATE `notes` SET `n_title`=?,`n_content`=? WHERE n_id = ?");
$stmt->execute(array($title , $content , $n_id));
$count = $stmt->rowCount();
if ($count > 0){
    echo json_encode(array("status" => "success" , ));

}
else {
    echo json_encode(array("status" => "fail"));
}
?>