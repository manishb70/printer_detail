<?php
session_start();
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
 
    include("../db.php");




    $bank_name = $_POST["bank_name"];
    $bank_account_number = $_POST["bank_account_number"];
    $bank_ifsc_number = $_POST["bank_ifsc_number"];
    $bank_branch_name = $_POST["bank_branch_name"];
    $company_address = $_POST["company_address"];
    $company_name = $_POST["company_name"];




    $sql = "INSERT INTO company_header_level_details (name_of_company,company_address) values('$company_name','$company_address')";

    $result = mysqli_query($con, $sql);


    if ($result) {

        $company_id = mysqli_insert_id($con);

        $sql = "INSERT into company_banking_details (main_company_id,sub_company_id,bank_name,bank_account_number,bank_ifsc_code,bank_branch_name) values($company_id,0,'$bank_name',$bank_account_number,'$bank_ifsc_number','$bank_branch_name')";
        $result = mysqli_query($con, $sql);
        if ($result) {
            echo "<br> registraion  success<br>";

    
            $_SESSION["mainCompanyId"] = $company_id;
            $_SESSION["mainCompany"] = $company_name;
            $_SESSION["bankName"] = $bank_name;
            $_SESSION["bankAccountNumber"] =  $bank_account_number;
            $_SESSION["bankIfscNumber"] = $bank_ifsc_number;
            $_SESSION["bankBranchName"] = $bank_branch_name;
            $_SESSION["totalNumberOfForm"] = $_POST['numberOfSubCompany'];
            



            header("location: siteName.php");
        }
    } else {

        echo "error accoured";
    }
}











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
                <div class="w-full xl:w-3/4 lg:w-11/12 flex">
                    <!-- Col -->
                    <div class="w-full h-auto bg-gray-400 dark:bg-gray-800 hidden lg:block lg:w-5/12 bg-cover rounded-l-lg" style="background-image: url('https://source.unsplash.com/Mv9hjnEUHR4/600x800')"></div>
                    <!-- Col -->
                    <div class="w-full lg:w-7/12 bg-white dark:bg-gray-700 p-5 rounded-lg lg:rounded-l-none">
                        <h3 class="py-4 text-2xl text-center text-gray-800 dark:text-white">Create an Account!</h3>
                        <form action="#" method="post" class="px-8 pt-6 pb-8 mb-4 bg-white dark:bg-gray-800 rounded">
                            <div class="mb-4 md:flex md:justify-between">
                                <div class="mb-4 md:mr-2 md:mb-0">
                                    <label class="block mb-2 text-sm name font-bold text-gray-700 dark:text-white" for="firstName">
                                        Company name
                                    </label>
                                    <input name="company_name" class="w-full px-3 py-2 text-sm leading-tight text-gray-700 dark:text-white border rounded shadow appearance-none focus:outline-none focus:shadow-outline" id="firstName" type="text" placeholder="First Name" />
                                </div>
                                <div class="md:ml-2">
                                    <label class="block mb-2 text-sm font-bold text-gray-700 dark:text-white" for="lastName">
                                        company Email
                                    </label>
                                    <input class="w-full px-3 py-2 text-sm leading-tight text-gray-700 dark:text-white border rounded shadow appearance-none focus:outline-none focus:shadow-outline" id="lastName" type="text" placeholder="Last Name" />
                                </div>
                            </div>
                            <div class="mb-4">
                                <label class="block mb-2 text-sm font-bold text-gray-700 dark:text-white" for="email">
                                    address
                                </label>
                                <input name="company_address" class="w-full px-3 py-2 mb-3 text-sm leading-tight text-gray-700 dark:text-white border rounded shadow appearance-none focus:outline-none focus:shadow-outline" id="email" type="txt" placeholder="Email" />
                            </div>

                            <div class="mb-4 md:flex md:justify-between">
                                <div class="mb-4 md:mr-2 md:mb-0">
                                    <label class="block mb-2 text-sm name font-bold text-gray-700 dark:text-white" for="firstName">
                                        Bank name
                                    </label>
                                    <input name="bank_name" class="w-full px-3 py-2 text-sm leading-tight text-gray-700 dark:text-white border rounded shadow appearance-none focus:outline-none focus:shadow-outline" id="firstName" type="text" placeholder="First Name" />
                                </div>
                                <div class="md:ml-2">
                                    <label class="block mb-2 text-sm font-bold text-gray-700 dark:text-white" for="lastName">
                                        Bank account number
                                    </label>
                                    <input name="bank_account_number" class="w-full px-3 py-2 text-sm leading-tight text-gray-700 dark:text-white border rounded shadow appearance-none focus:outline-none focus:shadow-outline" id="lastName" type="text" placeholder="Last Name" />
                                </div>

                            </div>

                            <div class="mb-4 md:flex md:justify-between">
                                <div class="mb-4 md:mr-2 md:mb-0">
                                    <label class="block mb-2 text-sm name font-bold text-gray-700 dark:text-white" for="firstName">
                                        Bank IFSC :
                                    </label>
                                    <input name="bank_ifsc_number" class="w-full px-3 py-2 text-sm leading-tight text-gray-700 dark:text-white border rounded shadow appearance-none focus:outline-none focus:shadow-outline" id="firstName" type="text" placeholder="First Name" />
                                </div>
                                <div class="md:ml-2">
                                    <label class="block mb-2 text-sm font-bold text-gray-700 dark:text-white" for="lastName">
                                        Bank branch name
                                    </label>
                                    <input name="bank_branch_name" class="w-full px-3 py-2 text-sm leading-tight text-gray-700 dark:text-white border rounded shadow appearance-none focus:outline-none focus:shadow-outline" id="lastName" type="text" placeholder="Last Name" />
                                </div>

                            </div>
                            <div class="md:ml-2 mb2">
                                <label class="block mb-2 text-sm font-bold text-gray-700 dark:text-white" for="lastName">
                                    Number sub company's
                                </label>
                                <input name="numberOfSubCompany"  class="w-full px-3 py-2 text-sm leading-tight text-gray-700 dark:text-white border rounded shadow appearance-none focus:outline-none focus:shadow-outline" id="lastName" type="text" placeholder="Last Name" />
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