<?php
// include 'db.php';
include '../dbconnection/db.php';
$db=$con;


$user_id = $_POST['user_id'];
$function_id = $_POST['function_id'];
$is_allowed = $_POST['is_allowed'];

$stmt = $db->prepare("INSERT INTO Functions_checker (user_id, function_id, is_allowed, created_date, created_by, update_date, updated_by) VALUES (?, ?, ?, NOW(), 'admin', NOW(), 'admin')");
$stmt->bind_param("iii", $user_id, $function_id, $is_allowed);

if ($stmt->execute()) {
    echo "Permission assigned successfully";
} else {
    http_response_code(500);
    echo "Error assigning permission";
}

$stmt->close();
?>
