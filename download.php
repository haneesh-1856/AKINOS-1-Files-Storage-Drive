<?php

session_start();
if(!empty($_GET['file'])){
  $fileName=basename($_GET['file']);
  $filepath="uploads/".$fileName;
  if(!empty($fileName) && file_exists($filepath)){
        header("Cache-Control: public");
        header("Content-Description: File Transfer");
        header("Content-Disposition: attachment; filename=$fileName");
        header("Content-Type: application/zip");
        header("Content-Transfer-Encoding: binary");
        
        //read file 
        readfile($filePath);
        exit;
        header("location:allfiles.php");
  }
  else{
    echo 'file do not exist';
  }
}


?>