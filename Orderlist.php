<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>Order list</title>
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
<body style="background-color:black;">
<input class="form-control" id="myInput" type="text" placeholder="Search..">
  <br>
<table class="table table-dark table-striped">
  <thead>
    <tr>
      <th scope="col">Order_id</th>
      <th scope="col">Product Name</th>
      <th scope="col">Product price</th>
      <th scope="col">Custemor Email</th>
      
    </tr>
    <tbody id="myTable">
  <?php
  $servername="localhost";
$username="root";
$password="";
$dbname="orderdata";
$conn=mysqli_connect($servername,$username,$password,$dbname);
date_default_timezone_set("Asia/Kolkata");
$sqor="SELECT * FROM mobileadd1";
$data1=mysqli_query($conn,$sqor);
$total11ll=mysqli_num_rows($data1);
while($info=mysqli_fetch_array($data1)){
    ?>
    
    <tr>
    <td scope="row" ><?php echo $info['ID2']; ?></td>
    <td><?php echo $info['P_Name']; ?></td>
    <td><?php echo $info['Pro_price']; ?></td>
    <td><?php echo $info['Email_id']; ?></td>
    </tr>
  <?php
  
  
 }
 ?><?php
 $servername="localhost";
$username="root";
$password="";
$dbname="orderdata";
$conn=mysqli_connect($servername,$username,$password,$dbname);
date_default_timezone_set("Asia/Kolkata");
$sqor="SELECT * FROM tabletadd";
$data1=mysqli_query($conn,$sqor);
echo $total11ll=mysqli_num_rows($data1);
while($info=mysqli_fetch_array($data1)){?>
    <tr>
    <td scope="row"><?php echo $info['ID1']; ?></td>
    <td><?php echo $info['Tablet_Name']; ?></td>
    <td><?php echo $info['Tabsal']; ?></td>
    <td><?php echo $info['Email_id']; ?></td>
    </tr>
   <?php 
}
 ?>
 <?php
  $servername="localhost";
$username="root";
$password="";
$dbname="orderdata";
$conn=mysqli_connect($servername,$username,$password,$dbname);
date_default_timezone_set("Asia/Kolkata");
$sqor="SELECT * FROM laptopadd1";
$data1=mysqli_query($conn,$sqor);
$total11ll=mysqli_num_rows($data1);
while($info=mysqli_fetch_array($data1)){
    ?>
    
    <tr>
    <td scope="row" ><?php echo $info['ID']; ?></td>
    <td><?php echo $info['Lap_Name']; ?></td>
    <td><?php echo $info['Lap_sal']; ?></td>
    <td><?php echo $info['Eamil_ID']; ?></td>
    </tr>
  <?php
  
  
 }
 ?>
</tbody>
</table>
<script>
$(document).ready(function(){
  $("#myInput").on("keyup", function() {
    var value = $(this).val().toLowerCase();
    $("#myTable tr").filter(function() {
      $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
    });
  });
});
</script>
</body>
</html>