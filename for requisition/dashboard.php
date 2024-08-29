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




    echo "fjri";
}


if ($_SERVER['REQUEST_METHOD'] == 'GET') {
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


            <h1>Hello <?php echo $_SESSION["username"] ?></h1>
            <h1>right <?php echo $_SESSION["admin_write"] ?></h1>

            <?php

            // if ($_SESSION["role"] == "requisitionGen" || $role == "admin") {
            if ($_SESSION["store_genrate"] || $role == "admin") {

                ?>

                <form action="" method="post">
                    <button type="submit"
                        class="py-2.5 px-5 me-2 mb-2 text-sm mt-5 font-medium text-gray-900 focus:outline-none bg-white rounded-lg border border-gray-200 hover:bg-gray-100 hover:text-blue-700 focus:z-10 focus:ring-4 focus:ring-gray-100 dark:focus:ring-gray-700 dark:bg-gray-800 dark:text-gray-400 dark:border-gray-600 dark:hover:text-white dark:hover:bg-gray-700">+
                        Genrate new record</button>

                </form>
            <?php }


            ?>

            <br>


            <a type="button" href="requisition.php"
                class="py-2.5 px-5 me-2 mb-2 text-sm font-medium text-gray-900 focus:outline-none bg-white rounded-lg border border-gray-200 hover:bg-gray-100 hover:text-blue-700 focus:z-10 focus:ring-4 focus:ring-gray-100 dark:focus:ring-gray-700 dark:bg-gray-800 dark:text-gray-400 dark:border-gray-600 dark:hover:text-white dark:hover:bg-gray-700">view
                History</a>



            <br>

            <br>


            <?php
            if ($_SESSION["store_isseuer"] || $role == "admin") {
                ?>
                <a type="button" href="mangerApprove.php"
                    class="py-2.5 px-5 me-2 mb-2 text-sm font-medium text-gray-900 focus:outline-none bg-white rounded-lg border border-gray-200 hover:bg-gray-100 hover:text-blue-700 focus:z-10 focus:ring-4 focus:ring-gray-100 dark:focus:ring-gray-700 dark:bg-gray-800 dark:text-gray-400 dark:border-gray-600 dark:hover:text-white dark:hover:bg-gray-700">item
                    request</a>
                <?php
            }
            ?>
            <?php
            // if ($_SESSION["role"] == "admin" || $role == "admin") {
            if ($_SESSION["admin_write"] ) {
                ?>
                <a type="button" href="purchaseorder.php"
                    class="py-2.5 px-5 me-2 mb-2 text-sm font-medium text-gray-900 focus:outline-none bg-white rounded-lg border border-gray-200 hover:bg-gray-100 hover:text-blue-700 focus:z-10 focus:ring-4 focus:ring-gray-100 dark:focus:ring-gray-700 dark:bg-gray-800 dark:text-gray-400 dark:border-gray-600 dark:hover:text-white dark:hover:bg-gray-700">item
                    PO History</a>
                <?php
            }
            ?>
            <?php
            // if ($_SESSION["role"] == "admin" || $role == "admin") {
            if ($_SESSION["admin_write"] || $role == "admin") {
                ?>
                <a type="button" href="gateentryform.php"
                    class="py-2.5 px-5 me-2 mb-2 text-sm font-medium text-gray-900 focus:outline-none bg-white rounded-lg border border-gray-200 hover:bg-gray-100 hover:text-blue-700 focus:z-10 focus:ring-4 focus:ring-gray-100 dark:focus:ring-gray-700 dark:bg-gray-800 dark:text-gray-400 dark:border-gray-600 dark:hover:text-white dark:hover:bg-gray-700">item
                    Gate entry form</a>
                <?php
            }
            ?>

            <a type="submit" href="./GRN/index.php"
                class="py-2.5 px-5 me-2 mb-2 text-sm mt-5 font-medium text-gray-900 focus:outline-none bg-white rounded-lg border border-gray-200 hover:bg-gray-100 hover:text-blue-700 focus:z-10 focus:ring-4 focus:ring-gray-100 dark:focus:ring-gray-700 dark:bg-gray-800 dark:text-gray-400 dark:border-gray-600 dark:hover:text-white dark:hover:bg-gray-700">+
                GRN Form</a>

        </div>




        <div class="relative overflow-x-auto shadow-md sm:rounded-lg">
            <h1>Last Item History</h1>
            <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
                <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                    <tr>
                        <th scope="col" class="px-6 py-3">
                            S .no
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Item code
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Category
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Short discription
                        </th>
                        <th scope="col" class="px-6 py-3">
                            creation date
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Status
                        </th>

                        <th scope="col" class="px-6 py-3">
                            <span class="sr-only">Edit</span>
                        </th>
                    </tr>
                </thead>
                <tbody>


                    <?php

                    $username = $_SESSION["username"];

                    $sql = "SELECT * FROM for_office.item_master_temp where createdBy='$username' ;";

                    $result = mysqli_query($con, $sql);


                    while ($row = mysqli_fetch_assoc($result)) {

                        ?>

                        <tr
                            class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                            <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                <?php echo $row["S_No"] ?>
                            </th>
                            <td class="px-6 py-4">
                                <?php echo $row["item_code"] ?>
                            </td>
                            <td class="px-6 py-4">

                                <?php echo $row["subCatId"] ?>
                            </td>
                            <td class="px-6 py-4">

                                <?php echo $row["Short_Description"] ?>
                            </td>
                            <td class="px-6 py-4">

                                <?php echo $row["createdDate"] ?>
                            </td>
                            <td class="px-6 py-4">

                                <?php echo $row["itemStatus"] ?>
                            </td>
                            <td class="px-6 py-4 text-right">
                                <?php if ($row["itemStatus"] == "Reject") {
                                    ?>
                                    <a href="updateRejectedItem.php?id=<?php echo $row["item_code"] ?>"
                                        class="font-medium text-blue-600 dark:text-blue-500 hover:underline">Edit</a>

                                    <?php


                                }

                                ?>
                            </td>
                        </tr>

                    <?php } ?>


                </tbody>
            </table>
        </div>


    </div>











</body>
<script src="https://cdn.jsdelivr.net/npm/flowbite@2.4.1/dist/flowbite.min.js"></script>
<script src="./js/scripts.js"></script>
<script src="./js/jquery.min.js"></script>

</html>