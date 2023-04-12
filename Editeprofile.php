<?php
if(isset($_POST['fname'])){
  $servername="localhost";
  $username="root";
  $password="";
  $dbname="edit1";
$conn=mysqli_connect($servername,$username,$password,$dbname);
if(!$conn){
  echo "php error:my".mysqli_connect_error();
}
//echo "data base Connect success fully";
$fname=$_POST['fname'];

$mobile=$_POST['mobile'];
$cname=$_POST['cname'];
$pincode=$_POST['pincode'];
$pass1=$_POST['pass1'];
$sql="INSERT INTO `edit1`.`editepro` (`NAME`, `mobile`, `VILLAGE/CITY`, `PIN CODE`, `PASSWORD`) VALUES ('$fname', '$mobile', '$cname', '$pincode', '$pass1');";

if($conn->query($sql)==true){
 echo "<div style='width:100%;height:50px;background-color:white;color:green'>Registation succsses Fully go to <a href='http://localhost/dhirenphp/adminLogin.php'><button type='submit'style='background-color:blue;color:white;'>Admin Login</button></a></div>";
}
else{
  $error= "phperror:$sql <br> $conn->error";
}
$conn->close();
}
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

input[type=text], [type=email],[type=password] {
 width: 100%;
  padding: 14px;
  
  border-radius: 4px;
  resize: vertical;

  border-left:none;
  border-right:none;
  border-top:none;
  padding: 10px;
  text-align: left;
  border-bottom: 1px solid black;
}

label {
  padding: 12px 12px 12px 0;
  display: inline-block;
}

.edbtn {
  background-color: #04AA6D;
  color: white;
  padding: 12px 20px;
  border: none;
  border-radius: 4px;
  cursor: pointer;
  float: right;
}

.edbtn:hover {
  background-color: #45a049;
}

.container {
  border-radius: 5px;
  background-color: #f2f2f2;
  padding: 20px;
  font-family: 'Roboto', sans-serif;
}

.col-25 {
  float: left;
  width: 25%;
  margin-top: 6px;
}

.col-75 {
  float: left;
  width: 75%;
  margin-top: 6px;
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

<div class="container" style="background-color:white;">
  <form action="Editeprofile.php"method="post" name="myform" id="form">
    <div class="row">
      <div class="col-25">
        <label for="fname">FULL Name</label>
      </div>
      <div class="col-75">
        <input type="text" id="fname" name="fname" placeholder="Enter Your Full name.." required>
      </div>
      <div class="alert alert-danger" style="float:right;color:red;" role="alert" id="alert3"></div>
      <div class="alert alert-danger" style="float:right;color:red;" role="alert" id="alertg"></div>
    </div><br>
   
    <div class="row">
      <div class="col-25">
        <label for="lname">Mobile number</label>
      </div>
      <div class="col-75">
        <input type="text" id="mobile" name="mobile" placeholder="Enter Your Mobile number"required>
      </div>
      <div class="alert alert-danger" style="float:right;color:red;" role="alert" id="alert5">
 
     </div>
    </div><br>
    <div class="row">
      <div class="col-25">
        <label for="country">Village/City Name</label>
      </div>
      <div class="col-75">
      <input type="text" id="cname" name="cname" placeholder="Your Village/City name" required>
      </div>
      <div class="alert alert-danger" style="float:right;color:red;" role="alert" id="alert6">
 
 </div>
    </div><br>
    <div class="row">
      <div class="col-25">
        <label for="subject">Pin Code</label>
      </div>
      <div class="col-75">
      <input type="text" id="pincode" name="pincode" placeholder="Enter your Pin code(6-charcter only)"required>
      </div>
      <div class="alert alert-danger" style="float:right;color:red;" role="alert" id="alert7">
 
 </div>
    </div><br>
    <div class="row">
      <div class="col-25">
        <label for="subject">Password</label>
      </div>
      <div class="col-75">
      <input type="password" id="pass1" name="pass1" placeholder="Enter a Password(10-charcter only)" required>
      </div>
      <div class="alert alert-danger" style="float:right;color:red;" role="alert" id="alert8">
 
 </div>
    </div><br>
    <div class="row">
      <!--<button onclick="loginformvalid()"   class="edbtn">Submit</button>-->
      <button onclick="loginformvalid()" type="submit" style="height:40px;width: 200px;background-color:green;color:white;" value="submit" name="signin">Submit sign up</button>
       <button  type="reset" class="btn" style="background-color:blue;height:40px;width: 200px;color:white;">reset</button>
    </div>
  </form>
</div>
</body>
<script>
function loginformvalid(){
  var name=document.getElementById('fname').value;
  var alert=document.getElementById('alert3');
  var alert2=document.getElementById('alertg');
  if(name==''){
    alert.style.display="block";
    alert.innerHTML="Please enter your name";
  }
  else{
  alert.style.display="none";
  
  }
  //email--------------------------------------------------------
  
  //mobile number========================================================
  var mobilefo=/^(?:(?:\+|0{0,2})91(\s*[\-]\s*)?|[0]?)?[789]\d{9}$/
  var mobile=document.getElementById('mobile').value;
  var alert=document.getElementById('alert5');
  if(mobile==''){
    alert.style.display="block";
    alert.innerHTML="<center>Please Enter Your Mobile number</center>";
    return 0;
  }
  if(mobile.match(mobilefo)){
    alert.style.display="none";
  }
  else{
    alert.style.display="block";
    alert.innerHTML="<center>Please Enter your correct Mobile number</center>";
    return 0;
  }
  var cname=document.getElementById('cname').value;
  var alert=document.getElementById('alert6');
  if(cname==''){
    alert.style.display="block";
    alert.innerHTML="Please enter your Village/City name";
  }
  else{
  alert.style.display="none";

}
var pinformat = /^[1-9]{1}[0-9]{2}\s{0,1}[0-9]{3}$/
  var pincode=document.getElementById('pincode').value;
  var alert=document.getElementById('alert7');
  if(pincode==''){
    alert.style.display="block";
    alert.innerHTML="<center>Please Enter Your pincode</center>";
    return 0;
  }
  if(pincode.match(pinformat)){
    alert.style.display="none";
  }
  else{
    alert.style.display="block";
    alert.innerHTML="<center>Please Enter your correct Pincode</center>";
    return 0;
  }
  var password=document.getElementById('password').value;
  var alert=document.getElementById('alert8');
  if(password==''){
    alert.style.display="block";
    alert.innerHTML="<center>Please Create a password</center>";
    form.submit();
    return 0;
  }
}
function alert(){
  alert.window("Edite profile Success fully");
}
  </script>
</html>