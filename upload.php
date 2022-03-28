<?php
session_start();

if(isset($_POST['submit']) && isset($_FILES['my_image'])){
    
    $con = mysqli_connect('localhost','root','');
    mysqli_select_db($con, 't1');
    
    echo "<pre>";
    print_r($_FILES['my_image']);
    echo "</pre>";

    $img_name = $_FILES['my_image']['name'];
    $img_size = $_FILES['my_image']['size'];
    $tmp_name = $_FILES['my_image']['tmp_name'];
    $error = $_FILES['my_image']['error'];
    if($error == 0){
        if($img_size>12500){
          $em = "FILE Is TOO Large";
          header("Location: home1.php?error=$em");
        }else{
          $temp=0;
          $img_ex=pathinfo($img_name, PATHINFO_EXTENSION);
          $img_ex_lc=strtolower($img_ex);
          $new_img_name = uniqid('',true).'.'.$img_ex_lc;
          $img_upload_path='uploads/'.$new_img_name;
          move_uploaded_file($tmp_name,$img_upload_path);
          $name=$_SESSION['username'];
          //echo $name;
          //echo $img_ex_lc;
          $sql = "insert into base(user , img_url, type) values('$name','$new_img_name','$img_ex_lc')";
          mysqli_query($con,$sql); 
          header("location:home1.php");
//$sql="INSERT INTO dbase(user,img_url,type) values ('$name','$new_img_name','$img_ex_lc')";
//          mysqli_query($con,$sql);
//          header("location: view.php");

        }
    }else{
      $em = "unknown error occurred!";
      header("Location: home1.php?error=$em");
    }

  }else{
    header('location:home1.php');
   }


?>