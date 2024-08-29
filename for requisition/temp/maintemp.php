<?php

include("../db.php");

$sql = "SELECT * FROM for_office.admin_roles WHERE admin_id = 1;";

$result = mysqli_query($con, $sql);

if ($result && mysqli_num_rows($result) > 0) {
    $row = mysqli_fetch_assoc($result);

    // Convert values to integers
    $user_viewOnly = (int) $row["user_viewOnly"];
    $user_write = (int) $row["user_write"];
    $admin_viewOnly = (int) $row["admin_viewOnly"];
    $admin_write = (int) $row["admin_write"];
    $store_manager = (int) $row["store_manager"];
    $store_isseuer = (int) $row["store_isseuer"];
    $store_genrate = (int) $row["store_genrate"];

    // Display the values
    echo "User View Only: " . ($user_viewOnly ? "true" : "false") . "<br>";
    echo "User Write: " . ($user_write ? "true" : "false") . "<br>";
    echo "Admin View Only: " . ($admin_viewOnly ? "true" : "false") . "<br>";
    echo "admin_write: " . ($admin_write ? "true" : "false") . "<br>";
    echo "Store Manager: " . ($store_manager ? "true" : "false") . "<br>";
    echo "Store Issuer: " . ($store_isseuer ? "true" : "false") . "<br>";
    echo "Store Generate: " . ($store_genrate ? "true" : "false") . "<br>";
} else {
    echo "No data found or query failed.";
}

mysqli_close($con);
?>
