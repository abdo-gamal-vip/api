<?php
define ('MB',1048576);

function filterRequest ($requestname){
  return  htmlspecialchars(strip_tags ($_POST[$requestname]));

}
function imageUpload ($imgRequset){
  global $errorMsg;
  $imagename = rand(10,10000).$_FILES[$imgRequset]['name'];
  $imageTmp = $_FILES[$imgRequset]['tmp_name'];
  $imageSize = $_FILES[$imgRequset]['size'];
  $allowExt = array("jpg","png","pdf","mp3");
  $strToArray = explode(".",$imagename);
  $EXT=end($strToArray);
  $EXT=strtolower($EXT);
  if(!empty($imagename) && !in_array($EXT,$allowExt)){
    $errorMsg[]="EXTEMPTY";
  
  }
  if ($imageSize>2*MB){
    $errorMsg[]="ERRORSIZE";

  }
  if(empty($errorMsg)) {
  move_uploaded_file($imageTmp,"../upload/".$imagename);
  return $imagename;

  }
  else {
    return "fail";
  }
}
function deleteFile($dir ,  $imagename){
  if(file_exists($dir."/".$imagename)){
    unlink($dir."/".$imagename);
  }
}

?>