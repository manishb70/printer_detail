<?php

include("../controllers/getData.php");


if ($_SERVER['REQUEST_METHOD'] == 'GET') {

    if (isset($_GET['pieChartData'])) {

        $table_name = "purchase_order_header";
        $column_name = "status";
        $id = 28;
        $searchColumn = "PO_number";

        $purchaseOrder = StatusAndValue("purchase_order_header",  "status");
        $itemMasterRequets = StatusAndValue("item_master_temp",  "itemStatus");
        $requisition_table = StatusAndValue("requisition_table",  "status");
        





                        





            $response['requisition_table'] = $requisition_table;
            $response['itemrequest'] = $itemMasterRequets;
            $response['purchaseOrder']= $purchaseOrder;



        // echo print_r($data);
        echo json_encode($response);



    }



}




?>