<?php
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}

if (!isset($_SESSION["username"])) {
    header("location:login.php");
}


$current_uri = basename($_SERVER['REQUEST_URI']) ;





// echo  $_SESSION["role"];

$role =  $_SESSION["role"];




?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.0.4/dist/tailwind.min.css" rel="stylesheet">
    <title>navbar</title>
</head>

<body>




    <nav class="bg-white mb-2 dark:bg-gray-900 sticky w-full z-20 top-0 start-0 border-b border-gray-200 dark:border-gray-600">
        <!-- <span class="self-center text-red-700 text-2xl font-semibold whitespace-nowrap dark:text-white"> role is : <?php echo $_SESSION["role"] ?> </span> -->
        <div class="max-w-screen-xl flex flex-wrap items-center justify-between mx-auto p-4">


            <a href="https://flowbite.com/" class="flex items-center space-x-3 rtl:space-x-reverse">

            </a>
            <span class="self-center text-2xl font-semibold whitespace-nowrap dark:text-white">  Hello <?php  echo  $_SESSION['username'] ?></span>
            <div class="flex md:order-2 space-x-3 md:space-x-0 rtl:space-x-reverse">
            

                <button data-collapse-toggle="navbar-sticky" type="button" class="inline-flex items-center p-2 w-10 h-10 justify-center text-sm text-gray-500 rounded-lg md:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600" aria-controls="navbar-sticky" aria-expanded="false">
                    <span class="sr-only">Open main menu</span>
                    <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 17 14">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 1h15M1 7h15M1 13h15" />
                    </svg>
                </button>
            </div>
            <div class="items-center justify-between hidden w-full md:flex md:w-auto md:order-1" id="navbar-sticky">
                <ul class="flex flex-col p-4 md:p-0 mt-4 font-medium border border-gray-100 rounded-lg bg-gray-50 md:space-x-8 rtl:space-x-reverse md:flex-row md:mt-0 md:border-0 md:bg-white dark:bg-gray-800 md:dark:bg-gray-900 dark:border-gray-700">
                    <li>
                        <a href="./dashboard.php" class="block py-2 px-3 text-black bg-blue-700 rounded md:bg-transparent <?php if($current_uri=="dashboard.php"){echo "md:text-blue-700"; }  else{echo "md:text-black";}  ?> md:p-0 md:dark:text-blue-500" aria-current="page">Home</a>
                    </li>

                    <?php

                    if (isset($_SESSION["newRecordId"])) {

                        // if ($role == "requisitionGen") {
                        if ($_SESSION["store_genrate"]) {
                    ?>
                            <li>
                                <a href="./genrate_requisition.php" class="block py-2 px-3 text-gray-900  rounded hover:bg-gray-100 md:hover:bg-transparent md:hover:text-blue-700 md:p-0 md:dark:hover:text-blue-500 dark:text-white dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-700">Generate Requistition</a>
                            </li>
                    <?php

                        }
                    }
                    ?>

                    <!-- <?php
                    if (($_SESSION["admin_viewOnly"] || $_SESSION["admin_write"] || $role == "admin")) {
                    ?>

                        <li>
                            <a href="users_form.php" class="block py-2 px-3 text-gray-900  rounded hover:bg-gray-100  md:hover:bg-transparent <?php if($current_uri=="users_form.php"){echo "md:text-blue-700"; }  else{echo "md:text-black";}  ?> md:hover:text-blue-700 md:p-0 md:dark:hover:text-blue-500 dark:text-white dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-700">Users</a>
                        </li>




                    <?php   } ?> -->
                    <li>
                        <a href="./requisition.php" class="block py-2 px-3 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent <?php if($current_uri=="requisition.php"){echo "md:text-blue-700"; }  else{echo "md:text-black";}  ?> md:hover:text-blue-700 md:p-0 md:dark:hover:text-blue-500 dark:text-white dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-700">History</a>
                    </li>


                    <?php

                    if ($_SESSION["store_manager"] || $role == "admin") {

                    ?>
                        <li>
                            <a href="./storemanager.php" class="block py-2 px-3 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent <?php if($current_uri=="storemanager.php"){echo "md:text-blue-700"; }  else{echo "md:text-black";}  ?> md:hover:text-blue-700 md:p-0 md:dark:hover:text-blue-500 dark:text-white dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-700">Store manager view </a>
                        </li>
                    <?php } ?>


                    <?php

                    // if ($role == "storeIssuer" || $role == "admin") {
                    if ($_SESSION["store_isseuer"] || $role == "admin") {

                    ?>

                        <li>
                            <a href="./storeIsseuer.php" class="block py-2 px-3 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent <?php if($current_uri=="storeIsseuer.php"){echo "md:text-blue-700"; }  else{echo "md:text-black";}  ?> md:hover:text-blue-700 md:p-0 md:dark:hover:text-blue-500 dark:text-white dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-700">Store issuer</a>
                        </li>

                    <?php


                    } ?>


    <!-- 
                    <li>
                        <a href="./itemAdd.php" class="block py-2 px-3 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:hover:text-blue-700 <?php if($current_uri=="itemAdd.php"){echo "md:text-blue-700"; }  else{echo "md:text-black";}  ?> md:p-0 md:dark:hover:text-blue-500 dark:text-white dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-700">item add</a>
                    </li> -->




                
                    <li>
                        <a href="./allitems.php" class="block py-2 px-3 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent <?php if($current_uri=="allitems.php"){echo "md:text-blue-700"; }  else{echo "md:text-black";}  ?> md:hover:text-blue-700  md:p-0 md:dark:hover:text-blue-500 dark:text-white dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-700">item master</a>
                    </li>


                    <a href="logout.php" type="button" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-4 py-2 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Logout</a>
                </ul>
            </div>
        </div>
    </nav>





    </div>








</body>
<script src="https://cdn.jsdelivr.net/npm/flowbite@2.4.1/dist/flowbite.min.js"></script>


</html>