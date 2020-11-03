<?php
session_start();
?>

<!DOCTYPE html>
<html>
<head>

    <title>Home Furnishing</title>
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link rel="icon" sizes="300*300" href="chairsmain.png">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="css/bootstrap/bootstrap.min.css" rel="stylesheet">
    <link href="css/homepage.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Pacifico" rel="stylesheet">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://www.w3schools.com/lib/w3-theme-black.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

<style>
body {
    font-family: Arial;
}

.coupon {
    border: 5px dotted #bbb;
    width: 80%;
    border-radius: 7px;
    margin: 0 auto;
    max-width: 400px;
}

.container {
    padding: 2px 5px;
    background-color: #f1f1f1;
}

.promo {
    background: #ccc;
    padding: 3px;
}

.expire {
    color: red;
}
.container-3{
  width: 300px;
  vertical-align: middle;
  white-space: nowrap;
  position: relative;
}
 
.container-3 input#search{
  width: 300px;
  height: 50px;
  background: #2b303b;
  border: none;
  font-size: 10pt;
  float: left;
  color: #262626;
  padding-left: 45px;
  -webkit-border-radius: 5px;
  -moz-border-radius: 5px;
  border-radius: 5px;
  color: #fff;
}
.container-3 input#search::-webkit-input-placeholder {
   color: #65737e;
}
 
.container-3 input#search:-moz-placeholder { /* Firefox 18- */
   color: #65737e;  
}
 
.container-3 input#search::-moz-placeholder {  /* Firefox 19+ */
   color: #65737e;  
}
 
.container-3 input#search:-ms-input-placeholder {  
   color: #65737e;  
}
.container-3 .icon{
  position: absolute;
  top: 50%;
  margin-left: 17px;
  margin-top: 17px;
  z-index: 1;
  color: #4f5b66;
 
   -webkit-transition: all .55s ease;
  -moz-transition: all .55s ease;
  -ms-transition: all .55s ease;
  -o-transition: all .55s ease;
  transition: all .55s ease;
}
</style>
</head>
<title>Home Furnishing</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://www.w3schools.com/lib/w3-theme-black.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<body id="myPage">

<!-- Sidebar on click -->
<nav class="w3-sidebar w3-bar-block w3-white w3-card w3-animate-left w3-xxlarge" style="display:none;z-index:2" id="mySidebar">
  <a href="javascript:void(0)" onclick="w3_close()" class="w3-bar-item w3-button w3-display-topright w3-text-teal">Close
    <i class="fa fa-remove"></i>
  </a>
 
 
  &nbsp &nbsp <img src="images/clogo.png" alt="Avatar" style="width:80%;"> <br><br>
  &nbsp &nbsp <img src="images/clogo2.png" alt="Avatar" style="width:80%;">
  
</nav>


<!-- Navbar -->
<div class="w3-top">
 <div class="w3-bar w3-theme-d2 w3-left-align">
  <a class="w3-bar-item w3-button w3-hide-medium w3-hide-large w3-right w3-hover-white w3-theme-d2" href="javascript:void(0);" onclick="openNav()"><i class="fa fa-bars"></i></a>
  <a href="#" class="w3-bar-item w3-button w3-teal"><i class="fa fa-home w3-margin-right"></i>Home Furnishing</a>
 <!-- <a href="#team" class="w3-bar-item w3-button w3-hide-small w3-hover-white">Team</a> -->
  <div class="w3-dropdown-hover w3-hide-small">
    <button class="w3-button" title="Notifications">Products <i class="fa fa-caret-down"></i></button>     
    <div class="w3-dropdown-content w3-card-4 w3-bar-block">
    <!-- <a href="furniture.php" class="w3-bar-item w3-button">Furniture</a>--> 
    <a href="bedroom.php" class="w3-bar-item w3-button">Bedroom</a>
      <a href="living.php" class="w3-bar-item w3-button">Living</a>
      <a href="light.php" class="w3-bar-item w3-button">Lighting</a>
      <a href="decor.php" class="w3-bar-item w3-button">Decor</a>
    
    </div>
  </div>
  <a href="#work" class="w3-bar-item w3-button w3-hide-small w3-hover-white">Special offers</a>
   <a href="#bestselling" class="w3-bar-item w3-button w3-hide-small w3-hover-white">Best Selling</a>
  
 
  <a href="#contact" class="w3-bar-item w3-button w3-hide-small w3-hover-white">Contact</a>
   
   <a href="logout.php" class="w3-bar-item w3-button w3-hide-small w3-hover-white" style="position:absolute;top:00px;right:20px">Logout</a>
	  
 <a href="#" class="w3-bar-item w3-button w3-hide-large w3-right w3-hover-teal" title="Cart"><i class="material-icons">
  <a href="cart.php" class="w3-button " style="position:absolute;top:-02px;right:90px">
<img src="images/carts.png"></i></a></a>

 </div>

  <!-- Navbar on small screens -->
  <div id="navDemo" class="w3-bar-block w3-theme-d2 w3-hide w3-hide-large w3-hide-medium">
    <a href="#team" class="w3-bar-item w3-button">Team</a>
    <a href="#work" class="w3-bar-item w3-button">Work</a>
    <a href="#bestselling" class="w3-bar-item w3-button">Best Selling</a>
    <a href="#contact" class="w3-bar-item w3-button">Contact</a>
    <a href="#" class="w3-bar-item w3-button">Search</a>
  </div>
</div>

<!-- Image Header -->
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container">
  <h2></h2>  
  <div id="myCarousel" class="carousel slide" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
      <li data-target="#myCarousel" data-slide-to="2"></li>
	  <li data-target="#myCarousel" data-slide-to="3"></li>
    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner">
      <div class="item active">
       <center> <img src="images/sofasmain1.jpg" alt="SOFA" style="width:80%;"> </center>
      </div>

      <div class="item">
       <center> <img src="images/tablemain1.jpg" alt="TABLE" style="width:90%;"> </center>
      </div>
    
      <div class="item">
      <center>  <img src="images/bookmain1.jpg" alt="BOOKCASE" style="width:90%;"></center>
      </div>
    
  <div class="item">
     <center>   <img src="images/cushionmain1.jpg" alt="CUSHIONS" style="width:80%;"></center>
      </div>
    </div>
</div>

    <!-- Left and right controls -->
    <a class="left carousel-control" href="#myCarousel" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>
</div>

<!-- Modal -->
<div id="id01" class="w3-modal">
  <div class="w3-modal-content w3-card-4 w3-animate-top">
    <header class="w3-container w3-teal w3-display-container"> 
      <span onclick="document.getElementById('id01').style.display='none'" class="w3-button w3-teal w3-display-topright"><i class="fa fa-remove"></i></span>
      <h4></h4>
      <h5><i class="fa fa-smile-o"></i></h5>
    </header>
    <div class="w3-container">
      <p></p>
      <p><a class="w3-text-teal" href=""></a> </p>
    </div>
    <footer class="w3-container w3-teal">
      <p></p>
    </footer>
  </div>
</div>


<br>
<br>
<br>
<br>

<!-- Work Row -->
<div class="w3-row-padding w3-padding-64 w3-theme-l1" id="work">

<div class="w3-quarter">
<h2>Special Offers</h2>
<br>
<h4>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp  &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp </h4>
</div>

<div class="w3-quarter">
<div class="w3-card-2 w3-white">
  <img src="images/bedsheets.jpg" alt="Vernazza" style="width:100%">
  <div class="w3-container">
  <a href="bedroom.php" class="w3-bar-item w3-button"><h3>BEDSHEETS</h3></a>
  <h4>15% OFF on your first shopping.</h4>
  <p>Use coupon promo code for more discount.</p>
  <p>Free home delivery.</p>
  <!--<p>Upcoming sales : 1st February 2020 to 21st February 2020</p>-->
  </div>
  </div>
</div>

<div class="w3-quarter">
<div class="w3-card-2 w3-white">
  <img src="images/ottoman.jpg" alt="Cinque Terre" style="width:100%">
  <div class="w3-container">
  <a href="living.php" class="w3-bar-item w3-button"><h3>OTTOMAN</h3></a>
 <h4>15% OFF on your first shopping.</h4>
  <p>Use coupon promo code for more discount.</p>
  <p>Free home delivery.</p>
  <!--<p>Upcoming sales : 1st February 2020 to 21st February 2020</p>-->
  </div>
  </div>
</div>

<div class="w3-quarter">
<div class="w3-card-2 w3-white">
  <img src="images/plant.jpg" alt="Monterosso" style="width:100%">
  <div class="w3-container">
  <a href="decor.php" class="w3-bar-item w3-button"><h3>ARTIFICIAL PLANTS</h3></a>
  <h4>15% OFF on your first shopping.</h4>
  <p>Use coupon promo code for more discount.</p>
  <p>Free home delivery.</p>
  <!--<p>Upcoming sales : 1st February 2020 to 21st February 2020</p>-->
  </div>
  </div>
</div>

</div>

<!-- Container 
<div class="w3-container" style="position:relative">
  <a onclick="w3_open()" class="w3-button w3-xlarge w3-circle w3-teal"
  style="position:absolute;top:-28px;right:24px">+</a>
</div>-->

<!-- Pricing Row -->
<div class="w3-row-padding w3-center w3-padding-64" id="bestselling">
    <h2>BEST SELLING</h2>
    <p></p><br>
    <div class="w3-third w3-margin-bottom">
      <ul class="w3-ul w3-border w3-hover-shadow">
        <li class="w3-theme">
         <a href="living.php" class="w3-bar-item w3-button"> <p class="w3-xlarge">TWO SEATER SOFA</p> </a>
        </li>
        <li class="w3-padding-16"><b>Lara 2 Seater Sofa In Garnet Red Color </b>&nbsp - &nbsp Rs.24,999</li>
        <li class="w3-padding-16"><b>Alfredo 2 Seatre Sofa In Chestnut Brown Color</b>&nbsp - &nbsp Rs.23,399 </li>
        <li class="w3-padding-16"><b>Andres 2 Seater Sofa in Ash Grey Color</b> &nbsp - &nbsp  Rs.29,289</li>
        <li class="w3-padding-16"><b>Feugo 2 Seater Sofa in Navy Blue Color</b>&nbsp - &nbsp  Rs.23,999</li>
        <li class="w3-padding-16">
         <b><class="w3-wide"> Valery 2 Seater Sofa In Green Color With Brown Oak Finish</b>&nbsp - &nbsp
          <span class="w3-opacity">Rs.21,999</span>
        </li>
        <li class="w3-theme-l5 w3-padding-24">
       <!--   <button class="w3-button w3-teal w3-padding-large"><i class="fa fa-check"></i> Sign Up</button>-->
      <img src="images/sofa1.jpg" alt="Vernazza" style="width:40%"> 
        </li>
      </ul>
    </div>

    <div class="w3-third w3-margin-bottom">
      <ul class="w3-ul w3-border w3-hover-shadow">
        <li class="w3-theme-l2">
         <a href="light.php" class="w3-bar-item w3-button"> <p class="w3-xlarge">TABLE LAMPS</p> </a>
        </li>
        <li class="w3-padding-16"><b>Beige Fabric Shade Lamp With Metal Base</b> &nbsp - &nbsp Rs.819</li>
        <li class="w3-padding-16"><b>Khadi Fabric Shade Lamp With Wooden Base</b>  &nbsp - &nbsp Rs.1,597</li>
        <li class="w3-padding-16"><b>White Fabric Shade Lamp With Ceramic Base</b>  &nbsp - &nbsp Rs.2,393</li>
        <li class="w3-padding-16"><b>Beige Cotton Shade Lamp With Glass And Brass Base </b>&nbsp - &nbsp  Rs.8,909</li>
        <li class="w3-padding-16">
          <b> <class="w3-wide">Yellow Fabric Shade Lamp With Terracotta Base</b> <br>&nbsp - &nbsp
          <span class="w3-opacity">Rs.969</span>
        </li>
        <li class="w3-theme-l5 w3-padding-24">
         <!--<button class="w3-button w3-teal w3-padding-large"><i class="fa fa-check"></i> Sign Up</button>-->
      <img src="images/lamp.jpg" alt="Vernazza" style="width:30%"> 
        </li>
      </ul>
    </div>

    <div class="w3-third w3-margin-bottom">
      <ul class="w3-ul w3-border w3-hover-shadow">
        <li class="w3-theme">
        <a href="living" class="w3-bar-item w3-button">  <p class="w3-xlarge">COFFEE TABLES</p> </a>
        </li>
        <li class="w3-padding-16"><b>Alanzo Coffe Table With Walnut Finish</b>&nbsp - &nbsp   Rs.12,799 </li>
        <li class="w3-padding-16"><b>Yoshiki Coffee Table With In Walnut Finish</b> &nbsp - &nbsp  Rs.5,489</li>
        <li class="w3-padding-16"><b>Mills Coffee Table In Rosewood Finish</b> &nbsp - &nbsp  Rs.5,250</li>
        <li class="w3-padding-16"><b>Supein Coffee Table In Dark Brown Finish</b> &nbsp - &nbsp  Rs.4,499</li>
        <li class="w3-padding-16">
         <b> <class="w3-wide"> Arata Coffee Table with With Storage Slot In Oak Finish</b><br>&nbsp - &nbsp
          <span class="w3-opacity">Rs.3,499</span>
        </li>
        <li class="w3-theme-l5 w3-padding-24">
         <!-- <button class="w3-button w3-teal w3-padding-large"><i class="fa fa-check"></i> Sign Up</button>-->
     <img src="images/cotable.jpg" alt="Vernazza" style="width:45%"> 
        </li>
      </ul>
    </div>
</div>

<!-- Contact Container -->
<div class="w3-container w3-padding-64 w3-theme-l5" id="contact">
  <div class="w3-row">
    <div class="w3-col m5">
    <div class="w3-padding-16"><span class="w3-xlarge w3-border-teal w3-bottombar">Contact Us</span></div>
      <h3></h3>
      <p>Unique designs, because just ordinary is not our thing!</p>
      <p><i class="fa fa-map-marker w3-text-teal w3-xlarge"></i> Mumbai,Maharashtra.</p>
      <p><i class="fa fa-phone w3-text-teal w3-xlarge"></i>  +91 9619324771</p>
      <p><i class="fa fa-envelope-o w3-text-teal w3-xlarge"></i> homefurnishing1234@gmail.com</p>
    </div>
    <!--
    <div class="w3-col m7">
      <form class="w3-container w3-card-4 w3-padding-16 w3-white">
      <div class="w3-section">      
        <label>Name</label>
        <input class="w3-input" type="text" name="Name" required>
      </div>
      <div class="w3-section">      
        <label>Message</label>
        <input class="w3-input" type="text" name="Message" required>
      </div>  
      <input class="w3-check" type="checkbox" checked name="Like">
      <label>I Like it!</label>
      <button type="submit" class="w3-button w3-right w3-theme" onclick="alert('Your details have been sent.')">Send</button>
      </form>
    </div>-->
  </div>
</div>



 <!--Footer -->
<footer class="w3-container w3-padding-32 w3-theme-d1 w3-center">
  <h4>Follow Us</h4>
  <a class="w3-button w3-large w3-teal" href="socialfb.php" title="Facebook"><i class="fa fa-facebook"></i></a>
  <a class="w3-button w3-large w3-teal" href="socialtw.php" title="Twitter"><i class="fa fa-twitter"></i></a>
  <!-- <a class="w3-button w3-large w3-teal" href="socialgo.php" title="Google +"><i class="fa fa-google-plus"></i></a> -->
  <a class="w3-button w3-large w3-teal" href="socialin.php" title="Instagram"><i class="fa fa-instagram"></i></a>
  <a class="w3-button w3-large w3-teal w3-hide-small" href="socialli.php" title="Linkedin"><i class="fa fa-linkedin"></i></a> 
   <footer class="py-5 bg-dark">
      
        <p class="m-0 text-center text-white" style="font-family: 'Pacifico', cursive;font-size: 30px; padding-left: 40px;">Home Furnishing ©</p>
      
   

  <div style="position:relative;bottom:100px;z-index:1;" class="w3-tooltip w3-right">
    <span class="w3-text w3-padding w3-teal w3-hide-small">Go To Top</span>   
    <a class="w3-button w3-theme" href="#myPage"><span class="w3-xlarge">
    <i class="fa fa-chevron-circle-up"></i></span></a>
  </div>
  
</footer>

<script>
// Script for side navigation
function w3_open() {
    var x = document.getElementById("mySidebar");
    x.style.width = "300px";
    x.style.paddingTop = "10%";
    x.style.display = "block";
}

// Close side navigation
function w3_close() {
    document.getElementById("mySidebar").style.display = "none";
}

// Used to toggle the menu on smaller screens when clicking on the menu button
function openNav() {
    var x = document.getElementById("navDemo");
    if (x.className.indexOf("w3-show") == -1) {
        x.className += " w3-show";
    } else { 
        x.className = x.className.replace(" w3-show", "");
    }
}
</script>

</body>
</html>
