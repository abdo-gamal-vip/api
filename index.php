<?php
include"connect.php";
$stmt = $conct->prepare("SELECT * FROM items");
$stmt->execute();
$items = $stmt->fetchAll(PDO::FETCH_ASSOC);
print_r($items);
?>