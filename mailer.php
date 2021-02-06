<?php

require './vendor/autoload.php';

use PHPMailer\PHPMailer\PHPMailer;

$mail = new PHPMailer();
$mail->isSMTP();
$mail->Host = 'mail.yknetworks.com.ng';
$mail->SMTPAuth = true;
$mail->Username =  'info@yknetworks.com.ng';
$mail->Password = '@1234alphaBETA'; 
$mail->SMTPSecure = 'tls';
$mail->Port = 587; 




$name = $_POST['name'];
$email = $_POST['email'];
$subject = $_POST['subject'] ;
$message = $_POST['message'];


$mail->setFrom('info@yknetworks.com.ng', $name);
$mail->addReplyTo($email, $name);
$mail->addAddress('info@yknetworks.com.ng', 'YK Networks'); 
//$mail->addCC('exportrequest@gbf-agrotech.com', 'GBF AgroTech');
//$mail->addBCC('blicaco@example.com', 'NameBcc');

$mail->Subject = $subject;
$mail->isHTML(true);
$mailContent = $message;
$mail->Body = $mailContent;

if($mail->send()){
    echo 'Message Sent ';
}else{
    echo 'Message could not be sent.';
    echo 'Mailer Error: ' . $mail->ErrorInfo;
}


?>