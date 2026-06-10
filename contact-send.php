<?php

use PHPMailer\PHPMailer\Exception;
use PHPMailer\PHPMailer\PHPMailer;

require 'php-mailer/PHPMailer.php';
require 'php-mailer/SMTP.php';
require 'php-mailer/Exception.php';

$redirect = 'thank-you.php?type=enquiry';

if (
    isset($_POST['name']) &&
    isset($_POST['email']) &&
    isset($_POST['message'])
) {

    $name    = trim($_POST['name']);
    $email   = trim($_POST['email']);
    $subject = isset($_POST['subject']) ? trim($_POST['subject']) : 'General Enquiry';
    $message = trim($_POST['message']);

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
    $mail->AddAddress('info@hotelsaptagiri.in');
    $mail->AddAddress('itz.me.farhan6710@gmail.com');
    $mail->AddReplyTo($email, $name);

    $mail->Subject = 'New enquiry from ' . $name;
    $mail->WordWrap = 80;

    $body = 'New contact form submission<br><br>'
        . '<strong>Name:</strong> ' . htmlspecialchars($name) . '<br>'
        . '<strong>Email:</strong> ' . htmlspecialchars($email) . '<br>'
        . '<strong>Subject:</strong> ' . htmlspecialchars($subject) . '<br><br>'
        . '<strong>Message:</strong><br>' . nl2br(htmlspecialchars($message));

    $mail->MsgHTML($body);
    $mail->IsHTML(true);

    try {
        $mail->Send();
        header('Location: ' . $redirect);
        exit;
    } catch (Exception $e) {
        error_log('Contact mail error: ' . $mail->ErrorInfo);
        header('Location: contact.php?error=1');
        exit;
    }
} else {

    header('Location: contact.php?error=1');
    exit;
}
