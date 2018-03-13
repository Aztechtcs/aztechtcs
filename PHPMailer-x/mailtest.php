<?php 

//phpmail('ph9716942965@gmail.com','hii test only');
function phpmail($to,$html)
{	
require("class.PHPMailer.php");
$mail = new PHPMailer();
$mail->IsSMTP();                                      // set mailer to use SMTP
$mail->Host = "us2.smtp.mailhostbox.com;cs-mum-4.webhostbox.net";  // specify main and backup server
$mail->SMTPAuth = true;     // turn on SMTP authentication
$mail->Username = "donotreply@aztechtcs.com";  // SMTP username
//$mail->Password = "EF#xjds3"; // SMTP password for autosent@az
$mail->Password = "rn!QDgY6"; //password for donotreply
$mail->From = "donotreply@aztechtcs.com";
$mail->FromName = "AztechTCS";
$mail->AddAddress("$to");
//$mail->AddAddress("ph9716942965@gmail.com"); 
//$mail->AddAddress("archana@growelimpex.com");
// name is optional
$mail->AddReplyTo("info@aztechtcs.com", "Information");

$mail->WordWrap = 50;                                 // set word wrap to 50 characters
//$mail->AddAttachment("/var/tmp/file.tar.gz");         // add attachments
//$mail->AddAttachment("/tmp/image.jpg", "new.jpg");    // optional name
$mail->IsHTML(true);                                  // set email format to HTML

$mail->Subject = "Here is the subject";
$mail->Body    = $html;
$mail->AltBody = "This is the body in plain text for non-HTML mail clients";

if(!$mail->Send())
{
   echo "Message could not be sent. 
";
   echo "Mailer Error: " . $mail->ErrorInfo;
   exit;
}

echo "Message has been sent";
	
}

?>

<?php
/*
require("class.PHPMailer.php");

$mail = new PHPMailer();

$mail->IsSMTP();                                      // set mailer to use SMTP
$mail->Host = "us2.smtp.mailhostbox.com;cs-mum-4.webhostbox.net";  // specify main and backup server
$mail->SMTPAuth = true;     // turn on SMTP authentication
$mail->Username = "donotreply@aztechtcs.com";  // SMTP username
//$mail->Password = "EF#xjds3"; // SMTP password for autosent@az
$mail->Password = "rn!QDgY6"; //password for donotreply
$mail->From = "donotreply@aztechtcs.com";
$mail->FromName = "AztechTCS";
$mail->AddAddress("nasir@aztechtcs.com");
$mail->AddAddress("ph9716942965@gmail.com"); 
//$mail->AddAddress("archana@growelimpex.com");
// name is optional
$mail->AddReplyTo("info@aztechtcs.com", "Information");

$mail->WordWrap = 50;                                 // set word wrap to 50 characters
//$mail->AddAttachment("/var/tmp/file.tar.gz");         // add attachments
//$mail->AddAttachment("/tmp/image.jpg", "new.jpg");    // optional name
$mail->IsHTML(true);                                  // set email format to HTML

$mail->Subject = "Here is the subject";
$mail->Body    = $pg;
$mail->AltBody = "This is the body in plain text for non-HTML mail clients";

if(!$mail->Send())
{
   echo "Message could not be sent. 
";
   echo "Mailer Error: " . $mail->ErrorInfo;
   exit;
}

echo "Message has been sent";

*/


?>