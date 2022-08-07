<?php
include "../connect.php";
$email = filterRequest("email");
$password = filterRequest("password");

$stmt = $conct->prepare("SELECT * FROM users WHERE `password` = ? AND `email` = ? ");
$stmt->execute();
$count = $stmt->rowCount(array($password , $email));
if ($count > 0){
    echo json_encode(array("status" => "success"));

}
else {
    echo json_encode(array("status" => "fail"));
}
?>