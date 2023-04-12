
<!DOCTYPE html>
<html>
<head>
    <title>Order Place</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
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
<div class="header" >
  <a href="#default" class="logo"><font color="orange" size="10"><strong>E-Stock Market</strong></font></a>
  <div class="header-right">
    <a class="active" href="userHome.jsp">Home</a>
    
   
  </div>
</div>

<input type="text" id="myInput" onkeyup="myFunction()" placeholder="Search for order Product.." title="Type in a name" >

<table id="myTable">
  <tr class="header">
  <th style="width:30%;"></th>
    <th style="width:10%;"></th>
    <th style="width:50%;"></th>
     <th style="width:10%;"></th>
      <th style="width:30%;"></th>
  </tr>
  <tr>
  <?php
include("connection.php");
$servername="localhost";
  $username="root";
  $password="";
  $dbname="mobileorder";
  
  $conn=mysqli_connect($servername,$username,$password,$dbname);
  


  $sql="SELECT * from mobilesal";
  $data=mysqli_query($conn,$sql);
  $total=mysqli_num_rows($data);
  while($info=mysqli_fetch_array($data)){
   ?>
   <tr>
   <td id="loc"><font size="6"><br><?php echo $info['p_name']; ?></font><br>
   
  </td>
      <td><?php $filename=$info['img_source']; echo "<img src='$filename' style='height:210px;'>"?></td>
      <td><font size="6"><i class="fa fa-rupee"></i></font><font color="blue"size="6"><strong><?php echo $info['P_price'] ?></strong></font></td>
      <td>
   
  

      <h4>Specification</h4>
      <p>Ram:<?php echo $info['P_RAM'];?></p>
      <p>Rom:<?php echo $info['P_ROM'];?></p>
      <p>Color:<?php echo $info['P_Color'];?></p>
      <p>Other:<?php echo $info['P_Add'];?></p>
      
   

     

  </td>
      <td>
   
  

      <h4>Address</h4>
      <p>Email:<?php echo $info['Email_id'];?></p>
      <p>District:<?php echo $info['Distric'];?></p>
      <p>Village/city:<?php echo $info['Village/city'];?></p>
      <p>Pin code:<?php echo $info['Pin code'];?></p>
      <p><?php echo $info['Payment type'];?></p>
   

     

  </td>
   <td><button onclick="window.open('Laporder.php','_parent')" style="border-radius:20px;width:150px;height:50px;background-color: orange;color:white;">Buy Now</button></td>
</tr>
           
  </tr>
  <?php
  }
?>   
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
<?php
  if($total==0){
    echo "<center><font color='red' size='10'>No Order</font><br><img src='noord.JPEG' size='200px;'></center>";
  }
?>
</body>
</html>


