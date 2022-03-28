<?php

session_start();
include "db_conn.php";

if(!empty($_GET['file'])){
  $fileName=basename($_GET['file']);
  $name=$_GET['user'];
  $val=$_GET['val'];
  if($val==0){
    $qry = "UPDATE base SET imp=1 WHERE user='$name' and img_url='$fileName'";
    $result = mysqli_query($con, $qry);


  }
  else{
    $qry = "UPDATE base SET imp=0 WHERE user='$name' and img_url='$fileName'";
    $result = mysqli_query($con, $qry);
  }
  header("location:impfiles.php");
}

?>