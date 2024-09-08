<?php

session_start();

if ($_SERVER['REQUEST_METHOD'] == 'GET') {


    if (isset($_GET['getLineItemFromRequisitionWithRecordId'])) {
        // include('../db.php');
        include('../dbconnection/db.php');

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

        // include('../db.php');
        include('../dbconnection/db.php');

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
            $response['id'] = mysqli_insert_id($con);
            $response['error'] = mysqli_error($con);


            // Close the statement
            $stmt->close();







            // Prepare the SQL statement with placeholders

            $item_code = $_POST['item_code'];
            $shortDiscription = $_POST['short_discription'];
            $req_quantity = $_POST['quantity_for_po'];
            $unit_price = $_POST['unit_price'];
            $total_price = $_POST['total_price'];
            $data_hand_over = $_POST['data_hand_over'];
            $project_id = $_POST['project_id'];
            $data_hand_over = $_POST['data_hand_over'];







            $sql = "INSERT INTO `for_office`.`purchase_order_line` (`po_number`, `item_code`, `item_shortdiscription`, `unit_price`, `quantity`, `total_price`, `need_by_date`, `quantity_recevied`) 
                VALUES ('$purchase_order_number', '$item_code', '$shortDiscription', '$unit_price', '$req_quantity', '$total_price', '$data_hand_over', '$req_quantity');";



            $response["sql"] = $sql;

            $reault = mysqli_query($con, $sql);

            if ($reault) {

                $response["message"] = "Purchase order success fully created";


            } else {
                $response["message"] = "Something went wrong";
                $response['error'] = mysqli_error($con);




            }






            // Bind parameters






        } else {
            $response['success'] = false;
            $response['error'] = $stmt->error;
        }







        // Close the database connection
        $con->close();

        // Output the response as JSON
        echo json_encode($response);
    } else if (isset($_POST['addItemsToLineLable'])) {
        // include('../db.php');
        include('../dbconnection/db.php');
        $insertableDataInObject = $_POST;

        $dataForInsert = $_POST['checkedrow'];

        $po_number = $insertableDataInObject['po_number'];






        // $dataForInsert[0];
        // $purchase_order_number = $dataForInsert[0]['po_number'];
        // $bill_to = $dataForInsert[0]['bill_address'];
        // $ship_address = $dataForInsert[0]['ship_address'];
        // $Vendor_site = $dataForInsert[0]['Vendor_site'];
        // $vendor_name = $dataForInsert[0]['vendor'];

        // // Prepare the SQL statement with placeholders
        // $stmt = $con->prepare("UPDATE `for_office`.`purchase_order_header` 
        //     SET `supplier_name` = ?, `supplier_site_code` = ?, `bill_to_location` = ?, `shipTo` = ? 
        //     WHERE `PO_number` = ?");

        // // Bind parameters
        // $stmt->bind_param('sssss', $vendor_name, $Vendor_site, $bill_to, $ship_address, $purchase_order_number);

        // // Execute the statement
        // $stmt->execute();
        





        foreach ($dataForInsert as $key => $value) {



            echo "\n";


            // echo $value ;    



            $item_code = $value['item_code'];
            $shortDiscription = $value['short_discription'];
            $req_quantity = $value['quantity_for_po'];
            $unit_price = $value['unit_price'];
            $total_price = $value['total_price'];
            $data_hand_over = $value['data_hand_over'];
            $project_id = $value['project_id'];
            $data_hand_over = $value['data_hand_over'];


            // echo $unit_price."this is unit";

            // echo print_r($value);

            $sql = "INSERT INTO `for_office`.`purchase_order_line` (`po_number`, `item_code`, `item_shortdiscription`, `unit_price`, `quantity`, `total_price`, `need_by_date`, `quantity_recevied`) 
                VALUES ('$po_number', '$item_code', '$shortDiscription', '$unit_price', '$req_quantity', '$total_price', '$data_hand_over', '$req_quantity');";



            // $response["sql"] = $sql;


            $reault = mysqli_query($con, $sql);



            if ($reault) {

                
                // $sql = "UPDATE `for_office`.`requisition_table` SET `po_status` = 'GEN' WHERE (`S_no` = $key);";
                $sql = "UPDATE `for_office`.`requisition_table` SET `po_status` = 'GEN', `po_number` =  $po_number WHERE (`S_no` = $key);";
                // $sql = "UPDATE `for_office`.`requisition_table` SET `po_status` = 'GEN', `po_number` = '0' WHERE (`S_no` = '$key');";

                $result = mysqli_query($con,$sql);
                
                if($result){
                    
                    $response["message"] = "Purchase order success fully created";
                    $response['success'] = true;
                }else{
                    
                    $response["message"] = "something went wrong";
                    $response['success'] = false;
                }


            } else {
                $response["message"] = "Something went wrong";
                $response['error'] = mysqli_error($con);




            }




        }










        // // $response['data'] = $dataForInsert;

        // $response['request data'] = $insertableDataInObject['checkedrow'];
        echo json_encode($response);





    }






}









?>