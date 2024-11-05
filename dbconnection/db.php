<?php


date_default_timezone_set("Asia/Kolkata");

// Function to log messages to a specified log file
// function logMessage($eventType, $details, $logFile = 'log.txt') {
//     // Get the current date and time
//     $date = date('Y-m-d H:i:s');
    
//     // Prepare the log entry
//     $logEntry = "[$date] [$eventType] - $details" . PHP_EOL;
    
//     // Write the log entry to the log file
//     file_put_contents($logFile, $logEntry, FILE_APPEND);
// }

// // Function to log user registration events
// function logRegistration($username) {
//     logMessage('REGISTRATION', "User '$username' registered.");
// }

// // Function to log user login events
// function logLogin($username) {
//     logMessage('LOGIN', "User '$username' logged in.");
// }

// // Function to log HTTP requests
// function logHttpRequest() {
//     $requestMethod = $_SERVER['REQUEST_METHOD'];
//     $requestUri = $_SERVER['REQUEST_URI'];
//     $requestDetails = "$requestMethod $requestUri";
//     logMessage('HTTP_REQUEST', $requestDetails);
// }

// // Log an incoming HTTP request
// logHttpRequest();

// // Example usage
// // Simulate user registration
// logRegistration('john_doe');

// // Simulate user login
// logLogin('john_doe');




$con = mysqli_connect(
    "localhost",
    "root",
    "Algo@123",
    "for_Office"
);



if (mysqli_connect_error()) {
    echo "Connection Error.<br>";
}


