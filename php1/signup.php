<?php
 include 'dbconnect.php';

 
 use PHPMailer\PHPMailer\PHPMailer;
 use PHPMailer\PHPMailer\Exception;

//Load composer's autoloader
require 'SendMail/vendor/autoload.php';
$email=$_POST["email"];
 $uid=$_POST["uname"];
 $password=$_POST["upass"];
 $address=$_POST["address"];
 $hash = md5(rand(0,1000));
 $active=0;


$mail = new PHPMailer(true);                              // Passing `true` enables exceptions
try {
    //Server settings
    //$mail->SMTPDebug = 2;                                 // Enable verbose debug output
    $mail->isSMTP();                                      // Set mailer to use SMTP
    
  // Set parameters for SMTP  
$mail->SMTPOptions = array(
'ssl' => array(
'verify_peer' => false,
'verify_peer_name' => false,
'allow_self_signed' => true
)
);


    $mail->Host = 'smtp.gmail.com';  // Specify main and backup SMTP servers
    $mail->SMTPAuth = true;                               // Enable SMTP authentication
    $mail->Username = 'homefurnishing1234@gmail.com';                 // SMTP username
    $mail->Password = 'furnishing1234';                           // SMTP password
    $mail->SMTPSecure = 'tls';                            // Enable TLS encryption, `ssl` also accepted
    
    $mail->Port = 587;                                    // 587 TCP port to connect to

    //Recipients
    $mail->setFrom('homefurnishing1234@gmail.com', 'Register');
    $mail->addAddress($email);     // Add a recipient
    //$mail->addAddress('ellen@example.com');               // Name is optional
    //$mail->addReplyTo('info@example.com', 'Information');
    //$mail->addCC('cc@example.com');
    //$mail->addBCC('bcc@example.com');

    
    //Content
    $mail->isHTML(true);                                  // Set email format to HTML
    $mail->Subject = 'SignUp | Verification';
    $mail->Body    = 'Thanks for signing up !Your account has been created, you can login with the following credentials after you have activated your account by clicking on the url below.<br>------------------------<br><br>Username:'.$uid.'<br>------------------------<br>Please click this link to activate your account:<br>http://127.0.0.1:8888/php1/tp.php?hash='.$hash.'';
   
    $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

    $mail->send();
	
    echo 'Message has been sent';
	$sql="INSERT INTO user (username,email, hash,password,address,active) VALUES('$uid','$email','$hash','$password','$address',$active)";				
				if(mysqli_query($conn,$sql)){
					 header('Location:index.html');
					
				}else{
					echo mysqli_error($conn);
				}
} catch (Exception $e) {
    echo 'Message could not be sent. Mailer Error: ', $mail->ErrorInfo;
	
       
}
 



				

?>