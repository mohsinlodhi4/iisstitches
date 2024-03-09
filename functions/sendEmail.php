<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

//Load Composer's autoloader
require __DIR__.'/../vendor/autoload.php';

if(!isset($_POST['sendEmail'])){
    echo "access forbidden";
    die();
}

$name = $_POST['name'];
$email = $_POST['email'];
$subject = $_POST['subject'];
$message = $_POST['message'];

$html = "
    <div style='padding: 20px;'>
        <h4 style='margin-bottom: 5px;'>Hello !</h4>
        You have received message from iisstitches.com. Following are the details of sender:

        <div style='margin-top: 5px; margin-bottom: 5px;'>
            <p> Name: <strong> $name</strong> </p>
            <p> Email: <strong> $email</strong> </p>
            <p> Subject: <strong> $subject</strong> </p>
            <p> Message: <strong> $message</strong> </p>
        </div>
        <p style='margin-bottom: -10px;' >Thanks & regards</p>
        <p>Innovative Idea Solutions</p>
    </div>
";

$mail = new PHPMailer(true);


try {
    // $mail->SMTPDebug = SMTP::DEBUG_SERVER;                      //Enable verbose debug output
    $mail->SMTPDebug = SMTP::DEBUG_OFF;                      //Enable verbose debug output
    $mail->isSMTP();                                            //Send using SMTP
    $mail->Host       = 'smtp.hostinger.com';                     //Set the SMTP server to send through
    $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
    $mail->Username   = 'sales@iisstitches.com';                     //SMTP username
    $mail->Password   = 'k4J_3a5UQFvHLiP';                               //SMTP password
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;            //Enable implicit TLS encryption
    $mail->Port       = 465;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`

    //Recipients
    $mail->setFrom('sales@iisstitches.com', 'Innovative Idea Solutions');
    $mail->addAddress('sales@iisstitches.com', 'Innovative Idea Solutions');     //Add a recipient

    //Content
    $mail->isHTML(true);                                  //Set email format to HTML
    $mail->Subject = $subject;
    $mail->Body    = $html;
    $mail->AltBody = strip_tags($html);

    $mail->send();
    echo 'Message has been sent';
} catch (Exception $e) {
    echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
}
exit();
