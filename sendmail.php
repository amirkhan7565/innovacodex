<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'PHPMailer/src/Exception.php';
require 'PHPMailer/src/PHPMailer.php';
require 'PHPMailer/src/SMTP.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $name = $_POST['name'] ?? '';
    $email = $_POST['email'] ?? '';
     $service = $_POST['service'] ?? '';
    $phone = $_POST['phone'] ?? '';
    $message = $_POST['message'] ?? '';


    $mail = new PHPMailer(true);

    try {
        // Server settings
        $mail->isSMTP();
        $mail->Host       = 'smtp.gmail.com';
        $mail->SMTPAuth   = true;
        $mail->Username   = 'sandiyadevi50@gmail.com'; 
        $mail->Password   = 'wsbv xxin agun xqlb'; // App password
        $mail->SMTPSecure = 'tls';
        $mail->Port       = 587;

        // Recipients
        $mail->setFrom('amirnasir7565@gmail.com', 'Website Form');
        $mail->addAddress('amirnasir7565@gmail.com');

        // Content
        $mail->isHTML(true);
        $mail->Subject = 'Form Submission';

        $mail->Body = "
            <strong>Name:</strong> $name<br>
            <strong>Email:</strong> $email<br>
            <strong>Service:</strong> $service<br>
            <strong>Phone:</strong> $phone<br>
            <strong>Message:</strong> $message
                ";

        $mail->send();
        echo 'Message has been sent!';
    } catch (Exception $e) {
        echo "Message could not be sent. Error: {$mail->ErrorInfo}";
    }
} else {
    echo 'Access denied. Please submit the form.';
}
