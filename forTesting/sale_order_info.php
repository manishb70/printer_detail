<?php

include("../db.php");





if ($_SERVER['REQUEST_METHOD'] == 'POST') {




    $username = $_POST['User_name'];
    $user_address = $_POST['user_address'];
    $user_phone_number =  $_POST["user_phone_number"];
    $user_email = $_POST['user_email'];
    $item_required = $_POST['item_required'];
    $item_shape = $_POST['item_shape'];
    $item_size = $_POST['item_size'];
    $item_height = $_POST["item_height"];
    $item_finish = $_POST["item_finish"];
    $installation_is_required = $_POST["installation_is_required"];
    $installation_need_by_date = $_POST["installatio_need_by_date"];
    $query_received =  $_POST["query_recieved"];
    $query_start_date = $_POST["query_start_date"];
    $query_updated_date = date("y-m-d");
    $query_created_by = "SYSTEM";
    $query_updated_by = "SYSTEM";
    $quotation_shared_date = $_POST["quotaion_shared_date"];
    $re_query = $_POST["re_query"];
    $re_query_closure_date = $_POST['re_query_closure_date'];
    $followup = $_POST['followup'];
    $query_end_date = $_POST["query_end_date"];
    $project_status = $_POST['project_status'];
    $tentative_installation = $_POST["tentative_installation"];
    $installation_date = $_POST["installation_date"];
    $item_type = $_POST["item_type"];
    $shop_drawing_start_date = $_POST["shop_drawing_start_date"];
    $shop_drawing_approved  = $_POST["shop_drawing_approved"];
    $sample_approval_start_date  = $_POST["sample_approval_start_date"];
    $sample_approval_date  = $_POST["sample_approval_date"];
    $performance_invoice   = $_POST["perfomance_invoice"];
    $assemble_start_date  = $_POST["assemble_start_date"];
    $assemble_completion_date  = $_POST["assemble_compition_date"];
    $dismantle_start_date  = $_POST["dismantal_start_date"];
    $dismantle_completion_date  = $_POST["disamental_complition_date"];
    $packed_start_date  = $_POST["packed_start_date"];
    $packed_completion_date  = $_POST["packed_completion_date"];
    $created_by = "system";
    $updated_by = "system";
    $created_date = date("y-m-d");
    $updated_date = date("y-m-d");
    $remarks = $_POST["remarks"];










    $sql = "INSERT INTO sale_order_table (User_name, user_address, user_phone_number, user_email, item_required, item_shape, item_size, item_height, item_finish, installation_is_required, installatio_need_by_date, query_recieved, query_start_date, query_updated_date, query_created_by, query_updated_by, quotaion_shared_date, re_query, re_query_closure_date, followup, query_end_date, project_status, tentative_installation, installation_date, item_type, shop_drawing_start_date, shop_drawing_approved, sample_approval_start_date, sample_approval_date, perfomance_invoice, assemble_start_date, assemble_compition_date, dismantal_start_date, disamental_complition_date, packed_start_date, packed_completion_date, remarks, created_by, created_date, updated_by, updated_date) VALUES ('$username', '$user_address', '$user_phone_number', '$user_email', '$item_required', '$item_shape', '$item_size', '$item_height', '$item_finish', '$installation_is_required', '$installation_need_by_date', '$query_received', '$query_start_date', '$query_updated_date', '$query_created_by', '$query_updated_by', '$quotation_shared_date', '$re_query', '$re_query_closure_date', '$followup', '$query_end_date', '$project_status', '$tentative_installation', '$installation_date', '$item_type', '$shop_drawing_start_date', '$shop_drawing_approved', '$sample_approval_start_date', '$sample_approval_date', '$performance_invoice', '$assemble_start_date', '$assemble_completion_date', '$dismantle_start_date', '$dismantle_completion_date', '$packed_start_date', '$packed_completion_date', '$remarks', '$created_by', '$created_date', '$updated_by', '$updated_date');";




    $result = mysqli_query($con,$sql);



        if($result){


            echo "data is success fully insreted <br>" ;

            echo  "The project id is : ";
            echo mysqli_insert_id($con);


        }else{

                    echo "data is not insterted";


        }
























    // echo "<br> Username: $username\n";
    // echo "<br> User Address: $user_address\n";
    // echo "<br> User Phone Number: $user_phone_number";
    // echo "<br> User Email: $user_email\n";
    // echo "<br> Item Required: $item_required\n";
    // echo "<br> Item Shape: $item_shape\n";
    // echo "<br> Item Size: $item_size\n";
    // echo "<br> Item Height: $item_height\n";
    // echo "<br> Item Finish: $item_finish\n";
    // echo "<br> Installation Is Required: $installation_is_required\n";
    // echo "<br> Installation Need By Date: $installation_need_by_date\n";
    // echo "<br> Query Received: $query_received\n";
    // echo "<br> Query Start Date: $query_start_date\n";
    // echo "<br> Query Updated Date: $query_updated_date\n";
    // echo "<br> Query Created By: $query_created_by\n";
    // echo "<br> Query Updated By: $query_updated_by\n";
    // echo "<br> Quotation Shared Date: $quotation_shared_date\n";
    // echo "<br> Re Query: $re_query\n";
    // echo "<br> Re Query Closure Date: $re_query_closure_date\n";
    // echo "<br> Followup: $followup\n";
    // echo "<br> Query End Date: $query_end_date\n";
    // echo "<br> Project Status: $project_status\n";
    // echo "<br> Tentative Installation: $tentative_installation\n";
    // echo "<br> Installation Date: $installation_date\n";
    // echo "<br> Item Type: $item_type\n";
    // echo "<br> Shop Drawing Start Date: $shop_drawing_start_date\n";
    // echo "<br> Shop Drawing Approved: $shop_drawing_approved\n";
    // echo "<br> Sample Approval Start Date: $sample_approval_start_date\n";
    // echo "<br> Sample Approval Date: $sample_approval_date\n";
    // echo "<br> Performance Invoice: $performance_invoice\n";
    // echo "<br> Assemble Start Date: $assemble_start_date\n";
    // echo "<br> Assemble Completion Date: $assemble_completion_date\n";
    // echo "<br> Dismantle Start Date: $dismantle_start_date\n";
    // echo "<br> Dismantle Completion Date: $dismantle_completion_date\n";
    // echo "<br> Packed Start Date: $packed_start_date\n";
    // echo "<br> Packed Completion Date: $packed_completion_date\n";
    // echo "<br> Created By: $created_by\n";
    // echo "<br> Updated By: $updated_by\n";
    // echo "<br> Created Date: $created_date\n";
    // echo "<br> Updated Date: $updated_date\n";




}











                    











?>



<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.0.4/dist/tailwind.min.css" rel="stylesheet">
</head>

<body>






    <div class="h-full bg-gray-400 dark:bg-gray-900">
        <!-- Container -->
        <div class="mx-auto">
            <div class="flex justify-center px-6 py-12">
                <!-- Row -->
                <div class="w-full xl:w-3/4 lg:w-11/12 flex">
                    <!-- Col -->
                    <div class="w-full h-auto bg-gray-400 dark:bg-gray-800 hidden lg:block lg:w-5/12 bg-cover rounded-l-lg" style="background-image: url('https://source.unsplash.com/Mv9hjnEUHR4/600x800')"></div>
                    <!-- Col -->
                    <di class="w-full lg:w-7/12 bg-white dark:bg-gray-700 p-5 rounded-lg lg:rounded-l-none">
                        <h3 class="py-4 text-2xl text-center text-gray-800 dark:text-white">Sale order info!</h3>



                        <form action="#" method="post" class="px-8 pt-6 pb-8 mb-4 bg-white dark:bg-gray-800 rounded">

                            <div class="mb-4 md:flex md:justify-between">
                                <div class="mb-4">
                                    <label class="block mb-2 text-sm font-bold text-gray-700 dark:text-white" for="User_name">
                                        Username
                                    </label>
                                    <input name="User_name" class="w-full px-3 py-2 text-sm leading-tight text-gray-700 dark:text-white border rounded shadow appearance-none focus:outline-none focus:shadow-outline" id="User_name" type="text" placeholder="Username" />
                                </div>

                                <div class="mb-4">
                                    <label class="block mb-2 text-sm font-bold text-gray-700 dark:text-white" for="user_address">
                                        User Address
                                    </label>
                                    <input name="user_address" class="w-full px-3 py-2 text-sm leading-tight text-gray-700 dark:text-white border rounded shadow appearance-none focus:outline-none focus:shadow-outline" id="user_address" type="text" placeholder="User Address" />
                                </div>
                            </div>

                            <div class="mb-4 md:flex md:justify-between">
                                <div class="mb-4">
                                    <label class="block mb-2 text-sm font-bold text-gray-700 dark:text-white" for="user_phone_number">
                                        User Phone Number
                                    </label>
                                    <input name="user_phone_number" class="w-full px-3 py-2 text-sm leading-tight text-gray-700 dark:text-white border rounded shadow appearance-none focus:outline-none focus:shadow-outline" id="user_phone_number" type="text" placeholder="User Phone Number" />
                                </div>

                                <div class="mb-4">
                                    <label class="block mb-2 text-sm font-bold text-gray-700 dark:text-white" for="user_email">
                                        User Email
                                    </label>
                                    <input name="user_email" class="w-full px-3 py-2 text-sm leading-tight text-gray-700 dark:text-white border rounded shadow appearance-none focus:outline-none focus:shadow-outline" id="user_email" type="email" placeholder="User Email" />
                                </div>
                            </div>

                            <div class="mb-4 md:flex md:justify-between">
                                <div class="mb-4i">
                                    <label class="block mb-2 text-sm font-bold text-gray-700 dark:text-white" for="item_required">
                                        Item Required
                                    </label>
                                    <input name="item_required" class="w-full px-3 py-2 text-sm leading-tight text-gray-700 dark:text-white border rounded shadow appearance-none focus:outline-none focus:shadow-outline" id="item_required" type="text" placeholder="Item Required" />
                                </div>

                                <div class="mb-4">
                                    <label class="block mb-2 text-sm font-bold text-gray-700 dark:text-white" for="item_shape">
                                        Item Shape
                                    </label>
                                    <input name="item_shape" class="w-full px-3 py-2 text-sm leading-tight text-gray-700 dark:text-white border rounded shadow appearance-none focus:outline-none focus:shadow-outline" id="item_shape" type="text" placeholder="Item Shape" />
                                </div>
                            </div>

                            <div class="mb-4 md:flex md:justify-between">
                                <div class="mb-4">
                                    <label class="block mb-2 text-sm font-bold text-gray-700 dark:text-white" for="item_size">
                                        Item Size
                                    </label>
                                    <input name="item_size" class="w-full px-3 py-2 text-sm leading-tight text-gray-700 dark:text-white border rounded shadow appearance-none focus:outline-none focus:shadow-outline" id="item_size" type="text" placeholder="Item Size" />
                                </div>

                                <div class="mb-4">
                                    <label class="block mb-2 text-sm font-bold text-gray-700 dark:text-white" for="item_height">
                                        Item Height
                                    </label>
                                    <input name="item_height" class="w-full px-3 py-2 text-sm leading-tight text-gray-700 dark:text-white border rounded shadow appearance-none focus:outline-none focus:shadow-outline" id="item_height" type="text" placeholder="Item Height" />
                                </div>
                            </div>

                            <div class="mb-4 md:flex md:justify-between">
                                <div class="mb-4">
                                    <label class="block mb-2 text-sm font-bold text-gray-700 dark:text-white" for="item_finish">
                                        Item Finish
                                    </label>
                                    <input name="item_finish" class="w-full px-3 py-2 text-sm leading-tight text-gray-700 dark:text-white border rounded shadow appearance-none focus:outline-none focus:shadow-outline" id="item_finish" type="text" placeholder="Item Finish" />
                                </div>

                                <div class="mb-4">
                                    <label class="block mb-2 text-sm font-bold text-gray-700 dark:text-white" for="installation_is_required">
                                        Installation is Required
                                    </label>
                                    <input name="installation_is_required" class="w-full px-3 py-2 text-sm leading-tight text-gray-700 dark:text-white border rounded shadow appearance-none focus:outline-none focus:shadow-outline" id="installation_is_required" type="text" placeholder="Installation is Required" />
                                </div>
                            </div>

                            <div class="mb-4 md:flex md:justify-between">
                                <div class="mb-4">
                                    <label class="block mb-2 text-sm font-bold text-gray-700 dark:text-white" for="installatio_need_by_date">
                                        Installation Need by Date
                                    </label>
                                    <input name="installatio_need_by_date" class="w-full px-3 py-2 text-sm leading-tight text-gray-700 dark:text-white border rounded shadow appearance-none focus:outline-none focus:shadow-outline" id="installatio_need_by_date" type="date" placeholder="Installation Need by Date" />
                                </div>

                                <div class="mb-4">
                                    <label class="block mb-2 text-sm font-bold text-gray-700 dark:text-white" for="query_recieved">
                                        Query Received
                                    </label>
                                    <input name="query_recieved" class="w-full px-3 py-2 text-sm leading-tight text-gray-700 dark:text-white border rounded shadow appearance-none focus:outline-none focus:shadow-outline" id="query_recieved" type="text" placeholder="Query Received" />
                                </div>
                            </div>

                            <div class="mb-4 md:flex md:justify-between">
                                <div class="mb-4">
                                    <label class="block mb-2 text-sm font-bold text-gray-700 dark:text-white" for="query_start_date">
                                        Query Start Date
                                    </label>
                                    <input name="query_start_date" class="w-full px-3 py-2 text-sm leading-tight text-gray-700 dark:text-white border rounded shadow appearance-none focus:outline-none focus:shadow-outline" id="query_start_date" type="date" placeholder="Query Start Date" />
                                </div>

                                <div class="mb-4">
                                    <label class="block mb-2 text-sm font-bold text-gray-700 dark:text-white" for="query_updated_date">
                                        Query Updated Date
                                    </label>
                                    <input name="query_updated_date" class="w-full px-3 py-2 text-sm leading-tight text-gray-700 dark:text-white border rounded shadow appearance-none focus:outline-none focus:shadow-outline" id="query_updated_date" type="date" placeholder="Query Updated Date" />
                                </div>
                            </div>

                            <div class="mb-4 md:flex md:justify-between">
                                <div class="mb-4">
                                    <label class="block mb-2 text-sm font-bold text-gray-700 dark:text-white" for="quotaion_shared_date">
                                        Quotation Shared Date
                                    </label>
                                    <input name="quotaion_shared_date" class="w-full px-3 py-2 text-sm leading-tight text-gray-700 dark:text-white border rounded shadow appearance-none focus:outline-none focus:shadow-outline" id="quotaion_shared_date" type="date" placeholder="Quotation Shared Date" />
                                </div>

                                <div class="mb-4">
                                    <label class="block mb-2 text-sm font-bold text-gray-700 dark:text-white" for="re_query">
                                        Re-Query
                                    </label>
                                    <input name="re_query" class="w-full px-3 py-2 text-sm leading-tight text-gray-700 dark:text-white border rounded shadow appearance-none focus:outline-none focus:shadow-outline" id="re_query" type="text" placeholder="Re-Query" />
                                </div>
                            </div>

                            <div class="mb-4 md:flex md:justify-between">
                                <div class="mb-4">
                                    <label class="block mb-2 text-sm font-bold text-gray-700 dark:text-white" for="re_query_closure_date">
                                        Re-Query Closure Date
                                    </label>
                                    <input name="re_query_closure_date" class="w-full px-3 py-2 text-sm leading-tight text-gray-700 dark:text-white border rounded shadow appearance-none focus:outline-none focus:shadow-outline" id="re_query_closure_date" type="date" placeholder="Re-Query Closure Date" />
                                </div>

                                <div class="mb-4">
                                    <label class="block mb-2 text-sm font-bold text-gray-700 dark:text-white" for="followup">
                                        Followup
                                    </label>
                                    <input name="followup" class="w-full px-3 py-2 text-sm leading-tight text-gray-700 dark:text-white border rounded shadow appearance-none focus:outline-none focus:shadow-outline" id="followup" type="text" placeholder="Followup" />
                                </div>
                            </div>

                            <div class="mb-4 md:flex md:justify-between">
                                <div class="mb-4">
                                    <label class="block mb-2 text-sm font-bold text-gray-700 dark:text-white" for="query_end_date">
                                        Query End Date
                                    </label>
                                    <input name="query_end_date" class="w-full px-3 py-2 text-sm leading-tight text-gray-700 dark:text-white border rounded shadow appearance-none focus:outline-none focus:shadow-outline" id="query_end_date" type="date" placeholder="Query End Date" />
                                </div>

                                <div class="mb-4">
                                    <label class="block mb-2 text-sm font-bold text-gray-700 dark:text-white" for="project_status">
                                        Project Status
                                    </label>
                                    <input name="project_status" class="w-full px-3 py-2 text-sm leading-tight text-gray-700 dark:text-white border rounded shadow appearance-none focus:outline-none focus:shadow-outline" id="project_status" type="text" placeholder="Project Status" />
                                </div>
                            </div>

                            <div class="mb-4 md:flex md:justify-between">
                                <div class="mb-4">
                                    <label class="block mb-2 text-sm font-bold text-gray-700 dark:text-white" for="tentative_installation">
                                        Tentative Installation
                                    </label>
                                    <input name="tentative_installation" class="w-full px-3 py-2 text-sm leading-tight text-gray-700 dark:text-white border rounded shadow appearance-none focus:outline-none focus:shadow-outline" id="tentative_installation" type="text" placeholder="Tentative Installation" />
                                </div>

                                <div class="mb-4">
                                    <label class="block mb-2 text-sm font-bold text-gray-700 dark:text-white" for="installation_date">
                                        Installation Date
                                    </label>
                                    <input name="installation_date" class="w-full px-3 py-2 text-sm leading-tight text-gray-700 dark:text-white border rounded shadow appearance-none focus:outline-none focus:shadow-outline" id="installation_date" type="date" placeholder="Installation Date" />
                                </div>
                            </div>

                            <div class="mb-4 md:flex md:justify-between">
                                <div class="mb-4">
                                    <label class="block mb-2 text-sm font-bold text-gray-700 dark:text-white" for="item_type">
                                        Item Type
                                    </label>
                                    <input name="item_type" class="w-full px-3 py-2 text-sm leading-tight text-gray-700 dark:text-white border rounded shadow appearance-none focus:outline-none focus:shadow-outline" id="item_type" type="text" placeholder="Item Type" />
                                </div>

                                <div class="mb-4">
                                    <label class="block mb-2 text-sm font-bold text-gray-700 dark:text-white" for="shop_drawing_start_date">
                                        Shop Drawing Start Date
                                    </label>
                                    <input name="shop_drawing_start_date" class="w-full px-3 py-2 text-sm leading-tight text-gray-700 dark:text-white border rounded shadow appearance-none focus:outline-none focus:shadow-outline" id="shop_drawing_start_date" type="date" placeholder="Shop Drawing Start Date" />
                                </div>
                            </div>

                            <div class="mb-4 md:flex md:justify-between">
                                <div class="mb-4">
                                    <label class="block mb-2 text-sm font-bold text-gray-700 dark:text-white" for="shop_drawing_approved">
                                        Shop Drawing Approved
                                    </label>
                                    <input name="shop_drawing_approved" class="w-full px-3 py-2 text-sm leading-tight text-gray-700 dark:text-white border rounded shadow appearance-none focus:outline-none focus:shadow-outline" id="shop_drawing_approved" type="text" placeholder="Shop Drawing Approved" />
                                </div>

                                <div class="mb-4">
                                    <label class="block mb-2 text-sm font-bold text-gray-700 dark:text-white" for="sample_approval_start_date">
                                        Sample Approval Start Date
                                    </label>
                                    <input name="sample_approval_start_date" class="w-full px-3 py-2 text-sm leading-tight text-gray-700 dark:text-white border rounded shadow appearance-none focus:outline-none focus:shadow-outline" id="sample_approval_start_date" type="date" placeholder="Sample Approval Start Date" />
                                </div>
                            </div>

                            <div class="mb-4 md:flex md:justify-between">
                                <div class="mb-4">
                                    <label class="block mb-2 text-sm font-bold text-gray-700 dark:text-white" for="sample_approval_date">
                                        Sample Approval Date
                                    </label>
                                    <input name="sample_approval_date" class="w-full px-3 py-2 text-sm leading-tight text-gray-700 dark:text-white border rounded shadow appearance-none focus:outline-none focus:shadow-outline" id="sample_approval_date" type="date" placeholder="Sample Approval Date" />
                                </div>

                                <div class="mb-4">
                                    <label class="block mb-2 text-sm font-bold text-gray-700 dark:text-white" for="perfomance_invoice">
                                        Performance Invoice
                                    </label>
                                    <input name="perfomance_invoice" class="w-full px-3 py-2 text-sm leading-tight text-gray-700 dark:text-white border rounded shadow appearance-none focus:outline-none focus:shadow-outline" id="perfomance_invoice" type="text" placeholder="Performance Invoice" />
                                </div>
                            </div>

                            <div class="mb-4 md:flex md:justify-between">
                                <div class="mb-4">
                                    <label class="block mb-2 text-sm font-bold text-gray-700 dark:text-white" for="assemble_start_date">
                                        Assemble Start Date
                                    </label>
                                    <input name="assemble_start_date" class="w-full px-3 py-2 text-sm leading-tight text-gray-700 dark:text-white border rounded shadow appearance-none focus:outline-none focus:shadow-outline" id="assemble_start_date" type="date" placeholder="Assemble Start Date" />
                                </div>

                                <div class="mb-4">
                                    <label class="block mb-2 text-sm font-bold text-gray-700 dark:text-white" for="assemble_compition_date">
                                        Assemble Completion Date
                                    </label>
                                    <input name="assemble_compition_date" class="w-full px-3 py-2 text-sm leading-tight text-gray-700 dark:text-white border rounded shadow appearance-none focus:outline-none focus:shadow-outline" id="assemble_compition_date" type="date" placeholder="Assemble Completion Date" />
                                </div>
                            </div>

                            <div class="mb-4 md:flex md:justify-between">
                                <div class="mb-4">
                                    <label class="block mb-2 text-sm font-bold text-gray-700 dark:text-white" for="dismantal_start_date">
                                        Dismantle Start Date
                                    </label>
                                    <input name="dismantal_start_date" class="w-full px-3 py-2 text-sm leading-tight text-gray-700 dark:text-white border rounded shadow appearance-none focus:outline-none focus:shadow-outline" id="dismantal_start_date" type="date" placeholder="Dismantle Start Date" />
                                </div>

                                <div class="mb-4">
                                    <label class="block mb-2 text-sm font-bold text-gray-700 dark:text-white" for="disamental_complition_date">
                                        Dismantle Completion Date
                                    </label>
                                    <input name="disamental_complition_date" class="w-full px-3 py-2 text-sm leading-tight text-gray-700 dark:text-white border rounded shadow appearance-none focus:outline-none focus:shadow-outline" id="disamental_complition_date" type="date" placeholder="Dismantle Completion Date" />
                                </div>
                            </div>

                            <div class="mb-4 md:flex md:justify-between">
                                <div class="mb-4">
                                    <label class="block mb-2 text-sm font-bold text-gray-700 dark:text-white" for="packed_start_date">
                                        Packed Start Date
                                    </label>
                                    <input name="packed_start_date" class="w-full px-3 py-2 text-sm leading-tight text-gray-700 dark:text-white border rounded shadow appearance-none focus:outline-none focus:shadow-outline" id="packed_start_date" type="date" placeholder="Packed Start Date" />
                                </div>

                                <div class="mb-4">
                                    <label class="block mb-2 text-sm font-bold text-gray-700 dark:text-white" for="packed_completion_date">
                                        Packed Completion Date
                                    </label>
                                    <input name="packed_completion_date" class="w-full px-3 py-2 text-sm leading-tight text-gray-700 dark:text-white border rounded shadow appearance-none focus:outline-none focus:shadow-outline" id="packed_completion_date" type="date" placeholder="Packed Completion Date" />
                                </div>
                            </div>

                            <div class="mb-4 md:flex md:justify-between">
                                <div class="mb-4">
                                    <label class="block mb-2 text-sm font-bold text-gray-700 dark:text-white" for="dispatch_start_date">
                                        Dispatch Start Date
                                    </label>
                                    <input name="dispatch_start_date" class="w-full px-3 py-2 text-sm leading-tight text-gray-700 dark:text-white border rounded shadow appearance-none focus:outline-none focus:shadow-outline" id="dispatch_start_date" type="date" placeholder="Dispatch Start Date" />
                                </div>

                                <div class="mb-4">
                                    <label class="block mb-2 text-sm font-bold text-gray-700 dark:text-white" for="dispatch_completion_date">
                                        Dispatch Completion Date
                                    </label>
                                    <input name="dispatch_completion_date" class="w-full px-3 py-2 text-sm leading-tight text-gray-700 dark:text-white border rounded shadow appearance-none focus:outline-none focus:shadow-outline" id="dispatch_completion_date" type="date" placeholder="Dispatch Completion Date" />
                                </div>
                            </div>

                            <div class="mb-4 md:flex md:justify-between">
                                <div class="mb-4">
                                    <label class="block mb-2 text-sm font-bold text-gray-700 dark:text-white" for="migrated_to_erp">
                                        remarks
                                    </label>
                                    <input name="remarks" class="w-full px-3 py-2 text-sm leading-tight text-gray-700 dark:text-white border rounded shadow appearance-none focus:outline-none focus:shadow-outline" id="migrated_to_erp" type="text" placeholder="Migrated to ERP" />
                                </div>
                            </div>

                            <div class="mb-6 text-center">
                                <button class="w-full px-4 py-2 font-bold text-white bg-blue-500 rounded-full hover:bg-blue-700 focus:outline-none focus:shadow-outline" type="submit">
                                    Submit Form
                                </button>
                            </div>

                        </form>

                </div>
            </div>
        </div>
    </div>
    </div>

</body>

</html>