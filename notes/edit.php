<?php
include "../connect.php";
$title   = filterRequest("n_title");
$content = filterRequest("n_content");
$n_id  = filterRequest("n_id");
$imagename  = filterRequest("imagename");


if(isset($_FILES["file"])){
    deleteFile("../upload",$imagename);
    $imagename=imageUpload("file");
}


$stmt = $conct->prepare("UPDATE `notes` SET `n_title`=?,`n_content`=? , `n_image`=? WHERE n_id = ?");
$stmt->execute(array($title , $content , $imagename,$n_id ));
$count = $stmt->rowCount();
if ($count > 0){
    echo json_encode(array("status" => "success" , ));

}
else {
    echo json_encode(array("status" => "fail"));
}
?>