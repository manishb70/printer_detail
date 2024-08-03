<?php
// session_start();


include("db_connection.php");
echo "this is genrate requisition page";

if ($_SERVER['REQUEST_METHOD'] == 'POST') {





    if (isset($_POST["newRequisitionGenrate"])) {



        // if ($_POST["type"] == "newGenrate") {


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
        } else {
            header("location:home.php");
        }






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

        $record_id = $_SESSION["record_id"];


        $sql = "INSERT INTO requisition_table (created_by,created_date, department_name,department_id,item_name, item_code, quantity, user_remarks,record_id,project_id) VALUES ('$created_by', '$created_date', '$department', $department_id,'$item_name', $item_id, $Quantity,'$user_remarks',$record_id,$project_id)";



        $result = mysqli_query($con, $sql);



        if ($result) {


            echo "\nitem requisition is  is created is success fully";
        }
        // }
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





    <!-- source: https://gist.github.com/nraloux/bce10c4148380061781b928cdab9b193 -->
    <!-- I have added support for dark mode and improved UI -->

    <div class="h-full bg-gray-400 dark:bg-gray-900">
        <!-- Container -->
        <div class="mx-auto">
            <div class="flex justify-center px-6 py-12">
                <!-- Row -->
                <div class="w-full lg:w-11/12 flex">
                    <!-- Col -->

                    <!-- Col -->
                    <div class="w-full  bg-white dark:bg-gray-700 p-5 rounded-lg lg:rounded-l-none">
                        <h3 class="py-4 text-2xl text-center text-gray-800 dark:text-white">Genrate requirement !!</h3>


                        <form action="#" method="post" class="px-8 pt-6 pb-8 mb-4 bg-white dark:bg-gray-800 rounded">

                            <div class="mb-4 md:mr-2  md:mb-0">
                                <label class="block mb-2 text-sm name font-bold text-gray-700 dark:text-white" for="firstName">
                                    department
                                </label>
                                <input name="department" class="w-full px-3 py-2 text-sm leading-tight text-gray-700 dark:text-white border rounded shadow appearance-none focus:outline-none focus:shadow-outline" id="firstName" type="txt" placeholder="Enter department" value="" />
                            </div>
                            <div class="mb-4 mt-4 md:flex md:justify-between">

                                <div class="mb-4 md:mr-2 max-w-1 md:mb-0">
                                    <label class="block mb-2 text-sm name font-bold text-gray-700 dark:text-white" for="firstName">
                                        S.No
                                    </label>
                                    <input name="company_name" class="w-full px-3 py-2 text-sm leading-tight text-gray-700 dark:text-white border rounded shadow appearance-none focus:outline-none focus:shadow-outline" id="firstName" type="number" value="1" />
                                </div>

                                <div class="mb-4 md:mr-2 md:mb-0">
                                    <label class="block mb-2 text-sm name font-bold text-gray-700 dark:text-white" for="firstName">
                                        Project Id
                                    </label>
                                    <input name="project_id" class="w-full px-3 py-2 text-sm leading-tight text-gray-700 dark:text-white border rounded shadow appearance-none focus:outline-none focus:shadow-outline" id="firstName" type="text" placeholder="project id" />
                                </div>
                                <div class="md:ml-2">
                                    <label class="block mb-2 text-sm font-bold text-gray-700 dark:text-white" for="lastName">
                                        Item_Name
                                    </label>
                                    <input name="item_name" class="w-full px-3 py-2 text-sm leading-tight text-gray-700 dark:text-white border rounded shadow appearance-none focus:outline-none focus:shadow-outline" id="firstName" type="text" placeholder="Item name" />
                                </div>


                                <!-- <div class="mb-4 ml-2">
                                    <label class="block mb-2 text-sm font-bold text-gray-700 dark:text-white" for="email">
                                        Item code

                                    </label>
                                    <input name="company_address" class="w-full px-3 py-2 mb-3 text-sm leading-tight text-gray-700 dark:text-white border rounded shadow appearance-none focus:outline-none focus:shadow-outline" id="email" type="txt" placeholder="Adress" />
                                </div> -->
                                <div class="mb-4 ml-2">
                                    <label class="block mb-2 text-sm font-bold text-gray-700 dark:text-white" for="email">
                                        Quantity

                                    </label>
                                    <input name="quantity" class="w-full px-3 py-2 mb-3 text-sm leading-tight text-gray-700 dark:text-white border rounded shadow appearance-none focus:outline-none focus:shadow-outline" id="quantity" type="number" placeholder="quantity" />
                                </div>
                                <div class="mb-4 ml-2">
                                    <label class="block mb-2 text-sm font-bold text-gray-700 dark:text-white" for="email">
                                        User Remarks

                                    </label>
                                    <input name="User_Remarks" class="w-full px-3 py-2 mb-3 text-sm leading-tight text-gray-700 dark:text-white border rounded shadow appearance-none focus:outline-none focus:shadow-outline" id="email" type="txt" placeholder="User_Remarks" />
                                </div>
                            </div>


                            
                            
                            
                            <a onclick="addRowItem()" class="cursor-pointer" > add More</a>
                            
                            <div class="mb-6 mt-3 text-center">
                                <button class="w-full px-4 py-2 font-bold text-white bg-blue-500 rounded-full hover:bg-blue-700 dark:bg-blue-700 dark:text-white dark:hover:bg-blue-900 focus:outline-none focus:shadow-outline" name="newRequisitionGenrate" type="submit">
                                    Submit
                                </button>
                            </div>
                            <hr class="mb-6 border-t" />
                        </form>
                            
                            
                        

                  








                    </div>
                </div>
            </div>
        </div>
    </div>
</body>




<script>



const addRowItem = () =>{



alert("hello");




}




</script>

</html>