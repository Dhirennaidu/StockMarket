<?php
 session_start();
// echo "Wellcome".$_SESSION['email'];
  $Email=$_SESSION['email1'];
  $Password=$_SESSION['Password'];
 // $Name=$_SESSION['Name1'];
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
<?php
$alert="";
$servername="localhost";
$username="root";
$password="";
$dbname="mobileorder";
$conn=mysqli_connect($servername,$username,$password,$dbname);
if(isset($_POST['return']))
{$tapdate1=date("Y-m-d h:i:sa");
  $orderid1=$_POST['Order'];
  $Emp=$_POST['Empid'];
  $sqlo="SELECT * FROM mobilesal1 where PP_ID='$orderid1'";
  $deleted=mysqli_query($conn,$sqlo);
  $row=mysqli_num_rows($deleted);
  $servername="localhost";
$username="root";
$password="";
$dbname="employe";
$conn=mysqli_connect($servername,$username,$password,$dbname);
  $sqlo1="SELECT * FROM employdata1 where Emp_ID='$Emp'";
  $deleted1=mysqli_query($conn,$sqlo1);
  $row1=mysqli_num_rows($deleted);
  if(($row==1) && ($row1==1))
  {
    $username="root";
$password="";
$dbname="mobileorder";
$conn=mysqli_connect($servername,$username,$password,$dbname);
    $sqld="DELETE FROM mobilesal1 WHERE PP_ID='$orderid1'";
    $order=mysqli_query($conn,$sqld);
    $alert=1;
    date_default_timezone_set("Asia/Kolkata");
    $servername="localhost";
$username="root";
$password="";
$dbname="notification";
$conn=mysqli_connect($servername,$username,$password,$dbname);
$message="return product sucsess fully";
   $sqlmss="INSERT INTO `message` (`id`,`P_ID`,`messag`, `email`,`Datem`) VALUES (NULL,'$orderid1','return product sucsess fully','$Email','$tapdate1');";
  $excute=mysqli_query($conn,$sqlmss);
}
}

?>
<!DOCTYPE html>
<html>
<head>
    <title>Order list</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
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
<style>
  * {margin: 0; padding: 0;}


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
    <a class="active" href="UserHome.php">Home</a>
    <a class="active"><button type="button" data-toggle="modal" data-target="#exampleModal" data-whatever="@mdo">Return Product</button></a>
    <a class="active"><button type="button" data-toggle="modal" data-target="#exampleModalCenter">Where is Your Product?</button></a>
  </div>
</div>

<input type="text" id="myInput" onkeyup="myFunction()" placeholder="Search for order Product.." title="Type in a name" >

<table id="myTable" styel="background-color:white;">
  <tr class="header">
  <th style="width:30%;"></th>
    <th style="width:30%;"></th>
    <th style="width:30%;"></th>
     <th style="width:0%;"></th>
     
      <th style="width:30%;"></th>
  </tr>
  <tr>
  <?php
//include("connection.php");
date_default_timezone_set("Asia/Kolkata");
$servername="localhost";
  $username="root";
  $password="";
  $dbname="mobileorder";
  
  $conn=mysqli_connect($servername,$username,$password,$dbname);
 // $id=rand(100000,999999);
 $id=date("Y-m-d h:i:sa");

  $sql="SELECT * from mobilesal1 where Email_id='$Email'";
  $data=mysqli_query($conn,$sql);
  $total=mysqli_num_rows($data);
 
  while($info=mysqli_fetch_array($data)){
   
   ?>
   <tr>
   <td id="loc"><font size="6">Order-ID:<?php echo $info['PP_ID'];?><br><?php echo $info['p_name']; ?></font><br>
   
  </td>
      <td><?php $filename=$info['img_source']; echo "<img src='$filename' style='height:210px;'>"?></td>
      <td><font size="6"><i class="fa fa-rupee"></i></font><font color="blue"size="6"><strong><?php echo $info['P_price'] ?></strong></font></td>
   
      <td>
   
  

      <h4>Address</h4>
      <p>Email:<?php echo $info['Email_id'];?></p>
      <p>District:<?php echo $info['Distric'];?></p>
      <p>Village/city:<?php echo $info['Village/city'];?></p>
      <p>Pin code:<?php echo $info['Pin code'];?></p>
      <p><?php echo $info['Payment type'];?></p>
   

     

  </td>
   <td><font size="6" color="green"><strong><?php echo $info['Orderdate'];?></strong></font></td>
</tr>
           
  </tr>
  <?php
  }
?>   
</table>
<!-- Modal -->
<div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">Your product Tracking</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      <center><div class="form-group">
            <label for="recipient-name" class="col-form-label">Enter Product-ID</label>
            <input type="text" class="form-control" id="recipient-name" style="text-align:center;">
          </div></center>
      </div>
      <div class="modal-footer">
       <!--------Time line------------------>
      
       <!----------------------------------->
      </div>
    </div>
  </div>
</div>
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Return Product</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form method="post" autocomplete="off">
          <div class="form-group">
            <label for="recipient-name" class="col-form-label" style="text-align:center;">Enter Order-id</label>
            <input type="text" name="Order" class="form-control" id="recipient-name" required>
          </div>
          <div class="form-group">
            <label for="recipient-name" class="col-form-label" style="text-align:center;">Emp-id</label>
            <input type="text" name="Empid" class="form-control" id="recipient-name" required>
          </div>
          <center><input type="submit" name="return" class="btn btn-primary"  value="Return" data-toggle="modal" data-target="#exampleModal1" data-whatever="@mdo"></center>
        </form>
      </div>
    
    </div>
  </div>
</div>
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


