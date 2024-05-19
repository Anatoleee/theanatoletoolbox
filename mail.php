<?php

require 'inscription_form.php';

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

require '../vendor/autoload.php';

$mail = new PHPMailer(true);

try {
    $mail->SMTPDebug = SMTP::DEBUG_SERVER;
    $mail->isSMTP();
    $mail->Host= 'smtp.mail.me.com';
    $mail->SMTPAuth=true;
    $mail->Username='anatole.capelle@icloud.com';
    $mail->Password='pndi-fbrn-wfuq-qykq';
    $mail->SMTPSecure= PHPMailer::ENCRYPTION_STARTTLS;
    $mail->Port=587;
    $mail->setFrom('anatole.capelle@icloud.com', 'Anatole ICLOUD');
    $mail->addAddress($username_signup, 'Anatole GMAIL');
    $mail->isHTML(true);
    $mail->Subject='sujet verbe eszdgfvszdegcomplement mdr';
    $mail->Body='TG';
    $mail->send();
    echo 'Message has been sent';
} catch (Exception $e) {
    echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
}
