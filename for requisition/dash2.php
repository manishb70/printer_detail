<?php
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}
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
    <link rel="stylesheet" href="./styles/dashboard.css">
    <title><?php echo $_SESSION["username"] ?></title>
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
</head>

<body>
    <?php require("./navForLogged.php") ?>





    <div class=" custom-main-dash     " style="">

        <div style=" background-color: #FF9874; min-height:100vh;"
            class="p-4 whitespace-nowrap gap-2 	m-4 flex flex-col rounded">


            <h1 class="font-medium text-2xl"> Forms .</h1>

            <hr>


            <!-- <?php

            // if ($_SESSION["role"] == "requisitionGen" || $role == "admin") {
            if ($_SESSION["store_genrate"] || $role == "admin") {

                ?>

                <form action="" method="post">
                    <button type="submit"
                        class="py-2.5 px-5 me-2 mb-2 text-sm mt-5 font-medium text-gray-900 focus:outline-none bg-white rounded-lg border border-gray-200 hover:bg-gray-100 hover:text-blue-700 focus:z-10 focus:ring-4 focus:ring-gray-100 dark:focus:ring-gray-700 dark:bg-gray-800 dark:text-gray-400 dark:border-gray-600 dark:hover:text-white dark:hover:bg-gray-700">
                        Requisition Request Creation Form</button>

                </form>
            <?php }


            ?>


            <a type="button" href="requisition.php"
                class="py-2.5 px-5 me-2 mb-2 text-sm font-medium text-gray-900 focus:outline-none bg-white rounded-lg border border-gray-200 hover:bg-gray-100 hover:text-blue-700 focus:z-10 focus:ring-4 focus:ring-gray-100 dark:focus:ring-gray-700 dark:bg-gray-800 dark:text-gray-400 dark:border-gray-600 dark:hover:text-white dark:hover:bg-gray-700">Requisition
                Request Creation Detail Report</a>






            <?php
            if ($_SESSION["store_isseuer"] || $role == "admin") {
                ?>
                <a type="button" href="mangerApprove.php"
                    class="py-2.5 px-5 me-2 mb-2 text-sm font-medium text-gray-900 focus:outline-none bg-white rounded-lg border border-gray-200 hover:bg-gray-100 hover:text-blue-700 focus:z-10 focus:ring-4 focus:ring-gray-100 dark:focus:ring-gray-700 dark:bg-gray-800 dark:text-gray-400 dark:border-gray-600 dark:hover:text-white dark:hover:bg-gray-700">Item
                    Request Creation Report</a>
                <?php
            }
            ?>
            <?php
            // if ($_SESSION["role"] == "admin" || $role == "admin") {
            if ($_SESSION["admin_write"]) {
                ?>
                <a type="button" href="purchaseorder.php"
                    class="py-2.5 px-5 me-2 mb-2 text-sm font-medium text-gray-900 focus:outline-none bg-white rounded-lg border border-gray-200 hover:bg-gray-100 hover:text-blue-700 focus:z-10 focus:ring-4 focus:ring-gray-100 dark:focus:ring-gray-700 dark:bg-gray-800 dark:text-gray-400 dark:border-gray-600 dark:hover:text-white dark:hover:bg-gray-700">PO
                    Summary History</a>
                <?php
            }
            ?>
            <?php
            // if ($_SESSION["role"] == "admin" || $role == "admin") {
            if ($_SESSION["admin_write"] || $role == "admin") {
                ?>
                <a type="button" href="gateentryform.php"
                    class="py-2.5 px-5 me-2 mb-2 text-sm font-medium text-gray-900 focus:outline-none bg-white rounded-lg border border-gray-200 hover:bg-gray-100 hover:text-blue-700 focus:z-10 focus:ring-4 focus:ring-gray-100 dark:focus:ring-gray-700 dark:bg-gray-800 dark:text-gray-400 dark:border-gray-600 dark:hover:text-white dark:hover:bg-gray-700">Gate
                    Entry Creation Form</a>
                <?php
            }
            ?>

            <a type="submit" href="./GRN/index.php"
                class="py-2.5 px-5 me-2 mb-2 text-sm  font-medium text-gray-900 focus:outline-none bg-white rounded-lg border border-gray-200 hover:bg-gray-100 hover:text-blue-700 focus:z-10 focus:ring-4 focus:ring-gray-100 dark:focus:ring-gray-700 dark:bg-gray-800 dark:text-gray-400 dark:border-gray-600 dark:hover:text-white dark:hover:bg-gray-700">GRN
                Creation Form</a>


            <?php
            // if ($_SESSION["role"] == "admin" || $role == "admin") {
            if ($_SESSION["admin_write"] || $role == "admin") {
                ?>
                <a type="submit" href="./users_form.php"
                    class="py-2.5 px-5 me-2 mb-2 text-sm font-medium text-gray-900 focus:outline-none bg-white rounded-lg border border-gray-200 hover:bg-gray-100 hover:text-blue-700 focus:z-10 focus:ring-4 focus:ring-gray-100 dark:focus:ring-gray-700 dark:bg-gray-800 dark:text-gray-400 dark:border-gray-600 dark:hover:text-white dark:hover:bg-gray-700">
                    User Master Creation Report </a>


                <?php
            }
            ?>
            <a type="submit" href="./itemAdd.php"
                class="py-2.5 px-5 me-2 mb-2 text-sm  font-medium text-gray-900 focus:outline-none bg-white rounded-lg border border-gray-200 hover:bg-gray-100 hover:text-blue-700 focus:z-10 focus:ring-4 focus:ring-gray-100 dark:focus:ring-gray-700 dark:bg-gray-800 dark:text-gray-400 dark:border-gray-600 dark:hover:text-white dark:hover:bg-gray-700">
                Item Request Creation Form </a>


            <a type="submit" href="./userCreate.php"
                class="py-2.5 px-5 me-2 mb-2 text-sm  font-medium text-gray-900 focus:outline-none bg-white rounded-lg border border-gray-200 hover:bg-gray-100 hover:text-blue-700 focus:z-10 focus:ring-4 focus:ring-gray-100 dark:focus:ring-gray-700 dark:bg-gray-800 dark:text-gray-400 dark:border-gray-600 dark:hover:text-white dark:hover:bg-gray-700">
                User Master Creation Form </a>

            <a type="submit" href="./createPo.php"
                class="py-2.5 px-5 me-2 mb-2 text-sm  font-medium text-gray-900 focus:outline-none bg-white rounded-lg border border-gray-200 hover:bg-gray-100 hover:text-blue-700 focus:z-10 focus:ring-4 focus:ring-gray-100 dark:focus:ring-gray-700 dark:bg-gray-800 dark:text-gray-400 dark:border-gray-600 dark:hover:text-white dark:hover:bg-gray-700">
                Purchase Order Creation Form </a>


            <a type="submit" href="./CustomerForm.php"
                class="py-2.5 px-5 me-2 mb-2 text-sm  font-medium text-gray-900 focus:outline-none bg-white rounded-lg border border-gray-200 hover:bg-gray-100 hover:text-blue-700 focus:z-10 focus:ring-4 focus:ring-gray-100 dark:focus:ring-gray-700 dark:bg-gray-800 dark:text-gray-400 dark:border-gray-600 dark:hover:text-white dark:hover:bg-gray-700">
                Customer Creation Form </a>


            <a type="submit" href="./moveOrder.php"
                class="py-2.5 px-5 me-2 mb-2 text-sm  font-medium text-gray-900 focus:outline-none bg-white rounded-lg border border-gray-200 hover:bg-gray-100 hover:text-blue-700 focus:z-10 focus:ring-4 focus:ring-gray-100 dark:focus:ring-gray-700 dark:bg-gray-800 dark:text-gray-400 dark:border-gray-600 dark:hover:text-white dark:hover:bg-gray-700">
                Move Order Creation Form </a>


            <a type="submit" href="./createBom.php"
                class="py-2.5 px-5 me-2 mb-2 text-sm  font-medium text-gray-900 focus:outline-none bg-white rounded-lg border border-gray-200 hover:bg-gray-100 hover:text-blue-700 focus:z-10 focus:ring-4 focus:ring-gray-100 dark:focus:ring-gray-700 dark:bg-gray-800 dark:text-gray-400 dark:border-gray-600 dark:hover:text-white dark:hover:bg-gray-700">
                Bom Creatation Form </a>
            <a type="submit" href="./searchBom.php"
                class="py-2.5 px-5 me-2 mb-2 text-sm  font-medium text-gray-900 focus:outline-none bg-white rounded-lg border border-gray-200 hover:bg-gray-100 hover:text-blue-700 focus:z-10 focus:ring-4 focus:ring-gray-100 dark:focus:ring-gray-700 dark:bg-gray-800 dark:text-gray-400 dark:border-gray-600 dark:hover:text-white dark:hover:bg-gray-700">
                BOM Searh Form </a>


            <a type="submit" href="./supplierForm.php"
                class="py-2.5 px-5 me-2 mb-2 text-sm  font-medium text-gray-900 focus:outline-none bg-white rounded-lg border border-gray-200 hover:bg-gray-100 hover:text-blue-700 focus:z-10 focus:ring-4 focus:ring-gray-100 dark:focus:ring-gray-700 dark:bg-gray-800 dark:text-gray-400 dark:border-gray-600 dark:hover:text-white dark:hover:bg-gray-700">
                Supplier Creation Form </a> -->



            <!-- UserBlis -->

            <button id="userMasterHoverBtn" data-dropdown-toggle="userMasterHover" data-dropdown-trigger="hover"
                class="text-white bg-blue-700 flex justify-between hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center inline-flex items-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800"
                type="button">USER <svg class="w-2.5 h-2.5 ms-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                    fill="none" viewBox="0 0 10 6">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="m1 1 4 4 4-4" />
                </svg>
            </button>

            <!-- Dropdown menu -->
            <div id="userMasterHover"
                class="z-10 hidden  bg-white divide-y divide-gray-100 rounded-lg shadow  dark:bg-gray-700">
                <ul class="py-2 text-sm text-gray-700 dark:text-gray-200" aria-labelledby="userMasterHoverBtn">
                    <li>
                        <a type="submit" href="./userCreate.php"
                            class="py-2.5 px-5 me-2 mb-2 text-sm  font-medium text-gray-900 focus:outline-none bg-white rounded-lg border border-gray-200 hover:bg-gray-100 hover:text-blue-700 focus:z-10 focus:ring-4 focus:ring-gray-100 dark:focus:ring-gray-700 dark:bg-gray-800 dark:text-gray-400 dark:border-gray-600 dark:hover:text-white dark:hover:bg-gray-700">
                            User Master Creation Form </a>
                    </li>
                    <li>

                        <?php
                        // if ($_SESSION["role"] == "admin" || $role == "admin") {
                        if ($_SESSION["admin_write"] || $role == "admin") {
                            ?>
                            <a type="submit" href="./users_form.php"
                                class="py-2.5 px-5 me-2 mb-2 text-sm font-medium text-gray-900 focus:outline-none bg-white rounded-lg border border-gray-200 hover:bg-gray-100 hover:text-blue-700 focus:z-10 focus:ring-4 focus:ring-gray-100 dark:focus:ring-gray-700 dark:bg-gray-800 dark:text-gray-400 dark:border-gray-600 dark:hover:text-white dark:hover:bg-gray-700">
                                User Master Creation Report </a>


                            <?php
                        }
                        ?>

                    </li>

                </ul>
            </div>




            <!-- item Master -->

            <button id="itemMasterHoverbtn" data-dropdown-toggle="itemMasterHOver" data-dropdown-trigger="hover"
                class="text-white bg-blue-700 flex justify-between hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center inline-flex items-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800"
                type="button">Item Master <svg class="w-2.5 h-2.5 ms-3" aria-hidden="true"
                    xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="m1 1 4 4 4-4" />
                </svg>
            </button>

            <!-- Dropdown menu -->
            <div id="itemMasterHOver"
                 style="left:20%;     margin-left: 6%; " class="z-10 hidden w-fullt bg-white     w-auto divide-y divide-gray-100 rounded-lg shadow  dark:bg-gray-700">
                <ul class="py-2 text-sm text-gray-700 dark:text-gray-200" aria-labelledby="itemMasterHoverbtn">
                    <a type="submit" href="./itemAdd.php"
                        class="py-2.5 px-5 me-2 mb-2 text-sm  font-medium text-gray-900 focus:outline-none bg-white rounded-lg border border-gray-200 hover:bg-gray-100 hover:text-blue-700 focus:z-10 focus:ring-4 focus:ring-gray-100 dark:focus:ring-gray-700 dark:bg-gray-800 dark:text-gray-400 dark:border-gray-600 dark:hover:text-white dark:hover:bg-gray-700">
                        Item Request Creation Form </a>

                    <li>
                        <?php
                        if ($_SESSION["store_isseuer"] || $role == "admin") {
                            ?>
                            <a type="button" href="mangerApprove.php"
                                class="py-2.5 px-5 me-2 mb-2 text-sm font-medium text-gray-900 focus:outline-none bg-white rounded-lg border border-gray-200 hover:bg-gray-100 hover:text-blue-700 focus:z-10 focus:ring-4 focus:ring-gray-100 dark:focus:ring-gray-700 dark:bg-gray-800 dark:text-gray-400 dark:border-gray-600 dark:hover:text-white dark:hover:bg-gray-700">Item
                                Request Creation Report</a>
                            <?php
                        }
                        ?>
                    </li>

                    <li>


                        <a type="button" href="allitems.php"
                            class="py-2.5 px-5 me-2 mb-2 text-sm font-medium text-gray-900 focus:outline-none bg-white rounded-lg border border-gray-200 hover:bg-gray-100 hover:text-blue-700 focus:z-10 focus:ring-4 focus:ring-gray-100 dark:focus:ring-gray-700 dark:bg-gray-800 dark:text-gray-400 dark:border-gray-600 dark:hover:text-white dark:hover:bg-gray-700">Item
                            master view</a>


                    </li>
                </ul>
            </div>



            <!-- Bom Master -->

            <button id="bomMasterHoverBtn" data-dropdown-toggle="bomMasterHover" data-dropdown-trigger="hover"
                class="text-white bg-blue-700 flex justify-between hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center inline-flex items-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800"
                type="button">Bom Master <svg class="w-2.5 h-2.5 ms-3" aria-hidden="true"
                    xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="m1 1 4 4 4-4" />
                </svg>
            </button>

            <!-- Dropdown menu -->
            <div id="bomMasterHover"
                 style="left:20%;     margin-left: 6%; " class="z-10 hidden w-fullt bg-white     w-auto divide-y divide-gray-100 rounded-lg shadow  dark:bg-gray-700">
                <ul class="py-2 text-sm text-gray-700 dark:text-gray-200" aria-labelledby="bomMasterHoverBtn">
                    <li>
                        <a type="submit" href="./searchBom.php"
                            class="py-2.5 px-5 me-2 mb-2 text-sm  font-medium text-gray-900 focus:outline-none bg-white rounded-lg border border-gray-200 hover:bg-gray-100 hover:text-blue-700 focus:z-10 focus:ring-4 focus:ring-gray-100 dark:focus:ring-gray-700 dark:bg-gray-800 dark:text-gray-400 dark:border-gray-600 dark:hover:text-white dark:hover:bg-gray-700">
                            BOM Searh Form </a>
                    </li>
                    <li>
                        <a type="submit" href="./createBom.php"
                            class="py-2.5 px-5 me-2 mb-2 text-sm  font-medium text-gray-900 focus:outline-none bg-white rounded-lg border border-gray-200 hover:bg-gray-100 hover:text-blue-700 focus:z-10 focus:ring-4 focus:ring-gray-100 dark:focus:ring-gray-700 dark:bg-gray-800 dark:text-gray-400 dark:border-gray-600 dark:hover:text-white dark:hover:bg-gray-700">
                            Bom Creatation Form </a>
                    </li>


                </ul>
            </div>






            <!-- SUpplier master  -->

            <button id="SupplierMasterHoverBtn" data-dropdown-toggle="supplierMasterhover" data-dropdown-trigger="hover"
                class="text-white bg-blue-700 flex justify-between hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center inline-flex items-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800"
                type="button">Supplier Master <svg class="w-2.5 h-2.5 ms-3" aria-hidden="true"
                    xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="m1 1 4 4 4-4" />
                </svg>
            </button>

            <!-- Dropdown menu -->
            <div id="supplierMasterhover"
                 style="left:20%;     margin-left: 6%; " class="z-10 hidden w-fullt bg-white     divide-y divide-gray-100 rounded-lg shadow dark:bg-gray-700">
                <ul class="py-2 text-sm text-gray-700 dark:text-gray-200" aria-labelledby="SupplierMasterHoverBtn">
                    <li>
                        <a type="submit" href="./supplierForm.php"
                            class="py-2.5 px-5 me-2 mb-2 text-sm  font-medium text-gray-900 focus:outline-none bg-white rounded-lg border border-gray-200 hover:bg-gray-100 hover:text-blue-700 focus:z-10 focus:ring-4 focus:ring-gray-100 dark:focus:ring-gray-700 dark:bg-gray-800 dark:text-gray-400 dark:border-gray-600 dark:hover:text-white dark:hover:bg-gray-700">
                            Supplier Creation Form </a>
                    </li>

                </ul>
            </div>





            <!-- Asl master -->

            <button id="asHoverMasterBtn" data-dropdown-toggle="aslMasterHover" data-dropdown-trigger="hover"
                class="text-white bg-blue-700 flex justify-between hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center inline-flex items-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800"
                type="button">ASL Master <svg class="w-2.5 h-2.5 ms-3" aria-hidden="true"
                    xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="m1 1 4 4 4-4" />
                </svg>
            </button>

            <!-- Dropdown menu -->
            <div id="aslMasterHover"
                 style="left:20%;     margin-left: 6%; " class="z-10 hidden w-fullt bg-white     w-auto divide-y divide-gray-100 rounded-lg shadow  dark:bg-gray-700">
                <ul class="py-2 text-sm text-gray-700 dark:text-gray-200" aria-labelledby="asHoverMasterBtn">
                    <li>
                        <a href="#"
                            class="block px-4 py-2 m-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">item
                            master</a>
                    </li>
                    <li>
                        <a href="#"
                            class="block px-4 py-2 m-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Settings</a>
                    </li>
                    <li>
                        <a href="#"
                            class="block px-4 py-2 m-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Earnings</a>
                    </li>
                    <li>
                        <a href="#"
                            class="block px-4 py-2 m-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Sign
                            out</a>
                    </li>
                </ul>
            </div>



            <!-- customer master -->
            <button id="CustomerMasterHoverBtn" data-dropdown-toggle="customerMasterHover" data-dropdown-trigger="hover"
                class="text-white bg-blue-700 flex justify-between hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center inline-flex items-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800"
                type="button">Customer Master <svg class="w-2.5 h-2.5 ms-3" aria-hidden="true"
                    xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="m1 1 4 4 4-4" />
                </svg>
            </button>

            <!-- Dropdown menu -->
            <div id="customerMasterHover"
                 style="left:20%;     margin-left: 6%; " class="z-10 hidden w-fullt bg-white     w-auto divide-y divide-gray-100 rounded-lg shadow  dark:bg-gray-700">
                <ul class="py-2 text-sm text-gray-700 dark:text-gray-200" aria-labelledby="CustomerMasterHoverBtn">
                    <li>
                        <a type="submit" href="./CustomerForm.php"
                            class="py-2.5 px-5 me-2 mb-2 text-sm  font-medium text-gray-900 focus:outline-none bg-white rounded-lg border border-gray-200 hover:bg-gray-100 hover:text-blue-700 focus:z-10 focus:ring-4 focus:ring-gray-100 dark:focus:ring-gray-700 dark:bg-gray-800 dark:text-gray-400 dark:border-gray-600 dark:hover:text-white dark:hover:bg-gray-700">
                            Customer Creation Form </a>
                    </li>
                    <li>
                        <a href="#"
                            class="block px-4 py-2 m-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Settings</a>
                    </li>
                    <li>
                        <a href="#"
                            class="block px-4 py-2 m-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Earnings</a>
                    </li>
                    <li>
                        <a href="#"
                            class="block px-4 py-2 m-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Sign
                            out</a>
                    </li>
                </ul>
            </div>




            <!-- inventory Master -->



            <button id="inventoryMsterHoverBtn" data-dropdown-toggle="inventoryMasterHover"
                data-dropdown-trigger="hover"
                class="text-white bg-blue-700 flex justify-between hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center inline-flex items-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800"
                type="button">Inventory Master <svg class="w-2.5 h-2.5 ms-3" aria-hidden="true"
                    xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="m1 1 4 4 4-4" />
                </svg>
            </button>

            <!-- Dropdown menu -->
            <div id="inventoryMasterHover"
                 style="left:20%;     margin-left: 6%; " class="z-10 hidden w-fullt bg-white     w-auto divide-y divide-gray-100 rounded-lg shadow  dark:bg-gray-700">
                <ul class="py-2 text-sm text-gray-700 dark:text-gray-200" aria-labelledby="inventoryMsterHoverBtn">
                    <a type="submit" href="./GRN/index.php"
                        class="py-2.5 px-5 me-2 mb-2 text-sm  font-medium text-gray-900 focus:outline-none bg-white rounded-lg border border-gray-200 hover:bg-gray-100 hover:text-blue-700 focus:z-10 focus:ring-4 focus:ring-gray-100 dark:focus:ring-gray-700 dark:bg-gray-800 dark:text-gray-400 dark:border-gray-600 dark:hover:text-white dark:hover:bg-gray-700">GRN
                        Creation Form</a>
                    <li>
                        <a type="submit" href="./moveOrder.php"
                            class="py-2.5 px-5 me-2 mb-2 text-sm  font-medium text-gray-900 focus:outline-none bg-white rounded-lg border border-gray-200 hover:bg-gray-100 hover:text-blue-700 focus:z-10 focus:ring-4 focus:ring-gray-100 dark:focus:ring-gray-700 dark:bg-gray-800 dark:text-gray-400 dark:border-gray-600 dark:hover:text-white dark:hover:bg-gray-700">
                            Move Order Creation Form </a>
                    </li>
                    <li>
                        <a href="#"
                            class="block px-4 py-2 m-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Earnings</a>
                    </li>
                    <li>
                        <a href="#"
                            class="block px-4 py-2 m-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Sign
                            out</a>
                    </li>
                </ul>
            </div>




            <!-- Gate Entry Master -->


            <button id="gateEntryFormHoverBtn" data-dropdown-toggle="gateEntryHover" data-dropdown-trigger="hover"
                class="text-white bg-blue-700 flex justify-between hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center inline-flex items-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800"
                type="button">Gate Entry Master <svg class="w-2.5 h-2.5 ms-3" aria-hidden="true"
                    xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="m1 1 4 4 4-4" />
                    </>
            </button>

            <!-- Dropdown menu -->
            <div id="gateEntryHover"
                 style="left:20%;     margin-left: 6%; " class="z-10 hidden w-fullt bg-white     w-auto divide-y divide-gray-100 rounded-lg shadow  dark:bg-gray-700">
                <ul class="py-2 text-sm text-gray-700 dark:text-gray-200" aria-labelledby="gateEntryFormHoverBtn">
                    <li>
                        <?php
                        // if ($_SESSION["role"] == "admin" || $role == "admin") {
                        if ($_SESSION["admin_write"] || $role == "admin") {
                            ?>
                            <a type="button" href="gateentryform.php"
                                class="py-2.5 px-5 me-2 mb-2 text-sm font-medium text-gray-900 focus:outline-none bg-white rounded-lg border border-gray-200 hover:bg-gray-100 hover:text-blue-700 focus:z-10 focus:ring-4 focus:ring-gray-100 dark:focus:ring-gray-700 dark:bg-gray-800 dark:text-gray-400 dark:border-gray-600 dark:hover:text-white dark:hover:bg-gray-700">Gate
                                Entry Creation Form</a>
                            <?php
                        }
                        ?>
                    </li>
                    <li>
                        <a href="#"
                            class="block px-4 py-2 m-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Settings</a>
                    </li>
                    <li>
                        <a href="#"
                            class="block px-4 py-2 m-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Earnings</a>
                    </li>
                    <li>
                        <a href="#"
                            class="block px-4 py-2 m-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Sign
                            out</a>
                    </li>
                </ul>
            </div>


            <!-- entry exit from -->

            <button id="gateExitFormBtn" data-dropdown-toggle="GateExitHover" data-dropdown-trigger="hover"
                class="text-white bg-blue-700 flex justify-between hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center inline-flex items-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800"
                type="button">Gate Exit <svg class="w-2.5 h-2.5 ms-3" aria-hidden="true"
                    xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="m1 1 4 4 4-4" />
                </svg>
            </button>

            <!-- Dropdown menu -->
            <div id="GateExitHover"
                 style="left:20%;     margin-left: 6%; " class="z-10 hidden w-fullt bg-white     w-auto divide-y divide-gray-100 rounded-lg shadow  dark:bg-gray-700">
                <ul class="py-2 text-sm text-gray-700 dark:text-gray-200" aria-labelledby="gateExitFormBtn">
                    <li>
                        <a href="#"
                            class="block px-4 py-2 m-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">item
                            master</a>
                    </li>
                    <li>
                        <a href="#"
                            class="block px-4 py-2 m-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Settings</a>
                    </li>
                    <li>
                        <a href="#"
                            class="block px-4 py-2 m-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Earnings</a>
                    </li>
                    <li>
                        <a href="#"
                            class="block px-4 py-2 m-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Sign
                            out</a>
                    </li>
                </ul>
            </div>





            <!-- WarehouseMaster -->


            <button id="wareHuserMasterBtn" data-dropdown-toggle="gateHouseMasterHover" data-dropdown-trigger="hover"
                class="text-white bg-blue-700 flex justify-between hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center inline-flex items-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800"
                type="button">Warehouse master <svg class="w-2.5 h-2.5 ms-3" aria-hidden="true"
                    xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="m1 1 4 4 4-4" />
                </svg>
            </button>

            <!-- Dropdown menu -->
            <div id="gateHouseMasterHover"
                 style="left:20%;     margin-left: 6%; " class="z-10 hidden w-fullt bg-white     w-auto divide-y divide-gray-100 rounded-lg shadow  dark:bg-gray-700">
                <ul class="py-2 text-sm text-gray-700 dark:text-gray-200" aria-labelledby="wareHuserMasterBtn">
                    <li>
                        <a href="#"
                            class="block px-4 py-2 m-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">item
                            master</a>
                    </li>
                    <li>
                        <a href="#"
                            class="block px-4 py-2 m-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Settings</a>
                    </li>
                    <li>
                        <a href="#"
                            class="block px-4 py-2 m-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Earnings</a>
                    </li>
                    <li>
                        <a href="#"
                            class="block px-4 py-2 m-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Sign
                            out</a>
                    </li>
                </ul>
            </div>








            <!-- HR and Admin -->

            <button id="hrAdminHoverBtn" data-dropdown-toggle="hrAdminHover" data-dropdown-trigger="hover"
                class="text-white bg-blue-700 flex justify-between hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center inline-flex items-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800"
                type="button">Item Master <svg class="w-2.5 h-2.5 ms-3" aria-hidden="true"
                    xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="m1 1 4 4 4-4" />
                </svg>
            </button>

            <!-- Dropdown menu -->
            <div id="hrAdminHover"
                 style="left:20%;     margin-left: 6%; " class="z-10 hidden w-fullt bg-white     w-auto divide-y divide-gray-100 rounded-lg shadow  dark:bg-gray-700">
                <ul class="py-2 text-sm text-gray-700 dark:text-gray-200" aria-labelledby="hrAdminHoverBtn">
                    <li>
                        <a href="#"
                            class="block px-4 py-2 m-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">item
                            master</a>
                    </li>
                    <li>
                        <a href="#"
                            class="block px-4 py-2 m-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Settings</a>
                    </li>
                    <li>
                        <a href="#"
                            class="block px-4 py-2 m-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Earnings</a>
                    </li>
                    <li>
                        <a href="#"
                            class="block px-4 py-2 m-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Sign
                            out</a>
                    </li>
                </ul>
            </div>




            <!-- sales master -->


            <button id="salesMasterHoverBtn" data-dropdown-toggle="salesMasterHover" data-dropdown-trigger="hover"
                class="text-white bg-blue-700 flex justify-between hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center inline-flex items-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800"
                type="button">Item Master <svg class="w-2.5 h-2.5 ms-3" aria-hidden="true"
                    xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="m1 1 4 4 4-4" />
                </svg>
            </button>

            <!-- Dropdown menu -->
            <div id="salesMasterHover"
                 style="left:20%;     margin-left: 6%; " class="z-10 hidden w-fullt bg-white     w-auto divide-y divide-gray-100 rounded-lg shadow  dark:bg-gray-700">
                <ul class="py-2 text-sm text-gray-700 dark:text-gray-200" aria-labelledby="salesMasterHoverBtn">
                    <li>
                        <a href="#"
                            class="block px-4 py-2 m-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">item
                            master</a>
                    </li>
                    <li>
                        <a href="#"
                            class="block px-4 py-2 m-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Settings</a>
                    </li>
                    <li>
                        <a href="#"
                            class="block px-4 py-2 m-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Earnings</a>
                    </li>
                    <li>
                        <a href="#"
                            class="block px-4 py-2 m-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Sign
                            out</a>
                    </li>
                </ul>
            </div>





            <!-- purhase  -->





            <button id="purchaseHoverBtn" data-dropdown-toggle="purchaseHover" data-dropdown-trigger="hover"
                class="text-white bg-blue-700 flex justify-between hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center inline-flex items-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800"
                type="button">Purchase <svg class="w-2.5 h-2.5 ms-3" aria-hidden="true"
                    xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="m1 1 4 4 4-4" />
                </svg>
            </button>

            <!-- Dropdown menu -->
            <div id="purchaseHover"
                 style="left:20%;     margin-left: 6%; " class="z-10 hidden w-fullt bg-white     w-auto divide-y divide-gray-100 rounded-lg shadow  dark:bg-gray-700">
                <ul class="py-2 text-sm text-gray-700 dark:text-gray-200" aria-labelledby="purchaseHoverBtn">
                    <li>
                        <a type="submit" href="./createPo.php"
                            class="py-2.5 px-5 me-2 mb-2 text-sm  font-medium text-gray-900 focus:outline-none bg-white rounded-lg border border-gray-200 hover:bg-gray-100 hover:text-blue-700 focus:z-10 focus:ring-4 focus:ring-gray-100 dark:focus:ring-gray-700 dark:bg-gray-800 dark:text-gray-400 dark:border-gray-600 dark:hover:text-white dark:hover:bg-gray-700">
                            Purchase Order Creation Form </a>
                    </li>
                    <li>
                        <?php
                        // if ($_SESSION["role"] == "admin" || $role == "admin") {
                        if ($_SESSION["admin_write"]) {
                            ?>
                            <a type="button" href="purchaseorder.php"
                                class="py-2.5 px-5 me-2 mb-2 text-sm font-medium text-gray-900 focus:outline-none bg-white rounded-lg border border-gray-200 hover:bg-gray-100 hover:text-blue-700 focus:z-10 focus:ring-4 focus:ring-gray-100 dark:focus:ring-gray-700 dark:bg-gray-800 dark:text-gray-400 dark:border-gray-600 dark:hover:text-white dark:hover:bg-gray-700">PO
                                Summary History</a>
                            <?php
                        }
                        ?>
                    </li>
                    <li>
                        <a href="#"
                            class="block px-4 py-2 m-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Earnings</a>
                    </li>
                    <li>
                        <a href="#"
                            class="block px-4 py-2 m-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Sign
                            out</a>
                    </li>
                </ul>
            </div>






            <!-- purchase-rewuisition -->




            <button id="prHoverBtn" data-dropdown-toggle="prHover" data-dropdown-trigger="hover"
                class="text-white bg-blue-700 flex justify-between hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center inline-flex items-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800"
                type="button">Purchase requisition <svg class="w-2.5 h-2.5 ms-3" aria-hidden="true"
                    xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="m1 1 4 4 4-4" />
                </svg>
            </button>

            <!-- Dropdown menu -->
            <div id="prHover"
                 style="left:20%;     margin-left: 6%; " class="z-10 hidden w-fullt bg-white     w-auto divide-y divide-gray-100 rounded-lg shadow  dark:bg-gray-700">
                <ul class="py-2 text-sm text-gray-700 dark:text-gray-200" aria-labelledby="prHoverBtn">
                    <li>
                        <?php

                        // if ($_SESSION["role"] == "requisitionGen" || $role == "admin") {
                        if ($_SESSION["store_genrate"] || $role == "admin") {

                            ?>

                            <form action="" method="post">
                                <button type="submit"
                                    class="py-2.5 px-5 me-2 mb-2 text-sm mt-5 font-medium text-gray-900 focus:outline-none bg-white rounded-lg border border-gray-200 hover:bg-gray-100 hover:text-blue-700 focus:z-10 focus:ring-4 focus:ring-gray-100 dark:focus:ring-gray-700 dark:bg-gray-800 dark:text-gray-400 dark:border-gray-600 dark:hover:text-white dark:hover:bg-gray-700">
                                    Requisition Request Creation Form</button>

                            </form>
                        <?php }


                        ?>

                    </li>
                    <li>

                        <a type="button" href="requisition.php"
                            class="py-2.5 px-5 me-2 mb-2 text-sm font-medium text-gray-900 focus:outline-none bg-white rounded-lg border border-gray-200 hover:bg-gray-100 hover:text-blue-700 focus:z-10 focus:ring-4 focus:ring-gray-100 dark:focus:ring-gray-700 dark:bg-gray-800 dark:text-gray-400 dark:border-gray-600 dark:hover:text-white dark:hover:bg-gray-700">Requisition
                            Request Creation Detail Report</a>

                    </li>
                    <li>

                        <?php
                        if ($_SESSION["store_isseuer"] || $role == "admin") {
                            ?>
                            <a type="button" href="mangerApprove.php"
                                class="py-2.5 px-5 me-2 mb-2 text-sm font-medium text-gray-900 focus:outline-none bg-white rounded-lg border border-gray-200 hover:bg-gray-100 hover:text-blue-700 focus:z-10 focus:ring-4 focus:ring-gray-100 dark:focus:ring-gray-700 dark:bg-gray-800 dark:text-gray-400 dark:border-gray-600 dark:hover:text-white dark:hover:bg-gray-700">Item
                                Request Creation Report</a>
                            <?php
                        }
                        ?>
                    </li>
                    <li>
                        <a href="#"
                            class="block px-4 py-2 m-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Sign
                            out</a>
                    </li>
                </ul>
            </div>






            <!-- 
                <a type="submit" href="./createUserForm.php"
                class="py-2.5 px-5 me-2 mb-2 text-sm  font-medium text-gray-900 focus:outline-none bg-white rounded-lg border border-gray-200 hover:bg-gray-100 hover:text-blue-700 focus:z-10 focus:ring-4 focus:ring-gray-100 dark:focus:ring-gray-700 dark:bg-gray-800 dark:text-gray-400 dark:border-gray-600 dark:hover:text-white dark:hover:bg-gray-700">
                User form  </a> -->
        </div>





        <div class="forPieCHart flex mx-auto  bg-gray-100 flex-wrap " style="">


            <h1 class="w-full shadow-md mb-2  h-10 text-xl font-medium text-center ">Management Dashboard</h1>



            <div class="h-full w-full  flex mx-auto  justify-around flex-wrap ">
                <div class="datachart bg-gray-100 " style="width:26rem; height:17rem" id="purchase_order"></div>
                <div class="datachart bg-gray-100 " style="width:26rem; height:17rem" id="item_requests"></div>
                <div class="datachart bg-gray-100 " style="width:26rem; height:17rem" id="pr_requests"></div>
                <!-- <div class="datachart" style="width:26rem; height:17rem" id="Sales_order"></div>
                <div class="datachart" style="width:26rem; height:17rem" id="GRN"></div>
                <div class="datachart" style="width:26rem; height:17rem" id="po_tatreport"></div> -->
            </div>



        </div>


    </div>







    <hr>

    <!-- 
    <div class=" overflow-x-auto shadow-md sm:rounded-lg">
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
    </div> -->







</body>
<script src="https://cdn.jsdelivr.net/npm/flowbite@2.4.1/dist/flowbite.min.js"></script>
<script src="./js/scripts.js"></script>
<script src="./js/jquery.min.js"></script>
<script src="./js/pieLoad.js"></script>

</html>