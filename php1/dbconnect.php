<?php
$dbname="furnishing";
$hostname="localhost";
$password="";
$username="root";

$conn=mysqli_connect($hostname,$username,$password,$dbname);
if($conn)
{}
else{
echo mysqli_error($conn);}
?>