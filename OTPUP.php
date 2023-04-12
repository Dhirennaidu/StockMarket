<?php
session_start();
$mass=0;
 $maill=$_SESSION['UserEmail'];
 $OTPP=$_SESSION['OTP1'];
  $servername="localhost";
  $username="root";
  $password="";
  $dbname="registation";
  $conn=mysqli_connect($servername,$username,$password,$dbname);
 $add="UPDATE usertable1 SET OTP_NUMBER='$OTPP' WHERE User_Email='$maill'";
 $re=mysqli_query($conn,$add);
 
  if($re){
   echo "<script>window.alert('Registation Sucssesfully');
   window.open('Homepage.php');
   </script>";

  // $mass=30;
  }
 
?>
<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>Registation Sucssesfully</title>
</head>
<html>