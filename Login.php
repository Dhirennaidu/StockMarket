<?php
session_start();
?>
<?php
include("connection.php");
$suc=false;
if(isset($_POST['submit'])){
  $Mobile=$_POST['Mobile'];
  $Password=$_POST['Password'];
  $query="SELECT * from table1 where Mobile='$Mobile' AND Password='$Password'";
  $data=mysqli_query($conn,$query);
  $total=mysqli_num_rows($data);
 // echo $total;
 if($total == 1){
  $suc=true;
  $_SESSION['Mobile']= $Mobile;
  $_SESSION['Password']=$Password;
  $_SESSION['Name']=$Name;
  header('location:student.php');
 }
 else{
  echo "<div style='padding: 20px;
  background-color: rgb(255, 0, 0);
  color: white;'>!Login failed you Enter a worng Mobile number and Password Please Contact  number(8658135266) or please join in Roland Collage
  <span style=' margin-left: 15px;
  color: white;
  font-weight: bold;
  float: right;
  font-size: 22px;
  line-height: 20px;
  cursor: pointer;
  transition: 0.3s;' onclick='closemessage()';></span> 
  </div>";
  
 }
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
<title>Registation form</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">
<script src="Rolandjs.js"></script>
<style>
    body {font-family: Arial, Helvetica, sans-serif;}
* {box-sizing: border-box;}

.input-container {
  display: -ms-flexbox; /* IE10 */
  display: flex;
  width: 100%;
  margin-bottom: 15px;
}

.icon {
  padding: 10px;
  background: dodgerblue;
  color: white;
  min-width: 50px;
  text-align: center;
}

.input-field {
  width: 100%;
  padding: 10px;
  outline: none;
}

.input-field:focus {
  border: 2px solid dodgerblue;
}

/* Set a style for the submit button */
.btn {
  background-color: dodgerblue;
  color: white;
  padding: 15px 20px;
  border: none;
  cursor: pointer;
  width: 100%;
  opacity: 0.9;
}

.btn:hover {
  opacity: 1;
}

    </style>
    </head>
    <body>
        <?php require 'connection.php'?>;
        <?php
        if($suc){
          echo "<div style='width:100%;background-color:green;color:white;padding: 20px;'><font size='6'><i class='fa fa-check'></i>Successe fully Login</font><a href='http://localhost/dhirenphp/student.php'></a></div>";
        }
        ?>
        <form  style="max-width:500px;margin:auto" method="post" id="form">
            <h1 style="color:blue;">Student Login</h1>
            <div class="alert alert-danger" style="border-radius: 20px; display:none;background-color: rgb(255, 255, 255);color:rgb(255, 0, 0);width: 100%;height: 50px;" role="alert"id="alert1">
            
            </div>
            <div class="input-container">
                <i class="fa fa-phone" style=" padding: 10px;
                background: dodgerblue;
                color: white;
                min-width: 50px;
                text-align: center;"></i>
                <input class="input-field" type="text" placeholder="Mobile number" name="Mobile" id="mobile" required>
              </div>
              <div class="input-container">
              <i class="fa fa-key icon"></i>
              <input class="input-field" type="password" placeholder="Password" name="Password" id="pasw" required>
            </div>
            <!--<div class="input-container">
              <i class="fa fa-envelope icon"></i>
              <input class="input-field" type="text" placeholder="Email" name="email" id="email">
            </div>-->
            
           
          
            <button onclick="validtionlogin()" name="submit" value="submit"class="btn">Sign in</button><br><br>
          </form>
         <!-- <center> <strong>No for Any account?</strong><a href=" http://localhost/dhirenphp/signup.php" style="color:blue;">Sign up</a></center></center>
           <br>
           <center><a href="">Forget password</a></center>--->
    </body>
    </html>