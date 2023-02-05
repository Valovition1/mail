<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'PHPMailer/Exception.php';
require 'PHPMailer/PHPMailer.php';
require 'PHPMailer/SMTP.php';



//Create an instance; passing `true` enables exceptions
$mail = new PHPMailer(true);

    //Server settings                     //Enable verbose debug output
    $mail->isSMTP();                                            //Send using SMTP
    $mail->Host       = 'smtp.gmail.com';                     //Set the SMTP server to send through
    $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
    $mail->Username   = 'domashop.info@gmail.com';                     //SMTP username
    $mail->Password   = 'pedzcczelxrjlnuz';                               //SMTP password
    $mail->SMTPSecure = 'ssl';            //Enable implicit TLS encryption
    $mail->Port       = 465;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`

    //Recipients
    $mail->setFrom('domashop.info@gmail.com');
    $mail->addAddress($_POST['email']);     //Add a recipient

    //Content
    $mail->isHTML(true); 
    $key = mt_rand(99999,999999);
    $mail->Subject = 'Doma Shop code'.$key;
    $mail->Body    = 'This is the verification code' .$key;
    $mail->send();
