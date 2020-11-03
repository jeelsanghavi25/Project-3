<?php
 include 'dbconnect.php';

 
 use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

//Load composer's autoloader
require 'SendMail/vendor/autoload.php';
$name=$_POST["Name"];
$feedback=$_POST["Message"];

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
    $mail->Username = 'laepicerie123@gmail.com';                 // SMTP username
    $mail->Password = 'grocerystore';                           // SMTP password
    $mail->SMTPSecure = 'tls';                            // Enable TLS encryption, `ssl` also accepted
    
    $mail->Port = 587;                                    // 587 TCP port to connect to

    //Recipients
    $mail->setFrom('laepicerie123@gmail.com', 'Register');
    $mail->addAddress('laepicerie123@gmail.com');     // Add a recipient
    //$mail->addAddress('ellen@example.com');               // Name is optional
    //$mail->addReplyTo('info@example.com', 'Information');
    //$mail->addCC('cc@example.com');
    //$mail->addBCC('bcc@example.com');

    
    //Content
    $mail->isHTML(true);                                  // Set email format to HTML
    $mail->Subject = 'Feedback';
    $mail->Body    = 'Thanks for your feedback!<br>------------------------<br><br>Username:'.$name.'------------------------<br>Feedback:'.$feedback.'';
	
    $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

    $mail->send();
	
    echo 'Message has been sent';
	header('Location:home.php');
				
} catch (Exception $e) {
    echo 'Message could not be sent. Mailer Error: ', $mail->ErrorInfo;
	
       
}
 



				

?>