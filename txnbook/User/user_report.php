<?php

$conn = mysqli_connect(
    "localhost",
    "root",
    "root",
    "daily_txn_book"
);



if (mysqli_connect_error()) {
    echo "Connection Error.<br>";
}



$sql = "SELECT * FROM daily_txn_book.user_report;";


$result = mysqli_query($conn, $sql);

?>





<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.0.4/dist/tailwind.min.css" rel="stylesheet">

    <title>Admin update</title>
</head>

<body class="">



    <div>
        <?php






        session_start();

        if (!isset($_SESSION["username"])) {




            header("location:login.php");




        }




        ?>


        <nav class="bg-white dark:bg-gray-900  w-full z-20 top-0 start-0 border-b border-gray-200 dark:border-gray-600">
            <div class="max-w-screen-xl flex flex-wrap items-center justify-around mx-auto p-4">
                <a href="https://flowbite.com/" class="flex items-center space-x-3 rtl:space-x-reverse">

                </a>
                <span class="self-center text-2xl font-semibold whitespace-nowrap dark:text-white">
                    Hello! <?php echo $_SESSION["username"] ?></span>
                <div class="flex md:order-2 space-x-3 md:space-x-0 rtl:space-x-reverse">
                    <a href="../logout.php" type="button"
                        class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-4 py-2 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Logout</a>
                    <button data-collapse-toggle="navbar-sticky" type="button"
                        class="inline-flex items-center p-2 w-10 h-10 justify-center text-sm text-gray-500 rounded-lg md:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600"
                        aria-controls="navbar-sticky" aria-expanded="false">
                        <span class="sr-only">Open main menu</span>
                        <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                            viewBox="0 0 17 14">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M1 1h15M1 7h15M1 13h15" />
                        </svg>
                    </button>
                </div>
                <div class="items-center justify-between hidden w-full md:flex md:w-auto md:order-1" id="navbar-sticky">
                    <ul
                        class="flex flex-col p-4 md:p-0 mt-4 font-medium border border-gray-100 rounded-lg bg-gray-50 md:space-x-8 rtl:space-x-reverse md:flex-row md:mt-0 md:border-0 md:bg-white dark:bg-gray-800 md:dark:bg-gray-900 dark:border-gray-700">
                        <li>
                            <a href="../testdash.php"
                                class="block py-2 px-3 text-white bg-blue-700 rounded md:bg-transparent md:text-blue-700 md:p-0 md:dark:text-blue-500"
                                aria-current="page">Home</a>
                            <!-- </li>
                <li>
                    <a href="#"
                        class="block py-2 px-3 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:hover:text-blue-700 md:p-0 md:dark:hover:text-blue-500 dark:text-white dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-700">About</a>
                </li>
                <li>
                    <a href="#"
                        class="block py-2 px-3 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:hover:text-blue-700 md:p-0 md:dark:hover:text-blue-500 dark:text-white dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-700">Services</a>
                </li>
                <li>
                    <a href="#"
                        class="block py-2 px-3 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:hover:text-blue-700 md:p-0 md:dark:hover:text-blue-500 dark:text-white dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-700">Contact</a>
                </li> -->
                    </ul>
                </div>
            </div>
        </nav>
    </div>


    <div>


        <form class="flex items-center  max-w-lg mx-auto mt-4" method="POST">
            <label for="voice-search" class="sr-only">Search</label>
            <div class="relative w-full mr-2">

                <input type="text" id="voice-search" name="search_query"
                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full ps-10 p-2.5  dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                    placeholder="Search Details From Database..." required />

            </div>
            <button type="submit" name="search"
                class="inline-flex items-center py-2.5 px-3 ms-2 text-sm font-medium text-white bg-blue-700 rounded-lg border border-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                <svg class="w-4 h-4 me-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                    viewBox="0 0 20 20">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="m19 19-4-4m0-7A7 7 0 1 1 1 8a7 7 0 0 1 14 0Z" />
                </svg>Search
            </button>
        </form>

    </div>


    <div class="relative overflow-x-auto shadow-md sm:rounded-lg mt-6 mb-4 mx-5">
        <table class=" text-sm text-left rtl:text-right whitespace-nowrap text-gray-500 dark:text-gray-400">

            <thead class=" text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                <tr>
                    <th scope="col" class="px-6 py-3">
                        user id
                    </th>
                    <th scope="col" class="px-6 py-3">
                        user name
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Updated By
                    </th>
                    <th scope="col" class="px-6 py-3">
                        creadted by
                    </th>
                    <th scope="col" class="px-6 py-3">
                        creadted date
                    </th>
                    <th scope="col" class="px-6 py-3">
                        updated date
                    </th>
                    <th scope="col" class="px-6 py-3">
                        mobile number
                    </th>
                    <th scope="col" class="px-6 py-3">
                        email id
                    </th>

                    <th scope="col" class="px-6 py-3">
                        person id
                    </th>
                    <th scope="col" class="px-6 py-3">
                        password
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
                        <span class="sr-only">Edit</span>
                    </th>
                </tr>
            </thead>
            <tbody class="" id="rowAreaTbody">


                <?php

                while ($row = mysqli_fetch_assoc($result)) {






                    ?>


                    <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                        <th scope="row" class="px-6 py-4">
                            <?php echo $row['user_id'] ?>
                        </th>
                        <td class="px-6 py-4">
                            <?php echo $row['user_name'] ?>
                        </td>
                        <td class="px-6 py-4">
                            <?php echo $row['updataed_by'] ?>
                        </td>
                        <td class="px-6 py-4">
                            <?php echo $row['createdBy'] ?>
                        </td>
                        <td class="px-6 py-4">
                            <?php echo $row['created_date'] ?>
                        </td>
                        <td class="px-6 py-4">
                            <?php echo $row['updated_date'] ?>
                        </td>
                        <td class="px-6 py-4">
                            <?php echo $row['mobile_number'] ?>
                        </td>
                        <td class="px-6 py-4">
                            <?php echo $row['email_id'] ?>
                        </td>
                        <td class="px-6 py-4">
                            <?php echo $row['person_id'] ?>
                        </td>
                        <td class="px-6 py-4">
                            <?php echo $row['password'] ?>
                        </td>
                        <td class="px-6 py-4">
                            <?php echo $row['start_date'] ?>
                        </td>
                        <td class="px-6 py-4">
                            <?php echo $row['end_date'] ?>
                        </td>
                        <td class="px-6 py-4">
                            <?php echo $row['role'] ?>
                        </td>
                    </tr>



                    <?php


                }


                ?>
            </tbody>
        </table>
    </div>































































    <!-- Main modal -->
    <div id="authentication-modal" tabindex="-1" aria-hidden="true"
        class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
        <div class="relative p-4 max-h-full">
            <!-- Modal content -->
            <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
                <!-- Modal header -->
                <div class="flex items-center justify-between p-4 md:p-5 border-b rounded-t dark:border-gray-600">
                    <h3 class="text-xl font-semibold text-gray-900 dark:text-white">
                        Edit user
                    </h3>
                    <button type="button"
                        class="end-2.5 text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white"
                        data-modal-hide="authentication-modal">
                        <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                            viewBox="0 0 14 14">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
                        </svg>
                        <span class="sr-only">Close modal</span>
                    </button>
                </div>



                <div>
                    <div class="relative overflow-x-auto shadow-md sm:rounded-lg ">
                        <table class=" text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400"">

                                        <thead class=" text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700
                            dark:text-gray-400">
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

                                        <th scope="row"
                                            class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                            <input type="text" id="roleUserId" name="admin_id">

                                        </th>

                                        <td scope="row"
                                            class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                            Users view
                                        </td>
                                        <td class="px-6 py-4">
                                            <div class="flex items-center mb-4">
                                                <input type="checkbox" id="user_viewOnly" name="user_viewOnly"
                                                    class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                                            </div>
                                        </td>
                                        <td class="px-6 py-4">
                                            <input type="date" name="user_view_start_date" value="2000-01-01">
                                        </td>
                                        <td class="px-6 py-4">

                                            <input type="date" name="user_view_end_date" value="2000-01-01">
                                        </td>


                                    </tr>
                                    <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">

                                        <th scope="row"
                                            class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">

                                        </th>

                                        <td scope="row"
                                            class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                            User edit
                                        </td>
                                        <td class=px-6 py-4">
                                            <div class="flex items-center mb-4">
                                                <input id="user_write" type="checkbox" name="user_write" value=""
                                                    class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
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
                                            <button id=rowId' name="update_data"
                                                class="hidden inline-flex mr-2 ml-20 items-center py-2.5 px-3 ms-2 text-sm font-medium text-white bg-blue-700 rounded-lg border border-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800"
                                                onclick="">
                                                Update</button>
                                        </td>
                                    </tr>
                                    <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">

                                        <th scope="row"
                                            class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">

                                        </th>

                                        <td scope="row"
                                            class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                            Admin view
                                        </td>
                                        <td class=px-6 py-4">
                                            <div class="flex items-center mb-4">
                                                <input id="adminView" type="checkbox" name="admin_viewOnly" value=""
                                                    class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
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
                                            <button id=rowId' name="update_data"
                                                class="hidden inline-flex mr-2 ml-20 items-center py-2.5 px-3 ms-2 text-sm font-medium text-white bg-blue-700 rounded-lg border border-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800"
                                                onclick="">
                                                Update</button>
                                        </td>
                                    </tr>
                                    <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                                        <th scope="row"
                                            class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">

                                        </th>

                                        <td scope="row"
                                            class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                            Admin write
                                        </td>
                                        <td class=px-6 py-4">
                                            <div class="flex items-center mb-4">
                                                <input id="adminWrite" type="checkbox" value="" name="admin_write"
                                                    class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
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
                                            <button id=rowId'
                                                class="hidden inline-flex mr-2 ml-20 items-center py-2.5 px-3 ms-2 text-sm font-medium text-white bg-blue-700 rounded-lg border border-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800"
                                                onclick="">
                                                Update</button>
                                        </td>
                                    </tr>
                                    <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">

                                        <th scope="row"
                                            class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">


                                        </th>

                                        <td scope="row"
                                            class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                            Store request genrate
                                        </td>
                                        <td class=px-6 py-4">
                                            <div class="flex items-center mb-4">
                                                <input id="genrateStoreRequest" type="checkbox"
                                                    name="genrateStoreRequest"
                                                    class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                                            </div>
                                        </td>
                                        <td class=px-6 py-4">
                                            <input type="date" name="user_view_start_date" value="2000-01-01">
                                        </td>
                                        <td class="px-6 py-4">

                                            <input type="date" id="user_view_end_date" name="user_view_end_date"
                                                value="2000-01-01">
                                        </td>


                                    </tr>
                                    <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">

                                        <th scope="row"
                                            class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">


                                        </th>

                                        <td scope="row"
                                            class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                            Store Manager
                                        </td>
                                        <td class=px-6 py-4">
                                            <div class="flex items-center mb-4">
                                                <input id="store_manager" type="checkbox" name="store_manager"
                                                    class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
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

                                        <th scope="row"
                                            class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">


                                        </th>

                                        <td scope="row"
                                            class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                            Store issuer
                                        </td>
                                        <td class=px-6 py-4">
                                            <div class="flex items-center mb-4">
                                                <input id="store_isseuer" type="checkbox" name="store_isseuer"
                                                    class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
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

                                        <th scope="row"
                                            class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">


                                        </th>

                                        <td scope="row"
                                            class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                            Po Approver
                                        </td>
                                        <td class=px-6 py-4">
                                            <div class="flex items-center mb-4">
                                                <input id="PO_approver" type="checkbox" name="PO_approver"
                                                    class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                                            </div>
                                        </td>
                                        <td class=px-6 py-4">
                                            <input type="date" name="user_view_start_date" value="2000-01-01">
                                        </td>
                                        <td class="px-6 py-4">

                                            <input type="date" name="user_view_end_date" value="2000-01-01">
                                        </td>


                                    </tr>


                            </tbody>
                        </table>
                        <button name="update_admin_roles" onclick="beforeSubmitHandle()" style="margin: auto;
                                        display: block;"
                            class=" inline-flex display-block mx-auto items-center py-2.5 px-3 text-sm font-medium text-white bg-blue-700 rounded-lg border border-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800"
                            onclick="">
                            Submit</button>
                        </form>
                    </div>


                </div>

            </div>
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

        document.getElementById("roleUserId").value = ""

        //    console.log((e.target.parentElement).getElementByName("user_id"))


        // let selected_id = (e.target.parentElement).parentElement.getElementsByClassName("user_id");


        userIsSelected = (e.target.parentElement).parentElement.getElementsByName("userNumber").value
        console.log(userIsSelected);
        // document.getElementById("roleUserId").value = userIsSelected
        document.getElementById("roleUserId").value = 10
    }


    const openNewAdminBox = () => {

        newUserAdmin.style.display = "block"



    }
</script>


<script src="https://cdn.jsdelivr.net/npm/flowbite@2.4.1/dist/flowbite.min.js"></script>
<script src="./js/scripts.js"></script>
<script src="./js/jquery.min.js"></script>

</html>