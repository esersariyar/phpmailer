<?php
require __DIR__ . '/vendor/autoload.php';
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exceptions;

$mail = new PHPMailer(true);

try {
    $mail->isMail();
    $mail->setFrom('example@example.com', 'Example Person');
    $mail->addAddress('recipient@example.com', 'Recipient Name');
    $mail->Subject = 'Test Email';
    $mail->isHTML(true);
    $mail->Body = '<b>This is a test email</b>';

    if($mail->send()){
        echo "Mail sent successfully";
    }else{
        echo "An error occurred while sending the email.";
    }
} catch (Exceptions $e){
    echo "A server-side error occurred: ". $mail->ErrorInfo;
}

?>
