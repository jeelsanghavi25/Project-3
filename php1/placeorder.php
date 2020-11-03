<?php
  session_start();
  include("dbconnect.php");
	if(isset($_GET["result"]))
	{
		
			$res=$_GET["result"];
	}
	else
	{
		
        $res="false";
	}

  $uname=$_SESSION["username"];
  $sql="select * from cart where name='".$uname."'";
 $amt=0;
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
		  $amt+=$row1["price"]*$row["quantity"];
	  }
  }
		  }
	 }
	 

?>
<html lang="en">
  <head>
    <title>Home Furnishing</title>
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link rel="icon" sizes="300*300" href="logo.png">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="css/bootstrap/bootstrap.min.css" rel="stylesheet">
    <link href="css/homepage.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Pacifico" rel="stylesheet">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://www.w3schools.com/lib/w3-theme-black.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

 </head>
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

  .background{
	   background-color:#333333 ;
  }
    .mylink:hover{
      background-color: #edeff3;
    }
    .toolbar{
      border:1px solid #00000;
      margin-bottom: 50px;
      width:600px;
      background-color: #000000;
  </style>
  <script
  src="https://code.jquery.com/jquery-3.3.1.min.js"
  integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
  crossorigin="anonymous"></script>
  <script src="js/popper.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
 
  <script type="text/javascript">
    if (!!window.performance && window.performance.navigation.type === 2) {
      console.log('Reloading');
      window.location.reload();
    }
  </script>
  <script>
    function click(){
    debugger;
      console.log("in fun");
      alert('Your order has been placed');
    }
  </script>
  <body class="background">
 <!-- Navbar -->
<div class="w3-top">
 <div class="w3-bar w3-theme-d2 w3-left-align">
  <a class="w3-bar-item w3-button w3-hide-medium w3-hide-large w3-right w3-hover-white w3-theme-d2" href="javascript:void(0);" onclick="openNav()"><i class="fa fa-bars"></i></a>
  <a href="#" class="w3-bar-item w3-button w3-teal"><i class="fa fa-home w3-margin-right"></i>Home Furnishing</a>
 
 <!--  <a href="logout.asp" class="w3-bar-item w3-button w3-hide-small w3-hover-white" style="position:absolute;top:00px;right:20px">Logout</a>-->
 
  
  
<div class="w3-dropdown-hover w3-hide-small" style="position:absolute;top:-02px;right:15px">
    <button class="w3-button" title="Notifications">Hello <?php $uid; $uid=$_SESSION["username"]; echo $uid;?>
	<i class="fa fa-caret-down"></i></button>     
    <div class="w3-dropdown-content w3-card-4 w3-bar-block">
      <a href="logout.php" class="w3-bar-item w3-button">Logout</a>
	  </div>
	  </div>
 </div>

</div>

    <?php
      $sql = "select * from signup where username in('".$_SESSION["username"]."');";
      $result=mysqli_query($conn,$sql);
      if($result->num_rows>0){
        while ($rss = mysqli_fetch_assoc($result)){
          $email = $rss["email"];
          $name = $rss["username"];
          $add = $rss["address"];
        }
      }
    ?>
    <center> <h5 style="font-family: 'Pacifico', cursive;font-size: 60px;margin-top: 60px;margin-left: 65px; color: #ffffff">------Place Order------ </h5>
    </center>
    
    <div class="container">
    <div class="row">
    <div class="col-md-5"> 
    <form class="form-horizontal" role="form" method="POST" action="addorder.php">
	<input type="hidden" name="amount" value="<?php echo $amt;?>">
    <!--  <div class="form-group">
        <label class="col-lg-3 control-label" style="color:white;" >Name:</label>
          <div class="col-lg-8">
            <input class="form-control" size="20" type="text" name="name" value="<?php echo $name; ?>">
          </div>
        </div>
      <div class="form-group">
	  
        <label class="col-md-3 control-label" style="color:white;">Email:</label>
        <div class="col-md-8">
          <input class="form-control" type="text" name="Email" value="<?php echo $email; ?>">
        </div>
      </div>
      <div class="form-group">
        <label class="col-md-3 control-label"style="color:white;">Address:</label>
        <div class="col-md-8">
          <input class="form-control" type="Address" name="Address" value="<?php echo $add; ?>">
        </div>
      </div>
      <div class="form-group">
        <label class="col-md-3 control-label"></label>
        <div class="col-md-8">
          <!-- Amount: 
<input type="hidden" name="amount" value="<?php  ?>"> <br>
-->
<!-- Merchant Username: -->
<input type="hidden" name="merchant" value=""> <br>
      </form>
<!-- Merchant AccNo: -->
<input type="hidden" name="acc_no" value=""> <br>


		<!--<form action="https://digipaym.000webhostapp.com/LoginPage.php" method="POST">-->

<!-- Amount:
<input type="hidden" name="amount" value="Pass the amount from your Page here...."> 

<!-- Merchant Username: 
<input type="hidden" name="merchant" value="Pass your username here...."> 

<!-- Merchant AccNo: 
<input type="hidden" name="acc_no" value="Pass your account no here...."> <br>
<input class='btn btn-primary' value='Proceed to payment' type='submit' style='background-color: #000000; border:#000000;' id='isVisible'>-->
		</form> 
		<?php
			if($res=="true"){
				
				echo "<script type='text/javascript'>
				     
				
					$('#isVisible').prop('disabled',false);
				</script>";
			}else{
				
				echo "<script type='text/javascript'>
					
					$('#isVisible').prop('disabled',true);
				</script>";
			}
			
		?>

        <form class="form-horizontal" role="form" method="POST" action="cart.php">
          
        </div>
      </div>
    
  </div>
  <div class="col-lg-7">
     <div class="row">
     <?php
              $amt=0;
              if(isset($_SESSION["username"])){
				 
				  $sql = "select * from cart where name in('".$_SESSION["username"]."');";
                $result=mysqli_query($conn,$sql);
               
                if($result->num_rows>0){
                  while ($rss = mysqli_fetch_assoc($result)){
                    $sql = "select * from furnish where pid=".$rss["pid"].";";
                    $result2=mysqli_query($conn,$sql);
                    if($result2->num_rows>0){
                      while ($rs = mysqli_fetch_assoc($result2)){
                        echo ("<div class='col-lg-4 col-md-6 mb-4'><div class='card h-70' style='border: 1px solid #000000;margin-top=10px;'>");
                        
                        $amt= $amt + ($rs["price"] * $rss["quantity"]);
                        echo ("<div class='card-body'><h4 class='card-title'><a href='item.php?id=" .  $rs["pid"] . "'>" .  $rs["name"] . "</a></h4><center><img height='150' width='150' src=".$rs["image"]." alt='Vernazza' style='width:100%'></center><h5 style='margin-top:20px;'>₹" . $rs["price"] . "</h5>" . "</div><div class='card-footer'><h6>Quantity: ". $rss["quantity"]."<br></h6></div></div></div>");
                      }
                    }
                  }
                }
            }
            ?>
</div>

<input type="button" name=""value="Confirm Order" class="btn btn-primary"  style="background-color: #000000; border:#000000;" value="click" onclick="alert('Your order has been placed') ;"> &nbsp


<input class="btn btn-primary" type ="submit" style="background-color: #000000; border:#000000;" value="Cancel"> <br><br>
          <div class="toolbar">
            
            <div style="color:white;font-size: 20px;margin-left: 10px;padding-top:5px;margin-top: 3px;">
              Total Amt: ₹<?php echo($amt); ?>
            </div>
          
          </div>
  </div>
  </div>
</div>
    <footer class="py-5 bg-dark">
      <div class="container">
        <p class="m-0 text-center text-white" style="font-family: 'Pacifico', cursive;font-size: 30px">Home Furnishing ©</p>
      </div>
    </footer>
  </body>
  
</html>
