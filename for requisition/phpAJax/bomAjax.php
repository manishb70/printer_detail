<?php
session_start();




if ($_SERVER['REQUEST_METHOD'] == 'POST') {



    if (isset($_POST['bom_creation_form'])) {


        include('../db.php');

            $inputs_data = $_POST['inputsData'];
            $bom_id = $_POST['bom_id'];




            foreach ($inputs_data as $key => $value) {
            

                    $user = $_SESSION['username'];
                    $datetime = date('Y-m-d');
                    $item_code = $value['item_code'];
                    $Item_name = $value['Item_name'];
                    $percentage = $value['percentage'];
                    $Qty = $value['Qty'];
                    $process_seq = $value['process_seq'];
                    $total = 00;
                    $Price = 00;
             







                $stmt  = "INSERT INTO `for_office`.`bom_line_detail` (`bom_id`, `item_code`, `item_name`, `quantity`, `price`, `total` , `process_seq` , `created_by`,`created_date`)
                 VALUES (?, ?, ?, ?, ?, ?,?,?,?);";


                $stmt = $con->prepare($stmt);

                $stmt->bind_param("sssssssss", $bom_id,$item_code,$item_name,$Qty,$Price,$total,$process_seq,$user,$datetime);




                if($stmt->execute()){


                    $response['success'] = true;
                }else{
                    $response['success'] = false;
                }







            }



















  
        $response['data'] = $_POST;


        echo json_encode($response);




    }










}




















?>