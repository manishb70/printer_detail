<?php

session_start();
include('db_connection.php');


if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // 


    //if user login
    // require to inserte data from user


    if (isset($_POST['login'])) {


        $username = $_POST['username'];
        $password = $_POST['password'];


        $sql = "SELECT * from user_management where user_name='$username' ;";

        $result = mysqli_query($con, $sql);



        if (mysqli_num_rows($result) > 0) {


            echo  "user found<br>";

            $row = mysqli_fetch_assoc($result);
            if ($row["password"] == $password) {
                // echo $row["mobile_number"];

                header("location:dashboard.php");
                $respone["loggedIn"] = "true";
                $respone["message"] = "success";
                $_SESSION["username"] = $row["user_name"];
                $_SESSION["user_id"] = $row["user_id"];
                $_SESSION["role"] = $row["role"];
            } else {

                echo  "Password not match";
                header("location:login.php");
            }
            $respone["loggedIn"] = "False";
            $respone["message"] = "User not found";
        } else {
            header("location:login.php");
        }

        // echo $respone;
    } else {

        echo "user not found";
    }











    if (isset($_POST["newGenrate"])) {




        if ($_POST["type"] == "newGenrate") {


            $sql = "insert into requisition_table_header (created_by,created_date,updated_by,updated_date) values('user_1',CURRENT_DATE,'user1',CURRENT_DATE);";


            try {
                $result = mysqli_query($con, $sql);
            } catch (\Throwable $th) {
                echo "new record genration gailed";
            }


            if ($result) {

                echo "new record gereated success fully";
                $record_id = mysqli_insert_id($con);
                $_SESSION["record_id"] = $record_id;
            } else {
                header("location:home.php");
            }






            $created_by = "System";
            $created_date = date("y-m-d");
            $department = "SCH";
            $item_name = "BULB";
            $item_id =  2;
            $user_remarks = "need";
            $department_id = 1;
            $requisitionType = "SCH";
            $requisitionId = 1;
            $item_name = "BULB";
            $item_Code = 1;
            $project_id = "";
            $Quantity = 1;
            $user_remarks = "";

            $record_id = $_SESSION["record_id"];


            $sql = "INSERT INTO requisition_table (created_by,created_date, department_name,department_id,item_name, item_code, quantity, user_remarks,requisition_id) VALUES ('$created_by', '$created_date', '$department', $department_id,'$item_name', $item_Code, $Quantity,'$user_remarks',$record_id)";



            $result = mysqli_query($con, $sql);



            if ($result) {


                echo "\nitem requisition is  is created is success fully";


                $sql = "INSERT into requisition_table_heade";
            }
        }
    }
}



if ($_SERVER['REQUEST_METHOD'] == 'GET') {


    if (isset($_GET['itemCodeInfoForPr'])) {

        include('db_connection.php');

        $sql = "SELECT item_code FROM for_office.item_master_main;";

        $result = mysqli_query($con, $sql);


        $data = [];

        while ($row = mysqli_fetch_assoc($result)) {

            $data[]  = $row["item_code"];
        }

        echo json_encode($data);
    }

    else if(isset($_GET['getShortDiscriptionWithItemCode'])){

        $item_Code = $_GET['itemcode'];


        include('db_connection.php');

        $sql = "SELECT Short_Description FROM for_office.item_master_main where item_code= '$item_Code';";

        $result = mysqli_query($con, $sql);


       

       $row = mysqli_fetch_assoc($result) ;

           $sDiscription  = $row["Short_Description"];
        

        $respone["sDiscription"]=$sDiscription;


        echo json_encode($respone);



    }
}
