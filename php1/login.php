<?php
session_start();
include 'dbconnect.php';
$uid=$_POST["uname"];
$pass=$_POST["upass"];
$sql="SELECT * from login where Username='$uid' ";
$result=mysqli_query($conn,$sql);
if(mysqli_num_rows($result)>0){
	$row=mysqli_fetch_assoc($result);
	if($uid==$row["Username"])
	{
		if($pass==$row["Password"])
		{
			$_SESSION['username']=$uid;
		
			header('Location:home.php');
			
			
		}
		else
		{
			echo "Incorrect password";
		}
	}
	else
	{
		echo "Incorrect username";
	}		
}
else
{
	echo "Please register";
}	

?>

