<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="mycss.css"></link>
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
 .btnMy{
        margin-left: 1050px;
    width: 150px;
    margin-top: -32px;
    background: rgba(202, 202, 202, 0.48);
    text-align: center;
    height: 37px;
    margin-bottom: 5px;
    
    padding-top: 4px;
  }
  .linkMy{
  	color: white;
  	font-size: 20px;

  }

.input:hover {background-color: #CD5C5C}

.input:active {
  background-color: #3e8e41;
  box-shadow: 0 5px #666;
  transform: translateY(2px);
}
.toolbar{
  	border:1px solid #ff4a83;
  	margin-bottom: 50px;
  	width:600px;
	height:100px
  	background-color: #ff4a83;
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


 <div class="w3-top">
 <div class="w3-bar w3-theme-d2 w3-left-align">
  <a class="w3-bar-item w3-button w3-hide-medium w3-hide-large w3-right w3-hover-white w3-theme-d2" href="javascript:void(0);" onclick="openNav()"><i class="fa fa-bars"></i></a>
  <a href="home.php" class="w3-bar-item w3-button w3-teal"><i class="fa fa-home w3-margin-right"></i>Home Furnishing</a>
  <a href="" class="w3-bar-item w3-button w3-hide-small w3-hover-white">Cart</a>
  </div>
  </div> 


<?php 

include 'dbconnect.php';


$amt=0;

$uname=$_SESSION["username"];
  $sql="select * from cart where name='".$uname."'";
 
  $result=mysqli_query($conn,$sql);
	 if(mysqli_num_rows($result)>0) {
		 
		  while($row = mysqli_fetch_assoc($result))
		  {
			//  echo $row["pid"];
			  $pid=$row["pid"];
			  $quantity=$row["quantity"];
			  
	
  $sql1="select * from furnish where pid=".$pid."";
  
  $result1=mysqli_query($conn,$sql1); 
  
  
  
  if(mysqli_num_rows($result1)>0){
		
	  while($row1 = mysqli_fetch_assoc($result1)) {
			//echo $row1["pid"];
      echo "<div class='w3-quarter' style='margin-top:45px; margin-bottom:25px;'>
	  <div class='w3-card-2 w3-white'><img height='213' width='120' src='".$row1['image']."' alt='Vernazza' style='width:85%'>
	  <div class='w3-container'><h3>".$row1['name']."</h3><p>Quantity:
	  <a href='subtract.php?id=".$row1["pid"]." 'style='border: 1px solid;border-radius:10px;margin-left:45px;padding: 5px;text-decoration:none ;background-color: #FF0000;'>-</a>&nbsp&nbsp&nbsp ".$quantity." 
	  <a href='add.php?id=".$row1['pid']." 'style='border: 1px solid;border-radius: 10px;margin-left: 15px;padding: 5px; text-decoration:none;background-color: #FF0000;'>+</a><h4>₹".$row1['price']."
	  </h4><p>Shipping included.</p><p> &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp   
	  <a href='remove.php?id=".$row1['pid']."' class='input' >Remove</a></p></div></div></div>";
   $amt+=($row['quantity'] * $row1['price']);
   }
   
    
		  }}    
  }
?>

<br>
<br>
  <br>
  
  
   <div class="myfooter">
       		<span class="myspan">
       			Total Amt: ₹<?php echo $amt; ?>	
			</span>
			
		<!-	<div class="btnMy" >
			
       			<a class="linkMy" href="placeorder.php">Place Order</a>
       		</div>
    </div>   		
       		
   