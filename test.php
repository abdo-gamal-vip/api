<?php
<<<<<<< HEAD
$fileName ="images.txt";
$texttoarray =explode(".", $fileName);
$ext =end($texttoarray);
$allowtext=array("jpg","png");

echo "<pre>";
print_r($ext);
echo "</pre>";

if(in_array($ext , $allowtext)){
    echo "yes";
}else {
    print "no";
}
?>
=======
include "connect.php";
imageUpload('file');
if($imagename != "fail")
?> 
>>>>>>> 91b80e63be74ba1b6ce26677e074402204bc3f8f
