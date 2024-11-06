<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

// Load Composer's autoloader if you are using Composer (uncomment if necessary)
// require '../vendor/autoload.php';

// Function to send OTP via email
function sendOtpMail($email)
{
    $mail = new PHPMailer(true);

    // Generate a random OTP
    $otp = mt_rand(1000, 9999);

    try {
        // Server settings
        $mail->isSMTP();  
        $mail->Host       = getenv('SMTP_HOST') ?: 'smtp.gmail.com';
        $mail->SMTPAuth   = true;
        $mail->Username   = getenv('SMTP_USERNAME') ?: 'dye9543@gmail.com'; // Use an env variable
        $mail->Password   = getenv('SMTP_PASSWORD') ?: 'yuik utau dovk rnpi'; // Use an env variable
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
        $mail->Port       = 587;

        // Recipients
        $mail->setFrom(getenv('FROM_EMAIL') ?: 'dye9543@gmail.com', 'LMS');
        $mail->addAddress($email, 'Joe User');  // Recipient email and name

        // Content
        $mail->isHTML(true);
        $mail->Subject = 'OTP Verification';
        $mail->Body    = '
            <!DOCTYPE html>
            <html lang="en">
            <head>
                <meta charset="UTF-8">
                <meta name="viewport" content="width=device-width, initial-scale=1.0">
                <title>OTP Verification</title>
                <style>
                    body { font-family: Arial, sans-serif; background-color: #f4f4f4; margin: 0; padding: 20px; }
                    .container { max-width: 600px; margin: auto; background: white; padding: 20px; border-radius: 8px; box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1); }
                    h1 { color: #333; text-align: center; }
                    p { font-size: 16px; color: #555; }
                    .otp { display: inline-block; font-size: 24px; font-weight: bold; color: #007BFF; margin: 20px 0; }
                    .footer { text-align: center; margin-top: 20px; font-size: 14px; color: #777; }
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
            </html>';

        // Send the email
        $mail->send();
        return $otp; // Return OTP for further processing (e.g., save to session or database)

    } catch (Exception $e) {
        // Log the error and return failure
        error_log("Mailer Error: {$mail->ErrorInfo} - {$e->getMessage()}", 3, 'file.log');
        return false;
    }
}

// Function to send a welcome email with device information
function sendWelcomeMessage($email, $name)
{
    $email = filter_var($email, FILTER_SANITIZE_EMAIL); // Sanitize email
    $name = htmlspecialchars($name, ENT_QUOTES, 'UTF-8'); // Sanitize name

    // Get the user's IP address, current datetime, and User-Agent string
    $ipAddress = $_SERVER['REMOTE_ADDR'];
    $userAgent = $_SERVER['HTTP_USER_AGENT'];
    $currentDateTime = date('Y-m-d H:i:s');

    // Get device info from User-Agent
    $deviceInfo = getDeviceInfo($userAgent);

    // Set SMTP server settings (use environment variables)
    $smtpHost = getenv('SMTP_HOST') ?: 'smtp.gmail.com';
    $smtpUsername = getenv('SMTP_USERNAME') ?: 'dye9543@gmail.com';
    $smtpPassword = getenv('SMTP_PASSWORD') ?: 'yuik utau dovk rnpi';
    $fromEmail = getenv('FROM_EMAIL') ?: 'dye9543@gmail.com';
    $fromName = getenv('FROM_NAME') ?: 'Algo2Bots';

    $mail = new PHPMailer(true);

    try {
        // Server settings
        $mail->isSMTP();
        $mail->Host       = $smtpHost;
        $mail->SMTPAuth   = true;
        $mail->Username   = $smtpUsername;
        $mail->Password   = $smtpPassword;
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
        $mail->Port       = 587;

        // Recipients
        $mail->setFrom($fromEmail, $fromName);
        $mail->addAddress($email, $name);

        // Content
        $mail->isHTML(true);
        $mail->Subject = 'Login Notification';
        $mail->Body    = "
            <h1>Login Notification</h1>
            <p>Hello {$name},</p>
            <p>You have logged in successfully.</p>
            <p><strong>IP Address:</strong> {$ipAddress}</p>
            <p><strong>Date and Time:</strong> {$currentDateTime}</p>
            <p><strong>Device Info:</strong> {$deviceInfo}</p>
            <p>Thank you for using our service!</p>
        ";

        // Send the email
        $mail->send();
        error_log("Welcome message sent to {$email} at {$currentDateTime}", 3, '/path/to/your/log/file.log');
        echo "Welcome message sent successfully to {$email}";

    } catch (Exception $e) {
        // Log error and show failure message
        error_log("Mailer Error: {$mail->ErrorInfo} - {$e->getMessage()}", 3, '/path/to/your/log/file.log');
        echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
    }
}

// Function to extract device info from the User-Agent string
function getDeviceInfo($userAgent)
{
    // Default values
    $device = 'Unknown Device';
    $browser = 'Unknown Browser';
    $os = 'Unknown OS';

    // Detect device type
    if (preg_match('/mobile/i', $userAgent)) {
        $device = 'Mobile Device';
    } elseif (preg_match('/tablet/i', $userAgent)) {
        $device = 'Tablet Device';
    } else {
        $device = 'Desktop Device';
    }

    // Detect browser type
    if (strpos($userAgent, 'Chrome') !== false) {
        $browser = 'Google Chrome';
    } elseif (strpos($userAgent, 'Firefox') !== false) {
        $browser = 'Mozilla Firefox';
    } elseif (strpos($userAgent, 'Safari') !== false) {
        $browser = 'Apple Safari';
    } elseif (strpos($userAgent, 'Edge') !== false) {
        $browser = 'Microsoft Edge';
    } elseif (strpos($userAgent, 'Internet Explorer') !== false) {
        $browser = 'Internet Explorer';
    }

    // Detect OS
    if (strpos($userAgent, 'Windows NT') !== false) {
        $os = 'Windows OS';
    } elseif (strpos($userAgent, 'Macintosh') !== false) {
        $os = 'macOS';
    } elseif (strpos($userAgent, 'Linux') !== false) {
        $os = 'Linux OS';
    } elseif (strpos($userAgent, 'Android') !== false) {
        $os = 'Android OS';
    } elseif (strpos($userAgent, 'iPhone') !== false || strpos($userAgent, 'iPad') !== false) {
        $os = 'iOS';
    }

    // Return the device info string
    return "{$device} running {$os} with {$browser}";
}

// Uncomment this to test sending OTP or Welcome message
// echo sendOtpMail("mb8882568627@gmail.com");
// sendWelcomeMessage("user@example.com", "John Doe");

?>
