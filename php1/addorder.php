<?php
session_start();
include 'dbconnect.php';
$username=$_POST["Name"];
$address=$_POST["address"];
$email=$_POST["email"];
$amt=$_POST["amount"];


echo $amt;
 $sql="Select * from cart where name ='".$_SESSION["username"]."'";
		echo $sql;
		$result=mysqli_query($conn,$sql);
		if(mysqli_num_rows($result)>0){
		  while($row = mysqli_fetch_assoc($result)){
			   $pid=$row["pid"];
			   $name=$row["name"];
			  $quantity=$row["quantity"];
			  $sql1="insert into placeholder values('$username','$address','$email',$pid,'$name',$amt,$quantity)";
		echo $sql1;
		$result1=mysqli_query($conn,$sql1);
				if($result1)
				{
					header('Location:placeorder.php?result=true');
					
				}
			
		  }
		}


 echo $pid;
 $sql1;


               
?>