<?php
session_start();
include("./db_connection.php");

if (!isset($_SESSION["username"])) {
    header("location:login.php");
}


if ($_SERVER['REQUEST_METHOD'] == 'POST') {








    $user = $_SESSION["username"];


    $current_date = date("y-m-d");

    $sql = "insert into requisition_table_header (created_by,created_date,updated_by,updated_date) values('$user','$current_date','user1','$current_date');";



    try {
        $result = mysqli_query($con, $sql);
    } catch (\Throwable $th) {
        echo "new record genration gailed";
    }

    if ($result) {

        echo "new record gereated success fully";
        $record_id = mysqli_insert_id($con);
        $_SESSION["newRecordId"] = $record_id;

        header('location:genrate_requisition.php');
    } else {
        // header("location:home.php");
    }




    echo  "fjri";
}






?>






<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
</head>

<body>
    <?php require("./navForLogged.php") ?>





    <div class="flex  justify-between " style=" margin-top: 5.7rem;">

        <div style=" margin-top: 2.75rem; margin-right:2rem" class="p-4 mt-3 mr-2 sm:ml-64">


            <h1>Hello <?php echo $_SESSION["username"]  ?></h1>

            <?php

            if ($_SESSION["role"] == "requisitionGen" || $role == "admin") {

            ?>

                <form action="" method="post">
                    <button type="submit" class="py-2.5 px-5 me-2 mb-2 text-sm mt-5 font-medium text-gray-900 focus:outline-none bg-white rounded-lg border border-gray-200 hover:bg-gray-100 hover:text-blue-700 focus:z-10 focus:ring-4 focus:ring-gray-100 dark:focus:ring-gray-700 dark:bg-gray-800 dark:text-gray-400 dark:border-gray-600 dark:hover:text-white dark:hover:bg-gray-700">+ Genrate new record</button>

                </form>
            <?php }


            ?>

            <br>


            <a type="button" href="requisition.php" class="py-2.5 px-5 me-2 mb-2 text-sm font-medium text-gray-900 focus:outline-none bg-white rounded-lg border border-gray-200 hover:bg-gray-100 hover:text-blue-700 focus:z-10 focus:ring-4 focus:ring-gray-100 dark:focus:ring-gray-700 dark:bg-gray-800 dark:text-gray-400 dark:border-gray-600 dark:hover:text-white dark:hover:bg-gray-700">view History</a>


        </div>



    </div>











</body>
<script src="https://cdn.jsdelivr.net/npm/flowbite@2.4.1/dist/flowbite.min.js"></script>
<script src="./js/scripts.js"></script>
<script src="./js/jquery.min.js"></script>

</html>