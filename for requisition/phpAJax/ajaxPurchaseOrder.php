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



        foreach ($inputs_data as $key => $value) {


           
            $item_code = $value['item_code'];
            $item_name = $value['item_name'];
            $unit_Price = $value['unit_Price'];
            $Qty =  $value['Qty'];
            $total_price = 7;
            $need_by_date = $value['need_by_date'];
            $saleOrderNumber = $value['saleOrderNumber'];







            $query = "INSERT INTO `for_office`.`purchase_order_line` (`po_number`, `item_code`, `item_shortdiscription`, `unit_price`, `quantity`, `total_price`, `need_by_date`) 
        VALUES (?, ?, ?, ?, ?, ?, ?);";


            $stmt = $con->prepare($query);
            $stmt->bind_param("sssssss", $po_number, $item_code, $item_name, $unit_Price, $Qty, $total_price, $need_by_date);



            if($stmt->execute()){


                $response["success"] = true;
                $response["message"] = "Data seccuss fukky insteretd";





                
            }else{
                
                
                
                $response["success"] = false;
                $response['erro']=$stmt->error;
                
                
            };
            
            
            
            
        }
        
        $stmt->close();
        $con->close();















       
        $response['data'] = $inputs_data;

        echo json_encode($response);



    }

}










?>