<?php

if ($_SERVER['REQUEST_METHOD'] == 'GET') {



    if (isset($_GET['getSubCatName'])) {


        include("./db.php");

        $catId = $_GET['catid'];





        $sql = "SELECT * FROM for_office.sub_category where  catId=$catId;";


        $result = mysqli_query($con, $sql);


        $data = [];

        while ($row = mysqli_fetch_assoc($result)) {


            $data[] = $row;
        }




        $response["subcatnames"] = $data;

        echo  json_encode($response);
    }
}



?>