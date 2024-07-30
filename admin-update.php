<?php
session_start();
include("db.php");
if (!isset($_SESSION["NAME"])) {
    header("location: login.php");
}
// $user_info = $_GET["user_info"];


// $sql = "SELECT * from user_management     where user_id='$user_info' or user_name='$user_info' ";
$sql = "SELECT * from user_management";
$result = mysqli_query($con, $sql);
// $row = mysqli_fetch_array($result);


// echo mysqli_num_rows($result);

// while ($row2 = mysqli_fetch_assoc($result)) {

//     echo $row2["user_name" ]."<br>";
// }

// // echo var_dump($result);

$isEditable = false;
if ($_SESSION["role"] == "admin" or $_SESSION["role"] == "modify") {
    $isEditable = true;
}
if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    if ($_SERVER['REQUEST_METHOD'] == 'POST') {


        if (isset($_POST["add_new_user_admin"])) {


            $user_id = $_POST["user_id"];
            $username = $_POST["username"];
            $email = $_POST["email_id"];
            $password = $_POST["password"];
            $updataed_by = $_POST["updataed_by"];
            $phone = $_POST["mobile_number"];
            $person_id  = $_POST["person_id"];
            $start_date = $_POST["start_date"];
            $end_date = $_POST["end_date"];

            $createdBy = $_POST["createdBy"];
            $updataed_by = $_POST["updataed_by"];
            $updated_date = date("Y-m-d");
            $created_date = date("Y-m-d");
            $role  =  $_POST["role"];




            $create_sql = "INSERT INTO `for_office`.`user_management` (`user_id`, `user_name`, `updataed_by`, `createdBy`, `created_date`, `updated_date`, `mobile_number`, `email_id`, `person_id`, `password`, `start_date`, `end_date`, `role`) VALUES ('$user_id', '$username', ' $updataed_by', '$createdBy', '$created_date', '$updated_date', '$phone', '$email', '$person_id', '$password', '$start_date', '$end_date', '$role');
";

            $result_2 = mysqli_query($con, $create_sql);


            if ($result_2) {

                echo "new user created successfyly";

                $findNewAdminId = "SELECT * FROM  user_management where user_name='$username' ";

                $result_3 = mysqli_query($con, $findNewAdminId);
                $row1 = mysqli_fetch_assoc($result_3);
                $newUserId = $row1["user_id"];

                $sqlForAdminRoles = "insert into admin_roles (admin_id) values($newUserId)";

                if (mysqli_query($con, $sqlForAdminRoles)) {


                    echo "user success fully registered";
                } else {
                    echo "user is not registered please check admon role database";
                }
            } else {

                echo "<br>err user not registered<br>";
            }
        }








        if (isset($_POST["search_button"])) {

            echo "<br>" . date('Y-m-d');
            $search_query = $_POST["search_query"];
            $date = $_POST["search_date"];

            $sql2 = "SELECT * FROM user_info WHERE fullname='$search_query' OR id='$search_query' OR user_email='$search_query' OR membership='$search_query'OR pincode='$search_query'OR user_type='$search_query'OR user_email='$search_query'OR area='$search_query' OR name_of_company ='$search_query'OR adhaar_number='$search_query' OR bank_branch_name='$search_query' OR membership_renewed='$search_query' OR gender='$search_query' OR bank_name='$search_query'  OR user_phoneNumber='$search_query'  OR age='$search_query'   OR gender='$search_query' OR date_birth='$date' ";

            $result = mysqli_query($con, $sql2);


            // if (mysqli_num_rows($result) > 0) {
            //     echo "<br>data Updated success fully<br>";
            // } else {
            //     echo "errrrorr is comun from srever";
            // }
        } else if (isset($_POST["update_data"])) {

            echo "clicked on update button";

            // echo $_POST["user_id"];


            $user_id = $_POST["user_id"];
            $username = $_POST["username"];
            $email = $_POST["email_id"];
            $password = $_POST["password"];
            $updataed_by = $_POST["updataed_by"];
            $phone = $_POST["mobile_number"];
            $person_id  = $_POST["person_id"];
            $start_date = $_POST["start_date"];
            $end_date = $_POST["end_date"];

            $createdBy = $_POST["createdBy"];
            $updataed_by = $_POST["updataed_by"];
            $updated_date = date("Y-m-d");
            $created_date = $_POST["created_date"];
            $role  =  $_POST["role"];

            $sql2 = "UPDATE `for_office`.`user_management` SET `user_name` = '$username', `email_id` = '$email', `password` = '$password', `updataed_by` = '$updataed_by', `mobile_number` = '$phone', `person_id` = '$person_id', `start_date` = '$start_date', `end_date` = '$end_date', `createdBy` = '$createdBy', `updated_date` = '$updated_date', `role` = '$role' WHERE (`user_id` = '$user_id')";


            $result2 = mysqli_query($con, $sql2);

            // echo $result2;

            // if (mysqli_query($conn, $sql)) {
            //     echo "New record created successfully";
            //   } else {
            //     echo "Error: " . $sql . "<br>" . mysqli_error($conn);
            //   }

            if ($result2) {
                echo "data updated success fully";
            } else {

                echo "something Erro while updating data";
            }

            // echo "hello from update form ";

        } else if (isset($_POST["search"])) {


            echo date("Y-m-d");
            $search_query = $_POST["search_query"];



            $sql = "SELECT * FROM user_management WHERE user_id='$search_query' OR user_name='$search_query' OR updataed_by='$search_query' OR createdBy='$search_query'OR  mobile_number='$search_query'OR email_id='$search_query' OR person_id      ='$search_query' OR role='$search_query' ";

            $result = mysqli_query($con, $sql);


            if (mysqli_num_rows($result) > 0) {
                echo "data Updated success fully";
            } else {
                echo "errrrorr is comun from srever";
            }
        } else if (isset($_POST["update_admin_roles"])) {


            echo $_POST["admin_id"];



            echo "<br>hey this admin roles form <br>";
            $admin_id = $_POST["admin_id"];
            $userviewOnly = isset($_POST["user_viewOnly"]) ? 0 : 1;
            $user_write = isset($_POST["user_write"]) ? 0 : 1;
            $admin_viewOnly = isset($_POST["admin_viewOnly"]) ? 0 : 1;
            $admin_write = isset($_POST["admin_write"]) ? 0 : 1;
            $user_write_start_date = $_POST["user_write_start_date"];
            $user_write_end_date = $_POST["user_write_end_date"];
            $user_view_start_date = $_POST["user_view_start_date"];
            $user_view_end_date = $_POST["user_view_end_date"];
            $admin_write_start_date = $_POST["admin_write_start_date"];
            $admin_write_end_date = $_POST["admin_write_end_date"];
            $admin_view_start_date = $_POST["admin_view_start_date"];
            $admin_view_end_date = $_POST["admin_view_end_date"];

            // $sql_for_role = "INSERT INTO admin_roles (
            //     admin_id, 
            //     user_viewOnly, 
            //     user_write, 
            //     admin_viewOnly, 
            //     admin_write, 
            //     user_write_start_date, 
            //     user_write_end_date, 
            //     user_view_start_date, 
            //     user_view_end_date, 
            //     admin_write_start_date, 
            //     admin_write_end_date, 
            //     admin_view_start_date, 
            //     admin_view_end_date
            // ) VALUES (
            //     $admin_id, 
            //     $userviewOnly, 
            //     $user_write,
            //     $admin_viewOnly,
            //     $admin_write, 
            //     '$user_write_start_date',
            //     '$user_write_end_date', 
            //     '$user_view_start_date', 
            //     '$user_view_end_date', 
            //     '$admin_write_start_date', 
            //     '$admin_write_end_date', 
            //     '$admin_view_start_date', 
            //     '$admin_view_end_date'
            // )";



            $sql_for_role = "UPDATE admin_roles SET user_viewOnly = $userviewOnly, user_write = $user_write, admin_viewOnly = $admin_viewOnly, admin_write = $admin_write, user_write_start_date = '$user_write_start_date', user_write_end_date = '$user_write_end_date', user_view_start_date = '$user_view_start_date', user_view_end_date = '$user_view_end_date', admin_write_start_date = '$admin_write_start_date', admin_write_end_date = '$admin_write_end_date', admin_view_start_date = '$admin_view_start_date', admin_view_end_date = '$admin_view_end_date' WHERE admin_id = $admin_id";



            if (mysqli_query($con, $sql_for_role)) {
                echo "New record created successfully";
            } else {
                echo "Error: " . $sql_for_role . "<br>" . mysqli_error($conn);
            }
        }
    }
}







?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.0.4/dist/tailwind.min.css" rel="stylesheet">

    <title>Admin update</title>
</head>

<body>



    <div>


        <form class="flex items-center  max-w-lg mx-auto" method="POST">
            <label for="voice-search" class="sr-only">Search</label>
            <div class="relative w-full mr-2">

                <input type="text" id="voice-search" name="search_query" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full ps-10 p-2.5  dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Search Details From Database..." required />

            </div>
            <button type="submit" name="search" class="inline-flex items-center py-2.5 px-3 ms-2 text-sm font-medium text-white bg-blue-700 rounded-lg border border-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                <svg class="w-4 h-4 me-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m19 19-4-4m0-7A7 7 0 1 1 1 8a7 7 0 0 1 14 0Z" />
                </svg>Search
            </button>
        </form>

    </div>


    <div class="relative overflow-x-auto shadow-md sm:rounded-lg ">
        <table class=" text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400"">

            <thead class=" text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
            <tr>
                <th scope="col" class="px-6 py-3">
                    id
                </th>
                <th scope="col" class="px-6 py-3">
                    usernme
                </th>
                <th scope="col" class="px-6 py-3">
                    password
                </th>
                <th scope="col" class="px-6 py-3">
                    email
                </th>
                <th scope="col" class="px-6 py-3">
                    phone
                </th>
                <th scope="col" class="px-6 py-3">
                    person_id
                </th>
                <th scope="col" class="px-6 py-3">
                    start date
                </th>
                <th scope="col" class="px-6 py-3">
                    end date
                </th>

                <th scope="col" class="px-6 py-3">
                    role
                </th>
                <th scope="col" class="px-6 py-3">
                    updated b
                </th>
                <th scope="col" class="px-6 py-3">
                    created by
                </th>
                <th scope="col" class="px-6 py-3">
                    created date
                </th>
                <th scope="col" class="px-6 py-3">
                    updated date
                </th>
                <th scope="col" class="px-6 py-3">
                    <span class="sr-only">Edit</span>
                </th>
            </tr>
            </thead>
            <tbody>



                <?php


                while ($row = mysqli_fetch_assoc($result)) {

                    echo '
    <form action="#" method="POST">
    
                <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">

                    <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                        ' . ($isEditable ? "<input class='formInputData'  name='user_id' disabled style='max-width:80px' id=" . $row["user_id"] . "  margin-left:0' value=" . $row["user_id"] . ">" : $row["user_id"]) . '
                    </th>
                    <td class=px-6 py-4">
                        ' . ($isEditable ? "<input class='formInputData' name='username' disabled style='max-width:80px'  margin-left:0' value=" . $row["user_name"] . ">" : $row["user_name"]) . '
                    </td>
                    <td class="px-6 py-4">
                    
                         ' . ($isEditable ? "<input class='formInputData' name='password' disabled style='max-width:80px'  margin-left:0' value=" . $row["password"] . ">" : $row["password"]) . '
                    </td>
                    <td class="px-6 py-4">
                        ' . ($isEditable ? "<input class='formInputData' name='email_id' disabled style='max-width:80px'  margin-left:0' value=" . $row["email_id"] . ">" : $row["email_id"]) . '
                    </td>
                    <td class="px-6 py-4">
                        ' . ($isEditable ? "<input class='formInputData' name='mobile_number' disabled style='max-width:80px'  margin-left:0' value=" . $row["mobile_number"] . ">" : $row["mobile_number"]) . '
                    </td>
                    <td class="px-6 py-4">
                         ' . ($isEditable ? "<input class='formInputData' name='person_id' disabled style='max-width:80px'  margin-left:0' value=" . $row["person_id"] . ">" : $row["person_id"]) . '
                    </td>
                    <td class="px-6 py-4">
                        ' . ($isEditable ? "<input  type='date' class='formInputData' name='start_date' disabled style='max-width:80px'  margin-left:0' value=" . $row["start_date"] . ">" : $row["start_date"]) . '
                    </td>
                    <td class="px-6 py-4">
                       
                         ' . ($isEditable ? "<input class='formInputData' name='end_date' disabled style='max-width:80px'  margin-left:0' value=" . $row["end_date"] . ">" : $row["end_date"]) . '
                    </td>
                     <td class="px-6 py-4">
                        
                         ' . ($isEditable ? "<input class='formInputData' name='role' disabled style='max-width:80px'  margin-left:0' value=" . $row["role"] . ">" : $row["role"]) . '
                    </td>
                     <td class="px-6 py-4">
                        
                         ' . ($isEditable ? "<input class='formInputData' name='updataed_by' disabled style='max-width:80px'  margin-left:0' value=" . $row["updataed_by"] . ">" : $row["updataed_by"]) . '
                    </td> <td class="px-6 py-4">
                         ' . ($isEditable ? "<input class='formInputData' name='createdBy' disabled style='max-width:80px'  margin-left:0' value=" . $row["createdBy"] . ">" : $row["createdBy"]) . '
                    </td> <td class="px-6 py-4">
                        
                         ' . ($isEditable ? "<input class='formInputData' name='created_date' disabled style='max-width:80px'  margin-left:0' value=" . $row["created_date"] . ">" : $row["created_date"]) . '
                    </td>   
                    </td> <td class="px-6 py-4">
                        
                         ' . ($isEditable ? "<input class='formInputData' name='updated_date' disabled style='max-width:80px'  margin-left:0' value=" . $row["updated_date"] . ">" : $row["updated_date"]) . '
                    </td>   

                    <td class="px-6 py-4 text-right">
                         <a onclick ="enableItem(event,rowId' . $row["user_id"] . ')" class="font-medium text-blue-600 dark:text-blue-500 hover:underline">Edit</a>
                    <button id=rowId' . $row["user_id"] . ' name="update_data" class="hidden inline-flex mr-2 ml-20 items-center py-2.5 px-3 ms-2 text-sm font-medium text-white bg-blue-700 rounded-lg border border-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800" onclick="">
                      Update</button>
                    </td>


                     <td class="px-6 py-4 text-right">
                         <a onclick ="showRolesBox(event)" data-modal-target="authentication-modal" data-modal-toggle="authentication-modal" class="font-medium text-blue-600 dark:text-blue-500 hover:underline">Edit user roles</a>
                  
                    </td>
                </tr>
                    </form>
                    
                ';
                }  ?>

            </tbody>
        </table>
    </div>




























































    <!-- this is another div or box\ -->














    <!-- Modal toggle -->
           <center>
        <button onclick="openNewAdminBox()" class="block text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800" type="button">
            Add a user
        </button>


    <div id="newUserAdmin" class="relative  transition hidden overflow-x-auto shadow-md sm:rounded-lg ">
        <table class=" text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400"">

            <thead class=" text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
            <tr>
                <th scope="col" class="px-6 py-3">
                    id
                </th>
                <th scope="col" class="px-6 py-3">
                    usernme
                </th>
                <th scope="col" class="px-6 py-3">
                    password
                </th>
                <th scope="col" class="px-6 py-3">
                    email
                </th>
                <th scope="col" class="px-6 py-3">
                    phone
                </th>
                <th scope="col" class="px-6 py-3">
                    person_id
                </th>
                <th scope="col" class="px-6 py-3">
                    start date
                </th>
                <th scope="col" class="px-6 py-3">
                    end date
                </th>

                <th scope="col" class="px-6 py-3">
                    role
                </th>
                <th scope="col" class="px-6 py-3">
                    updated b
                </th>
                <th scope="col" class="px-6 py-3">
                    created by
                </th>
                <th scope="col" class="px-6 py-3">
                    created date
                </th>
                <th scope="col" class="px-6 py-3">
                    updated date
                </th>
                <th scope="col" class="px-6 py-3">
                    <span class="sr-only">Edit</span>
                </th>
            </tr>
            </thead>
            <tbody>




                <form action="#" method="POST">

                    <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">

                        <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                            <input class='formInputData' name='user_id' style='max-width:80px'>
                        </th>
                        <td class=px-6 py-4">
                            <input class='formInputData' name='username' style='max-width:80px' margin-left:0>
                        </td>
                        <td class="px-6 py-4">

                            <input class='formInputData' name='password' style='max-width:80px' margin-left:'>
                        </td>
                        <td class="px-6 py-4">
                            <input class='formInputData' name='email_id' style='max-width:80px' margin-left:0>
                        </td>
                        <td class="px-6 py-4">
                            <input class='formInputData' name='mobile_number' style='max-width:80px' margin-left:0>
                        </td>
                        <td class="px-6 py-4">
                            <input class='formInputData' name='person_id' style='max-width:80px' margin-left:0>
                        </td>
                        <td class="px-6 py-4">
                            <input type='date' class='formInputData' name='start_date' style='max-width:80px' margin-left:0>
                        </td>
                        <td class="px-6 py-4">

                            <input class='formInputData' type='date' name='end_date' style='max-width:80px' margin-left:0>
                        </td>
                        <td class="px-6 py-4">

                            <input class='formInputData' name='role' style='max-width:80px' margin-left:0>
                        </td>
                        <td class="px-6 py-4">

                            <input class='formInputData' name='updataed_by' style='max-width:80px' margin-left:0'>
                        </td>
                        <td class="px-6 py-4">
                            <input class='formInputData' name='createdBy' style='max-width:80px' margin-left:0>
                        </td>
                        <td class="px-6 py-4">

                            <input class='formInputData' type='date' name='created_date' style='max-width:80px' margin-left:0>
                        </td>
                        </td>
                        <td class="px-6 py-4">

                            <input class='formInputData' type='date' name='updated_date' style='max-width:80px' margin-left:0'>
                        </td>

                        <td class="px-6 py-4 text-right">
                            <!-- <a onclick ="" class="font-medium text-blue-600 dark:text-blue-500 hover:underline">Edit</a> -->
                            <button name="add_new_user_admin" class=" inline-flex mr-2 ml-20 items-center py-2.5 px-3 ms-2 text-sm font-medium text-white bg-blue-700 rounded-lg border border-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800" onclick="">
                                add</button>
                        </td>


                        <!-- <td class="px-6 py-4 text-right">
                         <a onclick ="showRolesBox(event)" data-modal-target="authentication-modal" data-modal-toggle="authentication-modal" class="font-medium text-blue-600 dark:text-blue-500 hover:underline">Edit user roles</a>
                  
                    </td> -->
                    </tr>
                </form>


            </tbody>
        </table>
    </div>











    <!-- Main modal -->
    <div id="authentication-modal" tabindex="-1" aria-hidden="true" class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
        <div class="relative p-4 max-h-full">
            <!-- Modal content -->
            <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
                <!-- Modal header -->
                <div class="flex items-center justify-between p-4 md:p-5 border-b rounded-t dark:border-gray-600">
                    <h3 class="text-xl font-semibold text-gray-900 dark:text-white">
                        Edit user
                    </h3>
                    <button type="button" class="end-2.5 text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white" data-modal-hide="authentication-modal">
                        <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
                        </svg>
                        <span class="sr-only">Close modal</span>
                    </button>
                </div>



                <div>
                    <div class="relative overflow-x-auto shadow-md sm:rounded-lg ">
                        <table class=" text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400"">

            <thead class=" text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                            <tr>
                                <th scope="col" class="px-6 py-3">
                                    User id
                                </th>
                                <th scope="col" class="px-6 py-3">
                                    Role
                                </th>
                                <th scope="col" class="px-6 py-3">
                                    Permission
                                </th>
                                <th scope="col" class="px-6 py-3">
                                    Start date
                                </th>
                                <th scope="col" class="px-6 py-3">
                                    End date
                                </th>

                                <th scope="col" class="px-6 py-3">
                                    <span class="sr-only">Edit</span>
                                </th>
                            </tr>
                            </thead>
                            <tbody>



                                <form action="#" method="POST">

                                    <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">

                                        <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                            <input type="text" id="roleUserId" disabled name="admin_id" value="2">

                                        </th>

                                        <td scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                            Users view
                                        </td>
                                        <td class=px-6 py-4">
                                            <div class="flex items-center mb-4">
                                                <input id="default-checkbox" type="checkbox" name="user_viewOnly" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                                            </div>
                                        </td>
                                        <td class=px-6 py-4">
                                            <input type="date" name="user_view_start_date" value="2000-01-01">
                                        </td>
                                        <td class="px-6 py-4">

                                            <input type="date" name="user_view_end_date" value="2000-01-01">
                                        </td>


                                    </tr>
                                    <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">

                                        <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">

                                        </th>

                                        <td scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                            User edit
                                        </td>
                                        <td class=px-6 py-4">
                                            <div class="flex items-center mb-4">
                                                <input id="default-checkbox" type="checkbox" name="user_write" value="" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                                            </div>
                                        </td>
                                        <td class=px-6 py-4">
                                            <input type="date" name="user_write_start_date" value="2000-01-01">
                                        </td>
                                        <td class="px-6 py-4">

                                            <input type="date" name="user_write_end_date" value="2000-01-01">
                                        </td>


                                        <td class="px-6 py-4 text-right">
                                            <!-- <a onclick ="enableItem(event,rowId' . $row["user_id"] . ')" class="font-medium text-blue-600 dark:text-blue-500 hover:underline">Edit</a> -->
                                            <button id=rowId' name="update_data" class="hidden inline-flex mr-2 ml-20 items-center py-2.5 px-3 ms-2 text-sm font-medium text-white bg-blue-700 rounded-lg border border-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800" onclick="">
                                                Update</button>
                                        </td>
                                    </tr>
                                    <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">

                                        <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">

                                        </th>

                                        <td scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                            Admin view
                                        </td>
                                        <td class=px-6 py-4">
                                            <div class="flex items-center mb-4">
                                                <input id="default-checkbox" type="checkbox" name="admin_viewOnly" value="" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                                            </div>
                                        </td>
                                        <td class=px-6 py-4">
                                            <input type="date" name="admin_view_start_date" value="2000-01-01">
                                        </td>
                                        <td class="px-6 py-4">

                                            <input type="date" name="admin_view_end_date" value="2000-01-01">
                                        </td>


                                        <td class="px-6 py-4 text-right">
                                            <!-- <a onclick ="enableItem(event,rowId' . $row["user_id"] . ')" class="font-medium text-blue-600 dark:text-blue-500 hover:underline">Edit</a> -->
                                            <button id=rowId' name="update_data" class="hidden inline-flex mr-2 ml-20 items-center py-2.5 px-3 ms-2 text-sm font-medium text-white bg-blue-700 rounded-lg border border-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800" onclick="">
                                                Update</button>
                                        </td>
                                    </tr>
                                    <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                                        <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">

                                        </th>

                                        <td scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                            Admin write
                                        </td>
                                        <td class=px-6 py-4">
                                            <div class="flex items-center mb-4">
                                                <input id="default-checkbox" type="checkbox" value="" name="admin_write" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                                            </div>
                                        </td>
                                        <td class=px-6 py-4">
                                            <input type="date" name="admin_write_start_date" value="2000-01-01">
                                        </td>
                                        <td class="px-6 py-4">

                                            <input type="date" name="admin_write_end_date" value="2000-01-01">
                                        </td>


                                        <td class="px-6 py-4 text-right">
                                            <!-- <a onclick ="enableItem(event,rowId' . $row["user_id"] . ')" class="font-medium text-blue-600 dark:text-blue-500 hover:underline">Edit</a> -->
                                            <button id=rowId' onclick=name="update_data" class="hidden inline-flex mr-2 ml-20 items-center py-2.5 px-3 ms-2 text-sm font-medium text-white bg-blue-700 rounded-lg border border-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800" onclick="">
                                                Update</button>
                                        </td>
                                    </tr>



                            </tbody>
                        </table>
                        <button name="update_admin_roles" onclick="beforeSubmitHandle()" style="margin: auto;
    display: block;" class=" inline-flex display-block mx-auto items-center py-2.5 px-3 text-sm font-medium text-white bg-blue-700 rounded-lg border border-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800" onclick="">
                            Submit</button>
                        </form>
                    </div>


                </div>






                <!-- fake test box areA -->
















</body>





<script>
    let userIsSelected = 10;




    const beforeSubmitHandle = () => {

        document.getElementById("roleUserId").disabled = false;



    }



    function enableItem(e, id) {

        //   console.log(e.target.parentElement);  
        //   console.log(((e.target.parentElement).parentElement).getElementsByTagName("input"))

        let dt = ((e.target.parentElement).parentElement).getElementsByTagName("input")
        for (let element of dt) {
            element.disabled = false;
            element.style.color = "red"


        }



        id.classList.remove("hidden")
        // console.log(id);
        e.target.style.display = "none";

        // document.getElementById(id).classList.remove("hidden")      

        // e.target.preventDefault()
        // e.target.name="update_button"
        // e.target.type="submit"

    }


    let id_1 = 1;




    const showRolesBox = (e) => {


        //    console.log((e.target.parentElement).getElementByName("user_id"))

        let selected_id = 1223;
        // let selected_id = (e.target.parentElement).parentElement.getElementsByClassName("user_id");


        userIsSelected = (e.target.parentElement).parentElement.querySelector('[name="user_id"]').id
        console.log(userIsSelected);
        document.getElementById("roleUserId").value = userIsSelected

    }


    const openNewAdminBox = () => {

        newUserAdmin.style.display = "block"



    }
</script>


<script src="https://cdn.jsdelivr.net/npm/flowbite@2.4.1/dist/flowbite.min.js"></script>


</html>