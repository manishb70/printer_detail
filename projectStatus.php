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


<style>
    .input-acceptable {
        border: 2px solid green;
    }

    .input-exceeds {
        border: 2px solid red;
    }
</style>

<body class="">


    <?php

    include("./navForLogged.php");
    include("./dbconnection/db.php");;

    ?>

    <div id="create_section" class="mt-3 border border-gray-900 p-5 rounded-lg mx-5">
        <h1 class="text-center underline text-3xl mb-3 font-bold"> Create Project Form</h1>
        <form method="POST" class=" border border-gray-500 p-5 rounded-md bg-gray-300">
            <div class="border-b border-gray-900 ">
                <label class="block mb-2 font-bold text-xs font-medium text-gray-900 dark:text-white">SO
                    Number
                    :
                </label>
                <input type="text" name="so_number" id="so_number"
                    value="<?php echo $_POST['so_number'] ?? "" ?>" class="w-40 rounded-md border mb-3 text-xs border-gray-500 bg-white py-3 pl-2 text-[#6B7280] h-6 outline-none focus:border-[#6A64F1] focus:shadow-md" />
                <button type="submit" name="button" class="bg-blue border-2 p-1 hover:bg-green-600  hover:text-white rounded">Search</button>
            </div>
            <div class="border-b border-gray-200 dark:border-gray-700 mt-4">
                <ul class="flex flex-wrap justify-between -mb-px text-sm font-medium text-center " id="default-styled-tab"
                    data-tabs-toggle="#default-styled-tab-content"
                    data-tabs-active-classes="text-gray-600 text-gray-600 dark:text-gray-500 bg-gray-50 dark:text-gray-500 border-gray-600 dark:border-gray-500"
                    data-tabs-inactive-classes="dark:border-transparent text-gray-500 text-gray-600 bg-gray-200 dark:text-gray-400 border-gray-100 border-gray-300 dark:border-gray-700 dark:text-gray-300"
                    role="tablist">
                    <li class="me-2" role="presentation">
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
                            id="dashboard-styled-tab" data-tabs-target="#issue_item" type="button" role="tab"
                            aria-controls="dashboard" aria-selected="true">Issue Item</button>
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
                </ul>
            </div>
            <div id="default-styled-tab-content">
                <div class="hidden p-4 bg-gray-50 dark:bg-gray-200 border-x border-b border-gray-600 rounded-b-lg" id="styled-profile" role="tabpanel"
                    aria-labelledby="profile-tab">
                    <!-- <div class="flex gap-x-10 overflow-x-auto py-3">
                        <div>
                                <label class="block mb-2 font-bold text-xs font-medium text-gray-900 dark:text-white">Item
                                    Name :
                                </label>
                                <input type="text" name=""
                                    class="w-40 rounded-md border text-xs border-gray-500 bg-white py-3 pl-2 text-[#6B7280] h-6 outline-none focus:border-[#6A64F1] focus:shadow-md" />
                            </div>
                            <div>
                                <label
                                    class="block mb-2 font-bold text-xs font-medium text-gray-900 dark:text-white">Quantity
                                    :
                                </label>
                                <input type="text" name=""
                                    class="w-40 rounded-md border text-xs border-gray-500 bg-white py-3 pl-2 text-[#6B7280] h-6 outline-none focus:border-[#6A64F1] focus:shadow-md" />
                            </div>
                            <div>
                                <label
                                    class="block mb-2 font-bold text-xs font-medium text-gray-900 dark:text-white">Drawing
                                    Approval :
                                </label>
                                <input type="text" name=""
                                    class="w-40 rounded-md border text-xs border-gray-500 bg-white py-3 pl-2 text-[#6B7280] h-6 outline-none focus:border-[#6A64F1] focus:shadow-md" />
                            </div>
                            <div>
                                <label
                                    class="block mb-2 font-bold text-xs font-medium text-gray-900 dark:text-white">Drawing
                                    Approval Date :
                                </label>
                                <input type="date" name=""
                                    class="w-40 rounded-md border text-xs bor   der-gray-500 bg-white py-3 pl-2 text-[#6B7280] h-6 outline-none focus:border-[#6A64F1] focus:shadow-md" />
                            </div>
                        </div> -->
                    <div>
                        <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
                            <thead
                                class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                                <tr>
                                    <th scope="col" class="px-6 py-3">
                                        Item Name
                                    </th>
                                    <th scope="col" class="px-6 py-3">
                                        Quantity
                                    </th>
                                    <th scope="col" class="px-6 py-3">
                                        Drawing Approval Date
                                    </th>
                                    <th scope="col" class="px-6 py-3">
                                        Remarks if any
                                    </th>
                                    <th scope="col" class="px-6 py-3">
                                        <span class="sr-only">Submit</span>
                                    </th>
                                </tr>
                            </thead>
                            <tbody id="drawing_item_tbody">
                                <tr
                                    class="bg-white border-b dark:bg-gray-200 dark:border-gray-700 bg-gray-50 dark:bg-gray-600">
                                    <th scope="row"
                                        class="px-6 py-1 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                        <input type="text" name=""
                                            class="w-40 rounded-md border text-xs border-gray-500 bg-white py-3 pl-2 text-[#6B7280] h-6 outline-none focus:border-[#6A64F1] focus:shadow-md" />
                                    </th>
                                    <td class="px-6 py-1">
                                        <input type="text" name=""
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

                            </tbody>
                        </table>
                    </div>
                </div>
                <div class="hidden p-4 rounded-x-lg b   g-gray-50 dark:bg-gray-200 border-x border-b border-gray-600 rounded-b-lg" id="styled-sample"
                    role="tabpanel" aria-labelledby="dashboard-tab">
                    <!-- <div class="flex gap-x-10 overflow-x-auto py-3">
                            <div>
                                <label class="block mb-2 font-bold text-xs font-medium text-gray-900 dark:text-white">Item
                                    Name :
                                </label>
                                <input type="text" name=""
                                    class="w-40 rounded-md border text-xs border-gray-500 bg-white py-3 pl-2 text-[#6B7280] h-6 outline-none focus:border-[#6A64F1] focus:shadow-md" />
                            </div>
                            <div>
                                <label
                                    class="block mb-2 font-bold text-xs font-medium text-gray-900 dark:text-white">Quantity
                                    :
                                </label>
                                <input type="text" name=""
                                    class="w-40 rounded-md border text-xs border-gray-500 bg-white py-3 pl-2 text-[#6B7280] h-6 outline-none focus:border-[#6A64F1] focus:shadow-md" />
                            </div>
                            <div>
                                <label class="block mb-2 font-bold text-xs font-medium text-gray-900 dark:text-white">Sample
                                    Approval :
                                </label>
                                <input type="text" name=""
                                    class="w-40 rounded-md border text-xs border-gray-500 bg-white py-3 pl-2 text-[#6B7280] h-6 outline-none focus:border-[#6A64F1] focus:shadow-md" />
                            </div>
                            <div>
                                <label class="block mb-2 font-bold text-xs font-medium text-gray-900 dark:text-white">Sample
                                    Approval Date :
                                </label>
                                <input type="date" name=""
                                    class="w-40 rounded-md border text-xs border-gray-500 bg-white py-3 pl-2 text-[#6B7280] h-6 outline-none focus:border-[#6A64F1] focus:shadow-md" />
                            </div>
                        </div> -->
                    <div>
                        <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
                            <thead
                                class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                                <tr>
                                    <th scope="col" class="px-6 py-3">
                                        Item Name
                                    </th>
                                    <th scope="col" class="px-6 py-3">
                                        Quantity
                                    </th>
                                    <th scope="col" class="px-6 py-3">
                                        Sample Approval Date
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
                                <tr
                                    class="bg-white border-b dark:bg-gray-200 dark:border-gray-700 bg-gray-50 dark:bg-gray-600">
                                    <th scope="row"
                                        class="px-6 py-1 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                        <input type="text" name=""
                                            class="w-40 rounded-md border text-xs border-gray-500 bg-white py-3 pl-2 text-[#6B7280] h-6 outline-none focus:border-[#6A64F1] focus:shadow-md" />
                                    </th>
                                    <td class="px-6 py-1">
                                        <input type="text" name=""
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
                                <tr
                                    class="bg-white border-b dark:bg-gray-200 dark:border-gray-700 bg-gray-50 dark:bg-gray-600">
                                    <th scope="row"
                                        class="px-6 py-1 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                        <input type="text" name=""
                                            class="w-40 rounded-md border text-xs border-gray-500 bg-white py-3 pl-2 text-[#6B7280] h-6 outline-none focus:border-[#6A64F1] focus:shadow-md" />
                                    </th>
                                    <td class="px-6 py-1">
                                        <input type="text" name=""
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
                                <tr
                                    class="bg-white border-b dark:bg-gray-200 dark:border-gray-700 bg-gray-50 dark:bg-gray-600">
                                    <th scope="row"
                                        class="px-6 py-1 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                        <input type="text" name=""
                                            class="w-40 rounded-md border text-xs border-gray-500 bg-white py-3 pl-2 text-[#6B7280] h-6 outline-none focus:border-[#6A64F1] focus:shadow-md" />
                                    </th>
                                    <td class="px-6 py-1">
                                        <input type="text" name=""
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
                                <tr
                                    class="bg-white border-b dark:bg-gray-200 dark:border-gray-700 bg-gray-50 dark:bg-gray-600">
                                    <th scope="row"
                                        class="px-6 py-1 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                        <input type="text" name=""
                                            class="w-40 rounded-md border text-xs border-gray-500 bg-white py-3 pl-2 text-[#6B7280] h-6 outline-none focus:border-[#6A64F1] focus:shadow-md" />
                                    </th>
                                    <td class="px-6 py-1">
                                        <input type="text" name=""
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
                            </tbody>
                        </table>
                    </div>

                </div>
                <div class="hidden p-4 rounded-b-lg bg-gray-50 dark:bg-gray-200 border-x border-b border-gray-600" id="issue_item" role="tabpanel"
                    aria-labelledby="dashboard-tab">


                    <div>
                        <table class="w-full text-sm whitespace-nowrap text-left rtl:text-right text-gray-500 dark:text-gray-400">
                            <thead
                                class="text-xs text-gray-700 whites uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                                <tr>
                                    <th scope="col" class="px-6 py-3">
                                        S no
                                    </th>
                                    <th scope="col" class="px-6 py-3">
                                        Item Name
                                    </th>
                                    <th scope="col" class="px-6 py-3">
                                        Raise quantity
                                    </th>
                                    <th scope="col" class="px-6 py-3">
                                        Need quantity
                                    </th>
                                    <th scope="col" class="px-6 py-3">
                                        Quantity_in_store
                                    </th>
                                    <th scope="col" class="px-6 py-3">
                                        Quantity
                                    </th>
                                    <th scope="col" class="px-6 py-3">
                                        Issue Date
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

                                if ($_SERVER['REQUEST_METHOD'] == 'POST') {


                                    $so_number = $_POST['so_number'];

                                    // echo "so Number" . $so_number;

                                    $sql = "SELECT *,qty-work_in_progress_qty as total_qty FROM for_office.sale_order_items_lines where so_number='$so_number';";



                                    $result = mysqli_query($con, $sql);

                                    if (mysqli_num_rows($result) > 0) {





                                        while ($row = mysqli_fetch_assoc($result)) {






                                            $item_code = $row['item_code'];
                                            $available_qty = 0;



                                            $sql_check_quantity = mysqli_query($con, "SELECT item_code,sum(item_qty) as available_qty FROM for_office.mtl_inventory_transactions where item_code='$item_code'  group by item_code;");

                                            if (mysqli_num_rows($sql_check_quantity) > 0) {

                                                $rs_1 = mysqli_fetch_assoc($sql_check_quantity);
                                                // var_dump($rs_1);
                                                $available_qty = $rs_1['available_qty'];

                                                // echo $item_code;
                                                // echo "<br>";

                                            }

                                ?>
                                            <tr
                                                main-id-so="<?php echo  $row['so_number'] ?>"
                                                data-line-id="<?php echo  $row['id'] ?>"
                                                class="bg-white border-b dark:bg-gray-200 dark:border-gray-700 bg-gray-50 dark:bg-gray-600">
                                                <th scope="row"
                                                    class="px-6 py-1 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                                    <?php echo $row['id']  ?>
                                                </th>
                                                <th scope="row"
                                                    class="px-6 py-1 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                                    <?php echo $row['item_code']  ?>
                                                </th>
                                                <th scope="row"
                                                    name=""
                                                    class="px-6 py-1  font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                                    <?php echo $row['qty']  ?>
                                                </th>
                                                <th scope="row"
                                                    name="need_qty_area"
                                                    class="px-6 py-1  font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                                    <?php echo $row['total_qty']  ?>
                                                </th>
                                                <th scope="row"
                                                    name="avaliable_qty_area"
                                                    class="px-6 py-1 <?php echo ($available_qty < $row['qty']) ? "text-red-700" : "text-green-700"  ?> font-medium  whitespace-nowrap dark:text-white">
                                                    <?php echo $available_qty ?>
                                                </th>
                                                <td class="px-6 py-1">
                                                    <input type="text" name="need_qty"
                                                        value="<?php if ((int) $row['total_qty'] <= (int) $available_qty) {
                                                                    echo $row['total_qty'];
                                                                } else {
                                                                    echo $available_qty;
                                                                }  ?>"
                                                        placeholder="please enter quantity"
                                                        readonly
                                                        oninput="checkInputValue( <?php echo $available_qty ?>,event)"
                                                        class="w-40 rounded-md border text-xs border-gray-500 bg-white py-3 pl-2 text-[#6B7280] h-6 outline-none focus:border-[#6A64F1] focus:shadow-md" />
                                                </td>
                                                <td class="px-6 py-1">
                                                    <input type="date" name=""
                                                        class="w-40 rounded-md border text-xs border-gray-500 bg-white py-3 pl-2 text-[#6B7280] h-6 outline-none focus:border-[#6A64F1] focus:shadow-md" />
                                                </td>
                                                <td class="px-6 py-1">
                                                    <input type="text" name="remarks" placeholder="remarks"

                                                        class="w-40 rounded-md border text-xs border-gray-500 bg-white py-3 pl-2 text-[#6B7280] h-6 outline-none focus:border-[#6A64F1] focus:shadow-md" />
                                                </td>
                                                <td class="px-6 py-1 text-right">
                                                    <a onClick="issueItems(event)"
                                                        class="font-medium text-blue-600 dark:text-blue-500 underline">Submit</a>
                                                </td>
                                            </tr>
                                <?php
                                        }
                                    } else {
                                        echo "no data found";
                                    }
                                }


                                ?>
                            </tbody>
                        </table>
                    </div>

                </div>
            </div>
            <div class="hidden p-4 rounded-b-lg bg-gray-50 dark:bg-gray-200 border-x border-b border-gray-600" id="styled-settings" role="tabpanel"
                aria-labelledby="settings-tab">
                <!-- <div class="flex gap-x-10 overflow-x-auto py-3">
                        <div>
                            <label class="block mb-2 font-bold text-xs font-medium text-gray-900 dark:text-white">Item
                                Name :
                            </label>
                            <input type="text" name=""
                                class="w-40 rounded-md border text-xs border-gray-500 bg-white py-3 pl-2 text-[#6B7280] h-6 outline-none focus:border-[#6A64F1] focus:shadow-md" />
                        </div>
                        <div>
                            <label class="block mb-2 font-bold text-xs font-medium text-gray-900 dark:text-white">Quantity
                                :
                            </label>
                            <input type="text" name=""
                                class="w-40 rounded-md border text-xs border-gray-500 bg-white py-3 pl-2 text-[#6B7280] h-6 outline-none focus:border-[#6A64F1] focus:shadow-md" />
                        </div>
                        <div>
                            <label class="block mb-2 font-bold text-xs font-medium text-gray-900 dark:text-white">Items
                                Assemble
                                :
                            </label>
                            <input type="text" name=""
                                class="w-40 rounded-md border text-xs border-gray-500 bg-white py-3 pl-2 text-[#6B7280] h-6 outline-none focus:border-[#6A64F1] focus:shadow-md" />
                        </div>
                        <div>
                            <label class="block mb-2 font-bold text-xs font-medium text-gray-900 dark:text-white">Items
                                Assemble Date
                                :
                            </label>
                            <input type="date" name=""
                                class="w-40 rounded-md border text-xs border-gray-500 bg-white py-3 pl-2 text-[#6B7280] h-6 outline-none focus:border-[#6A64F1] focus:shadow-md" />
                        </div>
                    </div> -->
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
                                    Item Assemble Date
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
                            <tr
                                class="bg-white border-b dark:bg-gray-200 dark:border-gray-700 bg-gray-50 dark:bg-gray-600">
                                <th scope="row"
                                    class="px-6 py-1 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                    <input type="text" name=""
                                        class="w-40 rounded-md border text-xs border-gray-500 bg-white py-3 pl-2 text-[#6B7280] h-6 outline-none focus:border-[#6A64F1] focus:shadow-md" />
                                </th>
                                <td class="px-6 py-1">
                                    <input type="text" name=""
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
                            <tr
                                class="bg-white border-b dark:bg-gray-200 dark:border-gray-700 bg-gray-50 dark:bg-gray-600">
                                <th scope="row"
                                    class="px-6 py-1 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                    <input type="text" name=""
                                        class="w-40 rounded-md border text-xs border-gray-500 bg-white py-3 pl-2 text-[#6B7280] h-6 outline-none focus:border-[#6A64F1] focus:shadow-md" />
                                </th>
                                <td class="px-6 py-1">
                                    <input type="text" name=""
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
                            <tr
                                class="bg-white border-b dark:bg-gray-200 dark:border-gray-700 bg-gray-50 dark:bg-gray-600">
                                <th scope="row"
                                    class="px-6 py-1 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                    <input type="text" name=""
                                        class="w-40 rounded-md border text-xs border-gray-500 bg-white py-3 pl-2 text-[#6B7280] h-6 outline-none focus:border-[#6A64F1] focus:shadow-md" />
                                </th>
                                <td class="px-6 py-1">
                                    <input type="text" name=""
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
                            <tr
                                class="bg-white border-b dark:bg-gray-200 dark:border-gray-700 bg-gray-50 dark:bg-gray-600">
                                <th scope="row"
                                    class="px-6 py-1 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                    <input type="text" name=""
                                        class="w-40 rounded-md border text-xs border-gray-500 bg-white py-3 pl-2 text-[#6B7280] h-6 outline-none focus:border-[#6A64F1] focus:shadow-md" />
                                </th>
                                <td class="px-6 py-1">
                                    <input type="text" name=""
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
                        </tbody>
                    </table>
                </div>

            </div>
            <div class="hidden p-4 rounded-b-lg bg-gray-50 dark:bg-gray-200 border-x border-b border-gray-600" id="styled-contacts" role="tabpanel"
                aria-labelledby="contacts-tab">
                <!-- <div class="flex gap-x-10 overflow-x-auto py-3">
                        <div>
                            <label class="block mb-2 font-bold text-xs font-medium text-gray-900 dark:text-white">Item
                                Name :
                            </label>
                            <input type="text" name=""
                                class="w-40 rounded-md border text-xs border-gray-500 bg-white py-3 pl-2 text-[#6B7280] h-6 outline-none focus:border-[#6A64F1] focus:shadow-md" />
                        </div>
                        <div>
                            <label class="block mb-2 font-bold text-xs font-medium text-gray-900 dark:text-white">Quantity :
                            </label>
                            <input type="text" name=""
                                class="w-40 rounded-md border text-xs border-gray-500 bg-white py-3 pl-2 text-[#6B7280] h-6 outline-none focus:border-[#6A64F1] focus:shadow-md" />
                        </div>
                        <div>
                            <label class="block mb-2 font-bold text-xs font-medium text-gray-900 dark:text-white">Quality
                                Check :
                            </label>
                            <input type="text" name=""
                                class="w-40 rounded-md border text-xs border-gray-500 bg-white py-3 pl-2 text-[#6B7280] h-6 outline-none focus:border-[#6A64F1] focus:shadow-md" />
                        </div>
                        <div>
                            <label class="block mb-2 font-bold text-xs font-medium text-gray-900 dark:text-white">Quality
                                Check Date :
                            </label>
                            <input type="date" name=""
                                class="w-40 rounded-md border text-xs border-gray-500 bg-white py-3 pl-2 text-[#6B7280] h-6 outline-none focus:border-[#6A64F1] focus:shadow-md" />
                        </div>
                    </div> -->

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
                                    Quality Check Date
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
                            <tr
                                class="bg-white border-b dark:bg-gray-200 dark:border-gray-700 bg-gray-50 dark:bg-gray-600">
                                <th scope="row"
                                    class="px-6 py-1 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                    <input type="text" name=""
                                        class="w-40 rounded-md border text-xs border-gray-500 bg-white py-3 pl-2 text-[#6B7280] h-6 outline-none focus:border-[#6A64F1] focus:shadow-md" />
                                </th>
                                <td class="px-6 py-1">
                                    <input type="text" name=""
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
                            <tr
                                class="bg-white border-b dark:bg-gray-200 dark:border-gray-700 bg-gray-50 dark:bg-gray-600">
                                <th scope="row"
                                    class="px-6 py-1 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                    <input type="text" name=""
                                        class="w-40 rounded-md border text-xs border-gray-500 bg-white py-3 pl-2 text-[#6B7280] h-6 outline-none focus:border-[#6A64F1] focus:shadow-md" />
                                </th>
                                <td class="px-6 py-1">
                                    <input type="text" name=""
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
                            <tr
                                class="bg-white border-b dark:bg-gray-200 dark:border-gray-700 bg-gray-50 dark:bg-gray-600">
                                <th scope="row"
                                    class="px-6 py-1 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                    <input type="text" name=""
                                        class="w-40 rounded-md border text-xs border-gray-500 bg-white py-3 pl-2 text-[#6B7280] h-6 outline-none focus:border-[#6A64F1] focus:shadow-md" />
                                </th>
                                <td class="px-6 py-1">
                                    <input type="text" name=""
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
                            <tr
                                class="bg-white border-b dark:bg-gray-200 dark:border-gray-700 bg-gray-50 dark:bg-gray-600">
                                <th scope="row"
                                    class="px-6 py-1 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                    <input type="text" name=""
                                        class="w-40 rounded-md border text-xs border-gray-500 bg-white py-3 pl-2 text-[#6B7280] h-6 outline-none focus:border-[#6A64F1] focus:shadow-md" />
                                </th>
                                <td class="px-6 py-1">
                                    <input type="text" name=""
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
                        </tbody>
                    </table>
                </div>

            </div>
            <div class="hidden p-4 rounded-b-lg bg-gray-50 dark:bg-gray-200 border-x border-b border-gray-600" id="styled-about" role="tabpanel"
                aria-labelledby="contacts-tab">
                <!-- <div class="flex gap-x-10 overflow-x-auto py-3">
                        <div>
                            <label class="block mb-2 font-bold text-xs font-medium text-gray-900 dark:text-white">Item
                                Name :
                            </label>
                            <input type="text" name=""
                                class="w-40 rounded-md border text-xs border-gray-500 bg-white py-3 pl-2 text-[#6B7280] h-6 outline-none focus:border-[#6A64F1] focus:shadow-md" />
                        </div>
                        <div>
                            <label class="block mb-2 font-bold text-xs font-medium text-gray-900 dark:text-white">Quantity :
                            </label>
                            <input type="text" name=""
                                class="w-40 rounded-md border text-xs border-gray-500 bg-white py-3 pl-2 text-[#6B7280] h-6 outline-none focus:border-[#6A64F1] focus:shadow-md" />
                        </div>
                        <div>
                            <label class="block mb-2 font-bold text-xs font-medium text-gray-900 dark:text-white">Items
                                Dismantle :
                            </label>
                            <input type="text" name=""
                                class="w-40 rounded-md border text-xs border-gray-500 bg-white py-3 pl-2 text-[#6B7280] h-6 outline-none focus:border-[#6A64F1] focus:shadow-md" />
                        </div>
                        <div>
                            <label class="block mb-2 font-bold text-xs font-medium text-gray-900 dark:text-white">Items
                                Dismantle Date :
                            </label>
                            <input type="date" name=""
                                class="w-40 rounded-md border text-xs border-gray-500 bg-white py-3 pl-2 text-[#6B7280] h-6 outline-none focus:border-[#6A64F1] focus:shadow-md" />
                        </div>
                    </div> -->
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
                                    Item Dismantle Date
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
                            <tr
                                class="bg-white border-b dark:bg-gray-200 dark:border-gray-700 bg-gray-50 dark:bg-gray-600">
                                <th scope="row"
                                    class="px-6 py-1 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                    <input type="text" name=""
                                        class="w-40 rounded-md border text-xs border-gray-500 bg-white py-3 pl-2 text-[#6B7280] h-6 outline-none focus:border-[#6A64F1] focus:shadow-md" />
                                </th>
                                <td class="px-6 py-1">
                                    <input type="text" name=""
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
                            <tr
                                class="bg-white border-b dark:bg-gray-200 dark:border-gray-700 bg-gray-50 dark:bg-gray-600">
                                <th scope="row"
                                    class="px-6 py-1 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                    <input type="text" name=""
                                        class="w-40 rounded-md border text-xs border-gray-500 bg-white py-3 pl-2 text-[#6B7280] h-6 outline-none focus:border-[#6A64F1] focus:shadow-md" />
                                </th>
                                <td class="px-6 py-1">
                                    <input type="text" name=""
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
                            <tr
                                class="bg-white border-b dark:bg-gray-200 dark:border-gray-700 bg-gray-50 dark:bg-gray-600">
                                <th scope="row"
                                    class="px-6 py-1 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                    <input type="text" name=""
                                        class="w-40 rounded-md border text-xs border-gray-500 bg-white py-3 pl-2 text-[#6B7280] h-6 outline-none focus:border-[#6A64F1] focus:shadow-md" />
                                </th>
                                <td class="px-6 py-1">
                                    <input type="text" name=""
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
                            <tr
                                class="bg-white border-b dark:bg-gray-200 dark:border-gray-700 bg-gray-50 dark:bg-gray-600">
                                <th scope="row"
                                    class="px-6 py-1 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                    <input type="text" name=""
                                        class="w-40 rounded-md border text-xs border-gray-500 bg-white py-3 pl-2 text-[#6B7280] h-6 outline-none focus:border-[#6A64F1] focus:shadow-md" />
                                </th>
                                <td class="px-6 py-1">
                                    <input type="text" name=""
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
                        </tbody>
                    </table>
                </div>

            </div>
            <div class="hidden p-4 rounded-b-lg bg-gray-50 dark:bg-gray-200 border-x border-b border-gray-600" id="styled-packaging" role="tabpanel"
                aria-labelledby="contacts-tab">
                <!-- <div class="flex gap-x-10 overflow-x-auto py-3">
                        <div>
                            <label class="block mb-2 font-bold text-xs font-medium text-gray-900 dark:text-white">Item
                                Name :
                            </label>
                            <input type="text" name=""
                                class="w-40 rounded-md border text-xs border-gray-500 bg-white py-3 pl-2 text-[#6B7280] h-6 outline-none focus:border-[#6A64F1] focus:shadow-md" />
                        </div>
                        <div>
                            <label class="block mb-2 font-bold text-xs font-medium text-gray-900 dark:text-white">Quantity :
                            </label>
                            <input type="text" name=""
                                class="w-40 rounded-md border text-xs border-gray-500 bg-white py-3 pl-2 text-[#6B7280] h-6 outline-none focus:border-[#6A64F1] focus:shadow-md" />
                        </div>
                        <div>
                            <label class="block mb-2 font-bold text-xs font-medium text-gray-900 dark:text-white">Packaging
                                :
                            </label>
                            <input type="text" name=""
                                class="w-40 rounded-md border text-xs border-gray-500 bg-white py-3 pl-2 text-[#6B7280] h-6 outline-none focus:border-[#6A64F1] focus:shadow-md" />
                        </div>
                        <div>
                            <label class="block mb-2 font-bold text-xs font-medium text-gray-900 dark:text-white">Packaging
                                Date :
                            </label>
                            <input type="date" name=""
                                class="w-40 rounded-md border text-xs border-gray-500 bg-white py-3 pl-2 text-[#6B7280] h-6 outline-none focus:border-[#6A64F1] focus:shadow-md" />
                        </div>
                    </div> -->
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
                                    Packaging Date
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
                            <tr
                                class="bg-white border-b dark:bg-gray-200 dark:border-gray-700 bg-gray-50 dark:bg-gray-600">
                                <th scope="row"
                                    class="px-6 py-1 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                    <input type="text" name=""
                                        class="w-40 rounded-md border text-xs border-gray-500 bg-white py-3 pl-2 text-[#6B7280] h-6 outline-none focus:border-[#6A64F1] focus:shadow-md" />
                                </th>
                                <td class="px-6 py-1">
                                    <input type="text" name=""
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
                            <tr
                                class="bg-white border-b dark:bg-gray-200 dark:border-gray-700 bg-gray-50 dark:bg-gray-600">
                                <th scope="row"
                                    class="px-6 py-1 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                    <input type="text" name=""
                                        class="w-40 rounded-md border text-xs border-gray-500 bg-white py-3 pl-2 text-[#6B7280] h-6 outline-none focus:border-[#6A64F1] focus:shadow-md" />
                                </th>
                                <td class="px-6 py-1">
                                    <input type="text" name=""
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
                            <tr
                                class="bg-white border-b dark:bg-gray-200 dark:border-gray-700 bg-gray-50 dark:bg-gray-600">
                                <th scope="row"
                                    class="px-6 py-1 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                    <input type="text" name=""
                                        class="w-40 rounded-md border text-xs border-gray-500 bg-white py-3 pl-2 text-[#6B7280] h-6 outline-none focus:border-[#6A64F1] focus:shadow-md" />
                                </th>
                                <td class="px-6 py-1">
                                    <input type="text" name=""
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
                            <tr
                                class="bg-white border-b dark:bg-gray-200 dark:border-gray-700 bg-gray-50 dark:bg-gray-600">
                                <th scope="row"
                                    class="px-6 py-1 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                    <input type="text" name=""
                                        class="w-40 rounded-md border text-xs border-gray-500 bg-white py-3 pl-2 text-[#6B7280] h-6 outline-none focus:border-[#6A64F1] focus:shadow-md" />
                                </th>
                                <td class="px-6 py-1">
                                    <input type="text" name=""
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
                        </tbody>
                    </table>
                </div>

            </div>
            <div class="hidden p-4 rounded-b-lg bg-gray-50 dark:bg-gray-200 border-x border-b border-gray-600" id="styled-gate" role="tabpanel"
                aria-labelledby="contacts-tab">
                <!-- <div class="flex gap-x-10 overflow-x-auto py-3">
                        <div>
                            <label class="block mb-2 font-bold text-xs font-medium text-gray-900 dark:text-white">Item
                                Name :
                            </label>
                            <input type="text" name=""
                                class="w-40 rounded-md border text-xs border-gray-500 bg-white py-3 pl-2 text-[#6B7280] h-6 outline-none focus:border-[#6A64F1] focus:shadow-md" />
                        </div>
                        <div>
                            <label class="block mb-2 font-bold text-xs font-medium text-gray-900 dark:text-white">Quantity :
                            </label>
                            <input type="text" name=""
                                class="w-40 rounded-md border text-xs border-gray-500 bg-white py-3 pl-2 text-[#6B7280] h-6 outline-none focus:border-[#6A64F1] focus:shadow-md" />
                        </div>
                        <div>
                            <label class="block mb-2 font-bold text-xs font-medium text-gray-900 dark:text-white">Gate Exit
                                :
                            </label>
                            <input type="text" name=""
                                class="w-40 rounded-md border text-xs border-gray-500 bg-white py-3 pl-2 text-[#6B7280] h-6 outline-none focus:border-[#6A64F1] focus:shadow-md" />
                        </div>
                        <div>
                            <label class="block mb-2 font-bold text-xs font-medium text-gray-900 dark:text-white">Gate Exit
                                Date :
                            </label>
                            <input type="date" name=""
                                class="w-40 rounded-md border text-xs border-gray-500 bg-white py-3 pl-2 text-[#6B7280] h-6 outline-none focus:border-[#6A64F1] focus:shadow-md" />
                        </div>
                    </div> -->
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
                                    Gate Exit Date
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
                            <tr
                                class="bg-white border-b dark:bg-gray-200 dark:border-gray-700 bg-gray-50 dark:bg-gray-600">
                                <th scope="row"
                                    class="px-6 py-1 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                    <input type="text" name=""
                                        class="w-40 rounded-md border text-xs border-gray-500 bg-white py-3 pl-2 text-[#6B7280] h-6 outline-none focus:border-[#6A64F1] focus:shadow-md" />
                                </th>
                                <td class="px-6 py-1">
                                    <input type="text" name=""
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
                            <tr
                                class="bg-white border-b dark:bg-gray-200 dark:border-gray-700 bg-gray-50 dark:bg-gray-600">
                                <th scope="row"
                                    class="px-6 py-1 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                    <input type="text" name=""
                                        class="w-40 rounded-md border text-xs border-gray-500 bg-white py-3 pl-2 text-[#6B7280] h-6 outline-none focus:border-[#6A64F1] focus:shadow-md" />
                                </th>
                                <td class="px-6 py-1">
                                    <input type="text" name=""
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
                            <tr
                                class="bg-white border-b dark:bg-gray-200 dark:border-gray-700 bg-gray-50 dark:bg-gray-600">
                                <th scope="row"
                                    class="px-6 py-1 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                    <input type="text" name=""
                                        class="w-40 rounded-md border text-xs border-gray-500 bg-white py-3 pl-2 text-[#6B7280] h-6 outline-none focus:border-[#6A64F1] focus:shadow-md" />
                                </th>
                                <td class="px-6 py-1">
                                    <input type="text" name=""
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
                            <tr
                                class="bg-white border-b dark:bg-gray-200 dark:border-gray-700 bg-gray-50 dark:bg-gray-600">
                                <th scope="row"
                                    class="px-6 py-1 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                    <input type="text" name=""
                                        class="w-40 rounded-md border text-xs border-gray-500 bg-white py-3 pl-2 text-[#6B7280] h-6 outline-none focus:border-[#6A64F1] focus:shadow-md" />
                                </th>
                                <td class="px-6 py-1">
                                    <input type="text" name=""
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
                        </tbody>
                    </table>
                </div>

            </div>
            <div class="hidden p-4 rounded-b-lg bg-gray-50 dark:bg-gray-200 border-x border-b border-gray-600" id="styled-installation" role="tabpanel"
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
                                    Installation Date
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
                            <tr
                                class="bg-white border-b dark:bg-gray-200 dark:border-gray-700 bg-gray-50 dark:bg-gray-600">
                                <th scope="row"
                                    class="px-6 py-1 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                    <input type="text" name=""
                                        class="w-40 rounded-md border text-xs border-gray-500 bg-white py-3 pl-2 text-[#6B7280] h-6 outline-none focus:border-[#6A64F1] focus:shadow-md" />
                                </th>
                                <td class="px-6 py-1">
                                    <input type="text" name=""
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
                            <tr
                                class="bg-white border-b dark:bg-gray-200 dark:border-gray-700 bg-gray-50 dark:bg-gray-600">
                                <th scope="row"
                                    class="px-6 py-1 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                    <input type="text" name=""
                                        class="w-40 rounded-md border text-xs border-gray-500 bg-white py-3 pl-2 text-[#6B7280] h-6 outline-none focus:border-[#6A64F1] focus:shadow-md" />
                                </th>
                                <td class="px-6 py-1">
                                    <input type="text" name=""
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
                            <tr
                                class="bg-white border-b dark:bg-gray-200 dark:border-gray-700 bg-gray-50 dark:bg-gray-600">
                                <th scope="row"
                                    class="px-6 py-1 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                    <input type="text" name=""
                                        class="w-40 rounded-md border text-xs border-gray-500 bg-white py-3 pl-2 text-[#6B7280] h-6 outline-none focus:border-[#6A64F1] focus:shadow-md" />
                                </th>
                                <td class="px-6 py-1">
                                    <input type="text" name=""
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
                            <tr
                                class="bg-white border-b dark:bg-gray-200 dark:border-gray-700 bg-gray-50 dark:bg-gray-600">
                                <th scope="row"
                                    class="px-6 py-1 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                    <input type="text" name=""
                                        class="w-40 rounded-md border text-xs border-gray-500 bg-white py-3 pl-2 text-[#6B7280] h-6 outline-none focus:border-[#6A64F1] focus:shadow-md" />
                                </th>
                                <td class="px-6 py-1">
                                    <input type="text" name=""
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
                        </tbody>
                    </table>
                </div>
            </div>
    </div>

    </form>




</body>

<script src='./js/jquery.min.js'></script>
<script src="./js/projectStatus.js"></script>

</html>