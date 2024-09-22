<?php

include("../dbconnection/db.php");

if ($_SERVER['REQUEST_METHOD'] == 'GET') {


    if (isset($_GET['getRequireAttrs'])) {


        $sub_id = $_GET['sub_id'];


        $sql = "SELECT * FROM for_office.requireattributeforcatname where  SubcatId =$sub_id ;";



        $result = mysqli_query($con, $sql);


        if ($result) {



            $data = [];

            while ($row = mysqli_fetch_assoc($result)) {

                $data[] = $row;
            }


            $response['success'] = true;
            $response['message'] = "Success fully get data";
            $response['data'] = $data;
        } else {


            $response['success'] = false;
            $response['error'] = mysqli_error($con);
        }


        
        echo json_encode($response);
    }
    if (isset($_GET['getAllAttrubte'])) {


        // $sub_id = $_GET['sub_id'];


        $sql = "SELECT * FROM for_office.require_atts;";



        $result = mysqli_query($con, $sql);


        if ($result) {



            $data = [];

            while ($row = mysqli_fetch_assoc($result)) {

                $data[] = $row;
            }


            $response['success'] = true;
            $response['message'] = "Success fully get data";
            $response['data'] = $data;
        } else {


            $response['success'] = false;
            $response['error'] = mysqli_error($con);
        }


        
        echo json_encode($response);
    
    }
}



// if($_SERVER['REQUEST_METHOD']=='POST'){


//     if(isset($_POST['addNewAttributesToSubCat']))




// }