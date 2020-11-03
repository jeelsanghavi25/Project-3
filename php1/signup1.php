<?php
 include 'dbconnect.php';
 
 
 $email=$_POST["email"];
 $uid=$_POST["userid"];
 $password=$_POST["password"];
 

$hash = md5(rand(0,1000));

				
$sql="INSERT INTO users (username,email, hash,password) VALUES('$uid','$email','$hash','$password')";				
				if(mysqli_query($conn,$sql)){
					echo "inserted!";
				}else{
					echo mysqli_error($conn);
				}
$to=$email;

$subject = "Signup | Verification";
//$mail->AltBody    = "To view the message, please use an HTML compatible email viewer!";
$msg    = "<html><body>Thanks for signing up!Your account has been created, you can login with the following credentials after you have activated your account by pressing the url below.<br>------------------------<br><br>Username:" .$uid."------------------------<br>Please click this link to activate your account:<br>http://172.20.10.4/Test/tp.php?hash=".$hash."&userid=".$uid."&email=".$email."&password=".$password."</body></html>";
			$headers = "MIME-Version: 1.0" . "\r\n";
            $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
            $headers = "From:homefurnishing1234@gmail.com";                                                               //Change this to carmina ka address and dont try on your machiine it wont work as wamp is not configured to send email!!!
            mail($to,$subject,$msg,$headers);
            echo 'Mail has been sent';

?>