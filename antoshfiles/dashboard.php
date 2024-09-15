<?php
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}
include('./dbconnection/db.php');

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


$sql = "SELECT * FROM for_office.create_query_form;";


$result = mysqli_query($con,$sql);


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
            class="p-4 whitespace-nowrap 	m-4 flex flex-col rounded">









            <h1 class="font-medium text-2xl"> Roles .</h1>

            <hr>

            <?php


            // if ($_SESSION["role"] == "requisitionGen" || $role == "admin") {
            

            if ($role !== 'txnFormAccess') {

                if ($role !== 'leadGenTest') {





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
                    if ($_SESSION["PO_appover"] || $role == "admin") {
                        ?>



                        <a type="submit" href="./poRequests.php"
                            class="py-2.5 px-5 me-2 mb-2 text-sm  font-medium text-gray-900 focus:outline-none bg-white rounded-lg border border-gray-200 hover:bg-gray-100 hover:text-blue-700 focus:z-10 focus:ring-4 focus:ring-gray-100 dark:focus:ring-gray-700 dark:bg-gray-800 dark:text-gray-400 dark:border-gray-600 dark:hover:text-white dark:hover:bg-gray-700">
                            PO Request approval</a>



                        <?php
                    }
                    ?>

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
                        Bom Creation Form </a>
                    <a type="submit" href="./searchBom.php"
                        class="py-2.5 px-5 me-2 mb-2 text-sm  font-medium text-gray-900 focus:outline-none bg-white rounded-lg border border-gray-200 hover:bg-gray-100 hover:text-blue-700 focus:z-10 focus:ring-4 focus:ring-gray-100 dark:focus:ring-gray-700 dark:bg-gray-800 dark:text-gray-400 dark:border-gray-600 dark:hover:text-white dark:hover:bg-gray-700">
                        BOM Searh Form </a>


                    <a type="submit" href="./supplierForm.php"
                        class="py-2.5 px-5 me-2 mb-2 text-sm  font-medium text-gray-900 focus:outline-none bg-white rounded-lg border border-gray-200 hover:bg-gray-100 hover:text-blue-700 focus:z-10 focus:ring-4 focus:ring-gray-100 dark:focus:ring-gray-700 dark:bg-gray-800 dark:text-gray-400 dark:border-gray-600 dark:hover:text-white dark:hover:bg-gray-700">
                        Sipplier Creation Form </a>

                    <a type="submit" href="./aslCreateForm.php"
                        class="py-2.5 px-5 me-2 mb-2 text-sm  font-medium text-gray-900 focus:outline-none bg-white rounded-lg border border-gray-200 hover:bg-gray-100 hover:text-blue-700 focus:z-10 focus:ring-4 focus:ring-gray-100 dark:focus:ring-gray-700 dark:bg-gray-800 dark:text-gray-400 dark:border-gray-600 dark:hover:text-white dark:hover:bg-gray-700">
                        ASL Create Form</a>

                    <a type="submit" href="./aslSearch.php"
                        class="py-2.5 px-5 me-2 mb-2 text-sm  font-medium text-gray-900 focus:outline-none bg-white rounded-lg border border-gray-200 hover:bg-gray-100 hover:text-blue-700 focus:z-10 focus:ring-4 focus:ring-gray-100 dark:focus:ring-gray-700 dark:bg-gray-800 dark:text-gray-400 dark:border-gray-600 dark:hover:text-white dark:hover:bg-gray-700">
                        ASL Search Form </a>


                    <a type="submit" href="./userMasterSearch.php"
                        class="py-2.5 px-5 me-2 mb-2 text-sm  font-medium text-gray-900 focus:outline-none bg-white rounded-lg border border-gray-200 hover:bg-gray-100 hover:text-blue-700 focus:z-10 focus:ring-4 focus:ring-gray-100 dark:focus:ring-gray-700 dark:bg-gray-800 dark:text-gray-400 dark:border-gray-600 dark:hover:text-white dark:hover:bg-gray-700">
                        User Master Search </a>
                    <a type="submit" href="./itemMasterCreation.php"
                        class="py-2.5 px-5 me-2 mb-2 text-sm  font-medium text-gray-900 focus:outline-none bg-white rounded-lg border border-gray-200 hover:bg-gray-100 hover:text-blue-700 focus:z-10 focus:ring-4 focus:ring-gray-100 dark:focus:ring-gray-700 dark:bg-gray-800 dark:text-gray-400 dark:border-gray-600 dark:hover:text-white dark:hover:bg-gray-700">
                        Item Request Creation Form
                    </a>
                    <a type="submit" href="./searchCreation.php"
                        class="py-2.5 px-5 me-2 mb-2 text-sm  font-medium text-gray-900 focus:outline-none bg-white rounded-lg border border-gray-200 hover:bg-gray-100 hover:text-blue-700 focus:z-10 focus:ring-4 focus:ring-gray-100 dark:focus:ring-gray-700 dark:bg-gray-800 dark:text-gray-400 dark:border-gray-600 dark:hover:text-white dark:hover:bg-gray-700">
                        Search Customer
                    </a>
                    <a type="submit" href="./createEmployee.php"
                        class="py-2.5 px-5 me-2 mb-2 text-sm  font-medium text-gray-900 focus:outline-none bg-white rounded-lg border border-gray-200 hover:bg-gray-100 hover:text-blue-700 focus:z-10 focus:ring-4 focus:ring-gray-100 dark:focus:ring-gray-700 dark:bg-gray-800 dark:text-gray-400 dark:border-gray-600 dark:hover:text-white dark:hover:bg-gray-700">
                        Create Employee
                    </a>
                    <a type="submit" href="./searchEmployee.php"
                        class="py-2.5 px-5 me-2 mb-2 text-sm  font-medium text-gray-900 focus:outline-none bg-white rounded-lg border border-gray-200 hover:bg-gray-100 hover:text-blue-700 focus:z-10 focus:ring-4 focus:ring-gray-100 dark:focus:ring-gray-700 dark:bg-gray-800 dark:text-gray-400 dark:border-gray-600 dark:hover:text-white dark:hover:bg-gray-700">
                        Search Epmloyee
                    </a>
                    <a type="submit" href="./saleOrderForm.php"
                        class="py-2.5 px-5 me-2 mb-2 text-sm  font-medium text-gray-900 focus:outline-none bg-white rounded-lg border border-gray-200 hover:bg-gray-100 hover:text-blue-700 focus:z-10 focus:ring-4 focus:ring-gray-100 dark:focus:ring-gray-700 dark:bg-gray-800 dark:text-gray-400 dark:border-gray-600 dark:hover:text-white dark:hover:bg-gray-700">
                        Sale order form
                    </a>
                    <a type="submit" href="./grnReport.php"
                        class="py-2.5 px-5 me-2 mb-2 text-sm  font-medium text-gray-900 focus:outline-none bg-white rounded-lg border border-gray-200 hover:bg-gray-100 hover:text-blue-700 focus:z-10 focus:ring-4 focus:ring-gray-100 dark:focus:ring-gray-700 dark:bg-gray-800 dark:text-gray-400 dark:border-gray-600 dark:hover:text-white dark:hover:bg-gray-700">
                        Grn Report
                    </a>



                    <?php

                }

                ?>
                <a type="submit" href="./leadGnration.php"
                    class="py-2.5 px-5 me-2 mb-2 text-sm  font-medium text-gray-900 focus:outline-none bg-white rounded-lg border border-gray-200 hover:bg-gray-100 hover:text-blue-700 focus:z-10 focus:ring-4 focus:ring-gray-100 dark:focus:ring-gray-700 dark:bg-gray-800 dark:text-gray-400 dark:border-gray-600 dark:hover:text-white dark:hover:bg-gray-700">
                    Enter Lead Detail
                </a>
                <a type="submit" href="./query_report.php"
                    class="py-2.5 px-5 me-2 mb-2 text-sm  font-medium text-gray-900 focus:outline-none bg-white rounded-lg border border-gray-200 hover:bg-gray-100 hover:text-blue-700 focus:z-10 focus:ring-4 focus:ring-gray-100 dark:focus:ring-gray-700 dark:bg-gray-800 dark:text-gray-400 dark:border-gray-600 dark:hover:text-white dark:hover:bg-gray-700">
                    Query Reports
                </a>

            <?php }


            if ($role !== 'leadGenTest') {


                ?>






                <a type="submit" href="./txnCreation.php"
                    class="py-2.5 px-5 me-2 mb-2 text-sm  font-medium text-gray-900 focus:outline-none bg-white rounded-lg border border-gray-200 hover:bg-gray-100 hover:text-blue-700 focus:z-10 focus:ring-4 focus:ring-gray-100 dark:focus:ring-gray-700 dark:bg-gray-800 dark:text-gray-400 dark:border-gray-600 dark:hover:text-white dark:hover:bg-gray-700">
                    Daily transaction
                </a>

                <?php

            }
            ?>


            <!-- 
                <a type="submit" href="./createUserForm.php"
                class="py-2.5 px-5 me-2 mb-2 text-sm  font-medium text-gray-900 focus:outline-none bg-white rounded-lg border border-gray-200 hover:bg-gray-100 hover:text-blue-700 focus:z-10 focus:ring-4 focus:ring-gray-100 dark:focus:ring-gray-700 dark:bg-gray-800 dark:text-gray-400 dark:border-gray-600 dark:hover:text-white dark:hover:bg-gray-700">
                User form  </a> -->
        </div>





        <div class="forPieCHart w-full flex mx-auto   flex-wrap " style="">


            <h1 class="w-full shadow-md mb-2  h-10 text-xl font-medium text-center ">Management Dashboard</h1>



            <div class="h-full w-full mx-auto  justify-around flex-wrap ">

                <div class="flex justify-center">

                    <a href="./query_report.php">
                        <div class="datachart bg-gray-100" style="width:26rem; height:15rem" id="Lead_status_box">
                        </div>
                    </a>
                </div>

                <div class="block mt-5">

                    <div class="relative overflow-x-auto mt-4 mb-5 ">
                        <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400 ">
                            <thead
                                class="text-xs text-gray-700 whitespace-nowrap uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                                <tr>
                                    <th scope="col" class="px-6 py-3">
                                        S.No
                                    </th>
                                    <th scope="col" class="px-6 py-3">
                                        Created By
                                    </th>
                                    <th scope="col" class="px-6 py-3">
                                        Created Lead
                                    </th>
                                    <th scope="col" class="px-6 py-3">
                                        Record Number
                                    </th>
                                    <th scope="col" class="px-6 py-3">
                                        Contact Person Deatils
                                    </th>
                                    <th scope="col" class="px-6 py-3">
                                        Lead Source
                                    </th>
                                    <th scope="col" class="px-6 py-3">
                                        Lead Type
                                    </th>
                                    <th scope="col" class="px-6 py-3">
                                        Assigned To
                                    </th>
                                    <th scope="col" class="px-6 py-3">
                                        Query Received Date
                                    </th>
                                    <th scope="col" class="px-6 py-3">
                                        Query Start Date
                                    </th>
                                    <th scope="col" class="px-6 py-3">
                                        Query End Date
                                    </th>
                                    <th scope="col" class="px-6 py-3">
                                        Follow Up
                                    </th>
                                    <th scope="col" class="px-6 py-3">
                                        Reminder Frequency ( day wise )
                                    </th>
                                    <th scope="col" class="px-6 py-3">
                                        No of times
                                    </th>
                                    <th scope="col" class="px-6 py-3">
                                        Re-query
                                    </th>
                                    <th scope="col" class="px-6 py-3">
                                        Re-query closure Date
                                    </th>
                                    <th scope="col" class="px-6 py-3">
                                        Re-query End Date
                                    </th>
                                    <th scope="col" class="px-6 py-3">
                                        Status
                                    </th>
                                </tr>
                            </thead>
                            <tbody>

                                <?php

                                $i = 0;
                                while ($row = mysqli_fetch_assoc($result)) {
                                    $i++;

                                    ?>


                                    <tr class="bg-white border-b dark:bg-g  ray-800 dark:border-gray-700">


                                        <th scope="row"
                                            class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                            <?php echo $i; ?>
                                        </th>
                                        <th scope="row"
                                            class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                            <?php echo $row['created_by'] ?>
                                        </th>
                                        <td class="px-6 py-4">
                                            <?php echo $row['created_lead'] ?>
                                        </td>
                                        <td class="px-6 py-4">
                                            <?php echo $row['record_no'] ?>
                                        </td>
                                        <td class="px-6 py-4">
                                            <?php echo $row['contact_person_details'] ?>
                                        </td>
                                        <td class="px-6 py-4">
                                            <?php echo $row['lead_source'] ?>
                                        </td>
                                        <td class="px-6 py-4">
                                            <?php echo $row['lead_type'] ?>
                                        </td>
                                        <td class="px-6 py-4">
                                            <?php echo $row['assigned_to'] ?>
                                        </td>
                                        <td class="px-6 py-4">
                                            <?php echo $row['query_received_date'] ?>
                                        </td>
                                        <td class="px-6 py-4">
                                            <?php echo $row['query_start_date'] ?>
                                        </td>
                                        <td class="px-6 py-4">
                                            <?php echo $row['query_end_date'] ?>
                                        </td>
                                        <td class="px-6 py-4">
                                            <?php echo $row['follow_up'] ?>
                                        </td>
                                        <td class="px-6 py-4">
                                            Day in
                                            <?php echo $row['followup_reminder_frequency'] ?>
                                        </td>
                                        <td class="px-6 py-4">
                                            <?php echo $row['no_of_times'] ?>
                                        </td>
                                        <td class="px-6 py-4">
                                            <?php echo $row['re_query'] ?>
                                        </td>
                                        <td class="px-6 py-4">
                                            <?php echo $row['re_query_closure_date'] ?>
                                        </td>
                                        <td class="px-6 py-4">
                                            <?php echo $row['re_query_end_date'] ?>
                                        </td>
                                        <td class="px-6 py-4">
                                            <?php echo $row['status'] ?>
                                        </td>

                                    </tr>




                                    <?php
                                }


                                ?>

                            </tbody>
                        </table>
                    </div>

                </div>

                <?php if ($role !== 'leadGenTest') {
                    ?>
                    <a href="./purchaseorder.php">
                        <div class="datachart bg-gray-100 " style="width:26rem; height:17rem" id="purchase_order"></div>
                    </a>
                    <a href="./mangerApprove.php">
                        <div class="datachart bg-gray-100 " style="width:26rem; height:17rem" id="item_requests"></div>
                    </a>
                    <a href="./requisition.php">
                        <div class="datachart bg-gray-100 " style="width:26rem; height:17rem" id="pr_requests"></div>
                    </a>
                    <a href="./grnReport.php">
                        <div class="datachart bg-gray-100 " style="width:26rem; height:17rem" id="GRN_status"></div>
                    </a>

                    <!-- <div class="datachart bg-gray-100 " style="width:26rem; height:17rem" id="daily_txn_book"></div> -->



                <?php } ?>



                <!-- <a href="./grnReport.php">
                    <div class="datachart bg-gray-100 " style="width:26rem; height:17rem" id="testChart"></div>
                </a> -->
                <!-- <div class="datachart" style="width:26rem; height:17rem" id="Sales_order"></div>
                <div class="datachart" style="width:26rem; height:17rem" id="GRN"></div>
                <div class="datachart" style="width:26rem; height:17rem" id="po_tatreport"></div> -->
            </div>

        </div>


    </div>







    <hr>








</body>
<script src="https://cdn.jsdelivr.net/npm/flowbite@2.4.1/dist/flowbite.min.js"></script>
<script src="./js/scripts.js"></script>
<script src="./js/jquery.min.js"></script>
<script src="./js/pieLoad.js"></script>

<!-- 
<script type="text/javascript">
    google.charts.load('current', {
        'packages': ['corechart']
    });
    google.charts.setOnLoadCallback(drawChart);

    function drawChart() {

        var data = google.visualization.arrayToDataTable([
            ['Task', 'Hours per Day'],
            ['Work', 11],
            ['Eat', 2],
            ['Commute', 2],
            ['Watch TV', 2],
            ['Sleep', 7]
        ]);

        var options = {
            title: 'My Daily Activities',
            is3D:true,
            chartArea: {
                left: 25    ,
                top: 25,
                width: '100%',
                height: '100%'
            }

        };

        var chart = new google.visualization.PieChart(document.getElementById('testChart'));

        chart.draw(data, options);
    }
</script> -->

</html>