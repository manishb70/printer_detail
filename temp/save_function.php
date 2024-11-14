<?php
// include 'db.php';  // Database connection file
include '../dbconnection/db.php';

$function_name = $_POST['function_name'];

// Validate function name
if (empty($function_name)) {
    http_response_code(400);
    echo "Function name is required.";
    exit;
}

// Prepare and execute the insert statement
$stmt = $con->prepare("INSERT INTO Functions_urls (function_name, created_date, created_by, update_date, updated_by) VALUES (?, NOW(), 'admin', NOW(), 'admin')");
$stmt->bind_param("s", $function_name);

if ($stmt->execute()) {
    echo "Function added successfully.";
} else {
    http_response_code(500);
    echo "Error adding function.";
}

$stmt->close();
?>
