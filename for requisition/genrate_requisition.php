<?php
session_start();
include("db_connection.php");








$_SESSION["AddRowData"] = true;

if ($_SESSION["newRecordId"] == "") {


    header("location:dashboard.php");
}

if (!isset($_SESSION["newRecordId"])) {
    header("location:dashboard.php");
} elseif (!isset($_SESSION["username"])) {
    header("location:login.php");
}

// echo "this is genrate requisition page";

// if ($_SERVER['REQUEST_METHOD'] == 'POST') {






if (isset($_POST["newRequisitionGenrate"])) {



    if ($_POST["type"] == "newGenrate") {



        $user = $_SESSION["username"];


        $current_date = date("y-m-d");


        $created_by = $_SESSION["username"];
        $created_date = date("y-m-d");
        $department = $_POST["department"];
        $item_name = $_POST["item_name"];
        // $item_id =  $record_id.$_POST["item_name"] ;
        $item_id =  1;
        $user_remarks = $_POST["User_Remarks"];
        $department_id = 1;
        // $requisitionType = "SCH";
        // $requisitionId = 1
        $project_id = $_POST["project_id"];
        $Quantity = $_POST["quantity"];
        // $user_remarks = "";

        // $record_id = $_SESSION["record_id"];


        $sql = "INSERT INTO requisition_table (created_by,created_date, department_name,department_id,item_name, item_code, quantity, user_remarks,record_id,project_id) VALUES ('$created_by', '$created_date', '$department', $department_id,'$item_name', $item_id, $Quantity,'$user_remarks',$record_id,$project_id)";



        $result = mysqli_query($con, $sql);



        if ($result) {

            echo "\nitem requisition is  is created is success fully";
        }
    }
} else if (isset($_POST["recordSubmit"])) {


    $recordId = $_SESSION['newRecordId'];









    $created_by = $_SESSION["username"];
    $created_date = date("y-m-d");
    // $newRequisitionInsert = "newRequisitionInsert";
    $recordId =  $_SESSION["newRecordId"];
    $newProjectId =  $_POST["project_id"];
    $NewItenName =  $_POST["item_name"];
    $newitemQuantity =  $_POST["quantity"];
    // $newItemNeedDate =  $_POST["newItemNeedDate"];
    $newItemUserRemarks =  $_POST["User_Remarks"];
    $departMentId =  1;
    $departMentname =  "HR";
    // $departMentname =  $_POST["departmentName"];
    $newItemId = 1;






    $sql = "INSERT INTO requisition_table (created_by,created_date, department_name,department_id,item_name, item_code, quantity, user_remarks,record_id,project_id) 
        VALUES ('$created_by', '$created_date', '$departMentname', $departMentId,'$NewItenName',$newItemId,$newitemQuantity,'$newItemUserRemarks',$recordId,$newProjectId)";



    $result1 = mysqli_query($con, $sql);



    if (mysqli_query($con, $sql)) {

        echo "success";
    } else {
        echo "error when sql insert";
    }










    $sqlForrecordStatus = "update requisition_table_header set recordStatus='inProcess' where record_id=$recordId;";
    try {


        if (mysqli_query($con, $sqlForrecordStatus)) {

            echo "<script> alert('submit  success')</script>";
            $_SESSION["newRecordId"] = "";
            header("location:dashboard.php");
        } else {
            echo "<script> alert('submit operation is not fullfield')</script>";
        }


        //code...
    } catch (\Throwable $th) {
        //throw $th;
    }
} else if (isset($_POST["drafRecord"])) {

    $recordId = $_SESSION['newRecordId'];

    $sql = "update requisition_table_header set recordStatus='draft' where record_id=$recordId";

    if (mysqli_query($con, $sql)) {

        echo "<script> alert('draft  success')</script>";
    } else {
        echo "<script> alert('daft operation is not fullfield')</script>";
    }
}






// $sql = "SELECT * FROM "




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

    <?php require("./navForLogged.php") ?>








    <div class="h-full bg-gray-400 dark:bg-gray-900">
        <!-- Container -->
        <div class="mx-auto">
            <div class="flex justify-center px-6 py-12">
                <!-- Row -->
                <div class="w-full lg:w-11/12 flex">
                    <!-- Col -->

                    <!-- Col -->
                    <div class="w-full  bg-white dark:bg-gray-700 p-5 rounded-lg lg:rounded-l-none">
                        <h1 class="py-4 text-3xl font-bold text-center text-gray-800 dark:text-white">Requisition Request form</h1>


                        <!-- <form action="#" method="POST">

                        <button type="submit" name="newRequisitionGenrate" >Genrate New Record</button>



                        </form> -->

                        <div class="mb-4 mt-4 md:flex  md:justify-between">
                            <div class="mb-4 md:mr-2  md:mb-0">
                                <label class="block mb-2 text-sm name font-bold text-gray-700 dark:text-white" for="firstName">
                                    Department
                                </label>
                                <input name="departmentName" id="departmentName" companyid="<?php echo 1; ?>" class="w-full color-black  px-3 py-2 text-sm leading-tight text-gray-700 dark:text-white border rounded shadow appearance-none focus:outline-none focus:shadow-outline" id="firstName" type="txt" placeholder="Enter department" value="hr" />
                            </div>

                            <div class="mb-4 md:mr-2 max-w-1 md:mb-0">
                                <label class="block mb-2 text-sm name font-bold bg-blue-300 text-gray-700 dark:text-white" for="firstName">
                                    Record Number
                                </label>
                                <input name="company_name" disabled class="w-full px-3 py-2 text-sm leading-tight text-gray-700 dark:text-white border rounded shadow appearance-none focus:outline-none focus:shadow-outline" id="firstName" type="number" value="<?php echo  $_SESSION["newRecordId"]; ?>" />
                            </div>

                        </div>
                        <form id="" action="#" method="post" class="px-8 pt-6 pb-8 mb-4 bg-white dark:bg-gray-800 rounded">

                            <div id="rowItem">

                                <div class="mb-4 mt-4 md:flex bg-blue-300  md:justify-between">


                                    <div class="mb-4 md:mr-2 max-w-1 md:mb-0">
                                        <label class="block mb-2 text-sm name font-bold bg-blue-300 text-gray-700 dark:text-white" for="firstName">
                                            S.No
                                        </label>
                                        <input name="company_name" class="w-full px-3 py-2 text-sm leading-tight text-gray-700 dark:text-white border rounded shadow appearance-none focus:outline-none focus:shadow-outline" id="firstName" type="number" value="1" />
                                    </div>

                                    <div class="mb-4 md:mr-2 md:mb-0">
                                        <label class="block mb-2 text-sm name font-bold text-gray-700 dark:text-white" for="firstName">
                                            Project Id
                                        </label>
                                        <input name="project_id" class="w-full px-3 py-2 text-sm leading-tight text-gray-700 dark:text-white border rounded shadow appearance-none focus:outline-none focus:shadow-outline" value="00" id="firstName" type="number" placeholder="project id" />
                                    </div>
                                    <div class="md:ml-2">
                                        <label class="block mb-2 text-sm font-bold text-gray-700 dark:text-white" for="lastName">
                                            Item_Name
                                        </label>
                                        <input name="item_name" required class="w-full px-3 py-2 text-sm leading-tight text-gray-700 dark:text-white border rounded shadow appearance-none focus:outline-none focus:shadow-outline" id="firstName" type="text" placeholder="Item name" />
                                    </div>
                                    <div class="md:ml-2">
                                        <label class="block mb-2 text-sm font-bold text-gray-700 dark:text-white" for="lastName">
                                            Short discription
                                        </label>
                                        <input name="item_name" required class="w-full px-3 py-2 text-sm leading-tight text-gray-700 dark:text-white border rounded shadow appearance-none focus:outline-none focus:shadow-outline" id="firstName" type="text" placeholder="Short discription" />
                                    </div>

                                    <div class="mb-4 ml-2">
                                        <label class="block mb-2 text-sm font-bold text-gray-700 dark:text-white" for="email">
                                            Quantity

                                        </label>
                                        <input name="quantity" required class="w-full px-3 py-2 mb-3 text-sm leading-tight text-gray-700 dark:text-white border rounded shadow appearance-none focus:outline-none focus:shadow-outline" id="quantity" type="number" placeholder="quantity" />
                                    </div>
                                    <div class="mb-4 ml-2">
                                        <label class="block mb-2 text-sm font-bold text-gray-700 dark:text-white" for="email">

                                            User Remarks

                                        </label>
                                        <input name="User_Remarks" required class="w-full px-3 py-2 mb-3 text-sm leading-tight text-gray-700 dark:text-white border rounded shadow appearance-none focus:outline-none focus:shadow-outline" id="email" type="txt" placeholder="User_Remarks" />
                                    </div>




                                    <div class="mb-4 md:mr-2  ml-2 md:mb-0">
                                        <label class="block mb-2 text-sm name font-bold text-gray-700 dark:text-white" for="firstName">
                                            Need by date
                                        </label>
                                        <input type="date" name="department" class="w-full color-black  px-3 py-2 text-sm leading-tight text-gray-700 dark:text-white border rounded shadow appearance-none focus:outline-none focus:shadow-outline" id="firstName" type="txt" placeholder="Enter department" value="" />
                                    </div>
                                </div>


                            </div>

                            <?php

                            if ($_SESSION["AddRowData"]) {
                                echo '<a data-modal-target="crud-modal" id="addRowBtn"  data-modal-toggle="crud-modal" class="cursor-pointer"> + Add row </a> ';
                            } ?>
                            <div class="mb-4 mt-4 md:flex  md:justify-between">
                                <div class="mb-6 mt-3 text-center">
                                    <button style=" background-color: green;" class="w-full px-4 py-2 font-bold text-white bg-blue-500 rounded-full hover:bg-blue-700 dark:bg-blue-700 dark:text-white dark:hover:bg-blue-900 focus:outline-none focus:shadow-outline" name="drafRecord" type="submit">
                                        Save
                                    </button>
                                </div>
                                <div class="mb-6 mt-3 text-center">
                                    <button name="recordSubmit" style=" background-color: green;" class="w-full px-4 py-2 font-bold text-white bg-blue-500 rounded-full hover:bg-blue-700 dark:bg-blue-700 dark:text-white dark:hover:bg-blue-900 focus:outline-none focus:shadow-outline" type="submit">
                                        Submit
                                    </button>
                                </div>

                            </div>
                            <hr class="mb-6 border-t" />
                        </form>



                    </div>
                </div>
            </div>
        </div>
    </div>
    <div id="crud-modal" tabindex="-1" aria-hidden="true" class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">


        <div class="relative p-4 w-full max-w-md max-h-full">
            <!-- Modal content -->
            <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
                <!-- Modal header -->
                <div class="flex items-center justify-between p-4 md:p-5 border-b rounded-t dark:border-gray-600">
                    <h3 class="text-lg font-semibold text-gray-900 dark:text-white">
                        Create New Product
                    </h3>
                    <button type="button" id="clos_hover" class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white" data-modal-toggle="crud-modal">
                        <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
                        </svg>

                    </button>
                </div>
                <!-- Modal body -->
                <div action="#" method="post" class="px-8 pt-6 pb-8 mb-4 bg-white dark:bg-gray-800 rounded">




                    <div class="mb-4 md:mr-2  md:mb-0">
                        <label class="block mb-2 text-sm name font-bold text-gray-700 dark:text-white" for="firstName">
                            Project Id
                        </label>
                        <input name="Project_Id" id="newProjectId" class="w-full color-black  px-3 py-2 text-sm leading-tight text-gray-700 dark:text-white border rounded shadow appearance-none focus:outline-none focus:shadow-outline" id="Project Id" type="number" placeholder="Project Id" value="" />
                    </div>
                    <div class="mb-4 md:mr-2  md:mb-0">
                        <label class="block mb-2 text-sm name font-bold text-gray-700 dark:text-white" for="firstName">
                            Item name
                        </label>
                        <input name="newItemName" required itemId="<?php echo 10; ?>" required id="NewItenName" class="w-full color-black  px-3 py-2 text-sm leading-tight text-gray-700 dark:text-white border rounded shadow appearance-none focus:outline-none focus:shadow-outline" id="newItemName" type="txt" placeholder="Item name" value="" />
                    </div>

                    <div class="mb-4 md:mr-2  md:mb-0">
                        <label class="block mb-2 text-sm name font-bold text-gray-700 dark:text-white" for="firstName">
                            Quantity
                        </label>
                        <input name="quantity" id="newitemQuantity" class="w-full color-black  px-3 py-2 text-sm leading-tight text-gray-700 dark:text-white border rounded shadow appearance-none focus:outline-none focus:shadow-outline" type="number" placeholder="Item name" required />
                    </div>


                    <div class="mb-4 md:mr-2  md:mb-0">
                        <label class="block mb-2 text-sm name font-bold text-gray-700 dark:text-white" for="firstName">
                            Need By date
                        </label>
                        <input name="newNeedByDate" id="newItemNeedDate" class="w-full color-black  px-3 py-2 text-sm leading-tight text-gray-700 dark:text-white border rounded shadow appearance-none focus:outline-none focus:shadow-outline" id="newNeedByDate" type="date" placeholder="Enter department" value="" />
                    </div>

                    <div class="mb-4 md:mr-2  md:mb-0">
                        <label class="block mb-2 text-sm name font-bold text-gray-700 dark:text-white" for="firstName">
                            User remarks
                        </label>
                        <input name="NewUserRemark" class="w-full color-black  px-3 py-2 text-sm leading-tight text-gray-700 dark:text-white border rounded shadow appearance-none focus:outline-none focus:shadow-outline" id="newItemUserRemarks" type="txt" placeholder="User remarks" />
                    </div>


                    <div class="mb-6 mt-3 text-center">
                        <button style="background-color: green;" onclick="submitRowToAddAndAjax(event)" class="w-full px-4 py-2 font-bold text-white bg-blue-500 rounded-full hover:bg-blue-700 dark:bg-blue-700 dark:text-white dark:hover:bg-blue-900 focus:outline-none focus:shadow-outline" name="newRequisitionGenrate" type="submit">
                            Submit
                        </button>
                    </div>
                    <hr class="mb-6 border-t" />
                    </d>
                </div>
            </div>
        </div>


        <!-- <button data-modal-target="crud-modal" data-modal-toggle="crud-modal"> click to open</button> -->


</body>




<script src="https://cdn.jsdelivr.net/npm/flowbite@2.4.1/dist/flowbite.min.js"></script>
<script src="./js/scripts.js"></script>
<script src="./js/jquery.min.js"></script>

</html>