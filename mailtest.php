<?php

// Import PHPMailer classes into the global namespace
// These must be at the top of your script, not inside a function
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

//Load composer's autoloader
require 'vendor/autoload.php';

$mail = new PHPMailer(true);                              // Passing `true` enables exceptions
try {
    //Server settings
    $mail->SMTPDebug = 2;                                 // Enable verbose debug output
    $mail->isSMTP();                                      // Set mailer to use SMTP
    $mail->Host = 'smtp1.example.com;smtp2.example.com';  // Specify main and backup SMTP servers
    $mail->SMTPAuth = true;                               // Enable SMTP authentication
    $mail->Username = 'user@example.com';                 // SMTP username
    $mail->Password = 'secret';                           // SMTP password
    $mail->SMTPSecure = 'tls';                            // Enable TLS encryption, `ssl` also accepted
    $mail->Port = 587;                                    // TCP port to connect to

    //Recipients
    $mail->setFrom('from@example.com', 'Mailer');
    $mail->addAddress('joe@example.net', 'Joe User');     // Add a recipient
    $mail->addAddress('ellen@example.com');               // Name is optional
    $mail->addReplyTo('info@example.com', 'Information');
    $mail->addCC('cc@example.com');
    $mail->addBCC('bcc@example.com');

    //Attachments
    $mail->addAttachment('/var/tmp/file.tar.gz');         // Add attachments
    $mail->addAttachment('/tmp/image.jpg', 'new.jpg');    // Optional name

    //Content
    $mail->isHTML(true);                                  // Set email format to HTML
    $mail->Subject = 'Here is the subject';
    $mail->Body    = 'This is the HTML message body <b>in bold!</b>';
    $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

    $mail->send();
    echo 'Message has been sent';
} catch (Exception $e) {
    echo 'Message could not be sent. Mailer Error: ', $mail->ErrorInfo;
}

?>




<?php
$pg="Thankyou we will contact you soon time();";
$to = 'info@aztechtcs.com';
$to2 = 'nasir@aztechtcs.com';
$to3= 'ph9716942965@gmail.com';
$from=$_REQUEST['your-email'];
$message=htmlentities($_REQUEST['your-message']);
$subject = 'Email From Website Direct';

//$headers = "From: " . strip_tags($_REQUEST['your-email']) . "\r\n";
//$headers .= "Reply-To: ". strip_tags($_REQUEST['your-email']) . "\r\n";
$headers = "From: " . 'noreply@aztechtcs.com' . "\r\n";
$headers .= "Reply-To:" . 'noreply@aztechtcs.com' . "\r\n";
//$headers .= "CC: sanjaygulati@Aztechtcs.com\r\n";
$headers .= "MIME-Version: 1.0\r\n";
$headers .= "Content-Type: text/html; charset=ISO-8859-1\r\n";
$fullmessage='';

//echo $fullmessage;

//mail($to,$subject,$pg,$headers);
if(mail($to2,$subject,$pg,$headers)){
	mail($to3,$subject,$pg,$headers);
	echo "successfully mail sent 2";
}else{
	
	echo "fail to sent mail";
}

?>