<?php
	include 'dbconnect.php';
	$hash=$_GET["hash"];
	$ac=1;
	$sql="UPDATE user set active=1 WHERE hash='".$hash."'";
	if(mysqli_query($conn,$sql)){
		
	}else{
		echo mysqli_error($conn);
	}
	$sql4="Select username,active,password,email,address from user where hash='".$hash."'";
	$result1=mysqli_query($conn,$sql4);
	$row1=mysqli_fetch_assoc($result1);
	$sql1="Insert into signup values('".$row1["username"]."','".$row1["password"]."','".$row1["email"]."','".$row1["address"]."')";
	if(mysqli_query($conn,$sql1)){
		
	}else{
		echo mysqli_error($conn);
	}
	//$sql2="Select username,active,password from user where hash='".$hash."'";
	//$result=mysqli_query($conn,$sql2);
	//if(mysqli_num_rows($result)>0){
		//$row=mysqli_fetch_assoc($result);
		$sql3="Insert into login values('".$row1["username"]."','".$row1["password"]."',".$row1["active"].")";
		if(mysqli_query($conn,$sql3)){
			
		}else{
			echo mysqli_query($conn,$sql3);
		}
echo "Registered Successfully";
?>
