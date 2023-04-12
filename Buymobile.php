
<?php  
$mass="";
$res="";
include('connection.php');
$servername="localhost";
  $username="root";
  $password="";
  $dbname="uploadmobile";
  
  $conn=mysqli_connect($servername,$username,$password,$dbname);
if(isset($_POST['submit'])){
    $P_ID=$_POST['P_ID'];
    $sqll="SELECT * from `mobileproduct` WHERE Product_id='$P_ID';";
 //   $salprice=$info['Product_salprice'];

    $data=mysqli_query($conn,$sqll);
    $totall=mysqli_num_rows($data);
  
    while($info=mysqli_fetch_array($data)){
      $pname=$info['Product_name'];
      $imag=$info['img_source'];
      $Ram=$info['Product_RAM'];
      $Rom=$info['Product_ROM'];
      $Col=$info['Product_color'];
      $price=$info['Product_salprice'];
        $pruduct=$info['Product_Totalpice'];
   }
    if($totall==1){
        $res=$P_ID;
      //  header('location:orderplace.php');
    }
    else{
      //  $mass=2;
       header('location:Buymobile.php');
    }
}
    

?>
<?php  
$mass="";
include('connection.php');
$servername="localhost";
  $username="root";
  $password="";
  $dbname="registation";
  
  $conn=mysqli_connect($servername,$username,$password,$dbname);
if(isset($_POST['submit'])){
    $Email2=$_POST['Email'];
    $sqll="SELECT * from `usertable1` WHERE User_Email='$Email2';";
    $data1=mysqli_query($conn,$sqll);
    $totalll=mysqli_num_rows($data1);
    if($totalll==1){
      //  if(isset($_POST['submit'])){
         /*   $servername="localhost";
       $username="root";
       $password="";
       $dbname="mobileorder";
       $conn=mysqli_connect($servername,$username,$password,$dbname);*/
      // $sqlu="INSERT INTO `mobilesal` (`Mobile_id`, `Email_id`, `State`, `Distric`, `Village/city`, `House Location`, `Pin code`, `Payment type`) VALUES ('$P_ID', '$Email2', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL');";
     //  $dataa=mysqli_query($conn,$sqlu);
         
       //  echo "1";
    }
    else{
       // $mass=3;
       // echo "0";
        header('location:Buymobile.php');
    }

}

?>
<?php
date_default_timezone_set("Asia/Kolkata");
  $servername="localhost";
  $username="root";
  $password="";
  $dbname="mobileorder";
  
  $conn=mysqli_connect($servername,$username,$password,$dbname);
  $id1=date("Y-m-d h:i:sa");
 if(isset($_POST['submit'])){$ran=rand(10000,9000);
$IDD=$P_ID;
$emaill=$Email2; 
$Stat=$_POST['State'];
$Dis="";//$_POST['DTOM1'];
$VC=$_POST['Village/city'];
$HS=$_POST['HouseLoc'];
$PIN=$_POST['Pincode'];
$Cash=$_POST['Pay'];
if($pruduct>0){
if($totall==1 && $totalll==1){
$sqlll="INSERT INTO `mobilesal1` (`PP_ID`,`Mobile_id`,`p_name`,`P_Ram`,`P_Rom`,`P_Color`,`img_source`,`P_price`,`Email_id`, `State`, `Distric`, `Village/city`, `Houselocation`, `Pin code`, `Payment type`,`Orderdate`) VALUES ('$ran','$P_ID','$pname','$Ram','$Rom','$Col','$imag',' $price', '$emaill', 'NAN', '$Stat', '$VC', '$HS', '$PIN', '$Cash','$id1');";
$dataa=mysqli_query($conn,$sqlll);
}
else{
    $mass=2;
}
}
if($pruduct==0){
  echo "<script > window.alert('Out of Stock')</script>";
}
 }
?>
<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>Order MObile</title>
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
    <body style="background-color:white;">
    <section class="h-100 h-custom" style="background-color:whitesmoke;">
  <div class="container py-5 h-100">
    <div class="row d-flex justify-content-center align-items-center h-100">
      <div class="col-lg-8 col-xl-6">
        <div class="card rounded-3">
         <center> <img src="order.jpg"
         style="width:300px;"
            ></center>
          <div class="card-body p-4 p-md-5">
          <font color="orange" size="6"><strong>E-Stock Market</strong></font>
        
            </div>
            <?php 
          if($mass==2){
            echo "<font color='red'> Sometinh worng Here </font>";
            }?><br>
            <form method="post" class="px-md-2" autocomplete="off">

              <div class="form-outline mb-4">
                <input type="text" id="form3Example1q" name="P_ID" class="form-control" required />
                <label class="form-label" for="form3Example1q">Product-ID</label>
              </div>
              <div class="form-outline mb-4">
                <input type="email" id="form3Example1q" name="Email" class="form-control" required />
                <label class="form-label" for="form3Example1q">Email-ID</label>
              </div>
              <div class="form-outline mb-4">
                <input type="text" id="form3Example1q" name="State" class="form-control" required />
                <label class="form-label" for="form3Example1q">Distric</label>
              </div>
              
              <div class="form-outline mb-4">
                <input type="text" id="form3Example1q" name="Village/city" class="form-control" required />
                <label class="form-label" for="form3Example1q">Village/city</label>
              </div>
              <div class="form-outline mb-4">
                <input type="text" id="form3Example1q" name="HouseLoc" class="form-control" required />
                <label class="form-label" for="form3Example1q">House Location</label>
              </div>
              <div class="form-outline mb-4">
                <input type="text" id="form3Example1q" name="Pincode" class="form-control" required />
                <label class="form-label" for="form3Example1q">Pin code</label>
              </div>
              <div class="form-outline mb-4">
                <input type="text" id="form3Example1q" name="Pay" class="form-control" value="cash on delivery"/>
                <label class="form-label" for="form3Example1q">Payment type</label>
              </div>
             <center> <input type="submit" class="btn btn-success btn-lg mb-1" value="Submit" name="submit"></center>

            </form>

          </div>
        </div>
      </div>
    </div>
  </div>
</section>
</body>
</html>
