<?php





if ($_SERVER['REQUEST_METHOD'] == 'GET') {





    if (isset($_GET['getLineDataByPoNumber'])) {

        include('../db.php');

        $ponumber = $_GET['po_id'];
        $response['ponumber is '] = $ponumber;


        $sql = "SELECT * FROM for_office.purchase_order_line where po_number=$ponumber; ";


        $result = mysqli_query($con, $sql);


        if  ($result) {

            $data = [];



            while ($row = mysqli_fetch_assoc($result)) {


                $data[] = $row;
            }


            $response["data"] = $data;

            $response['success'] = true;
        } else {
            $response["error"] = "";
            $response['mysqlerror'] = mysqli_error($con);
            $response['sql'] = mysqli_error($con);
            $response['success'] = false;
        }








        echo json_encode($response);


    }


}















?>