<?php
session_start();
include 'dbconnect.php';
   $q=0;
	$i;
	$pid=$_GET["id"];
   $uname=$_SESSION["username"];
        
       
        
if($uname  <>" "){

        echo $pid;
		$sql="select * from cart where name='".$uname."' AND pid=".$pid."";
		 $result=mysqli_query($conn,$sql);

        $row = mysqli_fetch_assoc($result);
        $q=$row["quantity"];
		echo $q;
        $q=$q+1;
        if ($q>0) {
            $sql2="update cart set quantity=".$q." where pid=".$pid." ";
            $result=mysqli_query($conn,$sql2); 
		}
}
header('Location:cart.php');
?>

