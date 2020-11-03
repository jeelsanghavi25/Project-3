<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head>
<style>
.input {
  display: inline-block;
  padding: 10px 20px;
  font-size: 10px;
  cursor: pointer;
  text-align: center;
  text-decoration: none;
  outline: none;
  color: #fff;
  background-color: #FF0000;
  border: none;
  border-radius: 15px;
  box-shadow: 0 2px #999;
}

.input:hover {background-color: #CD5C5C}

.input:active {
  background-color: #3e8e41;
  box-shadow: 0 5px #666;
  transform: translateY(2px);
}
</style>
</head>
<title>Home Furnishing</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://www.w3schools.com/lib/w3-theme-black.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<body id="myPage" bgcolor="	#C0C0C0">

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
  
   
   <a href="logout.asp" class="w3-bar-item w3-button w3-hide-small w3-hover-white" style="position:absolute;top:00px;right:20px">Logout</a>
    
 <a href="#" class="w3-bar-item w3-button w3-hide-large w3-right w3-hover-teal" title="Cart"><i class="material-icons">
  <a href="cart.php" class="w3-button " style="position:absolute;top:-02px;right:90px">
<img src="images/carts.png"></i></a></a>

 </div>

<?php 
  include 'dbconnect.php';
  $search=$_POST["search"];
  $sql="Select * from furnish where name='".$search."'";
 $result = mysqli_query($conn, $sql);
 
 
 if (mysqli_num_rows($result) > 0) {
    // output data of each row
	while($row = mysqli_fetch_assoc($result))
	{
		
	echo ("<div class='w3-quarter' style='margin-top:45px; margin-bottom:25px;'><div class='w3-card-2 w3-white'><center><img height='213' width='120' src=".$row["image"]." alt='Vernazza' style='width:85%'></center><div class='w3-container'><h3>".$row["name"]."</h3><p>Price: ₹ ".$row["price"]."</p><p>Shipping included.</p> <p> &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp   <a href='addtocart.php?id=".$row["pid"]."' class='input' >Add to Cart</a></p></div></div></div>");
	}
 }
 else{
  echo("Cannot find item");
	 
 }
 ?>
 </body>
 </html>