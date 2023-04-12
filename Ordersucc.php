<?php
 session_start();
 // echo "Wellcome".$_SESSION['email'];
   $Email=$_SESSION['email1'];
   $Password=$_SESSION['Password'];
?>
 <?php
              include('connection.php');
              $servername="localhost";
              $username="root";
              $password="";
              $dbname="registation";
              $conn=mysqli_connect($servername,$username,$password,$dbname);
              $Email=$_SESSION['email1'];
              $Password=$_SESSION['Password'];
              if($Email==true && $Password==true){

              }
              else{
                header("location:UserLogin.php");
              }
              ?>
<!DOCTYPE html>
<html>
<head>
    <title>Your Order's</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
* {
  box-sizing: border-box;
}
.header {
  overflow: hidden;
  background-color: #f1f1f1;
  padding: 20px 10px;
}

.header a {
  float: left;
  color: black;
  text-align: center;
  padding: 12px;
  text-decoration: none;
  font-size: 18px; 
  line-height: 25px;
  border-radius: 4px;
}

.header a.logo {
  font-size: 25px;
  font-weight: bold;
}

.header a:hover {
  background-color: #ddd;
  color: black;
}

.header a.active {
 
}

.header-right {
  float: right;
}

@media screen and (max-width: 500px) {
  .header a {
    float: none;
    display: block;
    text-align: left;
  }
  
  .header-right {
    float: none;
  }
}
#myInput {
  background-image: url('/css/searchicon.png');
  background-position: 10px 10px;
  background-repeat: no-repeat;
  width: 100%;
  font-size: 16px;
  padding: 12px 20px 12px 40px;
  border: 1px solid #ddd;
  margin-bottom: 12px;
}

#myTable {
  border-collapse: collapse;
  width: 100%;
  border: 1px solid #ddd;
  font-size: 18px;
}

#myTable th, #myTable td {
  text-align: left;
  padding: 12px;
}

#myTable tr {
  border-bottom: 1px solid #ddd;
}

#myTable tr.header, #myTable tr:hover {
  background-color: #f1f1f1;
}
.byhover:hover{
    background-color: green;
    color:white;
}
.container {
  padding: 16px;
  text-align: center;
}

/* The Modal (background) */
.modal {
  display: none; /* Hidden by default */
  position: fixed; /* Stay in place */
  z-index: 1; /* Sit on top */
  left: 0;
  top: 0;
  width: 100%; /* Full width */
  height: 100%; /* Full height */
  overflow: auto; /* Enable scroll if needed */
  background-color: #474e5d;
  padding-top: 50px;
}

/* Modal Content/Box */
.modal-content {
  background-color: #fefefe;
  margin: 5% auto 15% auto; /* 5% from the top, 15% from the bottom and centered */
  border: 1px solid #888;
  width: 80%; /* Could be more or less, depending on screen size */
}

/* Style the horizontal ruler */
hr {
  border: 1px solid #f1f1f1;
  margin-bottom: 25px;
}
 
/* The Modal Close Button (x) */
.close {
  position: absolute;
  right: 35px;
  top: 15px;
  font-size: 40px;
  font-weight: bold;
  color: #f1f1f1;
}

.close:hover,
.close:focus {
  color: #f44336;
  cursor: pointer;
}

/* Clear floats */
.clearfix::after {
  content: "";
  clear: both;
  display: table;
}

/* Change styles for cancel button and delete button on extra small screens */
@media screen and (max-width: 300px) {
  .cancelbtn, .deletebtn {
     width: 100%;
  }
}
</style>
</head>
<body>
<div class="header">
  <a  class="logo"><font color="orange" size="10"><strong>E-Stock Market</strong></font></a>
  <div class="header-right">
    <a class="active" href="UserHome.php">Home</a>
    
   
  </div>
</div>

<input type="" id="myInput" onkeyup="myFunction()" placeholder="Search for Mobile Product.." title="Type in a name">

<table id="myTable">
  
  <tr class="header">
    <th style="width:10%;"></th>
    <th style="width:10%;"></th>
    <th style="width:10%;"></th>
     <th style="width:10%;"></th>
      <th style="width:10%;"></th>
      </tr>
  
  <?php
  $noser="";
//include("connection.php");
$servername="localhost";
$username="root";
$password="";
$dbname="registation";
$conn=mysqli_connect($servername,$username,$password,$dbname);
$Email=$_SESSION['email1'];
$Password=$_SESSION['Password'];
if($Email==true && $Password==true){
$servername="localhost";
  $username="root";
  $password="";
  $dbname="orderdata";
  
  $conn=mysqli_connect($servername,$username,$password,$dbname);
  


  $sql="SELECT * from ordersuu1 where Email_id='$Email'";
  $data=mysqli_query($conn,$sql);
  $total=mysqli_num_rows($data);
  if($total>0)
  {
    $noser=30;
  }
  $id=rand(100000,999999);
  while($info=mysqli_fetch_array($data)){
    $mobi_id=$info['P_ID'];
    $P_NAME=$info['P_Name'];
    $P_RAM=$info['P_Ram'];
    $P_ROM=$info['P_Rom'];
    $Mail=$info['Email_id'];
    $price=$info['P_price'];
    $servername="localhost";
    $username="root";
    $password="";
    $dbname="orderdata";
    ?><?php
    
   ?>

   <tr>
    
   <td id="loc"><font size="6"><?php echo $info['P_Name']; ?></font><br>
  
  </td>
      <td><?php $filename=$info['img_sources']; echo "<img src='$filename' style='height:210px;'>"?></td>
      <td><font size="6"><i class="fa fa-rupee"></i></font><font color="blue"size="6"><strong><?php echo $info['P_price'] ?></strong></font></td>
      <td>
   
  

      <h2>Specification</h2>
      <!--<p>Color:<?php echo $info['P_Color'];?></p>-->
      <p>RAM:<?php echo $info['P_Ram'];?></p>
      <p>ROM:<?php echo $info['P_Rom'];?></p>
      <p><?php echo $info['P_Add'];?></p>
      <p>Order Place Date:<?php echo $info['Date'];?></p>

  

  </td>
  <td><img src="right1.JPEG" style="width:100px;">
<!--<p>Delivery By:<?php // echo $info['Emp_name']?></p>-->
<!--<p>Mobile no:<?php// echo $info['Emp_mobile']?></p>-->
<?php $dele="";
echo "<a href='delete1.php?rn=$info[id]' onclick='window.alert(Delet Sucssesfully)'><p><button type='button' onclick=window.open('Ordersucc.php','_parent') style='background-color:red;color:white;width:100px;height:40px;border-radius:20px;' data-toggle='button' aria-pressed='false' autocomplete='off'>
  Delete
</button></p></a>";?>
</td>
  </tr>
  <?php
  }
}
?>            
              
 

</table>

<script>
function myFunction() {
  var input, filter, table, tr, td, i, txtValue;
  input = document.getElementById("myInput");
  filter = input.value.toUpperCase();
  table = document.getElementById("myTable");
  tr = table.getElementsByTagName("tr");
  for (i = 0; i < tr.length; i++) {
    td = tr[i].getElementsByTagName("td")[0];
    if (td) {
      txtValue = td.textContent || td.innerText;
      if (txtValue.toUpperCase().indexOf(filter) > -1) {
        tr[i].style.display = "";
      } else {
        tr[i].style.display = "none";
      }
    }       
  }
}

</script>
<?php
if($total==0){
  echo "<center><font color='red' size='10'>Oder Now</font><br><img src='noplace.JPEG' style='width:200px;''></center>";
}
?>
</body>
</html>


