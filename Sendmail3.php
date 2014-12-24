<?php

$ToEmail = $_POST['email'];
$FromName = $_POST['name'];
$Tocc = $_POST['myemail'];
$myname = $_POST['myname'];
$EmailContent = $_POST['emailcontent'];
$Subject = $_POST['subject'];

require 'PHPMailerAutoload.php';
$mail = new PHPMailer;

//$mail = new PHPMailer();

$mail->SMTPDebug = 0;

$mail->isSMTP();
$mail->SMTPAuth = true;
$mail->Host = 'smtp.gmail.com';
$mail->SMTPSecure = 'tls';
$mail->Port = 587;
$mail->Username = 'sender@medyanova.com';
$mail->Password = 'sender123';

$mail->From = $Tocc;
$mail->FromName = $myname;
$mail->addAddress($ToEmail, $FromName);     // Add a recipient
//$mail->addAddress('aslan@agilone.com', 'Aslan Agilone');               // Name is optional
$mail->addReplyTo('info@medyanova.com', 'Medyanova');
$mail->addCC($Tocc,$myname);
//$mail->addBCC('aslanozcakir@gmail.com');

$mail->SetFrom($mail->Username, 'Test icin email gonderme formu');
$mail->CharSet = 'UTF-8';
$mail->Subject = $Subject;
$mail->MsgHTML($EmailContent);
if($mail->Send()) {
    echo '<p>Mail gonderildi !';
} else {
    echo 'Mail gönderilirken bir hata oluştu: ' . $mail->ErrorInfo;
}
?>