<?php
$fileName ="images.jpg";
$texttoarray =explode(".", $fileName);
$ext =end($texttoarray);
$allowtext=array("jpg","png");

echo "<pre>";
print_r($ext);
echo "</pre>";
?>