<?php

use PHPMailer\PHPMailer\Exception;
use PHPMailer\PHPMailer\PHPMailer;

require 'php-mailer/PHPMailer.php';
require 'php-mailer/SMTP.php';
require 'php-mailer/Exception.php';

$redirect = 'test-contact.php';

if (
    isset($_POST['name']) &&
    isset($_POST['email']) &&
    isset($_POST['subject']) &&
    isset($_POST['message'])
) {

    $name  = trim($_POST['name']);
    $email = trim($_POST['email']);
    $msg   = trim($_POST['message']);

    $mail = new PHPMailer(true);

    $mail->IsSMTP();
    $mail->SMTPAuth = false;
    $mail->Port = 25;
    $mail->Host = 'localhost';
    $mail->Username = 'info@hotelsaptagiri.in';
    $mail->Password = 'info@hotelsaptagiri';

    $mail->IsSendmail();

    $mail->From = 'info@hotelsaptagiri.in';
    $mail->FromName = 'Hotel Saptagiri';
    $mail->AddAddress($email);
    $mail->AddAddress('itz.me.farhan6710@gmail.com');

    $mail->Subject = 'Thank you for contacting US';
    $mail->WordWrap = 80;

    $body = $name . ' Thank You For Contacting Us. Message: ' . $msg;
    $mail->MsgHTML($body);
    $mail->IsHTML(true);

    try {
        $mail->Send();

        echo '<script>alert("Thank You Contacting Us We Will Response You As Early Possible")</script>';
        echo '<script>setTimeout(function(){location.href="' . $redirect . '";}, 00);</script>';
    } catch (Exception $e) {
        $error = str_replace(["\\", "'", "\n", "\r"], ['\\\\', "\\'", ' ', ' '], $mail->ErrorInfo);
        echo '<script>alert("Something Wrong. ' . $error . '")</script>';
        echo '<script>setTimeout(function(){location.href="' . $redirect . '";}, 00);</script>';
    }
} else {

    echo '<script>alert("Something Wrong.")</script>';
    echo '<script>setTimeout(function(){location.href="' . $redirect . '";}, 00);</script>';
}
