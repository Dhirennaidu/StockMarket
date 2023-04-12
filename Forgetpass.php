<?php
  include("connection.php");
  $mass="";
  $servername="localhost";
  $username="root";
  $password="";
  $dbname="registation";
  
  $conn=mysqli_connect($servername,$username,$password,$dbname);
 if(isset($_POST['submit1'])){
    $Emailll=$_POST['Email'];
    $sql="SELECT * FROM `usertable1` WHERE User_Email='$Emailll';";
    $result=mysqli_query($conn,$sql);
    $count=mysqli_num_rows($result);
    if($count==1){
        $pass=$_POST['Setpass'];
        $sql1="UPDATE `usertable1` SET User_Password='$pass' WHERE User_Email='$Emailll';";
        $result=mysqli_query($conn,$sql1);
        header("location:Homepage.php");
    }
    else {
        $mass=2;
    }
 }
 
  //if($conn){
  //  echo "connect";
 // }
 
  
?>
<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>Reset Your Password</title>
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
<style>
.body {
    padding-top: 70px;
    justify-content:center;
}
</style>
</head>
    <body>
    <section class="vh-100 gradient-custom">
  <div class="container py-5 h-100">
    <div class="row justify-content-center align-items-center h-100">
      <div class="col-12 col-lg-9 col-xl-7">
        <div class="card shadow-2-strong card-registration" style="border-radius: 15px;">
          <div class="card-body p-4 p-md-5">
            <center><font color="orange" size="8"><strong>E-Stock Market</strong></font></center>
            

              <div class="row">
                <div class="col-md-6 mb-4">

                
                </div>
                <div class="col-md-6 mb-4">

                

                </div>
              </div>
             
              <center><font size="40"><i class="fa fa-lock"></i></font></center>
              <center><h3 class="mb-4 pb-2 pb-md-0 mb-md-5">Forget Password</h3></center>
              <center><font color="red"><?php if($mass==2){echo "Invalid Email";} ?></font></center>
              <div class="mt-4 pt-2">
              <form action="" method="post" id="form">
              
             <center><input type="email" name="Email" style="border-radius:20px;height:45px;width:400px;text-align:center;"placeholder="Enter a Email" required></center><br>
            
             <center><input type="Password" name="Setpass" style="border-radius:20px;height:45px;width:400px;text-align:center;"placeholder="Enter a New Password" required></center><br>
            
               
               

             
               <center> <input style="background-color:blue;color:white;border-radius:20px;height:45px;width:400px;text-align:center;" type="submit" name="submit1" value="Submit" /></center><br>
               </form>
               <center> <button onclick="window.open('Homepage.php','_parent')"style="background-color:green;color:white;border-radius:20px;height:45px;width:400px;text-align:center;"   />Cancel</button></center>
              </div>

        
          </div>
        </div>
      </div>
    </div>
  </div>
</section><br><br><br><br>
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
</body>
</html>