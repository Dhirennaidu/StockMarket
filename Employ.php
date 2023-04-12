
<?php

include('connection.php');
$mass="";
$mass1="";
$alert="";
$servername="localhost";
$username="root";
$password="";
$dbname="employe";
$conn=mysqli_connect($servername,$username,$password,$dbname);
if(isset($_POST['orsub'])){
  $Empid=$_POST['Emp_ID1'];
$sqll1="SELECT * from employdata1 where Emp_ID='$Empid'";
$data=mysqli_query($conn,$sqll1);
$total=mysqli_num_rows($data);
while($info=mysqli_fetch_array($data)){
  $Emp_name=$info['Emp_Name'];
  $Emp_mobi=$info['Emp_Mobile'];
}
if($total==1){
  $mass=3;
}
else{
 
  $alert=31;
}
}
?>
<?php

include('connection.php');
$mass1="";
$servername="localhost";
$username="root";
$password="";
$dbname="registation";
$conn=mysqli_connect($servername,$username,$password,$dbname);
if(isset($_POST['orsub'])){
 $cusid12=$_POST['CuID1'];
$sqll1="SELECT * from usertable1 where User_ID='$cusid12'";
$data=mysqli_query($conn,$sqll1);
$total=mysqli_num_rows($data);
//while($info=mysqli_fetch_array($data)){
//}
if($total>0){
  $mass1=3;

}
else{
 // $mass1=2;
 // echo "null";
 $alert=30;
}
}
else

?>
<?php
date_default_timezone_set("Asia/Kolkata");
$totalll="";
$idd="";
include('connection.php');
$mass1="";
$servername="localhost";
$username="root";
$password="";
$dbname="mobileorder";
$conn=mysqli_connect($servername,$username,$password,$dbname);

if(isset($_POST['orsub'])){
  $cusid1=$_POST['Pro_ID'];
  $idd=$_POST['Pro_ID'];
$sqll1="SELECT * from mobilesal1 where Mobile_id='$idd'";
$data1=mysqli_query($conn,$sqll1);
$total23=mysqli_num_rows($data1);
while($info=mysqli_fetch_array($data1)){
 $P_ID=$info['Mobile_id'];
 $P_name=$info['p_name'];
 $P_img=$info['img_source'];
 $P_price=$info['P_price'];
  $P_RAM=$info['P_Ram'];
 $P_ROM=$info['P_Rom'];
 $P_Co=$info['P_Color'];
 //$P_Oths=$info['P_Add'];
  $mail=$info['Email_id'];
}
if($total23>0){
  $mass1=3;
  include('connection.php');
$mass1="";
$servername="localhost";
$username="root";
$password="";
$dbname="orderdata";
$conn=mysqli_connect($servername,$username,$password,$dbname);
$date1=date("Y-m-d h:i:sa");
  if(isset($_POST['orsub'])){
  $sql="INSERT INTO `ordersuu1` (`id`, `P_ID`, `P_Name`, `Email_id`,`img_sources`, `P_Ram`, `P_Rom`,`P_Color`,`P_Add`,`Emp_name`,`Emp_mobile`,`P_price`,`Date`) VALUES (NULL, '$P_ID', '$P_name','$mail','$P_img', '$P_RAM','$P_ROM', '$P_Co', 'NAN','$Emp_name','$Emp_mobi','$P_price','$date1');";
  $data=mysqli_query($conn,$sql);
  echo "<script> window.alert('order place Sucssefully')</script>";
 // $totalr=mysqli_num_rows($data);
  
  }
 
}
else{
// echo "error"; 
 $mass1=2;
 
}
}



//------------------------------------
$servername="localhost";
$username="root";
$password="";
$dbname="uploadmobile";
$conn=mysqli_connect($servername,$username,$password,$dbname);
if(isset($_POST['orsub'])){
  $cusid1=$_POST['Pro_ID'];
  $idd=$_POST['Pro_ID'];
$sqll1="SELECT * from mobileproduct where Product_id='$cusid1'";
$data=mysqli_query($conn,$sqll1);
$total=mysqli_num_rows($data);
if($total>0)
{
  $sqll2="UPDATE mobileproduct SET Product_Totalpice=Product_Totalpice-1 WHERE Product_id='$idd'";
  $data1=mysqli_query($conn,$sqll2);
}
}//-----------------taletproduct---------------------//
$servername="localhost";
$username="root";
$password="";
$dbname="uploadtablet";
$conn=mysqli_connect($servername,$username,$password,$dbname);
if(isset($_POST['orsub'])){
  $cusid1=$_POST['Pro_ID'];
  $idd=$_POST['Pro_ID'];
$sqll1="SELECT * from tabletproduct1 where Tab_id='$cusid1'";
$data=mysqli_query($conn,$sqll1);
$total=mysqli_num_rows($data);
if($total>0)
{
  $sqll2="UPDATE tabletproduct1 SET Tab_Pice=Tab_Pice-1 WHERE Tab_ID='$idd'";
  $data1=mysqli_query($conn,$sqll2);
}
}
//--------------------laptopproduct----------------
$servername="localhost";
$username="root";
$password="";
$dbname="uploadlaptop";
$conn=mysqli_connect($servername,$username,$password,$dbname);
if(isset($_POST['orsub'])){
  $cusid1=$_POST['Pro_ID'];
  $idd=$_POST['Pro_ID'];
$sqll1="SELECT * from laptopproduct1 where Laptop_ID='$cusid1'";
$data=mysqli_query($conn,$sqll1);
$total=mysqli_num_rows($data);
if($total>0)
{
  $sqll4="UPDATE laptopproduct1 SET Laptop_pice=Laptop_pice-1 WHERE Laptop_ID ='$idd'";
  $data2=mysqli_query($conn,$sqll4);
}
}
//-----------Update----------------
$servername="localhost";
$username="root";
$password="";
$dbname="uploadmobile";
date_default_timezone_set("Asia/Kolkata");
$conn=mysqli_connect($servername,$username,$password,$dbname);
if(isset($_POST['orsub'])){
  $cusid1=$_POST['Pro_ID'];
  $idd=$_POST['Pro_ID'];
$sqor="SELECT * FROM mobileproduct Where Product_id='$idd'";
$data1=mysqli_query($conn,$sqor);
$total11=mysqli_num_rows($data1);
while($info=mysqli_fetch_array($data1)){
  $mobi_id=$info['Product_id'];
  $P_NAME=$info['Product_name'];
  $P_RAM=$info['Product_RAM'];
  $P_ROM=$info['Product_ROM'];
 // $Mail=$info['Email_id'];
  $price=$info['Product_salprice'];
 }
 $oderdate=date("Y-m-d h:i:sa");
$total1=mysqli_num_rows($data1);
$id=rand(100000,999999);
if($total1>0){
 if(isset($_POST['orsub'])){
  $cusid1=$_POST['Pro_ID'];
  $idd=$_POST['Pro_ID'];
  $servername="localhost";
$username="root";
$password="";
$dbname="orderdata";
  $conn=mysqli_connect($servername,$username,$password,$dbname);
  $sqlt="INSERT INTO `mobileadd1` (`ID2`,`P_id`, `P_Name`, `P_RAM`, `P_ROM`, `Email_id`, `Pro_price`,`Dateo`) VALUES ('$id','$idd', '$P_NAME', '$P_RAM', '$P_ROM', '$mail', '$price','$oderdate');";
  $data12=mysqli_query($conn,$sqlt);
  
}
}
}
$servername="localhost";
$username="root";
$password="";
$dbname="uploadlaptop";
$conn=mysqli_connect($servername,$username,$password,$dbname);
date_default_timezone_set("Asia/Kolkata");
if(isset($_POST['orsub'])){
  $cusid1=$_POST['Pro_ID'];
  $idd1=$_POST['Pro_ID'];
$sqor="SELECT * FROM laptopproduct1 Where Laptop_ID='$idd1'";
$data1=mysqli_query($conn,$sqor);
$total11ll=mysqli_num_rows($data1);
while($info=mysqli_fetch_array($data1)){
  $mobi_id1=$info['Laptop_ID'];
  $P_NAME1=$info['Laptop_Name'];
  $P_proc=$info['Laptop_Proce'];
  $P_RAM=$info['Laptop_RAM'];
 // $Mail=$info['Email_id'];
  $price1=$info['Laptop_Sal'];
 }
$total1=mysqli_num_rows($data1);
$id1=rand(10000,99999);
$lapdate=date("Y-m-d h:i:sa");
if($total11ll>0){
 if(isset($_POST['orsub'])){
  $cusid1=$_POST['Pro_ID'];
  $idd1=$_POST['Pro_ID'];
  $servername="localhost";
$username="root";
$password="";
$dbname="orderdata";
  $conn=mysqli_connect($servername,$username,$password,$dbname);
  $sqltd="INSERT INTO `laptopadd1` (`ID`, `Lap_ID`,`Lap_Name`,`Lap_Pro`, `Lap_RAM`, `Eamil_ID`, `Lap_sal`,`Datel`) VALUES ('$id1', '$idd1','$P_NAME1','$P_proc', '$P_RAM', '$mail', '$price1','$lapdate');";
  $data12=mysqli_query($conn,$sqltd);
  
}
}
}
//------------addtablet---------------------------
$servername="localhost";
$username="root";
$password="";
$dbname="uploadtablet";
$conn=mysqli_connect($servername,$username,$password,$dbname);
date_default_timezone_set("Asia/Kolkata");
if(isset($_POST['orsub'])){
  $cusid1=$_POST['Pro_ID'];
  $idd1=$_POST['Pro_ID'];
$sqor="SELECT * FROM tabletproduct1 Where Tab_ID='$idd1'";
$data1=mysqli_query($conn,$sqor);
$total11ll=mysqli_num_rows($data1);
while($info=mysqli_fetch_array($data1)){
  $mobi_id1=$info['Tab_ID'];
  $P_NAME1=$info['Tab_Name'];
  $P_RAM=$info['Tab_RAM'];
  $P_ROM=$info['Tab_ROM'];
 // $Mail=$info['Email_id'];
  $price1=$info['Tab_sal'];
 }
$total1=mysqli_num_rows($data1);
$id1=rand(10000,99999);
$tapdate=date("Y-m-d h:i:sa");
if($total11ll>0){
 if(isset($_POST['orsub'])){
  $cusid1=$_POST['Pro_ID'];
  $idd1=$_POST['Pro_ID'];
  $servername="localhost";
$username="root";
$password="";
$dbname="orderdata";
  $conn=mysqli_connect($servername,$username,$password,$dbname);
  $sqltdt="INSERT INTO `Tabletadd` (`ID1`, `Tablet_ID`,`Tablet_Name`,`Tablet_Ram`, `Tab_Rom`, `Email_id`, `Tabsal`,`DateT`) VALUES ('$id1', '$idd1','$P_NAME1',' $P_RAM', ' $P_ROM', '$mail', '$price1','$tapdate');";
  $data12=mysqli_query($conn,$sqltdt);
  
}
}
}
?>

<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>Update Your Profile</title>
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
    </head>
    <style>
body{
    background-color:white;
}
        </style>
    <body>
    <section class="h-100 h-custom" style="background-color:white;">
  <div class="container py-5 h-100">
    <div class="row d-flex justify-content-center align-items-center h-100">
      <div class="col-lg-8 col-xl-6">
        <div class="card rounded-3">
          <img src="deli.jpg"
            class="w-100" style="border-top-left-radius: .4rem; border-top-right-radius: .3rem;"
            alt="Sample photo">
          <div class="card-body p-4 p-md-5">
          <font color="orange" size="6"><strong>E-Stock Market</strong></font><br><br>
          <button onclick="window.open('ReturnPro.php','_parent')" style="float:right;border-radius:20px;color:white;background-color:red;">Return product</button><br>
        <center>  <?php  ///if($mass==3){
          //  echo "<font color='green' size='4'><strong>Order Place Successes fully</strong></font>";
        //  }
          if($alert==31){
            echo "<script> window.alert('something is worng invalid Employe Id')</script>";
            echo "<font color='red' size='4'><strong>Invalid Employe Id</strong></font>";
          }
         
         else if($alert==30){
         
          echo "<script> window.alert('something is worng invalid customer id')</script>";
            echo "<font color='red' size='4'><strong>Invalid Customer Id</strong></font>";
          }
           ?></center><br>
            <form class="px-md-2" method="post" autocomplete="off">

              <div class="form-outline mb-4">
                <input type="text" id="form3Example1q" name="CuID1" class="form-control" style="text-align:center;border-radius:25px;heigth:60px;color:blue;font-size:25px;" required />
                <label class="form-label"  for="form3Example1q">Customer-ID</label>
              </div>
              <div class="form-outline mb-4">
                <input type="text" name="Emp_ID1" id="form3Example1q"  class="form-control"  style="text-align:center;border-radius:25px;heigth:60px;color:blue;font-size:25px;" required />
                <label class="form-label"  for="form3Example1q">Emp-ID</label>
              </div>

              <div class="form-outline mb-4">
                <input type="text" id="form3Example1q" name="Pro_ID" class="form-control" style="text-align:center;border-radius:25px;heigth:60px;color:blue;font-size:25px;" required />
                <label class="form-label"  for="form3Example1q">Product-ID</label>
              </div>

             <center> <input type="submit" name="orsub" class="form-control" value="Order Place" style="background-color:blue;color:white;border-radius:25px;heigth:30px;font-size:25px;"></center><br>
           
            </form>
            <center> <button onclick="window.open('Homepage.php','_parent')" class="form-control" value="Order Place" style="background-color:green;color:white;border-radius:25px;heigth:30px;font-size:25px;">Cancel</button></center>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
<!-------------->
<!-- Footer -->
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
</body>
</html>