<?php
  session_start();
?>
<?php
$OTP="";
$total="";
include("connection.php");
$mass="";
$servername="localhost";
$username="root";
$password="";
$dbname="registation";

$conn=mysqli_connect($servername,$username,$password,$dbname);

if(isset($_POST['submit'])){

   $Emails=$_POST['emailss'];
    $Pass=$_POST['passw'];
    $sqlo="SELECT * FROM usertable1 WHERE User_Email='$Emails' AND User_Password='$Pass';";
    $resulto=mysqli_query($conn,$sqlo);
    $totalo=mysqli_num_rows($resulto);
    while($info=mysqli_fetch_array($resulto)){
      $OTP=$info['OTP_NUMBER'];
    }
   if($OTP == 0){echo "<script> window.alert('Not Verify your account');</script>";}
   else{
  $sql="SELECT * FROM usertable1 WHERE User_Email='$Emails' AND User_Password='$Pass';";
 $result=mysqli_query($conn,$sql);
 $total=mysqli_num_rows($result);
   }
 if($total==1){
  $_SESSION['email1']=$Emails;
  $_SESSION['Password']=$Pass;
 // $_SESSION['Name1']=$Name;
 header("location:UserHome.php");
 // header("location:UserProfile.php");
 
 }
 else{$mass=2;//echo "0";}
}
}
?>
<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
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
        <script src="valid.js"></script>
        <title>Login Page</title>
        <style>
a, a:hover{
  color:#333
}
        </style>
    </head>
    <body>
    
        <!------login form--->
        <section class="vh-100" style="background-color: white;">
  <div class="container py-5 h-100">
    <div class="row d-flex justify-content-center align-items-center h-100">
      <div class="col col-xl-10">
        <div class="card" style="border-radius: 1rem;">
          <div class="row g-0">
            <div class="col-md-6 col-lg-5 d-none d-md-block">
               
                <img src="log1.JPEG"
                     
                alt="login form" class="img-fluid" style="border-radius: 1rem 0 0 1rem;margin-top: 150px;" />
            </div>
            <div class="col-md-6 col-lg-7 d-flex align-items-center">
              <div class="card-body p-4 p-lg-5 text-black">

                  <form action="" method="post" id="form" autocomplete="off">

                  <div class="d-flex align-items-center mb-3 pb-1">
                    <i class="fas fa-cubes fa-2x me-3" style="color: #ff6219;"></i>
                    <span class="h1 fw-bold mb-0"><font color="orange" size="10"><strong>E-Stock Market</strong></font></span>
                  </div>

                  <h5 class="fw-normal mb-3 pb-3" style="letter-spacing: 1px;">Sign into your account</h5>
                   <?php
                      if($mass==2){
                        echo  "<div style='padding: 20px;
                        background-color: rgb(255, 0, 0);
                        color: white;'>!Login failed 
                        <span style=' margin-left: 15px;
                        color: white;
                        font-weight: bold;
                        float: right;
                        font-size: 22px;
                        line-height: 20px;
                        cursor: pointer;
                        transition: 0.3s;' onclick='closemessage()';></span> 
                        </div>";
                      }
                   ?><br>
                  <div class="alert alert-danger" style="display:none;" role="alert" id="alert1">
  
</div>
               <!--   <div class="form-outline mb-4">
                    <input type="number" id="userid" name="userid1" class="form-control form-control-lg" min-size="6" required/>
                    <label class="form-label" for="form2Example17">User-ID</label>
                  </div>-->
                  
                  <div class="form-outline mb-4">
                    <input type="email" id="email" name="emailss" class="form-control form-control-lg" required />
                    <label class="form-label" for="form2Example17">Email address</label>
                  </div>

                  <div class="form-outline mb-4">
                       <div class="input-group" id="show_hide_password">
                           
                    <input type="password" class="form-control form-control-lg" id="psw1" name="passw" required>
                    
                     <div class="input-group-addon" style="width:10px;">
        <a href="" style="font-size:25px;"><i class="fa fa-eye-slash" aria-hidden="true"></i></a>
      </div>
                       </div>
                      <label class="form-label" for="form2Example27">Password</label>
                  </div>

                  <div class="pt-1 mb-4">
                      <input class="btn btn-dark btn-lg btn-block" onclick="validlogin()" type="submit" value="Login" name="submit"><br>
                    <input onclick="window.open('Homepage.php','_parent');//window.open('Homepage.php')"class="btn btn-dark btn-lg btn-block" type="button" style="background-color:green;"value="Cancel"></a>
                  </div>

                  <a class="small text-muted" href="paswordotp.php">Forgot password?</a>
                  <p class="mb-5 pb-lg-2" style="color: #393f81;">Don't have an account? <a href="Registation.php"
                      style="color: #393f81;">Register here</a></p>
                  <a href="#!" class="small text-muted">Terms of use.</a>
                  <a href="#!" class="small text-muted">Privacy policy</a>
                </form>

              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
        <!------------footer--->
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
        <!--------------------->
    </body>
</html>
