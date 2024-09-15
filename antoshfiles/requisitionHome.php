<?php

session_start();

include("db_connection.php");

if ($_SERVER['REQUEST_METHOD'] == 'POST') {



    $user = $_SESSION["username"];


    $current_date = date("y-m-d");



    try {


        $sql = "insert into requisition_table_header (created_by,created_date,updated_by,updated_date) values('$user','$current_date','user1','$current_date');";
        $result = mysqli_query($con, $sql);
    } catch (\Throwable $th) {
        echo "new record genration gailed";
    }

    if ($result) {

        echo "new record gereated success fully";
        $record_id = mysqli_insert_id($con);

        $_SESSION["newRecordId"] = $record_id;


        header("location:genrate_requisition.php");
    }
}






?>









<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.0.4/dist/tailwind.min.css" rel="stylesheet">

</head>

<body>

    <?php include("./navForLogged.php");   ?>




    <div style="margin-top: 5rem;" class="">








        <h1>Hii <?php echo $_SESSION["username"]  ?></h1>

        <form action="#" method="POST">
            <button type="submit" class="text-white bg-gradient-to-r from-blue-500 via-blue-600 to-blue-700 hover:bg-gradient-to-br focus:ring-4 focus:outline-none focus:ring-blue-300 dark:focus:ring-blue-800 font-medium rounded-lg text-sm px-5 py-2.5 text-center me-2 mb-2">Gerate new record</button>

        </form>

        <?php



        if (isset($_SESSION["newRecordId"])) {
            echo  $_SESSION["newRecordId"];
        }







        ?>

    </div>
















</body>

</html>