<?php
include "../connect.php";
$n_users = filterRequest("n_users");
$n_bookmark = filterRequest("n_bookmark");



$stmt = $conct->prepare("SELECT * FROM notes WHERE `n_users` = ? AND `n_bookmark` = ?  ");
$stmt->execute(array($n_users ,$n_bookmark));
$data = $stmt->fetchAll(PDO::FETCH_ASSOC);
$count = $stmt->rowCount();
if ($count > 0){
    echo json_encode(array("status" => "success" , "data" => $data));

}
else {
    echo json_encode(array("status" => "fail"));
}
?>