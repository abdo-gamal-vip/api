<?php
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