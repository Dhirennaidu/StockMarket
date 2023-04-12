<?php
session_start();
$mobile=$_SESSION['mobile'];
?>
<!DOCTYPE html>
<html lang="en">
<head>
<title>admin</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Roboto:wght@900&display=swap" rel="stylesheet">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

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
    </style>
</head>
<?php

?>
<body>
<div class="topnav" id="myTopnav">
  <a href="Collage_font.php" class="active">Home</a>
  <a href="http://localhost/dhirenphp/Editeprofile.php">Sign up</a>
  <a href="http://localhost/dhirenphp/contact.php">Contact</a>
  <a href="#about">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  <div class="dropdown">
  <button class="dropbtn">Send a Massage to</button>
  <div class="dropdown-content">
   <a href="#">STUDENT</a>
    <a href="#">TEACHER</a>
    <a href="#">ALL</a>
  
</div>
  <a href="http://localhost/dhirenphp/Collage_font.php"><button type="submit"style="border-radius:20px;width:100px;height:40px;background-color:green;color:white;">Log out</button></a>
  <a href="javascript:void(0);" class="icon" onclick="myFunction1()">
    <i class="fa fa-bars"></i>
  </a>
</div>
</div>
<div class="container">
  <form action="/action_page.php">
    <div class="row">
      <div class="col-25">
        <label for="fname">Admin Name</label>
      </div>
      <div class="col-75">
      <table>
              <?php
              $servername="localhost";
              $username="root";
              $password="";
              $dbname="edit1";
              $conn=mysqli_connect($servername,$username,$password,$dbname);
              $sql="SELECT * from editepro where  mobile='$mobile'";
              $data=mysqli_query($conn,$sql);
              while($info=mysqli_fetch_array($data)){
              ?>
                <tr>
                <td><?php $name=$info['NAME']; echo $info['NAME'] ?></td>
                </tr>
                <?php
              }
                ?>
             </table>

      </div>
    </div>
    <div class="row">
      <div class="col-25">
        <label for="lname">Admin Mobile no</label>
      </div>
      <div class="col-75">
      <table>
              <?php
              $servername="localhost";
              $username="root";
              $password="";
              $dbname="edit1";
              $conn=mysqli_connect($servername,$username,$password,$dbname);
              $sql="SELECT * from editepro where  mobile='$mobile'";
              $data=mysqli_query($conn,$sql);
              while($info=mysqli_fetch_array($data)){
              ?>
                <tr>
                <td><?php echo $info['mobile'] ?></td>
                </tr>
                <?php
              }
                ?>
             </table>
      </div>
    </div>
    <div class="row">
      <div class="col-25">
        <label for="country">Village/City</label>
      </div>
      <div class="col-75">
      <table>
              <?php
              $servername="localhost";
              $username="root";
              $password="";
              $dbname="edit1";
              $conn=mysqli_connect($servername,$username,$password,$dbname);
              $sql="SELECT * from editepro where  mobile='$mobile'";
              $data=mysqli_query($conn,$sql);
              while($info=mysqli_fetch_array($data)){
              ?>
                <tr>
                <td><?php echo $info['VILLAGE/CITY'] ?></td>
                </tr>
                <?php
              }
                ?>
             </table>
      </div>
    </div>
    <div class="row">
      <div class="col-25">
        <label for="subject">Admin Pin code</label>
      </div>
      <div class="col-75">
      <table>
              <?php
              $servername="localhost";
              $username="root";
              $password="";
              $dbname="edit1";
              $conn=mysqli_connect($servername,$username,$password,$dbname);
              $sql="SELECT * from editepro where  mobile='$mobile'";
              $data=mysqli_query($conn,$sql);
              while($info=mysqli_fetch_array($data)){
              ?>
                <tr>
                <td><?php echo $info['PIN CODE'] ?></td>
                </tr>
                <?php
              }
                ?>
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
                <td>ROLAND INSTITUE OF COMPUTER AND MANAGEMENT STUDYES</td>
                </tr>
             </table>
      </div>
    </div><br>
   
  </form>
</div>
<hr>
<div class="container" style="background-color:black;">
   
  <form action="/action_page.php">
    <div class="row">
      <div class="col-25">
      <a href="studentlist.php"><button type="" class="stdbtn" style="color:white;">Student List</payment></a>
      </div>
      <div class="col-75">
      <a href=""><button type="submit" class="pbtn">Payment</payment></a>
      </div>
    </div>
    <div class="row">
      <div class="col-25">
      <a href=""><button type="submit" class="albtn">Applay Library</payment></a>
      </div>
      <div class="col-75">
      <a href=""><button type="submit" class="rbtn">Return Library</payment></a>
      </div>
    </div>
    <div class="row">
      <div class="col-25">
      <a href=""><button type="submit" class="tbn">Add New Teacher</payment></a>
      </div>
      <div class="col-75">
      <a href="https://scholarship.odisha.gov.in/website/home"><button type="submit" class="abtn">Applay Scolaraship</payment></a>
      </div>
    </div>
  </form>
</div>

<script>
function myFunction1() {
  var x = document.getElementById("myTopnav");
  if (x.className === "topnav") {
    x.className += " responsive";
  } else {
    x.className = "topnav";
  }
}

</script>
</body>
</html>