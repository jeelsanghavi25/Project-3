<?php

session_start();
include 'dbconnect.php';

   $uname=$_SESSION["username"];
   $pid=$_GET["id"];
	echo $pid;
	
        
        $sql="delete from cart where name='$uname' AND pid='$pid' ";
		
        $result=mysqli_query($conn,$sql);
		header('Location:cart.php');
?>