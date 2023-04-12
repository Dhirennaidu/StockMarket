<?php
session_start();
?>
<?php
 $servername="localhost";
 $username="root";
 $password="";
 $dbname="edit1";
$conn=mysqli_connect($servername,$username,$password,$dbname);
if(isset($_POST['signin'])){
    $mobile=$_POST['mobile'];
    $password=$_POST['PASSWORD'];
   $query="SELECT * from editepro where mobile='$mobile' AND PASSWORD='$password'";
   $result=mysqli_query($conn,$query);
   $row=mysqli_num_rows($result);
   if($row == 1){
      //echo "login ok";
      $_SESSION['mobile']=$mobile;
      $_SESSION['PASSWORD']=$password;
      header('location:admin.php');
   }
     else{
      echo "<div style='padding: 20px;
      background-color: #f44336;
      color: white;'>!Login failed you Enter a worng Mobile number and Password Please Contact  number(8658135266)
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
      //  if($suc1){
       //   echo "<div style='width:100%;background-color:green;color:white;padding: 20px;'><font size='6'><i class='fa fa-check'></i>Successe fully Login</font><a href='http://localhost/dhirenphp/admin.php'></a></div>";
       // }
        ?>
        <form action="#" style="max-width:500px;margin:auto"  method="POST" id="form">
            <h1 style="color:blue;">Admin Login</h1>
            <div class="alert alert-danger" style="border-radius: 20px; display:none;background-color: rgb(255, 255, 255);color:rgb(255, 0, 0);width: 100%;height: 50px;" role="alert"id="alertad">
            
            </div>
            <div class="input-container">
                <i class="fa fa-phone" style=" padding: 10px;
                background: dodgerblue;
                color: white;
                min-width: 50px;
                text-align: center;"></i>
                <input class="input-field" type="text" placeholder="Mobile number" name="mobile" id="mobile" required>
              </div>
            
            <div class="input-container">
              <i class="fa fa-key icon"></i>
              <input class="input-field" type="password" placeholder="Password" name="PASSWORD" id="PASSWORD" required>
            </div>
          
            <button onclick="validtionloginad()" type="submit" value="submit"class="btn" name="signin">Sign in</button><br><br>
          </form>
        <!--  <center> <strong>No for Any account?</strong><a href="signup.html" style="color:blue;">Sign up</a></center></center>
           <br>
           <center><a href="">Forget password</a></center>-->
    </body>
    
    </html>