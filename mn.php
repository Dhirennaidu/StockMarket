<?php
session_start();
?>
<?php
$servername="localhost";
$username="root";
$password="";
$dbname="salp";
$suc=false;
$conn=mysqli_connect($servername,$username,$password,$dbname);
if(isset($_POST['probuy'])){
  $mobile=$_POST['mobile'];
  
  $sql="SELECT * from salproduct where contact='$mobile'";
  $data1=mysqli_query($conn,$sql);
  $total1=mysqli_num_rows($data1);
 // echo $total;
 if($total1 == 1){
    echo "login ok";
  $suc=true;
  $_SESSION['mobile']= $mobile;
  
  header('location:print.php');
 }
 else{
  echo "<div style='padding: 20px;
  background-color: #f44336;
  color: white;'>!Login failed you Enter a worng Mobile number  Please Contact  number(8658135266)
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
}

?>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<!-- Add icon library -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Roboto:wght@900&display=swap" rel="stylesheet">
<style>
body {font-family: Arial, Helvetica, sans-serif;}
* {box-sizing: border-box;}

.input-container {
  display: -ms-flexbox; /* IE10 */
  display: flex;
  width: 100%;
  margin-bottom: 15px;
}

.icon {
  padding: 10px;
  background: dodgerblue;
  color: white;
  min-width: 50px;
  text-align: center;
}

.input-field {
  width: 100%;
  padding: 10px;
  outline: none;
}

.input-field:focus {
  border: 2px solid dodgerblue;
}

/* Set a style for the submit button */
.btn {
  background-color: dodgerblue;
  color: white;
  padding: 15px 20px;
  border: none;
  cursor: pointer;
  width: 100%;
  opacity: 0.9;
}

.btn:hover {
  opacity: 1;
}
</style>
</head>
<body>

<form  action="#"style="max-width:500px;margin:auto" method="post" id="form">
  <h2>Register your bill</h2>
  <div class="alert alert-danger" style="border-radius: 20px; display:none;background-color: rgb(255, 255, 255);color:rgb(255, 0, 0);width: 100%;height: 50px;" role="alert"id="alertbill">
            
            </div>
  <div class="input-container">
    <i class="fa fa-phone icon"></i>
    <input class="input-field" type="text" placeholder="Enter a mobile number" name="mobile" id="mobil" required>
  </div>


  <input onclick="bill()" type="submit" name="probuy" class="btn" value="BUY">
</form>

</body>
<script>
    function bill(){
 var alert=document.getElementById('alertbill');
 
 var mobilefor=/^(?:(?:\+|0{0,2})91(\s*[\-]\s*)?|[0]?)?[789]\d{9}$/
 var mobil=document.getElementById('mobil').value;
 if(mobil==''){
   alert.style.display="block";
   alert.innerHTML="<center>Please Enter Your Mobile number</center>";
   return 0;
 }
 if(mobil.match(mobilefor)){
   alert.style.display="none";
   form.submit();
 }
 else{
   alert.style.display="block";
   alert.innerHTML="<center>Please Enter your correct phone number</center>";
   return 0;
 }
}
    </script>
</html>