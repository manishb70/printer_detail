<?php


//update data sql with ajax

if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    if (isset($_POST['update_reqsuisition'])) {


        include("./db_connection.php");
        $id = $_POST["user_id"];
        $remarks = $_POST["remarks"];
        $status = $_POST["status"];


        $sql = "update requisition_table set status='$status', user_remarks='$remarks' where S_no = $id;";
        $result = mysqli_query($con, $sql);

        if ($result) {

            $rsponse["data"] =  "successfully updated";
            $rsponse["success"] = "true";
        } else {



            $rsponse["success"] = "false";
            $rsponse["data"] = "query is not executed eroor ctch";
            echo json_encode($rsponse);
        }



        // $row = mysqli_fetch_assoc($result);


        echo json_encode($rsponse);
    }
    if (isset($_POST['updatereqsuisitionFromStoreIssuer'])) {


        include("./db_connection.php");


        // {"success":true,"data":{"updatereqsuisitionFromStoreIssuer":"update_reqsuisition","user_id":"5","handOverDate":"","Price":"","reqiusitionType":"","handOverBy":"","finalRemarks":"","status":""}}

        $user_id = $_POST["user_id"];
        $Price = $_POST["Price"];
        $reqiusitionType = $_POST["reqiusitionType"];
        $handOverBy = $_POST["handOverBy"];
        $handOverDate = $_POST["handOverDate"];
        $status  = $_POST["status"];
        $finalRemarks = $_POST["finalRemarks"];


    
        // echo    $user_id;
        // echo  $Price;
        // echo  $reqiusitionType;
        // echo  $handOverBy;
        // echo  $handOverDate;
        // echo  $status;
        // echo  $finalRemarks;

        $sql = "update requisition_table set status='$status', requisition_type='$reqiusitionType', final_remarks='$finalRemarks' ,price= $Price, handover_over_by='$handOverBy' ,date_hand_hover='$handOverDate' where S_no = $user_id; ";

        $result = mysqli_query($con, $sql);


        if($result){


            $response["success"] = true;
            $response["data"] = "data updated success fully";


        }else{

            $response["success"] = false;
            $response["data"] = "data is not updated";
        }




        echo  json_encode($response);
    }
}
