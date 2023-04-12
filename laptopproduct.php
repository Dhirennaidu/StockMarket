
<!DOCTYPE html>
<html>
<head>
    <title>Laptop Product</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="https://pixinvent.com/stack-responsive-bootstrap-4-admin-template/app-assets/css/bootstrap-extended.min.css">
<link rel="stylesheet" type="text/css" href="https://pixinvent.com/stack-responsive-bootstrap-4-admin-template/app-assets/fonts/simple-line-icons/style.min.css">
<link rel="stylesheet" type="text/css" href="https://pixinvent.com/stack-responsive-bootstrap-4-admin-template/app-assets/css/colors.min.css">
<link rel="stylesheet" type="text/css" href="https://pixinvent.com/stack-responsive-bootstrap-4-admin-template/app-assets/css/bootstrap.min.css">
<link href="https://fonts.googleapis.com/css?family=Montserrat&display=swap" rel="stylesheet">
<style>
* {
  box-sizing: border-box;
}
.header {
  overflow: hidden;
  background-color: #f1f1f1;
  padding: 20px 10px;
}

.header a {
  float: left;
  color: black;
  text-align: center;
  padding: 12px;
  text-decoration: none;
  font-size: 18px; 
  line-height: 25px;
  border-radius: 4px;
}

.header a.logo {
  font-size: 25px;
  font-weight: bold;
}

.header a:hover {
  background-color: #ddd;
  color: black;
}

.header a.active {
 
}

.header-right {
  float: right;
}

@media screen and (max-width: 500px) {
  .header a {
    float: none;
    display: block;
    text-align: left;
  }
  
  .header-right {
    float: none;
  }
}
#myInput {
  background-image: url('/css/searchicon.png');
  background-position: 10px 10px;
  background-repeat: no-repeat;
  width: 100%;
  font-size: 16px;
  padding: 12px 20px 12px 40px;
  border: 1px solid #ddd;
  margin-bottom: 12px;
}

#myTable {
  border-collapse: collapse;
  width: 100%;
  border: 1px solid #ddd;
  font-size: 18px;
}

#myTable th, #myTable td {
  text-align: left;
  padding: 12px;
}

#myTable tr {
  border-bottom: 1px solid #ddd;
}

#myTable tr.header, #myTable tr:hover {
  background-color: #f1f1f1;
}
.byhover:hover{
    background-color: green;
    color:white;
}
</style>
</head>
<body>
<div class="header">
  <a href="#default" class="logo"><font color="orange" size="10"><strong>E-Stock Market</strong></font></a>
  <div class="header-right">
    <a class="active" href="userHome.jsp">Home</a>
    
   
  </div>
</div>

<input type="text" id="myInput" onkeyup="myFunction()" placeholder="Search for Laptop Product.." title="Type in a name">

<table id="myTable">
  <tr class="header">
  <th style="width:30%;"></th>
    <th style="width:5%;"></th>
    <th style="width:15%;"></th>
     <th style="width:30%;"></th>
      <th style="width:30%;"></th>
  </tr>
  <tr>
  <?php $total="";
include("connection.php");
$servername="localhost";
  $username="root";
  $password="";
  $dbname="uploadlaptop";
  
  $conn=mysqli_connect($servername,$username,$password,$dbname);
  


  $sql="SELECT * from laptopproduct1";
  $data=mysqli_query($conn,$sql);
  while($info=mysqli_fetch_array($data)){
   ?>
   <tr>
   <td id="loc"><font size="6"><?php  echo "ID:".$info['Laptop_ID'];  ?><br><?php echo $info['Laptop_Name']; ?></font><br>
   <?php 
    if($info['Laptop_pice']>0){$total=30;
      echo "<font color='green' size='4'>Stock Avialable</font>";
    }
    if($info['Laptop_pice']==0){
      echo "<font color='red' size='4'>Out of Stock</font>";
    }
    ?>
  </td>
      <td><?php $filename=$info['img_source']; echo "<img src='$filename' style='height:210px;'>"?></td>
      <td><font size="6"><i class="fa fa-rupee"></i></font><font color="blue"size="6"><strong><?php echo $info['Laptop_Sal'] ?></strong></font></td>
      <td>
   
  

      <h2>Specification</h2>
      <p>Color:<?php echo $info['Laptop_Color'];?></p>
      <p>PROCSESSOR:<?php echo $info['Laptop_Proce'];?></p>
      <p>RAM:<?php echo $info['Laptop_RAM'];?></p>
      <p>STORAGE:<?php echo $info['Laptop_Sto'];?></p>
      <p><?php echo $info['Laptop_Addpic'];?></p>
   

  

  </td>
  <td><?php
  if($total!=30){
       echo "<font color='red' size='5'><strong>Out of Stock</strong></font>";
   }
  else{
  echo "<button onclick=window.open('Laporder.php','_parent') style='border-radius:20px;width:150px;height:50px;background-color: orange;color:white;''>Buy Now</button>";}?>
  
  
</td>
  </tr>
  <?php
  }
?>            
  </tr>
  
</table>

<script>
function myFunction() {
  var input, filter, table, tr, td, i, txtValue;
  input = document.getElementById("myInput");
  filter = input.value.toUpperCase();
  table = document.getElementById("myTable");
  tr = table.getElementsByTagName("tr");
  for (i = 0; i < tr.length; i++) {
    td = tr[i].getElementsByTagName("td")[0];
    if (td) {
      txtValue = td.textContent || td.innerText;
      if (txtValue.toUpperCase().indexOf(filter) > -1) {
        tr[i].style.display = "";
      } else {
        tr[i].style.display = "none";
      }
    }       
  }
}
</script>

</body>
</html>


