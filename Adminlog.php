
<?php
session_start();
?>
<?php
 //include("connection.php");
  $mass="";
 $servername="localhost";
 $username="root";
 $password="";
 $dbname="adminpass";
$conn=mysqli_connect($servername,$username,$password,$dbname);
if(isset($_POST['signin'])){
 $user_id=$_POST['userid'];
 $password=$_POST['PASSWORD'];
 $sql="SELECT * FROM admin_pass1 where Admin_ID='$user_id' AND Admin_password='$password'";
 $result=mysqli_query($conn,$sql);
 $row=mysqli_fetch_array($result,MYSQLI_ASSOC);
 $count=mysqli_num_rows($result);
 if($count==1){$_SESSION['Adminpass1']=$password;
    header("location:AdminHome.php");
 }
 else{
    $mass=2;
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
        <script src="validjs.js"></script>
        <title>Admin Login</title>
    </head>
    <body>
        <section class="vh-100">
  <div class="container py-5 h-100">
    <div class="row d-flex align-items-center justify-content-center h-100">
      <div class="col-md-8 col-lg-7 col-xl-6">
          <img src="admin.JPEG"
          class="img-fluid" alt="Phone image" width="100%">
      </div>
      <div class="col-md-7 col-lg-5 col-xl-5 offset-xl-1">
        <form action="#" method="POST" id="form" >
          <!-- Email input -->
           <div class="form-outline mb-4">
               <p class="text-center h1 fw-bold mb-5 mx-1 mx-md-4 mt-4"><font color="orange" size="10"><strong>E-Stock Market</strong></font></p>
                <p class="text-center h1 fw-bold mb-5 mx-1 mx-md-4 mt-4"><font color="blue" size="6"><strong>ADMIN LOGIN</strong></font></p>
                <?php
                 
                 if($mass==2){
                  echo "<div class='alert alert-danger' role='alert'>
                  Invalid Password
                </div>";
                 }
                ?>
          </div>
          <div class="form-outline mb-4">
            <input type="" name="userid" id="userid" class="form-control form-control-lg"value="202324" required />
            <label class="form-label" for="form1Example13">Admin-id</label>
          </div>

          <!-- Password input -->
          <div class="form-outline mb-4">
            <input type="password" name="PASSWORD" id="PASSWORD" class="form-control form-control-lg" required />
            <label class="form-label" for="form1Example23">Password</label>
          </div>

         
          <!-- Submit button -->
          <button type="submit" class="btn btn-primary btn-lg btn-block" name="signin">Login</button><br>
        </form>
        <button onclick="window.open('Homepage.php','_parent')" class="btn btn-primary btn-lg btn-block"style="background-color: green;">Cancel</button></a>
      </div>
    </div>
  </div>
</section>
    </body>
</html>
