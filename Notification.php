<?php
   session_start();
   // echo "Wellcome".$_SESSION['email'];
     $Email=$_SESSION['email1'];
     $Password=$_SESSION['Password'];
    // $name="";
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
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>Return Product</title>
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
    @import url(http://fonts.googleapis.com/css?family=Calibri:400,300,700);
    body {
	height: 100%;
	/*Image only BG fallback*/
	background: url('http://thecodeplayer.com/uploads/media/gs.png');
	/*background = gradient + image pattern combo*/
	background: 
		linear-gradient(rgba(196, 102, 0, 0.2), rgba(155, 89, 182, 0.2)), 
		url('http://thecodeplayer.com/uploads/media/gs.png');
}



    </style>
<body style="background-color:white;">
<div class="header">
  <a  class="logo"><font color="orange" size="10"><strong>E-Stock Market</strong></font></a>
  
  <div class="header-right">
   <!-- <a class="active" href="Homeuser.php">Home</a>-->
    
   
  </div>
</div><br><br>
<div class="container">
                      
                                
                    <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body text-center">
                                <h5 class="card-title m-b-0">Your Return Product Details</h5>
                                <button onclick="window.open('Userhome.php','_parent')"style="float:left;"><i class='fa fa-close'></i></button>
                            </div>
                                <div class="table-responsive">
                                    <table class="table">
                                        <thead class="thead-light">
                                            <tr>
                                                
                                                <th scope="col">Date</th>
                                                <th scope="col">Product id</th>
                                                <th scope="col">message</th>
                                                <th scope="col">Delete</th>
                                                
                                            </tr>
                                        </thead>
                                        <tbody class="customtable">
                                        <?php
  $servername="localhost";
$username="root";
$password="";
$dbname="notification";
$conn=mysqli_connect($servername,$username,$password,$dbname);
date_default_timezone_set("Asia/Kolkata");
$sqor="SELECT * FROM `message` WHERE email='$Email'";
$data1=mysqli_query($conn,$sqor);
$total11ll=mysqli_num_rows($data1);
while($info=mysqli_fetch_array($data1)){
    ?>
      <tr>
        <td>
        <blockquote class="blockquote">
  <p class="mb-0"><?php echo $info['Datem']?></p>
</blockquote></td>
        </td>
        
        <td>
        <blockquote class="blockquote">
  <p class="mb-0"><?php echo $info['P_ID']?></p>
</blockquote></td>
        </td>

        <td>
        <blockquote class="blockquote">
  <p class="mb-0"><?php echo $info['messag']?></p>
</blockquote></td>
       <!-- <td></td>-->
        <td><?php echo "<a href='massdelet.php?rn=$info[id]'><button><i class='fa fa-close'></i></button></a>";?></td>
</tr>
<?php
}
?>
                                        </tbody>
                                    </table>
                                </div>
                        </div>
                    </div>
                </div>

                   </div> 

</body>
