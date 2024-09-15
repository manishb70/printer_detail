<?php

session_start();
include("../dbconnection/db.php");





$conn = $con;


$user_name = $_POST['user_name'];
$password = $_POST['password'];
$mobile_no = $_POST['mobile_no'];
$emai_id = $_POST['emai_id'];
$effective_from_date = $_POST['effective_from_date'];
$effective_to_date = $_POST['effective_to_date'];
$peron_id = $_POST['peron_id'];
$description = $_POST['description'];
$customer = $_POST['customer'];
$supplier = $_POST['supplier'];
$days = $_POST['days'];



$user_view = isset($_POST['user_view']) ? 1 : 0;
$user_view_from_date = $_POST['user_view_from_date'];
$user_view_to_date = $_POST['user_view_to_date'];


$user_edit = isset($_POST['user_edit']) ? 1 : 0;
$user_edit_from_date = $_POST['user_edit_from_date'];
$user_edit_to_date = $_POST['user_edit_to_date'];


$admin_view = isset($_POST['admin_view']) ? 1 : 0;
$admin_view_from_date = $_POST['admin_view_from_date'];
$admin_view_to_date = $_POST['admin_view_to_date'];


$admin_write = isset($_POST['admin_write']) ? 1 : 0;
$admin_write_from_date = $_POST['admin_write_from_date'];
$admin_write_to_date = $_POST['admin_write_to_date'];


$store_request = isset($_POST['store_request']) ? 1 : 0;
$store_request_from_date = $_POST['store_request_from_date'];
$store_request_to_date = $_POST['store_request_to_date'];


$store_manager = isset($_POST['store_manager']) ? 1 : 0;
$store_manager_from_date = $_POST['store_manager_from_date'];
$store_manager_to_date = $_POST['store_manager_to_date'];


$store_issuer = isset($_POST['store_issuer']) ? 1 : 0;
$store_issuer_from_date = $_POST['store_issuer_from_date'];
$store_issuer_to_date = $_POST['store_issuer_to_date'];






$created_by = $_SESSION['username'];
$created_date  =  date('Y-m-d H:i:s');




$sql = "INSERT INTO user_management (user_name, password, mobile_number, email_id, start_date, end_date, person_id, description, customer, supplier, days,createdBy,created_date) 

VALUES ('$user_name', '$password', '$mobile_no', '$emai_id', '$effective_from_date', '$effective_to_date', '$peron_id', '$description', '$customer', '$supplier', '$days','$created_by','$created_date')";




if ($conn->query($sql) === TRUE) {
    echo "New record created successfully <br>";

    $admin_id = $conn->insert_id;

    header("location:../userCreate.php");


    // $sql2 = "INSERT INTO admin_roles(admin_id, user_viewOnly, user_view_from_date, user_view_to_date, user_write, user_edit_from_date, user_edit_to_date, admin_viewOnly, admin_view_from_date, admin_view_to_date, admin_write, admin_write_from_date, admin_write_to_date, store_genrate, store_request_from_date, store_request_to_date, store_manager, store_manager_from_date, store_manager_to_date, store_issuer, store_issuer_from_date, store_issuer_to_date)
    //             VALUES ('$admin_id', '$user_view', '$user_view_from_date', '$user_view_to_date', '$user_edit', '$user_edit_from_date', '$user_edit_to_date', '$admin_view', '$admin_view_from_date', '$admin_view_to_date', '$admin_write', '$admin_write_from_date', '$admin_write_to_date', '$store_request', '$store_request_from_date', '$store_request_to_date', '$store_manager', '$store_manager_from_date', '$store_manager_to_date', '$store_issuer', '$store_issuer_from_date', '$store_issuer_to_date')";

    // if ($conn->query($sql2) === TRUE) {
    //     echo "New record created successfully";
    // } else {
    //     echo "Error: " . $sql2 . "<br>" . $conn->error;
    // }
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
