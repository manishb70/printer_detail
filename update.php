<?php
session_start();
include("db.php");
if (!isset($_SESSION["NAME"])) {
    header("location: login.php");
}
// $user_info = $_GET["user_info"];
// echo "<br>" . $_SESSION["NAME"];
// echo "<br> welcome ";
$id = $_SESSION["id"];
// $sql = "SELECT * from user_info where id='$user_info' or username='$user_info' ";
$sql = "SELECT * from user_info ";
$result = mysqli_query($con, $sql);
// $row = mysqli_fetch_array($result);
// echo $row["fullname"] . "<br>";
// echo $user_info;


// echo "<br>" . var_dump($row);




$isEditable = false;
if ($_SESSION["role"] == "admin" or $_SESSION["role"] == "modify") {
    $isEditable = true;
}


// $user_id = $row["id"];

// echo $row["fullname"];






if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    echo $inputDisable;


    // echo ($isEditable ?  $row["full name"] : "not editable");


    if (isset($_POST['reset_button'])) {

        $sql = "SELECT * FROM user_info";
        $result = mysqli_query($con, $sql);
    } else if (isset($_POST["search_button"])) {
        echo $_POST['search_date'];
        // echo "<br>".Date.now();
        echo "<br>" . date('Y-m-d');
        $search_query = $_POST["search_query"];
        $date = $_POST["search_date"];


        // $name = $_POST["fullname"];
        // $email = $_POST["email"];
        // $password = $_POST["password"];
        // $username = $_POST["username"];
        // $phone = $_POST["phone_number"];
        // $age = $_POST["age"];
        // $gender = $_POST["gender"];
        // $addressline_1 = $_POST["addresline_1"];
        // $addressline_2 = $_POST["addresline_2"];
        // $landmark = $_POST["landmark"];
        // $area = $_POST["area"];
        // $pincode = $_POST["pincode"];
        // $total_amount_due = $_POST["total_amount"];
        // $amount_recieved = $_POST["amount_recieved"];
        // $dob = $_POST["dob"];
        // $bank_name = $_POST["bank_name"];
        // $branch_name = $_POST["branch_name"];
        // $bank_account_number = $_POST["bank_account_number"];
        // $bank_ifsc = $_POST["bank_ifsc"];
        // $year = $_POST["year"];
        // $pan_card = $_POST["pan_card"];
        // $adhaar_card = $_POST["adhaar_card"];
        // $category = $_POST["category"];
        // $Membership = $_POST["membership"];
        // $company_name = $_POST["company_name"];
        // $user_type  =  $_POST["user_type"];

        // $sql2 = "UPDATE `for_office`.`user_info` SET `fullname` = '$name', `user_email` = '$email', `user_phoneNumber` = '$phone', `age` = '$age', `gender` = '$gender', `address_line_1` = '$addressline_1', `username` = '$username', `password` = '$password', `date_birth` = '$dob', `bank_name` = '$bank_name', `bank_account_number` = '$bank_account_number', `bank_IFSC_code` = '$bank_ifsc', `bank_branch_name` = '$branch_name', `Year` = '$year', `pan_card_required` = '$pan_card', `adhaar_number` = '$adhaar_card', `category` = '$category', `membership` = '$Membership', `name_of_company` = '$company_name', `address_line_2` = '$addressline_2', `landmark` = '$landmark', `area` = '$area', `pincode` = '$pincode', `total_amount_due` = '$total_amount_due', `total_amount_received` = '$amount_recieved', `membership_renewed` = 'no', `user_type` = '$user_type' WHERE (`id` = '$user_id')";


        $sql2 = "SELECT * FROM user_info WHERE fullname='$search_query' OR id='$search_query' OR user_email='$search_query' OR membership='$search_query'OR pincode='$search_query'OR user_type='$search_query'OR user_email='$search_query'OR area='$search_query' OR name_of_company ='$search_query'OR adhaar_number='$search_query' OR bank_branch_name='$search_query' OR membership_renewed='$search_query' OR gender='$search_query' OR bank_name='$search_query'  OR user_phoneNumber='$search_query'  OR age='$search_query'   OR gender='$search_query' OR date_birth='$date' ";

        $result = mysqli_query($con, $sql2);


        // if (mysqli_num_rows($result) > 0) {
        //     echo "<br>data Updated success fully<br>";
        // } else {
        //     echo "errrrorr is comun from srever";
        // }
    }

    //     else if (isset($_POST["search_date"])) {

    //         $date = $_POST["search_date"];

    //         echo $date;

    // // 
    //         // $sql2 = "SELECT * FROM user_info WHERE date_birth='$search_query'";
    //         $sql= "select * from user_info where date_birth='$date'";
    //         $result = mysqli_query($con, $sql);

    //     }
}










?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.0.4/dist/tailwind.min.css" rel="stylesheet">

    <title>Document</title>
</head>


<body>




    <div>

        <button id="1" onclick="enableItem()">CLick </button>

        <input id=19 disabled type="text" onclick="enableItem(event)">
        <form class="flex items-center   mx-auto w-full" method="POST">


            <button type="submit" name="reset_button" class="inline-flex mr-2 ml-20 items-center py-2.5 px-3 ms-2 text-sm font-medium text-white bg-blue-700 rounded-lg border border-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                Reset
            </button>
            <div class="relative   mr-2">
                <label for=""> Date of birth</label>
                <input type="date" name="search_date" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full ps-10 p-2.5  dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" value="2000-01-01" placeholder="Search Details From Database..." />

            </div>

            <div class="relative  mr-2" style="margin-left: 50vw;">

                <input type="text" name="search_query" class="bg-gray-50 w-5 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full ps-10 p-2.5  dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Search Details From Database..." style="width: 181px;" />

            </div>

            <button type="submit" name="search_button" class="inline-flex items-center py-2.5 px-3 ms-2 text-sm font-medium text-white bg-blue-700 rounded-lg border border-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                <svg class="w-4 h-4 me-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m19 19-4-4m0-7A7 7 0 1 1 1 8a7 7 0 0 1 14 0Z" />
                </svg>Search
            </button>


        </form>

    </div>

    <div class="relative overflow-x-auto shadow-md mx-auto sm:rounded-lg " style="width:90%">




        <table onclick="editBox()" class=" text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400"">

            <thead class=" text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
            <tr>
                <th scope="col" class="px-4 py-3">
                    id
                </th>
                <th scope="col" class="px-4 py-3">
                    full name
                </th>
                <th scope="col" class="px-4 py-3">
                    usernme
                </th>
                <th scope="col" class="px-4 py-3">
                    password
                </th>
                <th scope="col" class="px-4 py-3">
                    email
                </th>
                <th scope="col" class="px-4 py-3">
                    phone
                </th>
                <th scope="col" class="px-4 py-3">
                    age
                </th>
                <th scope="col" class="px-4 py-3">
                    gender
                </th>
                <th scope="col" class="px-4 py-3">
                    address line 1
                </th>
                <th scope="col" class="px-4 py-3">
                    date_birth
                </th>

                <th scope="col" class="px-4 py-3">
                    bank_name
                </th>
                <th scope="col" class="px-4 py-3">
                    bank_account_number
                </th>
                <th scope="col" class="px-4 py-3">
                    bank_IFSC_code
                </th>
                <th scope="col" class="px-4 py-3">
                    bank_branch_name
                </th>
                <th scope="col" class="px-4 py-3">
                    Year
                </th>
                <th scope="col" class="px-4 py-3">
                    pan card
                </th>
                <th scope="col" class="px-4 py-3">
                    adhaar number
                </th>
                <th scope="col" class="px-4 py-3">
                    category
                </th>
                <th scope="col" class="px-4 py-3">
                    Membership
                </th>
                <th scope="col" class="px-4 py-3">
                    name of company
                </th>
                <th scope="col" class="px-4 py-3">
                    address_line_2
                </th>
                <th scope="col" class="px-4 py-3">
                    landmark
                </th>
                <th scope="col" class="px-4 py-3">
                    area
                </th>
                <th scope="col" class="px-4 py-3">
                    pincode
                </th>
                <th scope="col" class="px-4 py-3">
                    total_amount_due
                </th>
                <th scope="col" class="px-4 py-3">
                    total_amount_received
                </th>

                <th scope="col" class="px-4 py-3">
                    membership_renewed
                </th>
                <th scope="col" class="px-4 py-3">
                    user_type
                </th>

                <th scope="col" class="px-4 py-3">
                    <span class="sr-only">Edit</span>
                </th>
            </tr>
            </thead>
            <tbody>




                <?php

                if (mysqli_num_rows($result) > 0) {
                    while ($row = mysqli_fetch_assoc($result)) {

                        echo '

                
                <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">

                    <th id=1 scope="row" class="px-4 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                        ' . $row["id"] . '
                    </th>
                    <td class=px-4 py-4 ">
                       ' . ($isEditable ? "<input  disabled style='max-width:80px'  margin-left:0' value=" . $row["fullname"] . ">" : $row["fullname"]) . '
                    </td>
                    <td  class="px-4 py-4">
                       
                         ' . ($isEditable ? "<input id='2' style='max-width:80px; margin-left:0' value=" . $row["username"] . ">" : $row["username"]) . '
                    </td>
                     <td class="px-4 py-4">
                        
                         ' . ($isEditable ? "<input style='max-width:80px; margin-left:0' value=" . $row["password"] . ">" : $row["password"]) . '
                    </td>
                    <td class="px-4 py-4">
                      
                        ' . ($isEditable ? "<input  style='max-width:80px; margin-left:0' value=" . $row["user_email"] . ">" : $row["user_email"]) . '
                    </td>
                    <td class="px-4 py-4">
                        
                        ' . ($isEditable ? "<input style='max-width:80px'  margin-left:0' value=" . $row["user_phoneNumber"] . ">" : $row["user_phoneNumber"]) . '
                    </td>
                    <td class="px-4 py-4">
                    
                        ' . ($isEditable ? "<input style='max-width:80px'  margin-left:0' value=" . $row["age"] . ">" : $row["age"]) . '
                    </td>
                    <td class="px-4 py-4">
                        
                        ' . ($isEditable ? "<input style='max-width:80px'  margin-left:0' value=" . $row["gender"] . ">" : $row["gender"]) . '
                    </td>
                    <td class="px-4 py-4">
                       
                        ' . ($isEditable ? "<input style='max-width:80px'  margin-left:0' value=" . $row["address_line_1"] . ">" : $row["address_line_1"]) . '
                    </td>
                     <td class="px-4 py-4">
                       
                        ' . ($isEditable ? "<input style='max-width:80px'  margin-left:0' value=" . $row["date_birth"] . ">" :  $row["date_birth"]) . '
                    </td>
                     <td class="px-4 py-4">
                       
                         ' . ($isEditable ? "<input style='max-width:80px'  margin-left:0' value=" . $row["bank_name"] . ">" : $row["bank_name"]) . '
                    </td> <td class="px-4 py-4">
                       
                        ' . ($isEditable ? "<input style='max-width:80px'  margin-left:0' value=" . $row["fullname"] . ">" : $row["fullname"]) . '
                    </td> <td class="px-4 py-4">
                       
                         ' . ($isEditable ? "<input style='max-width:80px'  margin-left:0' value=" . $row["bank_IFSC_code"] . ">" : $row["bank_IFSC_code"]) . '
                    </td>   
                    </td> <td class="px-4 py-4">
                        
                        ' . ($isEditable ? "<input style='max-width:80px'  margin-left:0' value=" . $row["bank_branch_name"] . ">" : $row["bank_branch_name"]) . '
                    </td>   <td class="px-4 py-4">
                        
                        ' . ($isEditable ? "<input style='max-width:80px'  margin-left:0' value=" . $row["Year"] . ">" : $row["Year"]) . '
                    </td>  <td class="px-4 py-4">
                       
                        ' . ($isEditable ? "<input style='max-width:80px'  margin-left:0' value=" . $row["pan_card_required"] . ">" : $row["pan_card_required"]) . '
                    </td>  <td class="px-4 py-4">
                        
                        ' . ($isEditable ? "<input style='max-width:80px'  margin-left:0' value=" . $row["adhaar_number"] . ">" : $row["adhaar_number"]) . '
                    </td>  <td class="px-4 py-4">
                        
                        ' . ($isEditable ? "<input style='max-width:80px'  margin-left:0' value=" . $row["category"] . ">" :  $row["category"]) . '
                    </td>  <td class="px-4 py-4">
                        
                        ' . ($isEditable ? "<input style='max-width:80px'  margin-left:0' value=" . $row["membership"] . ">" :  $row["membership"]) . '
                    </td>  <td class="px-4 py-4">
                        
                        ' . ($isEditable ? "<input style='max-width:80px'  margin-left:0' value=" . $row["name_of_company"] . ">" : $row["name_of_company"]) . '
                    </td>  <td class="px-4 py-4">
                        
                        ' . ($isEditable ? "<input style='max-width:80px'  margin-left:0' value=" . $row["address_line_2"] . ">" : $row["address_line_2"]) . '
                    </td>  <td class="px-4 py-4">
                        
                        ' . ($isEditable ? "<input style='max-width:80px'  margin-left:0' value=" . $row["landmark"] . ">" : $row["landmark"]) . '
                    </td>  <td class="px-4 py-4">
                        
                        ' . ($isEditable ? "<input style='max-width:80px'  margin-left:0' value=" . $row["area"] . ">" : $row["area"]) . '
                    </td>  <td class="px-4 py-4">
                        
                        ' . ($isEditable ? "<input style='max-width:80px'  margin-left:0' value=" . $row["pincode"] . ">" :  $row["pincode"]) . '
                    </td>  
                    <td class="px-4 py-4">
                        
                        ' . ($isEditable ? "<input style='max-width:80px'  margin-left:0' value=" . $row["total_amount_due"] . ">" :  $row["total_amount_due"]) . '
                    </td>  <td class="px-4 py-4">
                        
                        ' . ($isEditable ? "<input style='max-width:80px'  margin-left:0' value=" . $row["total_amount_received"] . ">" :  $row["total_amount_received"]) . '
                    </td>  <td class="px-4 py-4">
                        
                        ' . ($isEditable ? "<input style='max-width:80px'  margin-left:0' value=" . $row["membership_renewed"] . ">" : $row["membership_renewed"]) . '
                    </td>  <td class="px-4 py-4">
                        
                        ' . ($isEditable ? "<input style='max-width:80px'  margin-left:0' value=" . $row["user_type"] . ">" : $row["user_type"]) . '
                    </td>  

                    <td class="px-4 py-4 text-right">
                        <a href="#" onclick ="rt(event)" class="font-medium text-blue-600 dark:text-blue-500 hover:underline">Edit</a>
                    </td>
                </tr>
    ';
                    }
                } else {

                    echo '

                
                    <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
    
                        <th scope="row" colspan="28" class="px-6 mx-auto  text-center py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                             no data found
                        </th>
                                          </tr>
        ';
                }
                ?>
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
                        <label for="email" class="block text-sm font-medium leading-5  text-gray-700">fullName</label>
                        <div class="mt-1 relative rounded-md shadow-sm">
                            <input <?php if (!$isEditable) {
                                        echo "disabled";
                                    } ?> id="fullname" name="fullname" placeholder="John Doe" type="text" required="" value=<?php echo  $row["fullname"]; ?> class="appearance-none block w-[400px] px-3 py-2 border border-gray-300 rounded-md placeholder-gray-400 focus:outline-none focus:shadow-outline-blue focus:border-blue-300 transition duration-150 ease-in-out sm:text-sm sm:leading-5" />
                            <div class="hidden absolute inset-y-0 right-0 pr-3 flex items-center pointer-events-none">
                                <svg class="h-5 w-5 text-red-500" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7 4a1 1 0 11-2 0 1 1 0 012 0zm-1-9a1 1 0 00-1 1v4a1 1 0 102 0V6a1 1 0 00-1-1z" clip-rule="evenodd">
                                    </path>
                                </svg>
                            </div>
                        </div>
                    </div>

                    <div>
                        <label for="email" class="block text-sm font-medium leading-5  text-gray-700">Username</label>
                        <div class="mt-1 relative rounded-md shadow-sm">
                            <input <?php if (!$isEditable) {
                                        echo "disabled";
                                    } ?> 
                            id="username" 
                            <?php if (!$isEditable) {
                                echo "disabled";
                            } ?>
                             name="username" value="<?php echo $row['username']; ?>" placeholder="John Doe" type="text" required="" 
                             class="appearance-none block w-[400px] px-3 py-2 border border-gray-300 rounded-md placeholder-gray-400 focus:outline-none focus:shadow-outline-blue focus:border-blue-300 transition duration-150 ease-in-out sm:text-sm sm:leading-5" />
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
                                    } ?> id="email" value=<?php echo $row["user_email"]; ?> name="email" placeholder="user@example.com" type="email" required="" class="appearance-none block w-[400px] px-3 py-2 border border-gray-300 rounded-md placeholder-gray-400 focus:outline-none focus:shadow-outline-blue focus:border-blue-300 transition duration-150 ease-in-out sm:text-sm sm:leading-5" />
                            <div class="hidden absolute inset-y-0 right-0 pr-3 flex items-center pointer-events-none">
                                <svg class="h-5 w-5 text-red-500" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7 4a1 1 0 11-2 0 1 1 0 012 0zm-1-9a1 1 0 00-1 1v4a1 1 0 102 0V6a1 1 0 00-1-1z" clip-rule="evenodd"></path>
                                </svg>
                            </div>
                        </div>
                    </div>

                    <div>
                        <label for="email" class="block text-sm font-medium leading-5  text-gray-700">Phone</label>
                        <div class="mt-1 relative rounded-md shadow-sm">
                            <input <?php if (!$isEditable) {
                                        echo "disabled";
                                    } ?> value=<?php echo $row["user_phoneNumber"]; ?> id="name" name="phone_number" placeholder="John Doe" type="text" required="" class="appearance-none block w-[400px] px-3 py-2 border border-gray-300 rounded-md placeholder-gray-400 focus:outline-none focus:shadow-outline-blue focus:border-blue-300 transition duration-150 ease-in-out sm:text-sm sm:leading-5" />
                            <div class="hidden absolute inset-y-0 right-0 pr-3 flex items-center pointer-events-none">
                                <svg class="h-5 w-5 text-red-500" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7 4a1 1 0 11-2 0 1 1 0 012 0zm-1-9a1 1 0 00-1 1v4a1 1 0 102 0V6a1 1 0 00-1-1z" clip-rule="evenodd">
                                    </path>
                                </svg>
                            </div>
                        </div>
                    </div>
                    <div>
                        <label for="email" class="block text-sm font-medium leading-5  text-gray-700">age</label>
                        <div class="mt-1 relative rounded-md shadow-sm">
                            <input <?php if (!$isEditable) {
                                        echo "disabled";
                                    } ?> id="age" name="age" placeholder="John Doe" value=<?php echo  $row["age"]; ?> type="text" required="" class="appearance-none block w-[400px] px-3 py-2 border border-gray-300 rounded-md placeholder-gray-400 focus:outline-none focus:shadow-outline-blue focus:border-blue-300 transition duration-150 ease-in-out sm:text-sm sm:leading-5" />
                            <div class="hidden absolute inset-y-0 right-0 pr-3 flex items-center pointer-events-none">
                                <svg class="h-5 w-5 text-red-500" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7 4a1 1 0 11-2 0 1 1 0 012 0zm-1-9a1 1 0 00-1 1v4a1 1 0 102 0V6a1 1 0 00-1-1z" clip-rule="evenodd">
                                    </path>
                                </svg>
                            </div>
                        </div>
                    </div>
                    <div>
                        <label for="email" class="block text-sm font-medium leading-5  text-gray-700">gender</label>
                        <div class="mt-1 relative rounded-md shadow-sm">
                            <input <?php if (!$isEditable) {
                                        echo "disabled";
                                    } ?> id="gender" name="gender" value=<?php echo $row["gender"]; ?> placeholder="John Doe" type="text" required="" class="appearance-none block w-[400px] px-3 py-2 border border-gray-300 rounded-md placeholder-gray-400 focus:outline-none focus:shadow-outline-blue focus:border-blue-300 transition duration-150 ease-in-out sm:text-sm sm:leading-5" />
                            <div class="hidden absolute inset-y-0 right-0 pr-3 flex items-center pointer-events-none">
                                <svg class="h-5 w-5 text-red-500" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7 4a1 1 0 11-2 0 1 1 0 012 0zm-1-9a1 1 0 00-1 1v4a1 1 0 102 0V6a1 1 0 00-1-1z" clip-rule="evenodd">
                                    </path>
                                </svg>
                            </div>
                        </div>
                    </div>
                    <div>
                        <label for="email" class="block text-sm font-medium leading-5  text-gray-700">Addressline 1</label>
                        <div class="mt-1 relative rounded-md shadow-sm">
                            <input <?php if (!$isEditable) {
                                        echo "disabled";
                                    } ?> id="name" name="addresline_1" value=<?php echo $row["address_line_1"]; ?> placeholder="John Doe" type="text" required="" class="appearance-none block w-[400px] px-3 py-2 border border-gray-300 rounded-md placeholder-gray-400 focus:outline-none focus:shadow-outline-blue focus:border-blue-300 transition duration-150 ease-in-out sm:text-sm sm:leading-5" />
                            <div class="hidden absolute inset-y-0 right-0 pr-3 flex items-center pointer-events-none">
                                <svg class="h-5 w-5 text-red-500" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7 4a1 1 0 11-2 0 1 1 0 012 0zm-1-9a1 1 0 00-1 1v4a1 1 0 102 0V6a1 1 0 00-1-1z" clip-rule="evenodd">
                                    </path>
                                </svg>
                            </div>
                        </div>
                    </div>  
                    <div>
                        <label for="email" class="block text-sm font-medium leading-5  text-gray-700">Addressline 2</label>
                        <div class="mt-1 relative rounded-md shadow-sm">
                            <input <?php if (!$isEditable) {
                                        echo "disabled";
                                    } ?> id="addresline_2" name="addresline_2" value=<?php echo $row["address_line_2"]; ?> placeholder="John Doe" type="text" required="" class="appearance-none block w-[400px] px-3 py-2 border border-gray-300 rounded-md placeholder-gray-400 focus:outline-none focus:shadow-outline-blue focus:border-blue-300 transition duration-150 ease-in-out sm:text-sm sm:leading-5" />
                            <div class="hidden absolute inset-y-0 right-0 pr-3 flex items-center pointer-events-none">
                                <svg class="h-5 w-5 text-red-500" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7 4a1 1 0 11-2 0 1 1 0 012 0zm-1-9a1 1 0 00-1 1v4a1 1 0 102 0V6a1 1 0 00-1-1z" clip-rule="evenodd">
                                    </path>
                                </svg>
                            </div>
                        </div>
                    </div>

                    <div>
                        <label for="email" class="block text-sm font-medium leading-5  text-gray-700">Landmark</label>
                        <div class="mt-1 relative rounded-md shadow-sm">
                            <input <?php if (!$isEditable) {
                                        echo "disabled";
                                    } ?> id="landmark" name="landmark" placeholder="John Doe" value=<?php echo $row["landmark"]; ?> type="text" required="" class="appearance-none block w-[400px] px-3 py-2 border border-gray-300 rounded-md placeholder-gray-400 focus:outline-none focus:shadow-outline-blue focus:border-blue-300 transition duration-150 ease-in-out sm:text-sm sm:leading-5" />
                            <div class="hidden absolute inset-y-0 right-0 pr-3 flex items-center pointer-events-none">
                                <svg class="h-5 w-5 text-red-500" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7 4a1 1 0 11-2 0 1 1 0 012 0zm-1-9a1 1 0 00-1 1v4a1 1 0 102 0V6a1 1 0 00-1-1z" clip-rule="evenodd">
                                    </path>
                                </svg>
                            </div>
                        </div>
                    </div>
                    <div>
                        <label for="email" class="block text-sm font-medium leading-5  text-gray-700">Area</label>
                        <div class="mt-1 relative rounded-md shadow-sm">
                            <input <?php if (!$isEditable) {
                                        echo "disabled";
                                    } ?> id="area" name="area" placeholder="John Doe" value=<?php echo $row["area"]; ?> type="text" required="" class="appearance-none block w-[400px] px-3 py-2 border border-gray-300 rounded-md placeholder-gray-400 focus:outline-none focus:shadow-outline-blue focus:border-blue-300 transition duration-150 ease-in-out sm:text-sm sm:leading-5" />
                            <div class="hidden absolute inset-y-0 right-0 pr-3 flex items-center pointer-events-none">
                                <svg class="h-5 w-5 text-red-500" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7 4a1 1 0 11-2 0 1 1 0 012 0zm-1-9a1 1 0 00-1 1v4a1 1 0 102 0V6a1 1 0 00-1-1z" clip-rule="evenodd">
                                    </path>
                                </svg>
                            </div>
                        </div>
                    </div>
                    <div>
                        <label for="email" class="block text-sm font-medium leading-5  text-gray-700">pincode</label>
                        <div class="mt-1 relative rounded-md shadow-sm">
                            <input <?php if (!$isEditable) {
                                        echo "disabled";
                                    } ?> id="pincode" name="pincode" placeholder="John Doe" type="text" value=<?php echo $row["pincode"]; ?> required="" class="appearance-none block w-[400px] px-3 py-2 border border-gray-300 rounded-md placeholder-gray-400 focus:outline-none focus:shadow-outline-blue focus:border-blue-300 transition duration-150 ease-in-out sm:text-sm sm:leading-5" />
                            <div class="hidden absolute inset-y-0 right-0 pr-3 flex items-center pointer-events-none">
                                <svg class="h-5 w-5 text-red-500" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7 4a1 1 0 11-2 0 1 1 0 012 0zm-1-9a1 1 0 00-1 1v4a1 1 0 102 0V6a1 1 0 00-1-1z" clip-rule="evenodd">
                                    </path>
                                </svg>
                            </div>
                        </div>
                    </div>
                    <div>
                        <label for="email" class="block text-sm font-medium leading-5  text-gray-700">Total amount due</label>
                        <div class="mt-1 relative rounded-md shadow-sm">
                            <input <?php if (!$isEditable) {
                                        echo "disabled";
                                    } ?> id="total_amount" name="total_amount" placeholder="John Doe" value=<?php echo $row["total_amount_due"]; ?> type="text" required="" class="appearance-none block w-[400px] px-3 py-2 border border-gray-300 rounded-md placeholder-gray-400 focus:outline-none focus:shadow-outline-blue focus:border-blue-300 transition duration-150 ease-in-out sm:text-sm sm:leading-5" />
                            <div class="hidden absolute inset-y-0 right-0 pr-3 flex items-center pointer-events-none">
                                <svg class="h-5 w-5 text-red-500" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7 4a1 1 0 11-2 0 1 1 0 012 0zm-1-9a1 1 0 00-1 1v4a1 1 0 102 0V6a1 1 0 00-1-1z" clip-rule="evenodd">
                                    </path>
                                </svg>
                            </div>
                        </div>
                    </div>


                    <div>
                        <label for="email" class="block text-sm font-medium leading-5  text-gray-700">Total amount recived</label>
                        <div class="mt-1 relative rounded-md shadow-sm">
                            <input <?php if (!$isEditable) {
                                        echo "disabled";
                                    } ?> id="amount_recieved" name="amount_recieved" placeholder="John Doe" type="text" value=<?php echo $row["total_amount_received"]; ?> required="" class="appearance-none block w-[400px] px-3 py-2 border border-gray-300 rounded-md placeholder-gray-400 focus:outline-none focus:shadow-outline-blue focus:border-blue-300 transition duration-150 ease-in-out sm:text-sm sm:leading-5" />
                            <div class="hidden absolute inset-y-0 right-0 pr-3 flex items-center pointer-events-none">
                                <svg class="h-5 w-5 text-red-500" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7 4a1 1 0 11-2 0 1 1 0 012 0zm-1-9a1 1 0 00-1 1v4a1 1 0 102 0V6a1 1 0 00-1-1z" clip-rule="evenodd">
                                    </path>
                                </svg>
                            </div>
                        </div>
                    </div>


                    <div>
                        <label for="email" class="block text-sm font-medium leading-5  text-gray-700">Date Of Birth</label>
                        <div class="mt-1 relative rounded-md shadow-sm">
                            <input <?php if (!$isEditable) {
                                        echo "disabled";
                                    } ?> id="dob" name="dob" placeholder="John Doe" type="text" value=<?php echo $row["date_birth"]; ?> required="" class="appearance-none block w-[400px] px-3 py-2 border border-gray-300 rounded-md placeholder-gray-400 focus:outline-none focus:shadow-outline-blue focus:border-blue-300 transition duration-150 ease-in-out sm:text-sm sm:leading-5" />
                            <div class="hidden absolute inset-y-0 right-0 pr-3 flex items-center pointer-events-none">
                                <svg class="h-5 w-5 text-red-500" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7 4a1 1 0 11-2 0 1 1 0 012 0zm-1-9a1 1 0 00-1 1v4a1 1 0 102 0V6a1 1 0 00-1-1z" clip-rule="evenodd">
                                    </path>
                                </svg>
                            </div>
                        </div>
                    </div>
                    <div>
                        <label for="email" class="block text-sm font-medium leading-5  text-gray-700">Bank name</label>
                        <div class="mt-1 relative rounded-md shadow-sm">
                            <input <?php if (!$isEditable) {
                                        echo "disabled";
                                    } ?> id="bank_name" name="bank_name" placeholder="John Doe" value=<?php echo $row["bank_name"]; ?> type="text" required="" class="appearance-none block w-[400px] px-3 py-2 border border-gray-300 rounded-md placeholder-gray-400 focus:outline-none focus:shadow-outline-blue focus:border-blue-300 transition duration-150 ease-in-out sm:text-sm sm:leading-5" />
                            <div class="hidden absolute inset-y-0 right-0 pr-3 flex items-center pointer-events-none">
                                <svg class="h-5 w-5 text-red-500" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7 4a1 1 0 11-2 0 1 1 0 012 0zm-1-9a1 1 0 00-1 1v4a1 1 0 102 0V6a1 1 0 00-1-1z" clip-rule="evenodd">
                                    </path>
                                </svg>
                            </div>
                        </div>
                    </div>
                    <div>
                        <label for="email" class="block text-sm font-medium leading-5  text-gray-700">Branch Name</label>
                        <div class="mt-1 relative rounded-md shadow-sm">
                            <input <?php if (!$isEditable) {
                                        echo "disabled";
                                    } ?> id="branch_name" name="branch_name" placeholder="John Doe" value=<?php echo $row["bank_branch_name"]; ?> type="text" required="" class="appearance-none block w-[400px] px-3 py-2 border border-gray-300 rounded-md placeholder-gray-400 focus:outline-none focus:shadow-outline-blue focus:border-blue-300 transition duration-150 ease-in-out sm:text-sm sm:leading-5" />
                            <div class="hidden absolute inset-y-0 right-0 pr-3 flex items-center pointer-events-none">
                                <svg class="h-5 w-5 text-red-500" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7 4a1 1 0 11-2 0 1 1 0 012 0zm-1-9a1 1 0 00-1 1v4a1 1 0 102 0V6a1 1 0 00-1-1z" clip-rule="evenodd">
                                    </path>
                                </svg>
                            </div>
                        </div>
                    </div>
                    <div>
                        <label for="email" class="block text-sm font-medium leading-5  text-gray-700">Bank account number</label>
                        <div class="mt-1 relative rounded-md shadow-sm">
                            <input <?php if (!$isEditable) {
                                        echo "disabled";
                                    } ?> id="bank_account_number" name="bank_account_number" value=<?php echo $row["bank_account_number"]; ?> placeholder="John Doe" type="text" required="" class="appearance-none block w-[400px] px-3 py-2 border border-gray-300 rounded-md placeholder-gray-400 focus:outline-none focus:shadow-outline-blue focus:border-blue-300 transition duration-150 ease-in-out sm:text-sm sm:leading-5" />
                            <div class="hidden absolute inset-y-0 right-0 pr-3 flex items-center pointer-events-none">
                                <svg class="h-5 w-5 text-red-500" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7 4a1 1 0 11-2 0 1 1 0 012 0zm-1-9a1 1 0 00-1 1v4a1 1 0 102 0V6a1 1 0 00-1-1z" clip-rule="evenodd">
                                    </path>
                                </svg>
                            </div>
                        </div>
                    </div>
                    <div>
                        <label for="email" class="block text-sm font-medium leading-5  text-gray-700">bank IFSC Code</label>
                        <div class="mt-1 relative rounded-md shadow-sm">
                            <input <?php if (!$isEditable) {
                                        echo "disabled";
                                    } ?> id="bank_ifsc" name="bank_ifsc" value=<?php echo $row["bank_IFSC_code"]; ?> placeholder="John Doe" type="text" required="" class="appearance-none block w-[400px] px-3 py-2 border border-gray-300 rounded-md placeholder-gray-400 focus:outline-none focus:shadow-outline-blue focus:border-blue-300 transition duration-150 ease-in-out sm:text-sm sm:leading-5" />
                            <div class="hidden absolute inset-y-0 right-0 pr-3 flex items-center pointer-events-none">
                                <svg class="h-5 w-5 text-red-500" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7 4a1 1 0 11-2 0 1 1 0 012 0zm-1-9a1 1 0 00-1 1v4a1 1 0 102 0V6a1 1 0 00-1-1z" clip-rule="evenodd">
                                    </path>
                                </svg>
                            </div>
                        </div>
                    </div>
                    <div>
                        <label for="email" class="block text-sm font-medium leading-5  text-gray-700">Year</label>
                        <div class="mt-1 relative rounded-md shadow-sm">
                            <input <?php if (!$isEditable) {
                                        echo "disabled";
                                    } ?> id="year" name="year" placeholder="John Doe" value=<?php echo $row["Year"]; ?> type="text" required="" class="appearance-none block w-[400px] px-3 py-2 border border-gray-300 rounded-md placeholder-gray-400 focus:outline-none focus:shadow-outline-blue focus:border-blue-300 transition duration-150 ease-in-out sm:text-sm sm:leading-5" />
                            <div class="hidden absolute inset-y-0 right-0 pr-3 flex items-center pointer-events-none">
                                <svg class="h-5 w-5 text-red-500" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7 4a1 1 0 11-2 0 1 1 0 012 0zm-1-9a1 1 0 00-1 1v4a1 1 0 102 0V6a1 1 0 00-1-1z" clip-rule="evenodd">
                                    </path>
                                </svg>
                            </div>
                        </div>
                    </div>
                    <div>
                        <label for="email" class="block text-sm font-medium leading-5  text-gray-700">Pan Card</label>
                        <div class="mt-1 relative rounded-md shadow-sm">
                            <input <?php if (!$isEditable) {
                                        echo "disabled";
                                    } ?> id="pan_card" name="pan_card" placeholder="John Doe" value=<?php echo $row["pan_card_required"]; ?> type="text" required="" class="appearance-none block w-[400px] px-3 py-2 border border-gray-300 rounded-md placeholder-gray-400 focus:outline-none focus:shadow-outline-blue focus:border-blue-300 transition duration-150 ease-in-out sm:text-sm sm:leading-5" />
                            <div class="hidden absolute inset-y-0 right-0 pr-3 flex items-center pointer-events-none">
                                <svg class="h-5 w-5 text-red-500" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7 4a1 1 0 11-2 0 1 1 0 012 0zm-1-9a1 1 0 00-1 1v4a1 1 0 102 0V6a1 1 0 00-1-1z" clip-rule="evenodd">
                                    </path>
                                </svg>
                            </div>
                        </div>
                    </div>
                    <div>
                        <label for="email" class="block text-sm font-medium leading-5  text-gray-700">Adhaar card</label>
                        <div class="mt-1 relative rounded-md shadow-sm">
                            <input <?php if (!$isEditable) {
                                        echo "disabled";
                                    } ?> id="adhaar_card" name="adhaar_card" placeholder="John Doe" value=<?php echo $row["adhaar_number"]; ?> type="text" required="" class="appearance-none block w-[400px] px-3 py-2 border border-gray-300 rounded-md placeholder-gray-400 focus:outline-none focus:shadow-outline-blue focus:border-blue-300 transition duration-150 ease-in-out sm:text-sm sm:leading-5" />
                            <div class="hidden absolute inset-y-0 right-0 pr-3 flex items-center pointer-events-none">
                                <svg class="h-5 w-5 text-red-500" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7 4a1 1 0 11-2 0 1 1 0 012 0zm-1-9a1 1 0 00-1 1v4a1 1 0 102 0V6a1 1 0 00-1-1z" clip-rule="evenodd">
                                    </path>
                                </svg>
                            </div>
                        </div>
                    </div>
                    <div>
                        <label for="email" class="block text-sm font-medium leading-5  text-gray-700">Category</label>
                        <div class="mt-1 relative rounded-md shadow-sm">
                            <input <?php if (!$isEditable) {
                                        echo "disabled";
                                    } ?> id="name" name="category" value=<?php echo $row["category"]; ?> placeholder="John Doe" type="text" required="" class="appearance-none block w-[400px] px-3 py-2 border border-gray-300 rounded-md placeholder-gray-400 focus:outline-none focus:shadow-outline-blue focus:border-blue-300 transition duration-150 ease-in-out sm:text-sm sm:leading-5" />
                            <div class="hidden absolute inset-y-0 right-0 pr-3 flex items-center pointer-events-none">
                                <svg class="h-5 w-5 text-red-500" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7 4a1 1 0 11-2 0 1 1 0 012 0zm-1-9a1 1 0 00-1 1v4a1 1 0 102 0V6a1 1 0 00-1-1z" clip-rule="evenodd">
                                    </path>
                                </svg>
                            </div>
                        </div>
                    </div>

                    <div>
                        <label for="email" class="block text-sm font-medium leading-5  text-gray-700">Membership</label>
                        <div class="mt-1 relative rounded-md shadow-sm">
                            <input <?php if (!$isEditable) {
                                        echo "disabled";
                                    } ?> id="name" name="membership" placeholder="John Doe" value=<?php echo $row["membership"]; ?> type="text" required="" class="appearance-none block w-full px-3 py-2 border border-gray-300 rounded-md placeholder-gray-400 focus:outline-none focus:shadow-outline-blue focus:border-blue-300 transition duration-150 ease-in-out sm:text-sm sm:leading-5" />
                            <div class="hidden absolute inset-y-0 right-0 pr-3 flex items-center pointer-events-none">
                                <svg class="h-5 w-5 text-red-500" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7 4a1 1 0 11-2 0 1 1 0 012 0zm-1-9a1 1 0 00-1 1v4a1 1 0 102 0V6a1 1 0 00-1-1z" clip-rule="evenodd">
                                    </path>
                                </svg>
                            </div>
                        </div>
                    </div>
                    <div>
                        <label for="email" class="block text-sm font-medium leading-5  text-gray-700">Name of company</label>
                        <div class="mt-1 relative rounded-md shadow-sm">
                            <input <?php if (!$isEditable) {
                                        echo "disabled";
                                    } ?> id="company_name" name="company_name" value=<?php echo $row["name_of_company"]; ?> placeholder="John Doe" type="text" required="" class="appearance-none block w-full px-3 py-2 border border-gray-300 rounded-md placeholder-gray-400 focus:outline-none focus:shadow-outline-blue focus:border-blue-300 transition duration-150 ease-in-out sm:text-sm sm:leading-5" />
                            <div class="hidden absolute inset-y-0 right-0 pr-3 flex items-center pointer-events-none">
                                <svg class="h-5 w-5 text-red-500" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7 4a1 1 0 11-2 0 1 1 0 012 0zm-1-9a1 1 0 00-1 1v4a1 1 0 102 0V6a1 1 0 00-1-1z" clip-rule="evenodd">
                                    </path>
                                </svg>
                            </div>
                        </div>
                    </div>
                    <div>
                        <label for="email" class="block text-sm font-medium leading-5  text-gray-700">User type</label>
                        <div class="mt-1 relative rounded-md shadow-sm">
                            <input <?php if (!$isEditable) {
                                        echo "disabled";
                                    } ?> id="user_type" name="user_type" placeholder="John Doe" value=<?php echo $row["user_type"]; ?> type="text" required="" class="appearance-none block w-full px-3 py-2 border border-gray-300 rounded-md placeholder-gray-400 focus:outline-none focus:shadow-outline-blue focus:border-blue-300 transition duration-150 ease-in-out sm:text-sm sm:leading-5" />
                            <div class="hidden absolute inset-y-0 right-0 pr-3 flex items-center pointer-events-none">
                                <svg class="h-5 w-5 text-red-500" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7 4a1 1 0 11-2 0 1 1 0 012 0zm-1-9a1 1 0 00-1 1v4a1 1 0 102 0V6a1 1 0 00-1-1z" clip-rule="evenodd">
                                    </path>
                                </svg>
                            </div>
                        </div>
                    </div>


                    <div class="mt-6">
                        <label for="password" class="block text-sm font-medium leading-5 text-gray-700">
                            Password
                        </label>
                        <div class="mt-1 rounded-md shadow-sm">
                            <input <?php if (!$isEditable) {
                                        echo "disabled";
                                    } ?> id="password" name="password" type="password" value=<?php echo $row["password"]; ?> required="" class="appearance-none block w-[400px] px-3 py-2 border border-gray-300 rounded-md placeholder-gray-400 focus:outline-none focus:shadow-outline-blue focus:border-blue-300 transition duration-150 ease-in-out sm:text-sm sm:leading-5" />
                        </div>
                    </div>

                    <div class="mt-6">
                        <label for="password_confirmation" class="block text-sm font-medium leading-5 text-gray-700">
                            Confirm Password
                        </label>
                        <div class="mt-1 rounded-md shadow-sm">
                            <input <?php if (!$isEditable) {
                                        echo "disabled";
                                    } ?> id="password_confirmation" name="password_confirmation" type="password" value=<?php echo $row["password"]; ?>  required="" class="appearance-none block w-[400px] px-3 py-2 border border-gray-300 rounded-md placeholder-gray-400 focus:outline-none focus:shadow-outline-blue focus:border-blue-300 transition duration-150 ease-in-out sm:text-sm sm:leading-5" />
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
<script>
    const inputs = document.getElementsByTagName("btn");


    // document.getElementsByTagName("input").addEventListener("click", (e)=>{

    //     alert(e.target.value)

    // });


    let enable = false;

    function enableItem() {


        for (let element of document.getElementsByTagName("input")) {
            // element.disabled = true; 

            element.disabled = true;
        }


    }



    function rt(e){

        //   console.log(e.target.parentElement);  
      console.log((e.target.parentElement).parentElement)

    //   for (let element of e.target.parentElement.parentElement) {
    //         // element.disabled = true; 

    //        console.log(element);
    //     }


    }



</script>

</html>