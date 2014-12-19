<?php

require 'PHPMailerAutoload.php';
$mail = new PHPMailer;

//$mail = new PHPMailer();

$mail->SMTPDebug = 1;

$mail->isSMTP();
$mail->SMTPAuth = true;
$mail->Host = 'smtp.gmail.com';
$mail->SMTPSecure = 'tls';
$mail->Port = 587;
$mail->Username = 'sender@medyanova.com';
$mail->Password = 'sender123';

$mail->From = 'aslan@ozcakir.com';
$mail->FromName = 'Aslan OZCAKIR';
$mail->addAddress('aozcakir@medyanova.com', 'aozcakir@medyanova.com');     // Add a recipient
$mail->addAddress('aslan@agilone.com');               // Name is optional
$mail->addReplyTo('info@medyanova.com', 'Medyanova');
$mail->addCC('aslanozcakir@hotmail.com');
$mail->addBCC('aslanozcakir@gmail.com');

$mail->SetFrom($mail->Username, 'Benim Adım');
$mail->AddAddress('alici@adresi.com', 'Alıcının Adı');
$mail->CharSet = 'UTF-8';
$mail->Subject = 'Mail Başlığı';
$mail->MsgHTML('Mailin içeriği!');
if($mail->Send()) {
    echo 'Mail gönderildi!';
} else {
    echo 'Mail gönderilirken bir hata oluştu: ' . $mail->ErrorInfo;
}
?>