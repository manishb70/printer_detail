<?php
// include 'db.php';
include '../dbconnection/db.php';
$db=$con;

$permission_id = $_POST['permission_id'];
$is_allowed = $_POST['is_allowed'];

$stmt = $db->prepare("UPDATE Functions_checker SET is_allowed = ?, update_date = NOW(), updated_by = 'admin' WHERE id = ?");
$stmt->bind_param("ii", $is_allowed, $permission_id);

if ($stmt->execute()) {
    echo "Permission updated successfully";
} else {
    http_response_code(500);
    echo "Error updating permission";
}

$stmt->close();
?>
