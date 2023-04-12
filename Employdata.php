<?php
 include('connection.php');
 $servername="localhost";
 $username="root";
 $password="";
 $dbname="employe";
 $conn=mysqli_connect($servername,$username,$password,$dbname);
 $folder="/dhirenphp";
 $filename=@$_FILES["filename1"]["name"];
 $filename1=@$_FILES["filename2"]["name"];
 $filename2=@$_FILES["filename3"]["name"];
 if(isset($_POST['Admit'])){
  $E_ID=$_POST['Emp_id'];
  $E_Na=$_POST['Emp_name'];
  $E_Em=$_POST['Emp_add'];
  $E_Mo=$_POST['Emp_mobi'];
  $E_Ad=$_POST['Emp_adar'];
  $E_img1=$_POST['filename1'];
  $E_img2=$_POST['filename2'];
  $E_VI=$_POST['Emp_vai'];
  $E_ban=$_POST['Emp_acount'];
  $E_banc=$_POST['filename3'];
 $sqll="INSERT INTO `employdata1` (`id`, `Emp_ID`, `Emp_Name`, `Emp_Email`, `Emp_Mobile`, `Emp_Adar`, `img_source`, `img_source1`, `Emp_vai`, `Emp_bank`, `img_source3`) VALUES (NULL, '$E_ID', '$E_Na', '$E_Em', '$E_Mo', '$E_Ad', '$filename', '$filename1', '$E_VI', '$E_ban', '$filename2');";
  $data=mysqli_query($conn,$sqll);
 }
?>
<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>Add a New Employe</title>
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
    <body>
    <section class="vh-100" style="background-color: white;">
  <div class="container h-100">
    <div class="row d-flex justify-content-center align-items-center h-100">
      <div class="col-xl-9">

        <h1 class="text-white mb-4"><font color="black">Add a New Employe</font></h1>
        <form method="post">
        <div class="card" style="border-radius: 15px;">
          <div class="card-body">
          

<div class="row align-items-center py-3">
  <div class="col-md-3 ps-5">

    <h6 class="mb-0">Employ-ID:</h6>

  </div>
  <div class="col-md-9 pe-5">

    <input class="form-control" rows="3" name="Emp_id" value="<?php echo "EMP-".rand(100000,999999);?>" required />

  </div>
</div><hr class="mx-n3">
            <div class="row align-items-center pt-4 pb-3">
              <div class="col-md-3 ps-5">

                <h6 class="mb-0">Full name</h6>

              </div>
              <div class="col-md-9 pe-5">

                <input type="text"  name="Emp_name" class="form-control form-control-lg" placeholder="Enter a Employe Name" required />

              </div>
            </div>

            <hr class="mx-n3">

            <div class="row align-items-center py-3">
              <div class="col-md-3 ps-5">

                <h6 class="mb-0">Email address</h6>

              </div>
              <div class="col-md-9 pe-5">

                <input type="email"  name="Emp_add" class="form-control form-control-lg" placeholder="Enter Your Email" required/>

              </div>
            </div>
            <hr class="mx-n3">

<div class="row align-items-center py-3">
  <div class="col-md-3 ps-5">

    <h6 class="mb-0">Mobile No</h6>

  </div>
  <div class="col-md-9 pe-5">

    <input class="form-control"  name="Emp_mobi" rows="3" placeholder="Enter a Mobile Number" required />

  </div>
</div>
            <hr class="mx-n3">

            <div class="row align-items-center py-3">
              <div class="col-md-3 ps-5">

                <h6 class="mb-0">Adar No</h6>

              </div>
              <div class="col-md-9 pe-5">

                <input class="form-control"  name="Emp_adar" rows="3" placeholder="Enter a Adar Number" required />

              </div>
            </div>
            
            <hr class="mx-n3">

            <div class="row align-items-center py-3">
              <div class="col-md-3 ps-5">

                <h6 class="mb-0">Voter-ID Photo</h6>

              </div>
              <div class="col-md-9 pe-5">

                <input class="form-control form-control-lg" id="formFileLg" type="file"  name="filename1" required />
                <div class="small text-muted mt-2">Upload your CV/Resume or any other relevant file. Max file
                  size 50 MB</div>

              </div>
              <div class="col-md-3 ps-5">

<h6 class="mb-0">Adar Photo</h6>

</div>
<div class="col-md-9 pe-5">

<input class="form-control form-control-lg" id="formFileLg" type="file" name="filename2" required />
<div class="small text-muted mt-2">Upload your CV/Resume or any other relevant file. Max file
  size 50 MB</div>

</div>
            </div><hr>
            <hr class="mx-n3">
            <div class="row align-items-center py-3">
              <div class="col-md-3 ps-5">

                <h6 class="mb-0">Veaichal No</h6>

              </div>
              <div class="col-md-9 pe-5">

                <input class="form-control" rows="3" name="Emp_vai" placeholder="Enter a your veaichal Number" required />

              </div>
            </div>
            <hr class="mx-n3">
            <div class="row align-items-center py-3">
              <div class="col-md-3 ps-5">

                <h6 class="mb-0">Bank account No</h6>

              </div>
              <div class="col-md-9 pe-5">

                <input class="form-control" rows="3"  name="Emp_acount" placeholder="Enter a your Bank acount Number" required />

              </div>
            </div>
            <hr class="mx-n3">
            <div class="row align-items-center py-3">
            <div class="col-md-3 ps-5">

<h6 class="mb-0">Bank Account Photo</h6>

</div>
<div class="col-md-9 pe-5">

<input class="form-control form-control-lg" id="formFileLg" type="file" name="filename3" required />
<div class="small text-muted mt-2">Upload your CV/Resume or any other relevant file. Max file
  size 50 MB</div>

</div></div>
            <hr class="mx-n3">
            <div class="px-5 py-4">
              <input type="submit" name="Admit" class="btn btn-primary btn-lg" value="Add">
              <button type="button" onclick="window.open('AdminHome.php','_parent');" class="btn btn-primary btn-lg" style="background-color:green;color:white;">Cancel</button>
            </div>

          </div>
        </div>

      </div>
    </div>
</form>
  </div>
</section>
</body>
</html>