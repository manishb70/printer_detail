<?php
session_start();

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
    } else if (isset($_POST['updatereqsuisitionFromStoreIssuer'])) {
        



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


        if ($result) {


            $response["success"] = true;
            $response["data"] = "data updated success fully";
        } else {

            $response["success"] = false;
            $response["data"] = "data is not updated";
        }




        echo  json_encode($response);
    } else if (isset($_POST["newRequisitionInsert"])) {


        include("./db_connection.php");

        $created_by = $_SESSION["username"];
        $created_date = date("y-m-d");
        $newRequisitionInsert = "newRequisitionInsert";
        // $recordId =  7;
        $recordId =  $_SESSION["newRecordId"];
        $newProjectId =  $_POST["newProjectId"];
        $NewItenName =  $_POST["NewItenName"];
        $newitemQuantity =  $_POST["newitemQuantity"];
        $newItemNeedDate =  $_POST["newItemNeedDate"];
        $newItemUserRemarks =  $_POST["newItemUserRemarks"];
        $departMentId =  $_POST["departMentId"];
        $departMentname =  $_POST["departMentname"];
        $newItemId = $_POST["newItemId"];





        $sql = "INSERT INTO requisition_table (created_by,created_date, department_name,department_id,item_name, item_code, quantity, user_remarks,record_id,project_id) 
        VALUES ('$created_by', '$created_date', '$departMentname', $departMentId,'$NewItenName',$newItemId,$newitemQuantity,'$newItemUserRemarks',$recordId,$newProjectId)";



        // $sql = "INSERT INTO requisition_table (created_by,created_date, department_name,department_id,item_name, item_code, quantity, user_remarks,record_id,project_id) 
        // VALUES ('$created_by', '$created_date', '$department', $department_id,'$item_name', $item_id, $Quantity,'$user_remarks',$record_id,$project_id)";

        try {
            //code...


            if (mysqli_query($con, $sql)) {


                $response["success"] = true;
                $response["data"] = "new Requisision success ";
                $response["newId"] =  mysqli_insert_id($con);
                $response["datainserted"] = "Yhaa success";
            } else {
                $response["success"] = false;
                $response["data"] = "data is not inserted please tyry Again";
            }
        } catch (\Throwable $th) {
            //throw $th;
            $response["errror"] = $th;
        }


        echo  json_encode($response);
    }
}








if ($_SERVER['REQUEST_METHOD'] == "GET") {




    if (isset($_GET["getUserAdminRoles"])) {

        include("./db_connection.php");

        $userId = $_GET["userIsSelectedId"];



        $sql = "select * from admin_roles where admin_id=$userId;";

        $result = mysqli_query($con, $sql);;

        if ($result) {

            $response["success"] = true;
            $response["data"] = mysqli_fetch_assoc($result);
        } else {
            $response["success"] = false;
            $response["data"] = "Data not found please try again or register user to admin roles";
        }




        echo json_encode($response);
    }
}
