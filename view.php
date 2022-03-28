<?php 
session_start();
include "db_conn.php";
if (isset($_SESSION['username'])) {
  $name = $_SESSION['username'];
  $_SESSION["prev-username"] = $_SESSION["username"];
  $_SESSION["username"] = $name;
  echo $name;
}
  function myFunction() {
    null;
    }

if (isset($_GET['name'])) {
  myFunction();
}
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Document</title>

    <h2 id="asd" class="asd" onclick="myFunction()">ĀŚḌ</h2>
    <script>
      function myFunction() {
        if (document.getElementById("asd").innerHTML == "ĀŚḌ")
          document.getElementById("asd").innerHTML = "ĀKINOS ŚTORAGE ḌRIVE";
        else document.getElementById("asd").innerHTML = "ĀŚḌ";
      }
    </script>
  </head>
  <body>
    <button class="btn"><a href="home1.php" style="text-size:50px;">Back</a></button><br><br>
    <div class="contain">
      <table class="values" style="margin-left:10px;">
   <?php 
        $sql= "SELECT * from base where user='$name'";
        $res=mysqli_query($con,$sql);
        if(mysqli_num_rows($res)>0){
          while($files=mysqli_fetch_assoc($res)){?>
          <tr>
          <div class="alb">
            <td class="td1" ><iframe src="uploads/<?=$files['img_url']?>"></iframe></td>
            <td class="td2"><button class="userinfo btn btn-success" style="border-radius:10px;color:white;background-color:(3, 138, 255);, 1;
            font-size:15px;">Details</button></td>
          </div>
          </tr>
      <?php  } }?>
          </table>
          </div>
  </body>
  <style>
    .td1{
      padding:50px 100px;
    }
    .td2{
      font-size:30px;
      padding:50px;
    }
    .alb{
      margin-left:10%;
    }
    .asd{
    color:white;
    text-align:center;
    margin-top:3%;
    font-size:35px;
  }
    body{
    background: linear-gradient(rgba(0,0,50,0.5),rgba(0,0,50,0.5)),url(img.jpg);
    background-size: cover;
    background-position: center;
    justify-content: center;
    align-items:center;
  }
  .btn{
    background-color: blue;
    border: none;
    padding: 10px 20px;
  }
  body a{
    text-decoration:none;
    color:white;
    font-size:larger;
  }
    </style>
</html>