<?php
session_start();
include 'dbconnect.php';
   $q=0;
	$i;
	$pid=$_GET["id"];
   $uname=$_SESSION["username"];
        
       
        
if($uname !=" "){

        echo $pid;
		$sql="select * from cart where name='".$uname."' AND pid=".$pid."";
		echo $sql;
		 $result=mysqli_query($conn,$sql);
		 if(mysqli_num_rows($result)>0){
			 while($row=mysqli_fetch_assoc($result)){
				  $q=$row["quantity"];
					echo $q;
					$q=$q-1;
				if ($q>0) {
					$sql2="update cart set quantity='".$q."' where pid='".$pid."' ";
					$result1=mysqli_query($conn,$sql2); 
				}
			}
		 }
        //$row = mysqli_fetch_assoc($result);	
       
}
header('Location:cart.php');
?>

