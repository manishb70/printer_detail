<?php

session_start();

if ($_SERVER['REQUEST_METHOD'] == 'GET') {


    if (isset($_GET['getLineItemFromRequisitionWithRecordId'])) {
        include('../db.php');

        $record_id = $_GET['recordId'];



        $sql = "SELECT * FROM for_office.requisition_table  where record_id = $record_id";




        $data = [];


        $result = mysqli_query($con, $sql);

        if ($result) {


            $response["success"] = true;




            while ($row = mysqli_fetch_assoc($result)) {


                $data[] = $row;



            }

            $response["data"] = $data;



        } else {
            $response["success"] = false;
        }

        $current_user = $_SESSION['username'];

        // $current_date = date('Y-M-D');
        $current_date = date('Y-m-d'); // Correct date format



        // $sql = "INSERT INTO `for_office`.`purchase_order_header` (`createdBy`,`created_date`) VALUES (`$current_user`,`$created_date`);";


        // Prepare the SQL statement
        $stmt = $con->prepare("INSERT INTO `for_office`.`purchase_order_header` (`createdBy`, `created_date`) VALUES (?, ?)");

        // Bind parameters
        $stmt->bind_param('ss', $current_user, $created_date);

        // Set the variables
        $current_user = $_SESSION['username'];
        // $created_date = date('Y-m-d');
        $created_date = date("Y-m-d h:i:s");

        // Execute the statement
        $recordSuccess = $stmt->execute();








        if ($recordSuccess) {

            $response["recordGenSuccess"] = true;
            $response["genratedPoId"] = mysqli_insert_id($con);





        } else {


            $response["recordGenSuccess"] = false;
        }









        echo json_encode($response);











    }





}



if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    if (isset($_POST['createPurchaseOrder'])) {

        include('../db.php');
    
        // Retrieve POST data
        $purchase_order_number = $_POST['po_number'];
        $bill_to = $_POST['bill_address'];
        $ship_address = $_POST['ship_address'];
        $Vendor_site = $_POST['Vendor_site'];
        $vendor_name = $_POST['vendor'];
    
        // Prepare the SQL statement with placeholders
        $stmt = $con->prepare("UPDATE `for_office`.`purchase_order_header` 
            SET `supplier_name` = ?, `supplier_site_code` = ?, `bill_to_location` = ?, `shipTo` = ? 
            WHERE `PO_number` = ?");
    
        // Bind parameters
        $stmt->bind_param('sssss', $vendor_name, $Vendor_site, $bill_to, $ship_address, $purchase_order_number);
    
        // Execute the statement
        if ($stmt->execute()) {
            $response['success'] = true;
            $response['data'] = $_POST;
        } else {
            $response['success'] = false;
            $response['error'] = $stmt->error;
        }
    
        // Close the statement
        $stmt->close();
    
        // Close the database connection
        $con->close();
    
        // Output the response as JSON
        echo json_encode($response);
    }
    





}









?>