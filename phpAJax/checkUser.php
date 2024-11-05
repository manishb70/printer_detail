<?php
// Include your database connection

include("../controllers/sendEmail.php");
include("../dbconnection/db.php");

require '../vendor/autoload.php';

$conn  = $con;




// Set the response header to application/json for proper JSON response
header('Content-Type: application/json');

// Check if the form was submitted via POST
if ($_SERVER['REQUEST_METHOD'] == "POST") {

    // Get the username and password from the form
    $username = $_POST['username'];
    $password = $_POST['password'];


    $username = mysqli_real_escape_string($conn, $username);
    $password = mysqli_real_escape_string($conn, $password);

    // Check if both fields are not empty
    if (empty($username) || empty($password)) {
        echo json_encode([
            'status' => 'error',
            'message' => 'Please fill in both fields.'
        ]);
        exit();
    } else {
        // Prepare and execute the SQL query to find the user by username
        $query = "SELECT * FROM user_management WHERE user_name = '$username' LIMIT 1";
        $result = mysqli_query($conn, $query);

        // Check if a user was found
        if (mysqli_num_rows($result) > 0) {
            $row = mysqli_fetch_assoc($result);

            // Check if the password matches (without hashing)
            if ($password == $row['password']) {
                // Start a session and store the user information
                session_start();
                 // Assuming you have an 'id' field
                
                
                 $otp =  sendOtpMail($row["email_id"]);
                
                $_SESSION['otp'] = $otp;
                




                // Respond with success
                echo json_encode([
                    'status' => 'success',
                    'message' => 'Otp send success fully !!',
                    'data' => [
                        'user_id' => $row['user_id'],
                        'username' => $row['user_name']
                        // 'otp' => $otp
                    ]
                ]);
                exit();



            } else {
                // Password incorrect
                echo json_encode([
                    'status' => 'error',
                    'message' => 'Invalid password.'
                ]);
                exit();
            }
        } else {
            // No user found
            echo json_encode([
                'status' => 'error',
                'message' => 'User not found.'
            ]);
            exit();
        }
    }
} else {
    // If not a POST request, show an error
    echo json_encode([
        'status' => 'error',
        'message' => 'Invalid request method.'
    ]);
    exit();
}
?>
