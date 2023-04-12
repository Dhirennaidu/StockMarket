
<!DOCTYPE html>
<html>
<head>
    <title>Check Mobile Product</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
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
td{
    text-align:left;
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

<input type="" id="myInput" onkeyup="myFunction()" placeholder="Search for Tablet Product.." title="Type in a name">

<table id="myTable">
  <thead>
  <tr class="header">
    <th style="width:30%;">Tablet Name</th>
    <th style="width:10%;">Tablet ID</th>
    <th style="width:15%;">Tablet RAM</th>
    <th style="width:15%;">Tablet Storage</th>
    <th style="width:20%;">Tablet Color</th>
     <th style="width:20%;">Purches Prize</th>
     <th style="width:20%;">Tablet Prize</th>
     <th style="width:30%;">Check Stock</th>
     <th style="width:30%;">Message</th>
      </tr>
</thead>
<tbody>
  <?php
include("connection.php");
$servername="localhost";
  $username="root";
  $password="";
  $dbname="uploadtablet";
  
  $conn=mysqli_connect($servername,$username,$password,$dbname);
  


  $sql="SELECT * from tabletproduct1";
  $data=mysqli_query($conn,$sql);
  while($info=mysqli_fetch_array($data)){
   ?>
   <tr>
   <td id="loc"><?php echo $info['Tab_Name']; ?></td>
   <td id="loc"><?php echo $info['Tab_ID']; ?></td>
   <td><?php echo $info['Tab_RAM'];?></td>
   <td><?php echo $info['Tab_ROM'];?></td>
     <td><?php echo $info['Tab_Color'] ?></td>
     <td><?php echo $info['Tab_Pur'] ?></td>
      <td><font size="3">Price:</font><font color="blue"size="3"><strong><?php echo $info['Tab_sal'] ?></strong></font></td>
      <td><?php echo $info['Tab_Pice'];?></td>
      <td><?php echo "Stock Avialable" ?></td>
  </tr>
  <?php
  }
?>            
              
 
</tbody>
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
function Secification()
{
  window.alert('<?php ?>');
}
</script>

</body>
</html>
