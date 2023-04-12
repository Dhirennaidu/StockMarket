<?php
session_start();
$mobile=$_SESSION['mobile'];

?>
<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Roboto:wght@900&display=swap" rel="stylesheet">
<style>
* {
  box-sizing: border-box;
}

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
  
  font-family: 'Roboto', sans-serif;
  color:Tomato;
}

.col-75 {
  float: left;
  width: 75%;
  margin-top: 6px;
  margin-top: 8px;
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
</style>
</head>
<body>

<font color="blue" size="8"><strong>ROLAND MOBILE STORE</strong><font><strong>(Contact:8658135266)</strong></font></font>
<hr><hr>
<div class="container">
  <form action="/action_page.php">
    <div class="row">
      <div class="col-25">
        <label for="fname">DATE</label>
      </div>
      <div class="col-75">
      <table style="">
              <?php
              $servername="localhost";
              $username="root";
              $password="";
              $dbname="salp";
              $conn=mysqli_connect($servername,$username,$password,$dbname);
              $sql="SELECT * from salproduct where contact='$mobile'";
              $data=mysqli_query($conn,$sql);
              while($info=mysqli_fetch_array($data)){
              ?>
                <tr>
                <td><?php  echo $info['DATE'] ?></td>
                </tr>
                <?php
              }
                ?>
             </table>
      </div>
    </div>
    <div class="row">
      <div class="col-25">
        <label for="lname">Mobile model number</label>
      </div>
      <div class="col-75">
      <table style="">
              <?php
              $servername="localhost";
              $username="root";
              $password="";
              $dbname="salp";
              $conn=mysqli_connect($servername,$username,$password,$dbname);
              $sql="SELECT * from salproduct where contact='$mobile'";
              $data=mysqli_query($conn,$sql);
              while($info=mysqli_fetch_array($data)){
              ?>
                <tr>
                <td><?php  echo $info['MODEL'] ?></td>
                </tr>
                <?php
              }
                ?>
             </table>
      </div>
    </div>
    <div class="row">
      <div class="col-25">
        <label for="country">Mbile name</label>
      </div>
      <div class="col-75">
      <table style="">
              <?php
              $servername="localhost";
              $username="root";
              $password="";
              $dbname="salp";
              $conn=mysqli_connect($servername,$username,$password,$dbname);
              $sql="SELECT * from salproduct where contact='$mobile'";
              $data=mysqli_query($conn,$sql);
              while($info=mysqli_fetch_array($data)){
              ?>
                <tr>
                <td><?php  echo $info['MOBILENAME'] ?></td>
                </tr>
                <?php
              }
                ?>
             </table>
      </div>
    </div>
    <div class="row">
      <div class="col-25">
        <label for="subject">Contact number</label>
      </div>
      <div class="col-75">
      <table style="">
              <?php
              $servername="localhost";
              $username="root";
              $password="";
              $dbname="salp";
              $conn=mysqli_connect($servername,$username,$password,$dbname);
              $sql="SELECT * from salproduct where contact='$mobile'";
              $data=mysqli_query($conn,$sql);
              while($info=mysqli_fetch_array($data)){
              ?>
                <tr>
                <td><?php  echo $info['contact'] ?></td>
                </tr>
                <?php
              }
                ?>
             </table>
      </div>
    </div>
    <div class="row">
      <div class="col-25">
        <label for="subject">Prize</label>
      </div>
      <div class="col-75">
      <table style="">
              <?php
              $servername="localhost";
              $username="root";
              $password="";
              $dbname="salp";
              $conn=mysqli_connect($servername,$username,$password,$dbname);
              $sql="SELECT * from salproduct where contact='$mobile'";
              $data=mysqli_query($conn,$sql);
              while($info=mysqli_fetch_array($data)){
              ?>
                <tr>
                <td><?php  echo $info['SAL PRIZE'] ?></td>
                </tr>
                <?php
              }
                ?>
             </table>
      </div>
    </div>
    
    <div class="row">
      <div class="col-25">
        <label for="subject">Pices</label>
      </div>
      <div class="col-75">
      <table style="">
              <?php
              $servername="localhost";
              $username="root";
              $password="";
              $dbname="salp";
              $conn=mysqli_connect($servername,$username,$password,$dbname);
              $sql="SELECT * from salproduct where contact='$mobile'";
              $data=mysqli_query($conn,$sql);
              while($info=mysqli_fetch_array($data)){
              ?>
                <tr>
                <td><?php  echo $info['qUANTITY'] ?></td>
                </tr>
                <?php
              }
                ?>
             </table>
      </div>
    </div>
    <font size="10" color:black><hr></font>
<div class="container">
<div class="row">
      <div class="col-25">
        <label for="subject">Prize</label>
      </div>
      <div class="col-75">
      <table style="">
              <?php
              $servername="localhost";
              $username="root";
              $password="";
              $dbname="salp";
              $conn=mysqli_connect($servername,$username,$password,$dbname);
              $sql="SELECT * from salproduct where contact='$mobile'";
              $data=mysqli_query($conn,$sql);
              while($info=mysqli_fetch_array($data)){
              ?>
                <tr>
                <td><?php  echo $info['SAL PRIZE'] ?></td>
                </tr>
                <?php
              }
                ?>
             </table>
      </div>
    </div>
    <div class="row">
      <div class="col-25">
        <label for="subject">Pices</label>
      </div>
      <div class="col-75">
      <table style="">
              <?php
              $servername="localhost";
              $username="root";
              $password="";
              $dbname="salp";
              $conn=mysqli_connect($servername,$username,$password,$dbname);
              $sql="SELECT * from salproduct where contact='$mobile'";
              $data=mysqli_query($conn,$sql);
              while($info=mysqli_fetch_array($data)){
              ?>
                <tr>
                <td><?php  echo $info['qUANTITY'] ?></td>
                </tr>
                <?php
              }
                ?>
             </table>
      </div>
    </div>
    <hr>
    <div class="row">
      <div class="col-25">
        <label for="subject">Total</label>
      </div>
      <div class="col-75">
      <table style="">
              <?php
              $servername="localhost";
              $username="root";
              $password="";
              $dbname="salp";
              $conn=mysqli_connect($servername,$username,$password,$dbname);
              $sql="SELECT * from salproduct where contact='$mobile'";
              $data=mysqli_query($conn,$sql);
              while($info=mysqli_fetch_array($data)){
                $x=$info['SAL PRIZE'];
                $y=$info['qUANTITY'];
                $total=$x*$y;
              ?>
                <tr>
                <td><?php  echo $x."x".$y."=".$total; ?>(Rupess only)</td>
                </tr>
                <?php
              }
                ?>
             </table>
      </div>
    </div>
<div>
  </form>
</div>

</body>
</html>
