<?php

include("../dbconnection/db.php");
session_start();








if ($_SERVER['REQUEST_METHOD'] == 'POST') {


    if (isset($_POST['createdSaleOrder'])) {


        $userInputsData    =    $_POST['userInputData'];


        $username = $userInputsData['username'];
$user_address  = $userInputsData['user_address'];
$user_phone_number = $userInputsData['user_phone_number'];
$user_email = $userInputsData['user_email'];
$installation_is_required = $userInputsData['installation_is_required'];
$installation_need_by_date = $userInputsData['installation_need_by_date'];
$tntative_installation = $userInputsData['tntative_installation'];
$perform_invoice = $userInputsData['perform_invoice'];
$quotation_shared_date = $userInputsData['quotation_shared_date'];
$remarks = $userInputsData['remarks'];
$current_user=$_SESSION['username'];
$current_date = date('Y-m-d H:i:s');

$query = "INSERT INTO `for_office`.`sale_order_header` (`username`, `user_address`, `user_phone_number`, `user_email`, `installation_is_required`, `installation_need_by_date`, `tntative_installation`, `perform_invoice`, `quotation_shared_date`, `remarks`,`created_by`,`created_date`) 
VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?,?,?);";

$stmt = $con->prepare($query);

// Bind parameters: the types string (s) and integer (i) need to be defined here
// Assuming all the values are strings except installation_is_required which might be an integer
$stmt->bind_param(
    "ssisssssssss",  // Types for each parameter (all strings in this case)
    $username,
    $user_address,
    $user_phone_number,
    $user_email,
    $installation_is_required,
    $installation_need_by_date,
    $tntative_installation,
    $perform_invoice,
    $quotation_shared_date,
    $remarks,
    $current_user,
    $current_date

);

// Execute the statement
if($stmt->execute()){

    $response['success'] = true;

    $response['message'] = 'successfully data inserted';
    $response['insert_id'] = $con->insert_id;






}else{



        $response['success'] = false;
        $response['message'] = $stmt->error;


}





















        $response['post_data']   = $userInputsData;



        echo json_encode($response);
    }
}
