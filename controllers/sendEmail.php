<?php

// Import PHPMailer classes into the global namespace
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

// Load Composer's autoloader
// require './vendor/autoload.php';

// Create an instance; passing `true` enables exceptions



function sendOtpMail($email)
{
    $mail = new PHPMailer(true);


    $otp = mt_rand(1000, 9999);

    try {
        // Server settings
        $mail->isSMTP();                                            // Send using SMTP
        $mail->Host       = 'smtp.gmail.com';
        $mail->SMTPAuth   = true;
        $mail->Username   = 'dye9543@gmail.com';
        $mail->Password   = 'yuik utau dovk rnpi';
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
        $mail->Port       = 587;

        // Recipients
        $mail->setFrom('dye9543@gmail.com', 'LMS');
        $mail->addAddress($email, 'Joe User');     // Add a recipient

        // Optional name

        // Content
        $mail->isHTML(true);                                  // Set email format to HTML
        $mail->Subject = 'Here is the subject';
        $mail->Body    = '<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>OTP Verification</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 20px;
        }
        .container {
            max-width: 600px;
            margin: auto;
            background: white;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
        }
        h1 {
            color: #333;
            text-align: center;
        }
        p {
            font-size: 16px;
            color: #555;
        }
        .otp {
            display: inline-block;
            font-size: 24px;
            font-weight: bold;
            color: #007BFF;
            margin: 20px 0;
        }
        .footer {
            text-align: center;
            margin-top: 20px;
            font-size: 14px;
            color: #777;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>OTP Verification</h1>
        <p>Hi there,</p>
        <p>Your OTP for verification is:</p>
        <div class="otp">' . $otp . '</div>
        <p>This OTP is valid for the next 10 minutes. Please do not share it with anyone.</p>
        <div class="footer">
            <p>Thank you for using our service!</p>
            <p>If you did not request this OTP, please ignore this email.</p>
        </div>
    </div>
</body>
</html>
';

        // Send the email
        $mail->send();
        // echo "OTP sent successfully";
        return $otp;
    } catch (Exception $e) {
        echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
    }
}

function sendWelcomeMessage($email, $name)
{
    $mail = new PHPMailer(true);

    $ipAddress = $_SERVER['REMOTE_ADDR']; // Get the user's IP address
    $currentDateTime = date('Y-m-d H:i:s'); // Get the current date and time

    try {
        // Server settings
        $mail->isSMTP();                                            // Send using SMTP
        $mail->Host       = 'smtp.gmail.com';
        $mail->SMTPAuth   = true;
        $mail->Username   = 'dye9543@gmail.com';
        $mail->Password   = 'yuik utau dovk rnpi'; // Be cautious with hardcoding sensitive information
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
        $mail->Port       = 587;

        // Recipients
        $mail->setFrom('dye9543@gmail.com', 'Mailer');
        $mail->addAddress($email, $name); // Use the provided name

        // Content
        $mail->isHTML(true);                                  // Set email format to HTML
        $mail->Subject = 'Login Notification';
        $mail->Body    = "
            <h1>Login Notification</h1>
            <p>Hello {$name},</p>
            <p>You have logged in successfully.</p>
            <p><strong>IP Address:</strong> {$ipAddress}</p>
            <p><strong>Date and Time:</strong> {$currentDateTime}</p>
            <p>Thank you for using our service!</p>
        ";

        // Send the email
        $mail->send();
        echo "Welcome message sent successfully";
    } catch (Exception $e) {
        echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
    }
}


















// echo sendOtpMail("mb8882568627@gmail.com");
// sendWelcomeMessage("mb8882568627@gmail.com","manish");






// echo "hello world";
