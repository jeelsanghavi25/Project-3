<?php
session_start();
include 'dbconnect.php';

$pid=$_GET['id'];
#$name=$_GET['name'];
//echo $pid;
#echo $name;
$sql;
       $sql="insert into cart values('".$_SESSION["username"]."',".$pid.",1)";
       #$sql="insert into cart values(".$name.",".$pid.",1)";
		//echo $sql;
		$result=mysqli_query($conn,$sql);
        
		
		/*if  ($pid<8){
        header('Location:home.php');
		}
		if ($pid>7 and $pid<15){
		header('Location:home.php');
		} */
		if ($pid>=1 and $pid<17) {
		header('Location:living.php');
		}
		if ($pid>16 and $pid<33) {
		  header('Location:bedroom.php');
		}
		if ($pid>32 and $pid<47) {
		  header('Location:light.php');
		}
		if ($pid>48 and $pid<63) {
				  header('Location:decor.php');

		}

?>