
<?php
session_start();
?>
<?php
if(isset($_POST['date'])){
$servername="localhost";
$username="root";
$password="";
$dbname="purches";
$conn=mysqli_connect($servername,$username,$password,$dbname);
if(!$conn){
    die("connect error:".mysqli_connect_error());
}
//echo "connect";
$date=$_POST['date'];
//$mbname=$_POST['mbname'];
$MOBILENAME=$_POST['MOBILENAME'];
$prize=$_POST['prize'];
$quantity=$_POST['quantity'];

$sql="INSERT INTO `purches`.`pproduct` (`DATE`, `MOBILENAME`, `MOBILEPRIZE`, `QUANTITY`) VALUES ('$date', '$MOBILENAME', '$prize', '$quantity');";
if($conn->query($sql)==true){
    // echo "Successfuiiy inserted";
 }
 else{
    $error= "phperror:$sql <br> $conn->error";
 }
 $conn->close();
}
?>
<!----->
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

input[type=text],[type="date"],[type="number"], select {
  width: 100%;
  padding: 12px;
  border: 1px solid #ccc;
  border-radius: 4px;
  resize: vertical;
}

label {
  padding: 12px 12px 12px 0;
  display: inline-block;
}

input[type=submit] {
  background-color: #04AA6D;
  color: white;
  padding: 12px 20px;
  border: none;
  border-radius: 4px;
  cursor: pointer;
  float: right;
}

input[type=submit]:hover {
  background-color: #45a049;
}

.container {
  border-radius: 5px;
  background-color: #f2f2f2;
  padding: 20px;
}

.col-25 {
  float: left;
  width: 25%;
  margin-top: 6px;
  font-family: 'Roboto', sans-serif;
  color:blue;
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
table {
  border-collapse: collapse;
  width: 100%;
}

th, td {
  text-align: left;
  padding: 8px;
}

tr:nth-child(even){background-color: #f2f2f2}

th {
  background-color: #04AA6D;
  color: white;
}
</style>
</head>
<body>
<font size="8" color="orange"><strong>PURCHES PRODUCT</strong></font>
<div class="container">
  <form action="buy.php" method="post">
    <div class="row">
      <div class="col-25">
        <label for="fname">DATE</label>
      </div>
      <div class="col-75">
        <input type="date" id="date" name="date" placeholder="ENTER A PURCHES DATE" required>
      </div>
    </div>
    <!--<div class="row">
      <div class="col-25">
        <label for="lname">MOBILE MODEL NUMBER</label>
      </div>
      <div class="col-75">
        <input type="text" id="mbname" name="mbname" placeholder="Enter a mobile model number:" required>
      </div>
    </div>-->
    <div class="row">
      <div class="col-25">
        <label for="MOBILE NAME">MOBILE NAME</label>
      </div>
      <div class="col-75">
      <?php   
$host="localhost";
$user="root";
$pass="";
$db="addproduct";

$conn=mysqli_connect($host,$user,$pass,$db);

?>
        <select id="MOBILENAME" name="MOBILENAME" placeholder="Enter a mobile name" required>
        <?php


$sql="SELECT * from product";
$data=mysqli_query($conn,$sql);
while($info=mysqli_fetch_array($data)){
 ?>
 
   <option name="mobile"><?php echo $info['MOBILENAME'] ?></option>

<?php
}
?>
        
        </select>
      </div>
    </div>
    <div class="row">
      <div class="col-25">
        <label for="subject">MOBILE PRIZE</label>
      </div>
      <div class="col-75">
        <input type="number" name="prize" id="prize" placeholder="Enter a mobile prize" required>
      </div>
    </div>
    <div class="row">
      <div class="col-25">
        <label for="subject">HOW MANY PIESES(QUANTITY)</label>
      </div>
      <div class="col-75">
        <input type="number" name="quantity" id="quantity"placeholder="Enter a Quantity" required>
      </div>
    </div><br>
    <div class="row">
      <div class="col-25">
        <label for="subject">TOTAL PRIZE</label>
      </div><br>
      <div class="col-75">
       <table id="alert" style="font-size:20px;color:green;">
        <tr>
       <td></td>
</tr>
</table>
      </div>
    </div><br>
    <div class="row">
      <button onclick="totalprize()" type="button" value="PURCHES">CALICULATE</button>
    <input type="submit" value="submit" name="submit1"><br>
    <!-- <button type="submit" value="submit" name="submit1" style="background-color:blue;color:white;">STOCK</button>-->
    </div>
  </form>
</div><br>
<font size="8" color="red"><strong>PURCHES DETAILS</strong></font>
<div class="container">
<form action="/action.php" method="POST">
<div class="row">
     
<?php   
$host="localhost";
$user="root";
$pass="";
$db="purches";
$conn=mysqli_connect($host,$user,$pass,$db);

?>
<table border=2>
    <thead>
    <tr>
    <th>DATE</th>
    <th>Mobile name</th>
    <th>Mobile prize</th>
    <th>Avilable Stock</th>
  
    <th>Total Prize</th>
</tr>
</thead>
<tbody>
<tbody>
    <?php
    

     $sql="SELECT * from pproduct";
     $data=mysqli_query($conn,$sql);
     while($info=mysqli_fetch_array($data)){
        $name=$info['MOBILENAME'];
        $x=$info['MOBILEPRIZE'];
        $y=$info['QUANTITY'];
        $total=$x*$y;
      ?>
      <tr>
        <td><?php echo $info['DATE'];?></td>
        <td><?php echo $info['MOBILENAME']?></td>
        <td><?php echo $info['MOBILEPRIZE'];?></td>
        <td><?php echo $info['QUANTITY'];    ?>
       </td>
      
        <td><?php echo $total;?></td>
     </tr>
 <?php
}
?>
</tbody>
</table>
<?php
?>

    <br><br>
    
  </form>
</div>
</body>
<script>
function totalprize(){
    let x=document.getElementById('prize').value;
var y=document.getElementById('quantity').value;
var total=x*y;
var alert=document.getElementById('alert');


alert.innerHTML=total+"(Rupess only)";
}
    </script>
</html>
