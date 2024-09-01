<?php





if ($_SERVER['REQUEST_METHOD'] == 'GET') {





    if (isset($_GET['getLineDataByPoNumber'])) {

        include('../db.php');

        $ponumber = $_GET['po_id'];
        $response['ponumber is '] = $ponumber;


        $sql = "SELECT * FROM for_office.purchase_order_line where po_number=$ponumber; ";


        $result = mysqli_query($con, $sql);




        if ($result) {

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



if ($_SERVER['REQUEST_METHOD'] == 'POST') {


    if (isset($_POST['createDirectPurchaseOrder'])) {


        include('../db.php');


        $inputs_data = $_POST['inputsData'];
        $po_number = $_POST['po_number'];


        $setLineIdToRelAtedTrId = [];

        foreach ($inputs_data as $key => $value) {


            $line_id = $value['line_id'];
            $item_code = $value['item_code'];
            $item_name = $value['item_name'];
            $unit_Price = $value['unit_Price'];
            $Qty = $value['Qty'];
            $total_price = 7;
            $need_by_date = $value['need_by_date'];
            $saleOrderNumber = $value['saleOrderNumber'];







            $query = "INSERT INTO `for_office`.`purchase_order_line` (`po_number`, `item_code`, `item_shortdiscription`, `unit_price`, `quantity`, `total_price`, `need_by_date`) 
        VALUES (?, ?, ?, ?, ?, ?, ?);";


            $stmt = $con->prepare($query);
            $stmt->bind_param("sssssss", $po_number, $item_code, $item_name, $unit_Price, $Qty, $total_price, $need_by_date);



            if ($stmt->execute()) {

                $setLineIdToRelAtedTrId[$line_id] = $con->insert_id;

                $response["success"] = true;
                $response["message"] = "Data seccuss fukky insteretd";






            } else {



                $response["success"] = false;
                $response['erro'] = $stmt->error;


            }
            ;




        }

        $stmt->close();
        $con->close();















        $response['lineSetData'] = $setLineIdToRelAtedTrId;
        $response['data'] = $inputs_data;

        echo json_encode($response);



    }




    if (isset($_POST['updatePoLineLable'])) {



        include('../db.php');


        $newGenRated =[];
        $inputs_data = $_POST['inputsData'];
        $po_number = $_POST['po_number'];



        foreach ($inputs_data as $key => $value) {


            $line_id = isset($value['line_id']) ? $value['line_id'] : null;
            $item_code = $value['item_code'];
            $item_name = $value['item_name'];
            $unit_Price = $value['unit_Price'];
            $Qty = $value['Qty'];
            $total_price = 7;
            $need_by_date = $value['need_by_date'];
            $saleOrderNumber = $value['saleOrderNumber'];


            $sql = "SELECT * FROM for_office.purchase_order_line where id = $line_id;";


            $isAvailable = mysqli_query($con, $sql);



            if ($isAvailable) {





                //     $query = "INSERT INTO `for_office`.`purchase_order_line` (`po_number`, `item_code`, `item_shortdiscription`, `unit_price`, `quantity`, `total_price`, `need_by_date`) 
                // VALUES (?, ?, ?, ?, ?, ?, ?);";


                $query = "UPDATE `for_office`.`purchase_order_line` SET `item_code` = ?, `item_shortdiscription` = ?, `unit_price` = ?, `quantity` = ?, `total_price` = ?, `need_by_date` = ? WHERE (`id` = ?);";




                $stmt = $con->prepare($query);
                $stmt->bind_param("ssssssi", $item_code, $item_name, $unit_Price, $Qty, $total_price, $need_by_date, $line_id);

                $reault = $stmt->execute();

                if ($reault) {


                    $response["success"] = true;
                    $response["message"] = "Data seccuss fukky insteretd";








                } else {



                    $response["success"] = false;
                    $response['erro'] = $stmt->error;


                }
                ;





                $stmt->close();
                // $con->close();
            } else {


                $line_id = $value['line_main_id'];

                $query = "INSERT INTO `for_office`.`purchase_order_line` (`po_number`, `item_code`, `item_shortdiscription`, `unit_price`, `quantity`, `total_price`, `need_by_date`) 
            VALUES (?, ?, ?, ?, ?, ?, ?);";


                $stmt = $con->prepare($query);
                $stmt->bind_param("sssssss", $po_number, $item_code, $item_name, $unit_Price, $Qty, $total_price, $need_by_date);

                if ($stmt->execute()) {


                    $newGenRated[$line_id] = $con->insert_id;

                }









            }

        }












        $response['newGenRated'] = $newGenRated;
        
        

        $response['data'] = $inputs_data;

        echo json_encode($response);



    }

}










?>