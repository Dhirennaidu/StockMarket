<?php
$servername="localhost";
$username="root";
$password="";
$dbname="notification";

$conn=mysqli_connect($servername,$username,$password,$dbname);
$dell=$_GET['rn'];

$sqll="DELETE FROM `message` Where id='$dell'";
$data=mysqli_query($conn,$sqll);
if($data)
{   
   
    header('location:Notification.php');
}
?>