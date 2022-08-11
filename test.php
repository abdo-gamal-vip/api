<?php
$fileName ="images.jpg";
$texttoarray =explode(".", $fileName);
$ext =end($texttoarray);
echo "<pre>";
print_r($ext);
echo "</pre>";
?>