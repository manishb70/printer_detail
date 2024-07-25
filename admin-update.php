<?php
session_start();
include("db.php");
if (!isset($_SESSION["NAME"])) {
    header("location: login.php");
}
$user_info = $_GET["user_info"];


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


    // $email = $_POST["email"];
    // $password = $_POST["password"];
    // $username = $_POST["username"];
    // $phone = $_POST["mobile_number"];
    // $created_by = $_POST["createdBy"];
    // $updated_by = $_POST["updated_by"];
    // $created_date = $_POST["created_date"];
    // $updated_date = $_POST["updated_date"];
    // $person_id = $_POST["person_id"]
    // $start_date = 










    // $sql="UPDATE `for_office`.`user_management` SET `user_name` = 'manish', `updataed_by` = 'system', `created_date` = '2024-07-22', `updated_date` = '2024-07-03', `mobile_number` = '7382781', `email_id` = 'djwk@example.com', `person_id` = '13', `password` = 'manish@123', `start_date` = '2024-07-11', `end_date` = '2024-07-14', `role` = 'modify' WHERE (`user_id` = '1');
    // "


    if ($_SERVER['REQUEST_METHOD'] == 'POST') {

        $search_query = $_POST["search_query"];
    
     
    
        $sql = "SELECT * FROM user_management WHERE user_id='$search_query' OR user_name='$search_query' OR updataed_by='$search_query' OR createdBy='$search_query'OR  mobile_number='$search_query'OR email_id='$search_query' OR person_id      ='$search_query' OR role='$search_query' " ;
    
        $result = mysqli_query($con, $sql);
    
    
        if (mysqli_num_rows($result) > 0) {
            echo "data Updated success fully";
        } else {
            echo "errrrorr is comun from srever";
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
    <button type="submit" class="inline-flex items-center py-2.5 px-3 ms-2 text-sm font-medium text-white bg-blue-700 rounded-lg border border-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
        <svg class="w-4 h-4 me-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20">
            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m19 19-4-4m0-7A7 7 0 1 1 1 8a7 7 0 0 1 14 0Z" />
        </svg>Search
    </button>
</form>

</div>  


    <div class="relative overflow-x-auto shadow-md sm:rounded-lg " >
        <table class=" text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400"">

            <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
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
                
                
                while($row = mysqli_fetch_assoc($result)) {
                
                echo '

                
                <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">

                    <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                        ' . $row["user_id"] . '
                    </th>
                    <td class=px-6 py-4">
                        ' . $row["user_name"] . '
                    </td>
                    <td class="px-6 py-4">
                         ' . $row["password"] . '
                    </td>
                    <td class="px-6 py-4">
                        ' . $row["email_id"] . '
                    </td>
                    <td class="px-6 py-4">
                        ' . $row["mobile_number"] . '
                    </td>
                    <td class="px-6 py-4">
                        ' . $row["person_id"] . '
                    </td>
                    <td class="px-6 py-4">
                        rz ' . $row["start_date"] . '
                    </td>
                    <td class="px-6 py-4">
                        ' . $row["end_date"] . '
                    </td>
                     <td class="px-6 py-4">
                        ' . $row["role"] . '
                    </td>
                     <td class="px-6 py-4">
                        ' . $row["updataed_by"] . '
                    </td> <td class="px-6 py-4">
                        ' . $row["createdBy"] . '
                    </td> <td class="px-6 py-4">
                        ' . $row["created_date"] . '
                    </td>   
                    </td> <td class="px-6 py-4">
                        ' . $row["updated_date"] . '
                    </td>   

                    <td class="px-6 py-4 text-right">
                        <a href="#" class="font-medium text-blue-600 dark:text-blue-500 hover:underline">Edit</a>
                    </td>
                </tr>
    ';
                  }  ?>

            </tbody>
        </table>
    </div>




































    <!-- <div class="min-h-screen bg-gray-50 flex flex-wrap justify-center py-12 sm:px-6 lg:px-8">
        <div class="sm:mx-auto sm:w-full ">
            <img class="mx-auto h-10 w-auto" src="https://www.svgrepo.com/show/301692/login.svg" alt="Workflow" />
            <h2 class="mt-6 text-center text-3xl leading-9 font-extrabold text-gray-900">
                Create a new account
            </h2>
            <p class="mt-2 text-center text-sm leading-5 text-gray-500 max-w">
                Or
                <a href="login.php" class="font-medium text-blue-600 hover:text-blue-500 focus:outline-none focus:underline transition ease-in-out duration-150">
                    login to your account
                </a>
            </p>
        </div>

        <div class="mt-8 w-[80%] ">
            <div class="bg-white py-8 px-4 shadow sm:rounded-lg sm:px-10  w-[200%] justify-center flex-wrap">
                <form method="POST" action="#">

                    <div>
                        <label for="email" class="block text-sm font-medium leading-5  text-gray-700">Username</label>
                        <div class="mt-1 relative rounded-md shadow-sm">
                            <input <?php if (!$isEditable) {
                                        echo "disabled";
                                    } ?> id="username" <?php if (!$isEditable) {
                                                            echo "disabled";
                                                        } ?> name="username" value="<?php echo $row['user_name']; ?>" placeholder="John Doe" type="text" required="" class="appearance-none block w-[400px] px-3 py-2 border border-gray-300 rounded-md placeholder-gray-400 focus:outline-none focus:shadow-outline-blue focus:border-blue-300 transition duration-150 ease-in-out sm:text-sm sm:leading-5" />
                            <div class="hidden absolute inset-y-0 right-0 pr-3 flex items-center pointer-events-none">
                                <svg class="h-5 w-5 text-red-500" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7 4a1 1 0 11-2 0 1 1 0 012 0zm-1-9a1 1 0 00-1 1v4a1 1 0 102 0V6a1 1 0 00-1-1z" clip-rule="evenodd">
                                    </path>
                                </svg>
                            </div>
                        </div>
                    </div>

                    <div class="mt-6">
                        <label for="email" class="block text-sm font-medium leading-5 text-gray-700">
                            Email address
                        </label>
                        <div class="mt-1 relative rounded-md shadow-sm">

                            <input <?php if (!$isEditable) {
                                        echo "disabled";
                                    } ?> id="email" value=<?php echo $row["email_id"]; ?> name="email" placeholder="user@example.com" type="email" required="" class="appearance-none block w-[400px] px-3 py-2 border border-gray-300 rounded-md placeholder-gray-400 focus:outline-none focus:shadow-outline-blue focus:border-blue-300 transition duration-150 ease-in-out sm:text-sm sm:leading-5" />
                            <div class="hidden absolute inset-y-0 right-0 pr-3 flex items-center pointer-events-none">
                                <svg class="h-5 w-5 text-red-500" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7 4a1 1 0 11-2 0 1 1 0 012 0zm-1-9a1 1 0 00-1 1v4a1 1 0 102 0V6a1 1 0 00-1-1z" clip-rule="evenodd"></path>
                                </svg>
                            </div>
                        </div>
                    </div>

                    <div>
                        <label for="email" class="block text-sm font-medium leading-5  text-gray-700">Updated by</label>
                        <div class="mt-1 relative rounded-md shadow-sm">
                            <input <?php if (!$isEditable) {
                                        echo "disabled";
                                    } ?> value=<?php echo $row["updataed_by"]; ?> id="" name="updated_by" placeholder="John Doe" type="text" required="" class="appearance-none block w-[400px] px-3 py-2 border border-gray-300 rounded-md placeholder-gray-400 focus:outline-none focus:shadow-outline-blue focus:border-blue-300 transition duration-150 ease-in-out sm:text-sm sm:leading-5" />
                            <div class="hidden absolute inset-y-0 right-0 pr-3 flex items-center pointer-events-none">
                                <svg class="h-5 w-5 text-red-500" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7 4a1 1 0 11-2 0 1 1 0 012 0zm-1-9a1 1 0 00-1 1v4a1 1 0 102 0V6a1 1 0 00-1-1z" clip-rule="evenodd">
                                    </path>
                                </svg>
                            </div>
                        </div>
                    </div>
                    <div>
                        <label for="email" class="block text-sm font-medium leading-5  text-gray-700">Created by</label>
                        <div class="mt-1 relative rounded-md shadow-sm">
                            <input <?php if (!$isEditable) {
                                        echo "disabled";
                                    } ?> id="age" name="createdBy" placeholder="John Doe" value=<?php echo  $row["createdBy"]; ?> type="text" required="" class="appearance-none block w-[400px] px-3 py-2 border border-gray-300 rounded-md placeholder-gray-400 focus:outline-none focus:shadow-outline-blue focus:border-blue-300 transition duration-150 ease-in-out sm:text-sm sm:leading-5" />
                            <div class="hidden absolute inset-y-0 right-0 pr-3 flex items-center pointer-events-none">
                                <svg class="h-5 w-5 text-red-500" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7 4a1 1 0 11-2 0 1 1 0 012 0zm-1-9a1 1 0 00-1 1v4a1 1 0 102 0V6a1 1 0 00-1-1z" clip-rule="evenodd">
                                    </path>
                                </svg>
                            </div>
                        </div>
                    </div>
                    <div>
                        <label for="email" class="block text-sm font-medium leading-5  text-gray-700">Created Date</label>
                        <div class="mt-1 relative rounded-md shadow-sm">
                            <input <?php if (!$isEditable) {
                                        echo "disabled";
                                    } ?> id="gender" name="created_date" value=<?php echo $row["created_date"]; ?> placeholder="John Doe" type="text" required="" class="appearance-none block w-[400px] px-3 py-2 border border-gray-300 rounded-md placeholder-gray-400 focus:outline-none focus:shadow-outline-blue focus:border-blue-300 transition duration-150 ease-in-out sm:text-sm sm:leading-5" />
                            <div class="hidden absolute inset-y-0 right-0 pr-3 flex items-center pointer-events-none">
                                <svg class="h-5 w-5 text-red-500" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7 4a1 1 0 11-2 0 1 1 0 012 0zm-1-9a1 1 0 00-1 1v4a1 1 0 102 0V6a1 1 0 00-1-1z" clip-rule="evenodd">
                                    </path>
                                </svg>
                            </div>
                        </div>
                    </div>
                    <div>
                        <label for="email" class="block text-sm font-medium leading-5  text-gray-700">Updated Date</label>
                        <div class="mt-1 relative rounded-md shadow-sm">
                            <input <?php if (!$isEditable) {
                                        echo "disabled";
                                    } ?> id="name" name="updated_date" value=<?php echo $row["updated_date"]; ?> placeholder="John Doe" type="text" required="" class="appearance-none block w-[400px] px-3 py-2 border border-gray-300 rounded-md placeholder-gray-400 focus:outline-none focus:shadow-outline-blue focus:border-blue-300 transition duration-150 ease-in-out sm:text-sm sm:leading-5" />
                            <div class="hidden absolute inset-y-0 right-0 pr-3 flex items-center pointer-events-none">
                                <svg class="h-5 w-5 text-red-500" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7 4a1 1 0 11-2 0 1 1 0 012 0zm-1-9a1 1 0 00-1 1v4a1 1 0 102 0V6a1 1 0 00-1-1z" clip-rule="evenodd">
                                    </path>
                                </svg>
                            </div>
                        </div>
                    </div>
                    <div>
                        <label for="email" class="block text-sm font-medium leading-5  text-gray-700">Mobile number</label>
                        <div class="mt-1 relative rounded-md shadow-sm">
                            <input <?php if (!$isEditable) {
                                        echo "disabled";
                                    } ?> id="addresline_2" name="mobile_number" value=<?php echo $row["mobile_number"]; ?> placeholder="John Doe" type="text" required="" class="appearance-none block w-[400px] px-3 py-2 border border-gray-300 rounded-md placeholder-gray-400 focus:outline-none focus:shadow-outline-blue focus:border-blue-300 transition duration-150 ease-in-out sm:text-sm sm:leading-5" />
                            <div class="hidden absolute inset-y-0 right-0 pr-3 flex items-center pointer-events-none">
                                <svg class="h-5 w-5 text-red-500" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7 4a1 1 0 11-2 0 1 1 0 012 0zm-1-9a1 1 0 00-1 1v4a1 1 0 102 0V6a1 1 0 00-1-1z" clip-rule="evenodd">
                                    </path>
                                </svg>
                            </div>
                        </div>
                    </div>

                    <div>
                        <label for="email" class="block text-sm font-medium leading-5  text-gray-700">Person id </label>
                        <div class="mt-1 relative rounded-md shadow-sm">
                            <input <?php if (!$isEditable) {
                                        echo "disabled";
                                    } ?> id="landmark" name="person_id" placeholder="John Doe" value=<?php echo $row["person_id"]; ?> type="text" required="" class="appearance-none block w-[400px] px-3 py-2 border border-gray-300 rounded-md placeholder-gray-400 focus:outline-none focus:shadow-outline-blue focus:border-blue-300 transition duration-150 ease-in-out sm:text-sm sm:leading-5" />
                            <div class="hidden absolute inset-y-0 right-0 pr-3 flex items-center pointer-events-none">
                                <svg class="h-5 w-5 text-red-500" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7 4a1 1 0 11-2 0 1 1 0 012 0zm-1-9a1 1 0 00-1 1v4a1 1 0 102 0V6a1 1 0 00-1-1z" clip-rule="evenodd">
                                    </path>
                                </svg>
                            </div>
                        </div>
                    </div>
                    <div>
                        <label for="email" class="block text-sm font-medium leading-5  text-gray-700">Password</label>
                        <div class="mt-1 relative rounded-md shadow-sm">
                            <input <?php if (!$isEditable) {
                                        echo "disabled";
                                    } ?> id="area" name="password" placeholder="John Doe" value=<?php echo $row["password"]; ?> type="text" required="" class="appearance-none block w-[400px] px-3 py-2 border border-gray-300 rounded-md placeholder-gray-400 focus:outline-none focus:shadow-outline-blue focus:border-blue-300 transition duration-150 ease-in-out sm:text-sm sm:leading-5" />
                            <div class="hidden absolute inset-y-0 right-0 pr-3 flex items-center pointer-events-none">
                                <svg class="h-5 w-5 text-red-500" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7 4a1 1 0 11-2 0 1 1 0 012 0zm-1-9a1 1 0 00-1 1v4a1 1 0 102 0V6a1 1 0 00-1-1z" clip-rule="evenodd">
                                    </path>
                                </svg>
                            </div>
                        </div>
                    </div>
                    <div>
                        <label for="email" class="block text-sm font-medium leading-5  text-gray-700">Start date</label>
                        <div class="mt-1 relative rounded-md shadow-sm">
                            <input <?php if (!$isEditable) {
                                        echo "disabled";
                                    } ?> id="pincode" name="start_date" placeholder="John Doe" type="text" value=<?php echo $row["start_date"]; ?> required="" class="appearance-none block w-[400px] px-3 py-2 border border-gray-300 rounded-md placeholder-gray-400 focus:outline-none focus:shadow-outline-blue focus:border-blue-300 transition duration-150 ease-in-out sm:text-sm sm:leading-5" />
                            <div class="hidden absolute inset-y-0 right-0 pr-3 flex items-center pointer-events-none">
                                <svg class="h-5 w-5 text-red-500" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7 4a1 1 0 11-2 0 1 1 0 012 0zm-1-9a1 1 0 00-1 1v4a1 1 0 102 0V6a1 1 0 00-1-1z" clip-rule="evenodd">
                                    </path>
                                </svg>
                            </div>
                        </div>
                    </div>
                    <div>
                        <label for="email" class="block text-sm font-medium leading-5  text-gray-700">End date</label>
                        <div class="mt-1 relative rounded-md shadow-sm">
                            <input <?php if (!$isEditable) {
                                        echo "disabled";
                                    } ?> id="total_amount" name="End date" placeholder="John Doe" value=<?php echo $row["end_date"]; ?> type="text" required="" class="appearance-none block w-[400px] px-3 py-2 border border-gray-300 rounded-md placeholder-gray-400 focus:outline-none focus:shadow-outline-blue focus:border-blue-300 transition duration-150 ease-in-out sm:text-sm sm:leading-5" />
                            <div class="hidden absolute inset-y-0 right-0 pr-3 flex items-center pointer-events-none">
                                <svg class="h-5 w-5 text-red-500" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7 4a1 1 0 11-2 0 1 1 0 012 0zm-1-9a1 1 0 00-1 1v4a1 1 0 102 0V6a1 1 0 00-1-1z" clip-rule="evenodd">
                                    </path>
                                </svg>
                            </div>
                        </div>
                    </div>


                    <div>
                        <label for="email" class="block text-sm font-medium leading-5  text-gray-700">Role</label>
                        <div class="mt-1 relative rounded-md shadow-sm">
                            <input <?php if (!$isEditable) {
                                        echo "disabled";
                                    } ?> id="" name="role" placeholder="John Doe" type="text" value=<?php echo $row["role"]; ?> required="" class="appearance-none block w-[400px] px-3 py-2 border border-gray-300 rounded-md placeholder-gray-400 focus:outline-none focus:shadow-outline-blue focus:border-blue-300 transition duration-150 ease-in-out sm:text-sm sm:leading-5" />
                            <div class="hidden absolute inset-y-0 right-0 pr-3 flex items-center pointer-events-none">
                                <svg class="h-5 w-5 text-red-500" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7 4a1 1 0 11-2 0 1 1 0 012 0zm-1-9a1 1 0 00-1 1v4a1 1 0 102 0V6a1 1 0 00-1-1z" clip-rule="evenodd">
                                    </path>
                                </svg>
                            </div>
                        </div>
                    </div>




                    <div class="mt-6">
                        <span class="block w-full rounded-md shadow-sm">
                            <button type="submit" class="w-full flex justify-center py-2 px-4 border border-transparent text-sm font-medium rounded-md text-white bg-blue-600 hover:bg-blue-500 focus:outline-none focus:border-indigo-700 focus:shadow-outline-indigo active:bg-indigo-700 transition duration-150 ease-in-out">
                                Submit to update
                            </button>
                        </span>
                    </div>
                </form>

            </div>
        </div>
    </div> -->
</body>

</html>