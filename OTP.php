<?php
session_start();
?>
<?php

include "mail_function.php";
date_default_timezone_set("Asia/Kolkata");
$success ="";
$val="";
$mss1="";
$mss="";
$smss="";
$Email_OTP="";
$Mail="";
$OPTN=0;
$error_message="";
$servername="localhost";
$username="root";
$password="";
$dbname="registation";
$conn=mysqli_connect($servername,$username,$password,$dbname);
if(!empty($_POST['submit_email'])){$EMAIL1=$_POST['email'];
    $sql="SELECT * from usertable1 where User_Email='$EMAIL1'";//`
    $result=mysqli_query($conn,$sql);
 $count=mysqli_num_rows($result);
 while($info=mysqli_fetch_array($result)){
  $Email_OTP=$info['User_Email'];
  $_SESSION['UserEmail']=$Email_OTP;
 }
    if($count>0){
        //genrate OTP
        $otp=rand(1000,9999);
    
    $mail_status=sendOTP($EMAIL1,$otp);
    
    if($mail_status==1){$OTPTIME=date("Y-m-d h:i:sa");
      //echo $OTPTIME;
      //$success=1;
      $serial=0;
      $sql1="INSERT INTO `otp_expiry1` (`id`, `OTP_NUMBER`, `is_expiry`, `signtime`) VALUES ('NULL', '$otp', '0', '$OTPTIME');";
      $result1=mysqli_query($conn,$sql1);
    //  $rowss=mysqli_num_rows($result1);
    //  if($rowss>0){
     //   echo "succsessfully otp inserted";
    //  }
      $current_id=mysqli_insert_id($conn);
      if(!empty($current_id)){
        $success=1;
      }
    }
  /*  if($val == 1){
        $result =mysqli_query($conn,"INSERT INTO otp_expiry('OTP_NUMBER','is_epiry','signtime') VALUES ('".$otp."',0,'".date("Y-m-d H:i:s")."')");
      $current_id=mysqli_insert_id($conn);

       if(!empty($current_id)){
        $success=1;
       }*/

}else{
    $error_message="Email not exists!";
    //echo $error_message;
    $mss1=2;
}
}

if(!empty($_POST['submit_otp'])){$SOTP=$_POST['otp'];
  $OPTN=$SOTP;
  $_SESSION['OTP1']=$OPTN;
  $sql2="SELECT * from otp_expiry1 where OTP_NUMBER='$SOTP' and is_expiry!='1'";// and  NOW() <=DATE_ADD(create_at,INTERVAL 24 HOUR)";
  $result=mysqli_query($conn,$sql2);
  $count1=mysqli_num_rows($result);
if(!empty($count1)){
  //  $sql="UPDATE otp_expiry1 SET is_expiry=1 WHERE OTP_NUMBER='$SOTP'";
 $Mail=30;
 
   // $count1=mysqli_num_rows($result1);
    $success=2;
    //echo $Email_OTP;
    $smss=4;
  }else{
    $success=1;
    $error_message="Invalid OTP";
    $mss=3;
  }
  
}

//error_reporting(0);
//$Emaill=$_SESSION['OTPNN'];
if($Mail==30){
  
  header("location:OTPUP.php");
}


?>


<!DOCTYPE html>
<!DOCTYPE html>
<html>
    <head>
        <title>OTP Send</title>
         <link rel="stylesheet" type="text/css" href="style.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
 <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link href="npm i bootstrap-icons">
        <link rel="stylesheet" href="http://www.w3schools.com/lib/w3.css">
        <link rel="stylesheet" href="../lib/w3.css">
      <style>
        @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@500;600;700');
*{
  border-radius: 0px !important;
  font-family: "Poppins", sans-serif;
  background-color:white;
}

body{
  background-color:white !important ;
  display: flex;
  align-items: center;
  height: 100vh;
}

.card{
  border: none !important;
  display: flex;
  align-items: center;
  justify-content: center;
  background-color:white;
  
}

.card-header{
  color: black !important;
  background-color: white;
  text-align: center;
}

.card-header > img{
  width: 180px;
}

.input-container input{
  width: 40px;
  height: 40px;
}

.form-control:focus{
  box-shadow: none !important;
  border: 1px solid blue ;
}

.verify-btn{
  border-radius: 20px !important;
  border: 0px !important;
  width: 140px;
  background-color: blue !important;
}
           </style>
        </head>
        <body>
         <div class="container d-flex justify-content-center align-items-center">
             
      <div class="card text-center">
          
        <div class="card-header p-5"><i class="fa fa-cross"></i>
           <p class="text-center h1 fw-bold mb-5 mx-1 mx-md-4 mt-4"><font color="orange" size="10"><strong>E-Stock Market</strong></font></p>
          <h5 class="mb-2"></h5>
          <div>
            <small><p><?php 
           if($mss==3){
              echo "<div class='alert alert-danger' >Invalid OTP</div>";
              } 
              ?>
          
          
          </p>
            <p><?php 
             if($mss1==2){
              echo "<div class='alert alert-danger'>Invalid Email</div>";
            }
    
            ?></p>
            
            <p><?php 
             if($smss==4){
              echo "<img src='right1.JPEG'>";
            }
    
            ?></p>
            </small>
          </div>
         <?php
            if(!empty($error_message)){
         ?>
         <p><?php $error_message; ?></p>
         <?php
            }
         ?>
        </div>
        <form  name="frmUser" method="post" id="formm" action="" autocomplete="off">
        <div class="input-container d-flex flex-row justify-content-center mt-2">
         <?php
            if(!empty($success == 1)){
         ?>
        <div style="width:300px;height:200px;">Enter a OTP<br>
        <p style="color:green">Check your Email for The OTP</p>
        <input type="text" name="otp" maxlength="4" class="m-1 text-center form-control rounded"  style="width:300px;" placeholder="Enter a 4-digit OTP" required="please Enter 6-digits Code"><br>
        <input type="submit" name="submit_otp"style="width:200px;height:40px;background-color:blue;color:white;border-radius: 25px;" value="Submit">  
    </div>
        <?php
            } else if($success==2){
        ?>
        <div style="width:300px;height:100px;">
        <p style="color:#31ab00;font-size:20px;"><strong>Registation Successfully</strong></p>
        <button onclick="window.open('Homepage.php')" class="w3-btn w3-round-xxlarge" style="background-color:green;">Go to Home page</button>
            </div>
        <?php
            }
            else
            {
        ?>
        <p>Enter your Login Email</div>
        <!--<input type="text" name="email" placeholder="Enter a Email" required>-->
        <input type="text" name="email" id="email_st" class="m-1 text-center form-control rounded"  style="width:300px;" placeholder="Enter a Email" required="please Enter 6-digits Code"><br>
        <input onclick="validotp1()" type="submit" name="submit_email" class="btn btn-success px-4 verify-btn" value="verify"><br><br>
        <?php
            }
        ?> 
    </div>
    </form>
          <script>
              function validotp1()
              {
                   var otp1=document.getElementById('otpnum').value;
                   var alotp=documnet.getElementById('otpalert');
                   if(otp1==''){
                       alotp.style.display="block";
                       alotp.innerHTML="<center>Enter a 6-digit Verification Code</center>";
                   }
               }
               function myFunction() {
  window.open("Homepage.php","_parent");
}
              </script>
        </body>
    </html>
   