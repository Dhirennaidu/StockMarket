
<?php
session_start();

$password1=$_SESSION['Adminpass1'];
if($password1 == "Raja@1234")
{

}
else
{
  header("location:Homepage.php");
}

?>
<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>Admin Profile</title>
         <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link href="npm i bootstrap-icons">
        <link rel="stylesheet" href="http://www.w3schools.com/lib/w3.css">
<link rel="stylesheet" href="http://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.4.0/css/font-awesome.min.css">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
        <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
 <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>   
<script src="https://kit.fontawesome.com/yourcode.js" crossorigin="anonymous"></script>
 <script src="https://kit.fontawesome.com/yourcode.js" crossorigin="anonymous"></script>
 <link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="https://pixinvent.com/stack-responsive-bootstrap-4-admin-template/app-assets/css/bootstrap-extended.min.css">
<link rel="stylesheet" type="text/css" href="https://pixinvent.com/stack-responsive-bootstrap-4-admin-template/app-assets/fonts/simple-line-icons/style.min.css">
<link rel="stylesheet" type="text/css" href="https://pixinvent.com/stack-responsive-bootstrap-4-admin-template/app-assets/css/colors.min.css">
<link rel="stylesheet" type="text/css" href="https://pixinvent.com/stack-responsive-bootstrap-4-admin-template/app-assets/css/bootstrap.min.css">
<link href="https://fonts.googleapis.com/css?family=Montserrat&display=swap" rel="stylesheet">
 
</head>
    <style>
 body {
  margin: 0;
  font-family: Arial, Helvetica, sans-serif;
  
}

.topnav {
  overflow: hidden;
  background-color: #8325ff;
}

.topnav a {
  float: left;
  display: block;
  color: #f2f2f2;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
  font-size: 17px;
}

.topnav a:hover {
  background-color: #8325ff;
  color: black;
}

.topnav a.active {
  background-color: #8325ff;
  color: white;
}

.topnav .icon {
  display: none;
}

@media screen and (max-width: 600px) {
  .topnav a:not(:first-child) {display: none;}
  .topnav a.icon {
    float: right;
    display: block;
  }
}

@media screen and (max-width: 600px) {
  .topnav.responsive {position: relative;}
  .topnav.responsive .icon {
    position: absolute;
    right: 0;
    top: 0;
  }
  .topnav.responsive a {
    float: none;
    display: block;
    text-align: left;
  }
}
/*pofile font page*/
input[type=text], select, textarea {
  width: 100%;
  padding: 12px;
  border: 1px solid #ccc;
  border-radius: 4px;
  resize: vertical;
}

label {
  padding: 12px 12px 12px 0;
  display: inline-block;
}

input[type=submit] {
  background-color: #04AA6D;
  color: white;
  padding: 12px 20px;
  border: none;
  border-radius: 4px;
  cursor: pointer;
  float: right;
}

input[type=submit]:hover {
  background-color: #45a049;
}

.container {
  border-radius: 5px;
  background-color: #f2f2f2;
  padding: 20px;
  
}

.col-25 {
  float: left;
  width: 25%;
  margin-top: 6px;
  font-family: 'Roboto', sans-serif;
}

.col-75 {
  float: left;
  width: 75%;
  margin-top: 6px;
  color:blue;
}

/* Clear floats after the columns */
.row:after {
  content: "";
  display: table;
  clear: both;
}

/* Responsive layout - when the screen is less than 600px wide, make the two columns stack on top of each other instead of next to each other */
@media screen and (max-width: 600px) {
  .col-25, .col-75, input[type=submit] {
    width: 100%;
    margin-top: 0;
  }
}
/*------------------*/
/*Admin buttons*/
.stdbtn{
  border-radius:10px;
  width:270px;
  height:40px;
  background-color:#7aca90;
  color:white;
}
.stdbtn:hover{
  background-color:blue;
  color:white;
}
.pbtn{
  border-radius:10px;
  width:270px;
  height:40px;
  background-color:#196e90;
  color:white;
}
.pbtn:hover{
  background-color:blue;
  color:white;
}
.albtn{
  border-radius:10px;
  width:270px;
  height:40px;
  background-color:#d057c2;
  color:white;
}
.albtn:hover{
  background-color:blue;
  color:white;
}
.rbtn{
  border-radius:10px;
  width:270px;
  height:40px;
  background-color:#ffba4d;
  color:white;
}
.rbtn:hover{
  background-color:blue;
  color:white;
}
.tbn{
  border-radius:10px;
  width:270px;
  height:40px;
  background-color:#7a006a;
  color:white;
}
.tbn:hover{
  background-color:blue;
  color:white;
}
.abtn{
  border-radius:10px;
  width:270px;
  height:40px;
  background-color:#00fadb;
  color:black;
}
.abtn:hover{
  background-color:blue;
  color:white;
}
a{
    text-decoration: none;
  }
/*----------------------*/
table {
  border-collapse: collapse;
  width: 100%;
}

th, td {
  padding: 8px;
  text-align: left;
  border-bottom: 1px solid #ddd;
}
.dropbtn {border-radius:10px;
 background-color:red;
  color: white;
  padding: 6px;
  font-size: 18px;
  border: none;
}

.dropdown {border-radius:10px;
  position: relative;
  display: inline-block;

}

.dropdown-content {border-radius:10px;
  display: none;
  position: absolute;
  background-color: blue;
  min-width: 100%;
  content:center;
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
  z-index: 1;
}

.dropdown-content a {
  color: white;
  padding: 6px 10px;
  text-decoration: none;
  display: block;
}

.dropdown-content a:hover {background-color: #ddd;}

.dropdown:hover .dropdown-content {display: block;}

.dropdown:hover .dropbtn {background-color: #3e8e41;}



#loader {background-color:black;
  position: absolute;
  left: 50%;
  top: 50%;
  z-index: 1;
  width: 120px;
  height: 120px;
  margin: -76px 0 0 -76px;
  border: 16px solid #f3f3f3;
  border-radius: 50%;
  border-top: 16px solid #3498db;
  -webkit-animation: spin 2s linear infinite;
  animation: spin 2s linear infinite;
}

@-webkit-keyframes spin {
  0% { -webkit-transform: rotate(0deg); }
  100% { -webkit-transform: rotate(360deg); }
}

@keyframes spin {
  0% { transform: rotate(0deg); }
  100% { transform: rotate(360deg); }
}

/* Add animation to "page content" */
.animate-bottom {
  position: relative;
  -webkit-animation-name: animatebottom;
  -webkit-animation-duration: 1s;
  animation-name: animatebottom;
  animation-duration: 1s
}

@-webkit-keyframes animatebottom {
  from { bottom:-100px; opacity:0 } 
  to { bottom:0px; opacity:1 }
}

@keyframes animatebottom { 
  from{ bottom:-100px; opacity:0 } 
  to{ bottom:0; opacity:1 }
}

#myDiv {
  display: none;
  text-align: center;
}
      </style>
    <body onload="" style="margin:0;">
   
    <section style="background-color: white;">
  <div class="container py-5"  style="background-color: white;">
    <div class="row">
      <div class="col">
        <nav aria-label="breadcrumb" class="bg-light rounded-3 p-3 mb-4">
          
          <center><font size="8" color="blue"><strong>Admin Profile</strong></font></center>
          
        </nav>
      </div>
    </div>

    </div>
 
</div>
</div>
<div class="container">
  <form action="/action_page.php">
    <div class="row">
      <div class="col-25">
        <label for="fname">Admin Name</label>
      </div>
      <div class="col-75">
        <?php
         $AdminName="";
         $Adminmobi="";
         $AdminVilla="";
            $servername="localhost";
            $username="root";
            $password="";
            $dbname="adminpass";
            $sum=0;
            $conn=mysqli_connect($servername,$username,$password,$dbname);
            $sql="SELECT * from admin_pass1 Where Admin_ID='202324'";
            $data=mysqli_query($conn,$sql);
            while($info=mysqli_fetch_array($data)){
            $AdminName=$info['Admin_Na'];
            $Adminmobi=$info['Admin_Mobi'];
            $AdminVilla=$info['Village_CIty'];
            }
        ?>
      <table>
            
              
                <tr>
                <td>
                  <?php
                   echo $AdminName;
                  ?>
                </td>
                </tr>
               
             </table>

      </div>
    </div>
    <div class="row">
      <div class="col-25">
        <label for="lname">Admin Mobile no</label>
      </div>
      <div class="col-75">
      <table>
            
                <tr>
                <td>
                <?php
                   echo $Adminmobi;
                  ?>
                </td>
                </tr>
              
             </table>
      </div>
    </div>
    <div class="row">
      <div class="col-25">
        <label for="country">Village/City</label>
      </div>
      <div class="col-75">
      <table>
            
                <tr>
                <td>
                <?php
                   echo $AdminVilla;
                  ?>
                </td>
                </tr>
           
             </table>
      </div>
    </div>
    <div class="row">
      <div class="col-25">
        <label for="subject">Admin Pin code</label>
      </div>
      <div class="col-75">
      <table>
           
                <tr>
                <td>202324</td>
                </tr>
             
             </table>
      </div>
    </div>
    <div class="row">
      <div class="col-25">
        <label for="subject">Admin of</label>
      </div>
      <div class="col-75">
      <table> 
                <tr>
                <td>E-Stock Market</td>
                </tr>
             </table>
      </div>
    </div><br>
   
  </form>
</div>
<hr>
<!----------------------------Dashbord--------------------------->
<div class="grey-bg container-fluid">
  <section id="minimal-statistics">
    <div class="row">
      <div class="col-12 mt-3 mb-1">
        <h4 class="text-uppercase">Dashboard</h4>
        <p>OF E-Stock Market</p>
      </div>
    </div>
   
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.1/css/all.min.css" integrity="sha256-mmgLkCYLUQbXn0B1SRqzHar6dCnv9oZFPEC1g1cwlkk=" crossorigin="anonymous" />


    
  </section>
  
  
</div>
<!--------------------------------------------------------------->
<div class="card-deck">
  <div class="card">
   <center><h1>Mobile</h1></center>
   <div class="card text-white bg-danger mb-3" style="max-width: 24rem;">
  <div class="card-header">Total mpbile Purches Price</div>
  <div class="card-body">
  
  <?php
      //include("connection.php");
      $servername="localhost";
        $username="root";
        $password="";
        $dbname="uploadmobile";
        $sum=0;
        $conn=mysqli_connect($servername,$username,$password,$dbname);
        $sql="SELECT * from mobileproduct";
        $data=mysqli_query($conn,$sql);
        while($info=mysqli_fetch_array($data)){
           $sum+=$info['Product_Total'];
        }
       
    ?>  
    <p class="card-text"><h1><?php  echo $sum; ?></h1></p>
  </div>
</div>
<div class="card text-white bg-success mb-3" style="max-width: 24rem;">
  <div class="card-header">Mobile Stock</div>
  <div class="card-body">
  <?php
      //include("connection.php");
      $servername="localhost";
      $username="root";
      $password="";
      $dbname="orderdata";
      $sum1=0;
      $conn=mysqli_connect($servername,$username,$password,$dbname);
      $sql="SELECT * from mobileadd1";
      $data1=mysqli_query($conn,$sql);
      $totalnums=mysqli_num_rows($data1);
      $sum2=$totalnums;
      
      $servername="localhost";
        $username="root";
        $password="";
        $dbname="uploadmobile";
        $sum1=0;
        $conn=mysqli_connect($servername,$username,$password,$dbname);
        $sql="SELECT * from mobileproduct";
        $data=mysqli_query($conn,$sql);
        while($info=mysqli_fetch_array($data)){
           $sum1+=$info['Product_Totalpice'];
        }
       
    ?>  
    <p class="card-text"><h1><?php  echo $sum1; ?></h1></p>
  </div>
</div>
<div class="card text-white bg-info mb-3"  style="max-width: 24rem;">
  <div class="card-header">Mobile sal</div>
  <div class="card-body">
  <p class="card-text"><h1><?php echo $sum2; ?></h1></p>
  </div>
</div>
<div class="card bg-light mb-3" style="max-width: 24rem;">
  <div class="card-header">Total Sal Price</div>
  <div class="card-body"><?php
  $servername="localhost";
        $username="root";
        $password="";
        $dbname="orderdata";
        $sal=0;
        $conn=mysqli_connect($servername,$username,$password,$dbname);
        $sql="SELECT * from mobileadd1";
        $data=mysqli_query($conn,$sql);
        while($info=mysqli_fetch_array($data)){
           $sal+=$info['Pro_price'];
        }
       
    ?>  
  <p class="card-text"><h1><?php echo $sal; ?></h1></p>
  </div>
</div>
  </div>
  <div class="card">
  <center><h1>Laptop</h1></center>
    <div class="card-body">
    <div class="card text-white bg-danger mb-3" style="max-width: 24rem;">
  <div class="card-header">Total Purches Laptop Price</div>
  <div class="card-body">
  <?php
      //include("connection.php");
      $servername="localhost";
        $username="root";
        $password="";
        $dbname="uploadlaptop";
        $sum=0;
        $conn=mysqli_connect($servername,$username,$password,$dbname);
        $sql="SELECT * from laptopproduct1";
        $data=mysqli_query($conn,$sql);
        while($info=mysqli_fetch_array($data)){
           $sum+=$info['Laptop_total'];
        }
       
    ?>  
    <p class="card-text"><h1><?php  echo $sum; ?></h1></p>
  </div>
</div>
<div class="card text-white bg-success mb-3" style="max-width: 24rem;">
  <div class="card-header">Laptop Stock</div>
  <div class="card-body">
  <?php
      //include("connection.php");
    /*  $servername="localhost";
      $username="root";
      $password="";
      $dbname="orderdata";
      $sum1=0;
      $conn=mysqli_connect($servername,$username,$password,$dbname);
      $sql="SELECT * from mobileadd";
      $data1=mysqli_query($conn,$sql);
      $totalnums=mysqli_num_rows($data1);
      $sum1=$totalnums;
      echo $sum1;*/
      $servername="localhost";
        $username="root";
        $password="";
        $dbname="uploadlaptop";
        $sum=0;
        $conn=mysqli_connect($servername,$username,$password,$dbname);
        $sql="SELECT * from laptopproduct1";
        $data=mysqli_query($conn,$sql);
        while($info=mysqli_fetch_array($data)){
           $sum+=$info['Laptop_pice'];
        }
        $servername="localhost";
        $username="root";
        $password="";
        $dbname="orderdata";
        $sal=0;
        $conn=mysqli_connect($servername,$username,$password,$dbname);
        $sql="SELECT * from laptopadd1";
        $datad=mysqli_query($conn,$sql);
        $totalc=mysqli_num_rows($datad);    
    ?>  
    <p class="card-text"><h1><?php  echo $sum-$totalc; ?></h1></p>
  </div>
</div>
<div class="card text-white bg-info mb-3"  style="max-width: 24rem;max-height: 24rem;">
  <div class="card-header">Laptop sal</div>
  <div class="card-body">
  <p class="card-text"><h1><?php echo $totalc;?></h1></p>
  </div>
</div>
<div class="card bg-light mb-3" style="max-width: 24rem;">
  <div class="card-header">Laptop Sal Price</div>
  <div class="card-body"><?php
  $servername="localhost";
        $username="root";
        $password="";
        $dbname="orderdata";
        $sal=0;
        $conn=mysqli_connect($servername,$username,$password,$dbname);
        $sqlL="SELECT * from laptopadd1";
        $datad1=mysqli_query($conn,$sqlL);
        $totalc=mysqli_num_rows($datad);
        $data=mysqli_query($conn,$sql);
        while($info=mysqli_fetch_array($datad1)){
           $sal+=$info['Lap_sal'];
        }
        ?>
  <p class="card-text"><h1><?php echo $sal; ?></h1></p>
  
  </div>
</div>
    </div>
  </div>
  <div class="card">
  <center><h1>Tablet</h1></center>
    <div class="card-body">
    <div class="card text-white bg-danger mb-3" style="max-width: 24rem;">
  <div class="card-header">Tablet Purches prize</div>
  <div class="card-body">
  <?php
      $servername="localhost";
      $username="root";
      $password="";
      $dbname="uploadtablet";
      $Tabsum=0;
      $conn=mysqli_connect($servername,$username,$password,$dbname);
      $sqlL="SELECT * from tabletproduct1";
      $datad1=mysqli_query($conn,$sqlL);
      $totalc=mysqli_num_rows($datad);
      //$data=mysqli_query($conn,$sql);
      while($info=mysqli_fetch_array($datad1)){
         $Tabsum+=$info['Tab_total'];
      }
      ?>
        
  <p class="card-text"><h1><?php echo $Tabsum; ?></h1></p>
  </div>
</div>
<div class="card text-white bg-success mb-3" style="max-width: 24rem;">
  <div class="card-header">Tablet Stock</div>
  <div class="card-body">
  <?php
      $servername="localhost";
      $username="root";
      $password="";
      $dbname="uploadtablet";
      $Tabsum1=0;
      $conn=mysqli_connect($servername,$username,$password,$dbname);
      $sqlL="SELECT * from tabletproduct1";
      $datad1=mysqli_query($conn,$sqlL);
      $totalc=mysqli_num_rows($datad);
      //$data=mysqli_query($conn,$sql);
      while($info=mysqli_fetch_array($datad1)){
         $Tabsum1+=$info['Tab_Pice'];
      }
      ?>
        
  <p class="card-text"><h1><?php echo $Tabsum1; ?></h1></p>
  </div>
</div>
<div class="card text-white bg-info mb-3"  style="max-width: 24rem;">
  <div class="card-header">Tablet Sal</div>
  <div class="card-body"><?php
  $servername="localhost";
        $username="root";
        $password="";
        $dbname="orderdata";
        $sal=0;
        $conn=mysqli_connect($servername,$username,$password,$dbname);
        $sql="SELECT * from tabletadd";
        $datad=mysqli_query($conn,$sql);
        $totalc=mysqli_num_rows($datad); 
        ?>   
  <p class="card-text"><h1><?php echo $totalc; ?></h1></p>
  </div>
</div>
<div class="card bg-light mb-3" style="max-width: 24rem;">
  <div class="card-header">Tablet Sal Price</div>
  <div class="card-body">
  <?php
  $servername="localhost";
        $username="root";
        $password="";
        $dbname="orderdata";
        $sal11=0;
        $conn=mysqli_connect($servername,$username,$password,$dbname);
        $sqlL="SELECT * from tabletadd";
        $datad1=mysqli_query($conn,$sqlL);
        $totalc=mysqli_num_rows($datad);
        $data=mysqli_query($conn,$sql);
        while($info=mysqli_fetch_array($datad1)){
           $sal11+=$info['Tabsal'];
        }
        ?>
  <p class="card-text"><h1><?php echo $sal11; ?></h1></p>
  </div>
</div>
    </div>
  </div>
</div>




<!---------------------Admin user data,emp data,loss data----------------->
<link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="https://pixinvent.com/stack-responsive-bootstrap-4-admin-template/app-assets/css/bootstrap-extended.min.css">
<link rel="stylesheet" type="text/css" href="https://pixinvent.com/stack-responsive-bootstrap-4-admin-template/app-assets/fonts/simple-line-icons/style.min.css">
<link rel="stylesheet" type="text/css" href="https://pixinvent.com/stack-responsive-bootstrap-4-admin-template/app-assets/css/colors.min.css">
<link rel="stylesheet" type="text/css" href="https://pixinvent.com/stack-responsive-bootstrap-4-admin-template/app-assets/css/bootstrap.min.css">
<link href="https://fonts.googleapis.com/css?family=Montserrat&display=swap" rel="stylesheet">


<!------------------------------------------------------------------------>
<!-- Footer -->
<footer class="text-center text-lg-start bg-white text-muted">
  <!-- Section: Social media -->
  <section class="d-flex justify-content-center justify-content-lg-between p-4 border-bottom"style="background-color: black;color:white;">
    <!-- Left -->
    <div class="me-5 d-none d-lg-block" style="background-color: black;color:white;">
      <span>Get connected with us on social networks:</span>
    </div>
    <!-- Left -->

    <!-- Right -->
    <div style="background-color: black;color:white;">
      <a href="" class="me-4 link-secondary" color="black">
        <i class="fa fa-facebook"></i>
      </a>
      <a href="" class="me-4 link-secondary">
        <i class="fa fa-twitter"></i>
      </a>
      <a href="" class="me-4 link-secondary">
        <i class="fa fa-google"></i>
      </a>
      <a href="" class="me-4 link-secondary">
        <i class="fa fa-instagram"></i>
      </a>
      <a href="" class="me-4 link-secondary">
        <i class="fa fa-linkedin"></i>
      </a>
      <a href="" class="me-4 link-secondary">
        <i class="fa fa-github"></i>
      </a>
    </div>
    <!-- Right -->
  </section>
  <!-- Section: Social media -->

  <!-- Section: Links  -->
  <section class="">
    <div class="container text-center text-md-start mt-5">
      <!-- Grid row -->
      <div class="row mt-3">
        <!-- Grid column -->
        <div class="col-md-3 col-lg-4 col-xl-3 mx-auto mb-4">
          <!-- Content -->
          <h6 class="text-uppercase fw-bold mb-4">
            <i class="fas fa-gem me-3 text-secondary"></i>Collage name
          </h6>
          <p>
           Roland Insitute of Computer & Mangament Study(RIC&MS)
          </p>
        </div>
        <!-- Grid column -->

        <!-- Grid column -->
        <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mb-4">
          <!-- Links -->
          <h6 class="text-uppercase fw-bold mb-4">
            Designed By
          </h6>
          <p>
            <a href="#!" class="text-reset">Dhiren naidu</a>
          </p>
          <p>
            <a href="#!" class="text-reset"></a>
          </p>
          <p>
            <a href="#!" class="text-reset"></a>
          </p>
          <p>
            <a href="#!" class="text-reset"></a>
          </p>
        </div>
        <!-- Grid column -->

        <!-- Grid column -->
        <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mb-4">
          <!-- Links -->
          <h6 class="text-uppercase fw-bold mb-4">
            My Email
          </h6>
          <p>
            <a href="#!" class="text-reset">dhirennaidu17@gmail.com</a>
          </p>
          <p>
            <a href="#!" class="text-reset"></a>
          </p>
          <p>
            <a href="#!" class="text-reset"></a>
          </p>
          <p>
            <a href="#!" class="text-reset"></a>
          </p>
        </div>
        <!-- Grid column -->

        <!-- Grid column -->
        <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mb-md-0 mb-4">
          <!-- Links -->
          <h6 class="text-uppercase fw-bold mb-4">Contact</h6>
         
          <p>
          
            
          </p>
          <p><i class="fa fa-phone"></i> +91 8658135266</p>
         
        </div>
        <!-- Grid column -->
      </div>
      <!-- Grid row -->
    </div>
  </section>
  <!-- Section: Links  -->

  <!-- Copyright -->
  <div class="text-center p-4" style="background-color: black;color:white;">
    © 2021 Copyright:
    <a class="text-reset fw-bold" href="https://mdbootstrap.com/">E-Stock Market.com</a>
  </div>
  <!-- Copyright -->
</footer>
<!-- Footer -->
<script>
function myFunction1() {
  var x = document.getElementById("myTopnav");
  if (x.className === "topnav") {
    x.className += " responsive";
  } else {
    x.className = "topnav";
  }
}
let counts=setInterval(updated);
        let upto=-1;
        function updated(){
            var count= document.getElementById("counter");
            count.innerHTML=++upto;
            if(upto===500)
            {
                clearInterval(counts);
            }
        }
        var myVar;

function myFunction() {
  myVar = setTimeout(showPage, 3000);
}

function showPage() {
  document.getElementById("loader").style.display = "none";
  document.getElementById("myDiv").style.display = "block";
}
</script>
</body>
</html>
            
</body>
</html>