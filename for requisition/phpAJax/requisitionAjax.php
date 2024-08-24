<?php



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




        echo json_encode($response);











    }







}











?>