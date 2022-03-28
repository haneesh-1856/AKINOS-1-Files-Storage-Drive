<?php

session_start();
header('location:home.php');

$con = mysqli_connect('localhost','root','');

mysqli_select_db($con, 't1');

$name = $_POST['user'];
$pass = $_POST['password'];
$email = $_POST['email'];
$fname = $_POST['fname'];

$s = " select * from try where name = '$name'";

$result = mysqli_query($con, $s);
$num = mysqli_num_rows($result);

if($num == 1){
  $em = "Username exists";
  header("Location: home.php?error=$em");
  echo '<script>alert("Welcome to Geeks for Geeks")</script>';
  //echo '<script>alert("Username Already Taken")</script>';
}
else{
  $reg=" insert into try(name , password, email, full_name) values('$name','$pass','$email','$fname')";
  mysqli_query($con, $reg);
  echo" successful";
}
?>