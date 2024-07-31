<?php




if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    include("../db.php");




    $header_id = $_POST['header_id'];
    $item_code = $_POST['item_code'];
    $item_name = $_POST['item_name'];
    $version = $_POST['version'];
    $percentage = $_POST['percentage'];
    $wharehouse_ = $_POST['wharehouse_'];
    $created_by = "SYSTEM";
    $created_date = date("Y-m-d");
    $updated_by = "SYSTEM";
    $updated_date = date("Y-m-d");


    echo "Header ID: " . $header_id . "<br>";
    echo "Item Code: " . $item_code . "<br>";
    echo "Item Name: " . $item_name . "<br>";
    echo "Version: " . $version . "<br>";
    echo "Percentage: " . $percentage . "<br>";
    echo "Warehouse: " . $wharehouse_ . "<br>";
    echo "Created By: " . $created_by . "<br>";
    echo "Created Date: " . $created_date . "<br>";
    echo "Updated By: " . $updated_by . "<br>";
    echo "Updated Date: " . $updated_date . "<br>";

    



            $sql = "INSERT INTO bom_hedar_detail (item_code, item_name, version, percentage, wharehouse_, created_by, created_date, updated_by, updated_date) VALUES ($item_code, '$item_name', '$version', $percentage, '$wharehouse_' , '$created_by','$created_date','$updated_by','$updated_date')";



                $result = mysqli_query($con,$sql);

                    if($result){

                            $id= mysqli_insert_id($con);

                        echo "daata is success fully inserteed";
                        
                        echo $id;

                        $sql = "INSERT INTO bom_line_detail (header_id,  created_by, created_date, updated_by, updated_date) VALUES ($id,'$created_by','$created_date','$updated_by','$updated_date')";


                        $result = mysqli_query($con,$sql);
                        if($result){

                            echo " <br>sql query opration is success ";
                        }
                        



                    }else{

                        echo "data is not isnerted having soe error";
                    }













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
                    <div class="w-full lg:w-7/12 bg-white dark:bg-gray-700 p-5 rounded-lg lg:rounded-l-none">
                        <h3 class="py-4 text-2xl text-center text-gray-800 dark:text-white">Create an Account!</h3>
                        <form action="#" method="post" class="px-8 pt-6 pb-8 mb-4 bg-white dark:bg-gray-800 rounded">
                            <div class="mb-4">
                                <label class="block mb-2 text-sm font-bold text-gray-700 dark:text-white" for="headerId">
                                    Header ID
                                </label>
                                <input name="header_id" class="w-full px-3 py-2 text-sm leading-tight text-gray-700 dark:text-white border rounded shadow appearance-none focus:outline-none focus:shadow-outline" id="headerId" type="txt" placeholder="Header ID" />
                            </div>

                            <div class="mb-4">
                                <label class="block mb-2 text-sm font-bold text-gray-700 dark:text-white" for="itemCode">
                                    Item Code
                                </label>
                                <input name="item_code" class="w-full px-3 py-2 text-sm leading-tight text-gray-700 dark:text-white border rounded shadow appearance-none focus:outline-none focus:shadow-outline" id="itemCode" type="txt" placeholder="Item Code" />
                            </div>

                            <div class="mb-4">
                                <label class="block mb-2 text-sm font-bold text-gray-700 dark:text-white" for="itemName">
                                    Item Name
                                </label>
                                <input name="item_name" class="w-full px-3 py-2 text-sm leading-tight text-gray-700 dark:text-white border rounded shadow appearance-none focus:outline-none focus:shadow-outline" id="itemName" type="text" placeholder="Item Name" />
                            </div>

                            <div class="mb-4">
                                <label class="block mb-2 text-sm font-bold text-gray-700 dark:text-white" for="version">
                                    Version
                                </label>
                                <input name="version" class="w-full px-3 py-2 text-sm leading-tight text-gray-700 dark:text-white border rounded shadow appearance-none focus:outline-none focus:shadow-outline" id="version" type="text" placeholder="Version" />
                            </div>

                            <div class="mb-4">
                                <label class="block mb-2 text-sm font-bold text-gray-700 dark:text-white" for="percentage">
                                    Percentage
                                </label>
                                <input name="percentage" class="w-full px-3 py-2 text-sm leading-tight text-gray-700 dark:text-white border rounded shadow appearance-none focus:outline-none focus:shadow-outline" id="percentage" type="text" placeholder="Percentage" />
                            </div>

                            <div class="mb-4">
                                <label class="block mb-2 text-sm font-bold text-gray-700 dark:text-white" for="wharehouse">
                                    Warehouse
                                </label>
                                <input name="wharehouse_" class="w-full px-3 py-2 text-sm leading-tight text-gray-700 dark:text-white border rounded shadow appearance-none focus:outline-none focus:shadow-outline" id="wharehouse" type="text" placeholder="Warehouse" />
                            </div>

                            <div class="mb-4">
                                <label class="block mb-2 text-sm font-bold text-gray-700 dark:text-white" for="createdBy">
                                    Created By
                                </label>
                                <input name="created_by" class="w-full px-3 py-2 text-sm leading-tight text-gray-700 dark:text-white border rounded shadow appearance-none focus:outline-none focus:shadow-outline" id="createdBy" type="text" placeholder="Created By" />
                            </div>

                            <div class="mb-4">
                                <label class="block mb-2 text-sm font-bold text-gray-700 dark:text-white" for="createdDate">
                                    Created Date
                                </label>
                                <input name="created_date" class="w-full px-3 py-2 text-sm leading-tight text-gray-700 dark:text-white border rounded shadow appearance-none focus:outline-none focus:shadow-outline" id="createdDate" type="date" placeholder="Created Date" />
                            </div>

                            <div class="mb-4">
                                <label class="block mb-2 text-sm font-bold text-gray-700 dark:text-white" for="updatedBy">
                                    Updated By
                                </label>
                                <input name="updated_by" class="w-full px-3 py-2 text-sm leading-tight text-gray-700 dark:text-white border rounded shadow appearance-none focus:outline-none focus:shadow-outline" id="updatedBy" type="text" placeholder="Updated By" />
                            </div>

                            <div class="mb-4">
                                <label class="block mb-2 text-sm font-bold text-gray-700 dark:text-white" for="updatedDate">
                                    Updated Date
                                </label>
                                <input name="updated_date" class="w-full px-3 py-2 text-sm leading-tight text-gray-700 dark:text-white border rounded shadow appearance-none focus:outline-none focus:shadow-outline" id="updatedDate" type="date" placeholder="Updated Date" />
                            </div>


                            <div class="mb-6 mt-3 text-center">
                                <button class="w-full px-4 py-2 font-bold text-white bg-blue-500 rounded-full hover:bg-blue-700 dark:bg-blue-700 dark:text-white dark:hover:bg-blue-900 focus:outline-none focus:shadow-outline" type="submit">
                                    Register Account
                                </button>
                            </div>
                            <hr class="mb-6 border-t" />
                            <div class="text-center">
                                <a class="inline-block text-sm text-blue-500 dark:text-blue-500 align-baseline hover:text-blue-800" href="#">
                                    Forgot Password?
                                </a>
                            </div>
                            <div class="text-center">
                                <a class="inline-block text-sm text-blue-500 dark:text-blue-500 align-baseline hover:text-blue-800" href="./index.html">
                                    Already have an account? Login!
                                </a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>