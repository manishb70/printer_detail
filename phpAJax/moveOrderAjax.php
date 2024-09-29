<?php
session_start();
include("../dbconnection/db.php");

if ($_SERVER['REQUEST_METHOD'] == 'POST') {




    if (isset($_POST['creatingMoveOrderHeader'])) {


        $inputData = $_POST['inputData'];



        $move_order_type = $inputData['move_order_type'];
        $transaction_type = $inputData['transaction_type'];
        $source_sub_invetory = $inputData['source_sub_invetory'];
        $so_search_number = $inputData['so_search_number'];
        $location = $inputData['location'];
        $destination_sub_inventory = $inputData['destination_sub_inventory'];
        $date_required_sub_inventory = $inputData['date_required_sub_inventory'];
        $description = $inputData['description'];
        $currentUser  = $_SESSION['username'];
        $currentTime  = date("Y-m-d H:i:");






        $sql = "INSERT INTO `for_office`.`move_order_item_header` (`so_number`, `transaction_type`, `move_order_type`, `description`, `location`, `source_invetory`, `destination_inv`, `date_require_sub_inventory`, `status`, `created_by`, `created_date`) 
            VALUES (?, ?, ? , ?, ?, ?, ?, ?, ?, ?, ?);;";
            





            $stmt =$con->prepare($sql);


            $stmt->bind_param('sssssssssss',$so_search_number,$transaction_type,$move_order_type,$description,$location,$source_sub_invetory,$destination_sub_inventory, $date_required_sub_inventory,$currentUser,$currentUser,$currentTime);








       



        if ($stmt->execute()) {

            $response["success"] = true;
            $response["message"] = "user created successfully";
            $response["record_id"] = $stmt->insert_id;

        } else {
            $response["error"] = mysqli_error($con);
            
        }

















        $response["data"] = $_POST;










        echo json_encode($response);
    }
}
