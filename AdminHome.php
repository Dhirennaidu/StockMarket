
<?php
session_start();

$password1=$_SESSION['Adminpass1'];
if($password1==true)
{

}
else
{
  header("location:Homepage.php");
}
?>
<!DOCTYPE html>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Admin Home Page</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
 <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link href="npm i bootstrap-icons">
        <link rel="stylesheet" href="http://www.w3schools.com/lib/w3.css">

</head>
<body>
<div class="m-4">
    <nav class="navbar navbar-expand-lg navbar-light bg-light" style="background-color:white;">
        <div class="container-fluid">
             <p class="text-center h1 fw-bold mb-5 mx-1 mx-md-4 mt-4"><font color="orange" size="10"><strong>E-Stock Market</strong></font></p>
            <button type="button" class="navbar-toggler" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarCollapse">
                <div class="navbar-nav">
                    
                   
                      
                </div>
                <div class="navbar-nav ms-auto">
                      <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown"><i class="fa fa-upload">Upload Product's</i></a>
                        <div class="dropdown-menu">
                            <a href="uploadmobi.php" class="dropdown-item"><i class="fa fa-mobile">Mobile's</i></a>
                            <a href="uploadtab.php" class="dropdown-item"><i class="fa fa-tablet">Tablet's</i></a>
                            <a href="uploadlaptop.php" class="dropdown-item"><i class="fa fa-laptop">Laptop's</i></a>
                        </div>
                    </div>
                      <div class="nav-item dropdown" >
                        <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown" ><i class="fa fa-stock">Check Stock</i></a>
                        <div class="dropdown-menu" >
                            <a href="Checkmobile.php" class="dropdown-item"><i class="fa fa-mobile">Mobile's</i></a>
                            <a href="CheckTablet.php" class="dropdown-item"><i class="fa fa-tablet">Tablet's</i></a>
                            <a href="Checklaptop.php" class="dropdown-item"><i class="fa fa-laptop">Laptop's</i></a>
                        </div>
                    </div>
                    <div class="nav-item dropdown">
                           <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown"><i class="fa fa-users">Employ's</i></a>
                        <div class="dropdown-menu">
                            <a href="Employdata.php" class="dropdown-item">Add Employ</i></a>
                            <a href="Emplist.php" class="dropdown-item"><i class="fa fa-user-refresh">Employ List</i></a>
                            <a href="#" class="dropdown-item">Restigated your Employe</a>
                        </div>
                    </div>
                       <div class="nav-item dropdown">
                           <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown"><i class="fa fa-user-circle">Profile</i></a>
                        <div class="dropdown-menu">
                            <a href="Adminpro.php" class="dropdown-item">Your Profile</i></a>
                            <a href="UpdateAdmin.php" class="dropdown-item"><i class="fa fa-user-refresh">Update Profile</i></a>
                            <a href="Adminlogout.php" class="dropdown-item">Logout</i></a>
                        </div>
                    </div>
                     
                </div>
            </div>
        </div>
    </nav>
</div>

<center> <p class="text-center h1 fw-bold mb-5 mx-1 mx-md-4 mt-4"><font color="orange" size="10"><strong>Well come to</strong></font></p></center>
 <p class="text-center h1 fw-bold mb-5 mx-1 mx-md-4 mt-4"><font color="orange" size="10"><strong>Admin page</strong></font></p>
<br>
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