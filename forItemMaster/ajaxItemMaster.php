<?php

include("db.php");


if ($_SERVER['REQUEST_METHOD'] == 'GET') {


    if (isset($_GET['categoryFields'])) {

            $catId = $_GET['catId'];


        
        // $sql = "SELECT * FROM requireattributeforcatname where catId= $catId  ";
        $sql = "SELECT * FROM requireattributeforcatname where SubcatId=$catId ;  ";


        $result = mysqli_query($con, $sql);
        $row = mysqli_fetch_assoc($result);



        if($result){


            $data = [];


            while ($row = mysqli_fetch_assoc($result)) {



                $data[]= $row;


            }


            
        $response["success"] = true;
        $response["data"] = $data;
        
        }else{



            $response["success"] = false;
            $response["message"] = "erroe when data fetching from mysql";
        }


        



        echo json_encode($response);






    }
}
