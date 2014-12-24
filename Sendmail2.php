<?php

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

$mail->From = 'aslan@ozcakir.com';
$mail->FromName = 'Aslan OZCAKIR';
$mail->addAddress('aozcakir@medyanova.com', 'Aslan Medyanova');     // Add a recipient
$mail->addAddress('aslan@agilone.com', 'Aslan Agilone');               // Name is optional
$mail->addReplyTo('info@medyanova.com', 'Medyanova');
$mail->addCC('aslanozcakir@hotmail.com');
$mail->addBCC('aslanozcakir@gmail.com');

$mail->SetFrom($mail->Username, 'Test from PHPMailer');
$mail->CharSet = 'UTF-8';
$mail->Subject = 'Burasi konu - subject bolumu';
$mail->MsgHTML('Mailin icerigi: test amacli email gonderimi');
if($mail->Send()) {
    echo '<p>Mail gonderildi !';
} else {
    echo 'Mail gönderilirken bir hata oluştu: ' . $mail->ErrorInfo;
}
?>