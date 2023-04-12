<?php
if(isset($_POST['name'])){
/*$server="localhost";
$username="root";
$password="";*/
include("connection.php");
$con =mysqli_connect($servername,$username,$password,$dbname);
if(!$con){
    die("connection php error".mysqli_connect_error());
}
//echo "sucsses connecting to the data base";

$name=$_POST['name'];
$fname=$_POST['fname'];
$mname=$_POST['mname'];
$gn=$_POST['gnd'];
$pin=$_POST['pin'];
$dateb=$_POST['dateb'];
$vname=$_POST['vname'];
$pay=$_POST['pay'];
$date=$_POST['date']; 
$mobile=$_POST['mobile'];
$pass=$_POST['pass'];
//profile



//------------------------------------------
$sql="INSERT INTO `tabledata`.`table1` (`Name`, `Father Name`, `Mother name`, `Gender`, `Pin code`, `Date of Birth`, `Village/City`, `Payment`, `Payment date`, `Mobile`,`Password`) VALUES ('$name', '$fname', '$mname', '$gn', '$pin', '$dateb', '$vname', '$pay', '$date', '$mobile','$pass');";

if($con->query($sql)==true){
   // echo "Successfuiiy inserted";
}
else{
   $error= "phperror:$sql <br> $con->error";
}
$con->close();
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registation form</title>
    <link rel="stylesheet" href="style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Roboto:wght@900&display=swap" rel="stylesheet">
<script src="Rolandjs.js"></script>
</head>

<body>

    <font size="8" color="blue"><strong>Registation form</strong></font>
    
    <div class='alert alert-danger'role='alert' style="display:none;width:100%;height: 30px;background-color: red;color:rgb(255, 255, 255);" id="alert1"></div>
    <div class='alert alert-danger'role='alert' style="display:none;width:100%;height: 30px;background-color: loghtblue;color:rgb(255,255,255);" id="alert2022"></div>
    <div class="container"> 
       
    <form action="index.php" method="post"  name="myform"id="form">
      <div class="row">
        <label for="name"><p>Name</p></label>
       <input type="text" id="name" name="name" placeholder="Enter your full name"required >
       </div>
       <div class="row">
       <label for="fname"><p>Fther Name</p></label>
       <input type="text" id="fname" name="fname"placeholder="Enter a Father name" required>
       
       </div>
       <div class="row">
       <label for="mname"><p>Mother Name</p></label>
       <input type="text" id="mname" name="mname" placeholder="Entre a Mother name" required>
       
    </div>
<div class="row">
<label for="gn"><p>gender(male/female)</p></label>
<lable><input type="radio" name="gnd" value="male" id="male" required>Male</label>
<lable><input type="radio" name="gnd" value="female" id="female" required>Female</label>

</div>
       <div class="row">
       <label for="pin"><p>Pin code</p></label>
       <input type="text" id="pin" name="pin" maxlength="6" placeholder="Enter your pin code">
       
    </div>
<div class="row">
<label for="dateb"><p>Date of Birth<p></label>
<input type="date" id="dateb"  name="dateb" placeholder="Enter a join date"required>
</div>
       <div class="row">
        <label for="vname"><p>Village/City</p></label>
        <input type="text" id="vname" name="vname" maxlength="50" placeholder="Enter your Vilage/city name"required>
        
        </div>
       <div class="row">
       <label for="pay"><p>Payment</p></label>
       <input type="number" id="pay" maxlength="4" name="pay" min="5000" max="24500" placeholder="payment registation fees=5000-/-" required>
      
    </div>
<div class="row">
<label for="date"><p>Payment Date<p></label>
<input type="date" id="date"  name="date" placeholder="Enter a join date" required>

</div>

       <div class="row">
       <label for="mobile"><p>Mobile</p></label>
       <input type="text" id="mobile" maxlength="10" name="mobile" placeholder="Enter your mobile number"required>
    </div>
       <div class="row">
       <label for="pass"><p>Create Password</p></label>
       <input type="password" name="pass" id="password" placeholder="Create a Password"required>
       
    </div>
    
    <br>
       <div class="row">
       <button onclick="formvalidation()" type="submit" class="btn">Submit sign up</button>
       <button  type="reset" class="btn" style="background-color:blue;">reset</button>
    </div>
      </div>  
    </form>
    </div>
</body>
</html>