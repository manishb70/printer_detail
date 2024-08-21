<?php
session_start();
include("db_connection.php");



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
                        <h1 class="py-4 text-3xl font-bold text-center text-gray-800 dark:text-white">Update item</h1>


                        <!-- <form action="#" method="POST">

                        <button type="submit" name="newRequisitionGenrate" >Genrate New Record</button>



                        </form> -->

                        <div class="mb-4 mt-4 md:flex  md:justify-between">
                            <div class="mb-4 md:mr-2  md:mb-0">
                                <label class="block mb-2 text-sm name font-bold text-gray-700 dark:text-white" for="firstName">
                                    Item Code
                                </label>
                                <input name="departmentName" id="itecode_id" companyid="<?php echo 1; ?>" class="w-full color-black  px-3 py-2 text-sm leading-tight text-gray-700 dark:text-white border rounded shadow appearance-none focus:outline-none focus:shadow-outline" id="firstName" type="txt" placeholder="Enter department" value="<?php echo $_GET['id']  ?>" />


                            </div>
                            <button onclick="updateFieldDataSet(1)">Get</button>
                            <div class="mb-4 md:mr-2 max-w-1 md:mb-0">
                                <label class="block mb-2 text-sm name font-bold bg-blue-300 text-gray-700 dark:text-white" for="firstName">
                                    Short Discription
                                </label>
                                <input name="company_name" disabled class="w-full px-3 py-2 text-sm leading-tight text-gray-700 dark:text-white border rounded shadow appearance-none focus:outline-none focus:shadow-outline" id="firstName" type="number" />
                            </div>

                        </div>
                        <form id="" action="#" method="post" class="px-8 pt-6 pb-8 mb-4 bg-white dark:bg-gray-800 rounded">

                            <div>

                                <div id="rowItem" class="mb-4 mt-4 md:flex bg-blue-300 flex flex-wrap  md:justify-between">


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


                            <div class="mb-4 mt-4 md:flex  md:justify-between">

                            </div>
                            <div class="mb-6 mt-3 text-center">
                                <button name="recordSubmit" style=" background-color: green;" class="w-full px-4 py-2 font-bold text-white bg-blue-500 rounded-full hover:bg-blue-700 dark:bg-blue-700 dark:text-white dark:hover:bg-blue-900 focus:outline-none focus:shadow-outline" type="submit">
                                    update
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
<script src="./js/updateItem.js"></script>

</html>