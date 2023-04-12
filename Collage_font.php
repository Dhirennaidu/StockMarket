<!DOCTYPE html>
<html lang="en">
<head>
<title>Roland</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<style>
body {font-family: "Lato", sans-serif ;
margin:0;
}
.mySlides {display: none}

.jb{border-radius: 40px;
  margin:30px;
  width:120px;
  height: 50px;
  background-color: rgb(147, 237, 51);
  color:rgb(255, 255, 255);
}
.jb:hover{
  background-color: aqua;
  color: black;
}
.logo{
  width:100%;
  height:440px;
  background-color: rgb(0, 0, 0);
  margin-top:80px;

}
.photo{
  float:left;
  width:100%;
  height:710px;
  background-color: white;
  text-align:left
}
/*slider*/
.slideshow-container {float:left;
  border: #f2f2f2;
  max-width: 800px;
  height:400px;
  margin: auto;
}

/* Caption text */
.text {
  
  color: black;
  font-size: 15px;
  padding: 8px 12px;
  position: absolute;
  bottom: 8px;
  width: 100%;
  text-align: left;
}

/* Number text (1/3 etc) */
.numbertext {
  color: #f2f2f2;
  font-size: 12px;
  padding: 8px 12px;
  position: absolute;
  top: 0;
}

/* The dots/bullets/indicators */
.dot {float:left;
  height: 15px;
  width: 15px;
  margin: 0 2px;
  background-color: #bbb;
  border-radius: 50%;
  display: inline-block;
  transition: background-color 0.6s ease;
}

.active {
  background-color: #717171;
}

/* Fading animation */
.fade {
  animation-name: fade;
  animation-duration: 1.5s;
}
/*login secction */
.sb {float:right;
  border-radius: 30px;
  background-color: #1900ff;
  color: white;
  width: 100px;
  padding: 16px;
  font-size: 16px;
  border: none;
  outline: none;
  margin-top: 20px;
}
.dropdown {
  position: absolute;
  display: inline-block;
}

.dropdown-content {
  display: none;
  position: absolute;
  background-color: #f1f1f1;
  min-width: 160px;
  z-index: 1;
}

.dropdown-content a {
  color: black;
  padding: 12px 16px;
  text-decoration: none;
  display: block;
}

.dropdown-content a:hover {background-color: #ddd}

.dropdown:hover .dropdown-content {
  display: block;
}

.btn:hover, .dropdown:hover .btn {
  background-color: #0b7dda;
}
/*--------------*/
@keyframes fade {
  from {opacity: .4} 
  to {opacity: 1}
}

/* On smaller screens, decrease text size */
@media only screen and (max-width: 300px) {
  .text {font-size: 11px}
}
/*-------*/
/*footer*/
.footer {
  position: fixed;
   left: 0;
   bottom: 0;
   width: 100%;
   background-color:rgb(204, 83, 172);
   text-align: left;
   display:flex;
}
/*----------*/
</style>
</head>
<body>

<!-- Navbar -->
<div  style="background-color:white;position:fixed;width:100%">
  <div style="background-color:rgb(255, 255, 255);border: 2px;">
  
    <a  href="javascript:void(0)" onclick="myFunction()" title="Toggle Navigation Menu"><i class="fa fa-bars"></i></a>
    <a href="http://localhost/dhirenphp/Collage_font.php" class="w3-bar-item w3-button w3-padding-large">HOME</a>
    <a href="http://localhost/dhirenphp/adminLogin.php" class="w3-bar-item w3-button w3-padding-large w3-hide-small"><button type="submit"onclick="myfun1()">Admin</button></a>
    <a href="localhost/dhirenphp/Login.php" class="w3-bar-item w3-button w3-padding-large w3-hide-small"><button type="submit">Student</button></a></a>
    <a href="localhost/dhirenphp/teachlogin.php" class="w3-bar-item w3-button w3-padding-large w3-hide-small"><button type="submit"onclick="myfun1()">Teacher</button></a></a>
    <div class="dropdown">
      <button class="sb">
       <font>Login</font> <i class="fa fa-caret-down"></i>
      </button>
      <div class="dropdown-content">
        <a href="http://localhost/dhirenphp/Login.php">Student Login</a>
        <a href="http://localhost/dhirenphp/Teaclogin.php">Teacher Login</a>
        <a href="http://localhost/dhirenphp/adminLogin.php">Admin Login</a>
      </div>
    </div>


    <!--<a href="javascript:void(0)" class="w3-padding-large w3-hover-red w3-hide-small w3-right"><i class="fa fa-search"></i></a>-->
    <font size="20" color="black"><hr></font>
  </div>
</div>

<!-- Navbar on small screens (remove the onclick attribute if you want the navbar to always show on top of the content when clicking on the links) -->
<div id="navDemo" class="w3-bar-block w3-black w3-hide w3-hide-large w3-hide-medium w3-top" style="margin-top:46px">
  <button><a href="Collage_font.html" >Close</a></button>
  <a href="http://localhost/dhirenphp/adminLogin.php" class="w3-bar-item w3-button w3-padding-large" ><button type="button"onclick="myfun1()">Admin</button></a>
  <a href="http://localhost/dhirenphp/Login.php" class="w3-bar-item w3-button w3-padding-large" onclick="myFunction()">Student</a>
  <a href="http://localhost/dhirenphp/Teaclogin.php" class="w3-bar-item w3-button w3-padding-large" onclick="myFunction()"><button type="button"onclick="myfun2()">Teacher</button></a>
 
</div><br>
<div class="logo">
<center><img src="im.JPEG" style=" margin-left:0px;" width="250"></center>
<center><font size="20" color="orange"><strong>RIC&MS</strong></font></center>
<center><font size="4" color="blue"><strong>ROLAND INSTITUET OF COMPUTER AND MNAGEMENT STUDY</strong></font></center>
<center><a href="http://localhost/dhirenphp/index.php"><button class="jb">Join Now</button></a></center>
</div><br><br>
<div style="width:100%;height:80px;background-color: rgb(255, 255, 255);">
<center><font size="10px"><strong>Collage Detatils</strong></strong></center>
</div>
<hr>
<div class="photo">
 <img src="cp.jpeg" style="width: 600px;height: 400px;">
 <center><font color="white">COURSE'S</font></center>
 <!--slide-->
 <div class="slideshow-container">

  <div class="mySlides fade">
    <div class="numbertext">1 / 3</div>
    <a href="https://www.youtube.com/watch?v=Wa-kgmSLls4&list=PLu0W_9lII9aiXlHcLx-mDH1Qul38wD3aR"><img src="cp4.JPEG" style="width:100%;height: 250px;;"></a>
    
  </div>
  
  <div class="mySlides fade">
    <div class="numbertext">2 / 3</div>
    <a href="https://www.youtube.com/watch?v=0yn7irrHzM8&list=PLfqMhTWNBTe0b2nM6JHVCnAkhQRGiZMSJ"><img src="cp1.JPEG" style="width:100%;height: 250px;;"></a>
  
  </div>
  
  <div class="mySlides fade">
    <div class="numbertext">3 / 3</div>
    <a href="https://www.youtube.com/watch?v=LusTv0RlnSU&list=PLfqMhTWNBTe3LtFWcvwpqTkUSlB32kJop"><img src="cp2.JPEG" style="width:100%;height: 250px;;"></a>
  </div>
  
  </div>
  <br>
  <!--<div style="text-align:center">
    <span class="dot"></span> 
    <span class="dot"></span> 
    <span class="dot"></span> -->
  </div>  
 <!----->
</div>
<!--<div class="rep" style="float:right;width:600px;height: 300px;">
  <font color="orange"><strong><u>Collage-LAB</u></strong></font><br>
  <font size="4"><strong><u>BCA-1st Year</u></strong></font><br>
  <font size="3" color="blue"><strong>1.C-Language</strong></font><br>
  <font size="3" color="blue"><strong>2.Operaing System</strong></font><br>
  <font size="4"><strong><u>BCA-2nd Year</u></strong></font><br>
  <font size="3" color="blue"><strong>1.C++-Object orianted programing Language(Oops)</strong></font><br>
  <font size="3" color="blue"><strong>2.SQL-structure query language(Data base)</strong></font><br>
  <font size="4"><strong><u>BCA-3rd Year</u></strong></font><br>
  <font size="3" color="blue"><strong>1.java-Object orianted programing Language(Oops)</strong></font><br>
  <font size="3" color="blue"><strong>2.Web-Devlopment(HTML,CSS,JAVA SCRIPT)</strong></font>
  
</div>--><br>
<div class="footer">
 <img src="im.JPEG"width="90">
 <font style="margin:8px;color:blue;"><strong>WELL COME TO ROLAND</strong></font>
</div>

</body>
<script src="Rolandjs.js"></script>
</html>
