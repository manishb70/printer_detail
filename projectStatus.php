<?php

include "./dbconnection/db.php";



?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/flowbite@2.5.1/dist/flowbite.min.css" rel="stylesheet" />
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.0.4/dist/tailwind.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/flowbite@2.5.1/dist/flowbite.min.js"></script>

    <title>Create Move Order Form</title>
</head>

<body class="">


    <?php
    include("./navForLogged.php")

    ?>

    <div id="create_section" class="mt-3 border border-gray-900 p-5 rounded-lg mx-5">
        <h1 class="text-center underline text-3xl mb-3 font-bold"> Create Project Form</h1>
        <form class=" border border-gray-500 p-5 rounded-md bg-gray-300">
            <div class="border-b border-gray-900 ">
                <label class="block mb-2 font-bold text-xs font-medium text-gray-900 dark:text-white">SO
                    Number
                    :
                </label>
                <input type="text" name="sonumber" id="sonumber"
                    class="w-40 rounded-md border mb-3 text-xs border-gray-500 bg-white py-3 pl-2 text-[#6B7280] h-6 outline-none focus:border-[#6A64F1] focus:shadow-md" />
                <button type="button" name="search_so" class="bg-blue border-2 p-1 hover:bg-green-600  hover:text-white rounded">Search</button>
            </div>
            <div class="border-b border-gray-200 dark:border-gray-700 mt-4">
                <ul class="flex flex-wrap justify-between -mb-px text-sm font-medium text-center " id="default-styled-tab"
                    data-tabs-toggle="#default-styled-tab-content"
                    data-tabs-active-classes="text-gray-600 text-gray-600 dark:text-gray-500 bg-gray-50 dark:text-gray-500 border-gray-600 dark:border-gray-500"
                    data-tabs-inactive-classes="dark:border-transparent text-gray-500 text-gray-600 bg-gray-200 dark:text-gray-400 border-gray-100 border-gray-300 dark:border-gray-700 dark:text-gray-300"
                    role="tablist">
                    <!-- <li class="me-2" role="presentation">
                        <button
                            class="inline-block py-3 px-5 border-t border-r focus:outline-none border-l dark:hover:bg-gray-50 border-gray-500 rounded-t-lg"
                            id="profile-styled-tab" data-tabs-target="#styled-profile" type="button" role="tab"
                            aria-controls="profile" aria-selected="false">Drawing Item</button>
                    </li>
                    <li class="me-2" role="presentation">
                        <button
                            class="inline-block py-3 px-5 border-t border-r focus:outline-none border-l border-gray-500 rounded-t-lg"
                            id="dashboard-styled-tab" data-tabs-target="#styled-sample" type="button" role="tab"
                            aria-controls="dashboard" aria-selected="false">Sample Item</button>
                    </li>
                    <li class="me-2" role="presentation">
                        <button
                            class="inline-block py-3 px-5 border-t border-r focus:outline-none border-l border-gray-500 rounded-t-lg"
                            id="dashboard-styled-tab" data-tabs-target="#styled-dashboard" type="button" role="tab"
                            aria-controls="dashboard" aria-selected="false">Issue Item</button>
                    </li>
                    <li class="me-2" role="presentation">
                        <button
                            class="inline-block py-3 px-5 border-t border-r focus:outline-none border-l border-gray-500 rounded-t-lg"
                            id="settings-styled-tab" data-tabs-target="#styled-settings" type="button" role="tab"
                            aria-controls="settings" aria-selected="false">Assemble Item</button>
                    </li>
                    <li class="me-2" role="presentation">
                        <button
                            class="inline-block py-3 px-5 border-t border-r focus:outline-none border-l border-gray-500 rounded-t-lg"
                            id="contacts-styled-tab" data-tabs-target="#styled-contacts" type="button" role="tab"
                            aria-controls="contacts" aria-selected="false">Quality Check</button>
                    </li>
                    <li class="me-2" role="presentation">
                        <button
                            class="inline-block py-3 px-5 border-t border-r focus:outline-none border-l border-gray-500 rounded-t-lg"
                            id="contacts-styled-tab" data-tabs-target="#styled-about" type="button" role="tab"
                            aria-controls="contacts" aria-selected="false">Dismantle Item</button>
                    </li>
                    <li class="me-2" role="presentation">
                        <button
                            class="inline-block py-3 px-5 border-t border-r focus:outline-none border-l border-gray-500 rounded-t-lg"
                            id="contacts-styled-tab" data-tabs-target="#styled-packaging" type="button" role="tab"
                            aria-controls="contacts" aria-selected="false">Packaging</button>
                    </li>
                    <li class="me-2" role="presentation">
                        <button
                            class="inline-block py-3 px-5 border-t border-r focus:outline-none border-l border-gray-500 rounded-t-lg"
                            id="contacts-styled-tab" data-tabs-target="#styled-gate" type="button" role="tab"
                            aria-controls="contacts" aria-selected="false">Gate Exit</button>
                    </li>
                    <li role="presentation">
                        <button
                            class="inline-block py-3 px-5 border-t border-r focus:outline-none border-l border-gray-500 rounded-t-lg"
                            id="contacts-styled-tab" data-tabs-target="#styled-installation" type="button" role="tab"
                            aria-controls="contacts" aria-selected="false">Installation</button>
                    </li>

 -->
















                    <?php

                    $sql = "SELECT * FROM for_office.mtl_sub_inventory;";




                    $result = mysqli_query($con, $sql);



                    while ($row = mysqli_fetch_assoc($result)) {

                    ?>




                        <li role="presentation">
                            <button
                                class="inline-block py-3 px-5 border-t border-r focus:outline-none border-l border-gray-500 rounded-t-lg"
                                id="contacts-styled-tab" data-tabs-target="#<?php echo  $row['sub_inventory_name'];  ?>" type="button" role="tab"
                                aria-controls="contacts" aria-selected="false"><?php echo  $row['sub_inventory_name'];  ?></button>
                        </li>




                    <?php


                    }

                    ?>
                </ul>
            </div>






            <?php

            $sql = "SELECT * FROM for_office.mtl_sub_inventory;";




            $result = mysqli_query($con, $sql);



            if ($res)


                while ($row = mysqli_fetch_assoc($result)) {

            ?>




                <div class="<?php echo  $row['sub_inventory_name'];  ?> p-4 rounded-b-lg bg-gray-50 dark:bg-gray-200 border-x border-b border-gray-600" id="<?php echo  $row['sub_inventory_name'];  ?>" role="tabpanel"
                    aria-labelledby="contacts-tab">
                    <div>
                        <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
                            <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                                <tr>
                                    <th scope="col" class="px-6 py-3">
                                        Item Name
                                    </th>
                                    <th scope="col" class="px-6 py-3">
                                        Quantity
                                    </th>
                                    <th scope="col" class="px-6 py-3">
                                        installtion date
                                    </th>
                                    <th scope="col" class="px-6 py-3">
                                        Remarks if any
                                    </th>
                                    <th scope="col" class="px-6 py-3">
                                        <span class="sr-only">Submit</span>
                                    </th>
                                </tr>
                            </thead>







                            <tbody>


                                <?php


                                $current_inv_if = $row['id'];
                                $sql = "SELECT * FROM for_office.mtl_inventory_transactions where sub_inventory_id =$current_inv_if ;";


                                $result2 = $con->query($sql);


                                while ($row1 = mysqli_fetch_assoc($result2)) {


                                ?>

                                    <tr
                                        class="bg-white border-b dark:bg-gray-200 dark:border-gray-700 bg-gray-50 dark:bg-gray-600">
                                        <th scope="row"
                                            class="px-6 py-1 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                            <input type="text" name=""
                                                value="<?php echo  $row1['item_code'];  ?>"
                                                class="w-40 rounded-md border text-xs border-gray-500 bg-white py-3 pl-2 text-[#6B7280] h-6 outline-none focus:border-[#6A64F1] focus:shadow-md" />
                                        </th>
                                        <td class="px-6 py-1">
                                            <input type="text" name=""
                                                value="<?php echo  $row1['item_qty'];  ?>"
                                                class="w-40 rounded-md border text-xs border-gray-500 bg-white py-3 pl-2 text-[#6B7280] h-6 outline-none focus:border-[#6A64F1] focus:shadow-md" />
                                        </td>
                                        <td class="px-6 py-1">
                                            <input type="date" name=""
                                                class="w-40 rounded-md border text-xs border-gray-500 bg-white py-3 pl-2 text-[#6B7280] h-6 outline-none focus:border-[#6A64F1] focus:shadow-md" />
                                        </td>
                                        <td class="px-6 py-1">
                                            <input type="text" name=""
                                                class="w-40 rounded-md border text-xs border-gray-500 bg-white py-3 pl-2 text-[#6B7280] h-6 outline-none focus:border-[#6A64F1] focus:shadow-md" />
                                        </td>
                                        <td class="px-6 py-1 text-right">
                                            <a href="#"
                                                class="font-medium text-blue-600 dark:text-blue-500 underline">Submit</a>
                                        </td>
                                    </tr>

                                <?php } ?>




                            </tbody>
                        </table>
                    </div>
                </div>




            <?php


                }

            ?>








    </div>

    </form>
</body>

<script src='./js/jquery.min.js'></script>
<script src="./js/projectStatus.js"></script>

</html>