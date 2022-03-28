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
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
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
    
    
<div class="container">
   <br />
   <div class="row">
    <div class="col-md-12">
        <div class="panel-body">
            <?php 
                include "db_conn.php";
                $one=1;
                $query = "select * from base where user='$name' and imp='$one'";
                $result = mysqli_query($con,$query);
            ?>
            <div class="table-responsive">
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th>File Name</th>
                            <th>user</th>
                            <th>FILE</th>
                            <th>Download</th>
                            <th>Importance</th>
                        </tr>
                        </thead> 
                        <?php while($row = mysqli_fetch_array($result)){ ?>
                            <tr>
                                <td style="padding-top:5%"><?php echo $row['img_url']; ?></td>
                                <td style="padding-top:5%"><?php echo $row['user']; ?></td>
                                <td><iframe src="uploads/<?=$row['img_url']?>"></iframe></td>
                                <td style="padding-top:5%">
                                  <button style="background-color:#000090;border:none;">
                                    <a href="download.php?file=<?=$row['img_url']?>" style="text-decoration:none"> 
                                      Download
                                    </a>
                                  </button>
                                </td>
                                
                                <td style="padding-top:5%">
                                  <button style="background-color:#000090;border:none;">
                                  <a href="importance.php?file=<?=$row['img_url']?>&user=<?=$row['user']?>&val=<?=$row['imp']?>" style="text-decoration:none"> 
                                      Unimportant
                                    </a>
                                  </button>
                                </td>
                            </tr>
                        <?php } ?>
                </table>
            </div>
        </div>    
    </div>    
    </div>
</div>    
        </div>
  </body>
  <style>
    td{
      color:white;
    }
    th{
      background-color: rgba(39, 39, 39, 0.5);
      font-size: 20px;
      color:white;
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
    background-color: skyblue;
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