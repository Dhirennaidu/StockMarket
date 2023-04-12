<?php
$servername="localhost";
$username="root";
$password="";
$dbname="orderdata";

$conn=mysqli_connect($servername,$username,$password,$dbname);
$dell=$_GET['rn'];

$sqll="DELETE FROM ordersuu1 Where id='$dell'";
$data=mysqli_query($conn,$sqll);
if($data)
{   
   
    header('location:Ordersucc.php');
}
?>