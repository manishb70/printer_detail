<?php

include('../controllers/getData.php');

if ($_SERVER['REQUEST_METHOD'] == 'POST') {












    

    echo json_encode("SUCCESS POST");

}



if ($_SERVER['REQUEST_METHOD'] == 'GET') {


    if (isset($_GET['getSoData'])) {


        $sonumber = $_GET['sonumber'];



        $sql = "SELECT * FROM for_office.sale_order_items_lines where so_number = $sonumber;";


        $data  = getRowDataById($sql);








        echo json_encode($data);
    }
}
