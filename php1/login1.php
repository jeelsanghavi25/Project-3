<?php
 include 'dbconnect.php';
 $id=$_POST["id"];
 $username=$_POST["username"];
 $password=$_POST["password"];
 
 $sql="Insert into signup values('$id','$username','$password')";
 $result = mysqli_query($conn, $sql);
 if($result)echo "Successful";
else echo"not successful";
/* Form Required Field Validation */
foreach($_POST as $key=>$value) {
	if(empty($_POST[$key])) {
	$error_message = "All Fields are required";
	break;
	}
}
/* Password Matching Validation 
if($_POST['password'] != $_POST['confirm_password']){ 
$error_message = 'Passwords should be same<br>'; 
}
 Email Validation 
if(!isset($error_message)) {
	if (!filter_var($_POST["email"], FILTER_VALIDATE_EMAIL)) {
	$error_message = "Invalid Email Address";
	}
}*/
?>