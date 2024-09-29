<?php




include('./dbconnection/db.php');


if ($_SERVER['REQUEST_METHOD'] == 'POST') {








    $so_search_number = $_POST['so_search_number'];


    $query = "SELECT * FROM for_office.sale_order_items_lines where so_number = $so_search_number;";


    $result = mysqli_query($con, $query);
}












?>




<!DOCTYPE html>

<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/flowbite@2.5.1/dist/flowbite.min.css" rel="stylesheet" />
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.0.4/dist/tailwind.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/flowbite@2.5.1/dist/flowbite.min.js"></script>

    <title>Move Order Form</title>
</head>

<body>
    <?php
    require("./navForLogged.php");


    ?>



    <div id="create_section" class="mt-3 border  p-5 rounded-lg mx-5">
        <h1 class="text-center  text-3xl mb-3 font-bold">Move Order </h1>
        <form class=" border  p-5 rounded-md">
            <div class="lg:w-5/6 w-auto mx-auto flex flex-wrap justify-between items-center">
                <div class="">

                    <!-- <div>
                        <label for="email"
                            class=" w-40 inline-block mb-2 font-bold text-xs font-medium text-gray-900 dark:text-white">
                            Record id :

                        </label>
                        <input type="text" name="sonumber"
                            class="w-40 rounded-md   text-xs border-gray-500 bg-white py-3 pl-2 text-[#6B7280] h-6 outline-none focus:border-[#6A64F1] focus:shadow-md" />

                    </div>
 -->

                    <div

                        style="min-width: 150px;max-width:200px"
                        class="w-full max-w-sm min-w-[200px]">
                        <label class="block mb-2 text-sm font-medium text-slate-600">
                            Record Id
                        </label>
                        <input class="w-full bg-transparent placeholder:text-slate-400 text-slate-700 text-sm border border-slate-200 rounded-md px-3 py-2 transition duration-300 ease focus:outline-none focus:border-slate-400 hover:border-slate-300 shadow-sm focus:shadow" placeholder="Record id" />
                    </div>





                    <!-- <div class="">
                        <label
                            class="w-40 inline-block mb-2 font-bold text-xs font-medium text-gray-900 dark:text-white">Status
                            : </label>
                        <input type="text" name="status"
                            class="w-40 rounded-md border text-xs border-gray-500 bg-white py-3 pl-2 text-[#6B7280] h-6 outline-none focus:border-[#6A64F1] focus:shadow-md" />
                    </div> -->


                    <div

                        style="min-width: 200px;max-width:200px"
                        class="w-full max-w-sm min-w-[200px]">
                        <label class="block mb-2 text-sm font-medium text-slate-600">
                            Status
                        </label>
                        <input
                            name="status"
                            class="w-full bg-transparent placeholder:text-slate-400 text-slate-700 text-sm border border-slate-200 rounded-md px-3 py-2 transition duration-300 ease focus:outline-none focus:border-slate-400 hover:border-slate-300 shadow-sm focus:shadow" placeholder="Status" />


                    </div>





                </div>
                <div class="">
                    <!-- <div class="">
                        <label
                            class="w-40 inline-block mb-2 font-bold text-xs font-medium text-gray-900 dark:text-white">Description
                            : </label>
                        <input type="text"
                            class="w-40 rounded-md  text-xs border-gray-500 bg-white py-3 pl-2 text-[#6B7280] h-6 outline-none focus:border-[#6A64F1] focus:shadow-md" />
                    </div>

             -->


                    <div

                        style="min-width: 150px;max-width:200px"
                        class="w-full max-w-sm min-w-[200px]">
                        <label class="block mb-2 text-sm font-medium text-slate-600">
                            Description
                        </label>
                        <input class="w-full bg-transparent placeholder:text-slate-400 text-slate-700 text-sm border border-slate-200 rounded-md px-3 py-2 transition duration-300 ease focus:outline-none focus:border-slate-400 hover:border-slate-300 shadow-sm focus:shadow" placeholder="Discription" />
                    </div>

                    <!-- <div class="">
                        <label
                            class="w-40 inline-block mb-2 font-bold text-xs font-medium text-gray-900 dark:text-white">Move
                            Order Type
                            : </label>
                        <input type="text" name="move_order_type"
                            class="w-40 rounded-md border text-xs border-gray-500 bg-white py-3 pl-2 text-[#6B7280] h-6 outline-none focus:border-[#6A64F1] focus:shadow-md" />
                    </div> -->


                    <div

                        style="min-width: 200px; max-width:200px"
                        class="w-full max-w-sm ">
                        <label class="block mb-2 text-sm font-medium text-slate-600">
                            Move order type
                        </label>
                        <input class="w-full bg-transparent placeholder:text-slate-400 text-slate-700 text-sm border border-slate-200 rounded-md px-3 py-2 transition duration-300 ease focus:outline-none focus:border-slate-400 hover:border-slate-300 shadow-sm focus:shadow" placeholder="Move order type" />
                    </div>


                </div>
            </div>


        </form>
        <form method="post" class=" border  p-5 mt-5 rounded-md">
            <div class="lg:w-5/6 w-auto mx-auto flex flex-wrap justify-between items-center">
                <div class="">
                    <!-- <div>
                        <label for="email"
                            class=" w-40 inline-block mb-2 font-bold text-xs font-medium text-gray-900 dark:text-white">
                            Transaction Type :
                        </label>
                        <input type="text"
                            name="transaction_type"
                            class="w-40 rounded-md border text-xs border-gray-500 bg-white py-3 pl-2 text-[#6B7280] h-6 outline-none focus:border-[#6A64F1] focus:shadow-md" />
                    </div> -->

                    <div

                        style="min-width: 150px;max-width:200px"
                        class="w-full max-w-sm min-w-[200px]">
                        <label class="block mb-2 text-sm font-medium text-slate-600">
                            Transaction type :
                        </label>
                        <input name="transaction type" class="w-full bg-transparent placeholder:text-slate-400 text-slate-700 text-sm border border-slate-200 rounded-md px-3 py-2 transition duration-300 ease focus:outline-none focus:border-slate-400 hover:border-slate-300 shadow-sm focus:shadow" placeholder="Transaction type ...." />
                    </div>
                    <div

                        style="min-width: 200px; max-width:200px"
                        class="w-full max-w-sm min-w-[200px]">
                        <label class="block mb-2 text-sm font-medium text-slate-600">
                            Source sub inventory :
                        </label>
                        <input
                            name="transaction type" class="w-full bg-transparent placeholder:text-slate-400 text-slate-700 text-sm border border-slate-200 rounded-md px-3 py-2 transition duration-300 ease focus:outline-none focus:border-slate-400 hover:border-slate-300 shadow-sm focus:shadow" placeholder="Source sub inventory...." />
                    </div>

                    <!-- 

                    <div

                        style="min-width: 150px;max-width:200px"
                        class="w-full max-w-sm min-w-[200px]">
                        <label class="block mb-2 text-sm font-medium text-slate-600">
                            Add Members
                        </label>
                        <input class="w-full bg-transparent placeholder:text-slate-400 text-slate-700 text-sm border border-slate-200 rounded-md px-3 py-2 transition duration-300 ease focus:outline-none focus:border-slate-400 hover:border-slate-300 shadow-sm focus:shadow" placeholder="Type here..." />
                    </div> -->



                    <!-- 

                    <div class="">

                        <label
                            class="w-40 inline-block mb-2 font-bold text-xs font-medium text-gray-900 dark:text-white">SO
                            Number : </label>
                        <input type="text" name="so_search_number"
                            class="w-40 rounded-md border text-xs border-gray-500 bg-white py-3 pl-2 text-[#6B7280] h-6 outline-none focus:border-[#6A64F1] focus:shadow-md" />










                    </div> -->



                    <div

                        style="min-width: 200px;max-width:200px"
                        class="w-full max-w-sm min-w-[200px]">
                        <label class="block mb-2 text-sm font-medium text-slate-600">
                            Enter so number :
                        </label>


                        <div class="flex gap-1">

                            <input name="so_search_number" class="w-full bg-transparent placeholder:text-slate-400 text-slate-700 text-sm border border-slate-200 rounded-md px-3 py-2 transition duration-300 ease focus:outline-none focus:border-slate-400 hover:border-slate-300 shadow-sm focus:shadow" placeholder="Type here..." />
                            <button type="submit">Search</button>
                        </div>
                    </div>










                </div>
                <div class="">
                    <!-- <div class="">
                        <label
                            class="w-40 inline-block mb-2 font-bold text-xs font-medium text-gray-900 dark:text-white">Location
                            : </label>
                        <input type="text"
                            class="w-40 rounded-md border text-xs  bg-white py-3 pl-2 text-[#6B7280] h-6 outline-none focus:border-[#6A64F1] focus:shadow-md" />
                    </div> -->



                    <div>
                        <label class="block mb-2 text-sm font-medium text-slate-600">
                            Location :
                        </label>

                        <input style="min-width: 150px;max-width:200px" name="location" class=" bg-transparent placeholder:text-slate-400 text-slate-700 text-sm border border-slate-200 rounded-md px-3 py-2 transition duration-300 ease focus:outline-none focus:border-slate-400 hover:border-slate-300 shadow-sm focus:shadow" placeholder="Enter location..." />
                    </div>


                    <!-- <div class="">
                        <label
                            class="w-40 inline-block mb-2 font-bold text-xs font-medium text-gray-900 dark:text-white">Destination
                            Subinv
                            : </label>
                        <input type="text" name="destination_sub_inventory"
                            class="w-40 rounded-md border text-xs border-gray-500 bg-white py-3 pl-2 text-[#6B7280] h-6 outline-none focus:border-[#6A64F1] focus:shadow-md" />
                    </div>
                    
                    
                     -->

                    <div

                        style="min-width: 150px;max-width:200px"
                        class="w-full max-w-sm min-w-[200px]">
                        <label class="block mb-2 text-sm font-medium text-slate-600">
                            Destination sub inventory
                        </label>
                        <input name="destination_sub_inventory" class="w-full bg-transparent placeholder:text-slate-400 text-slate-700 text-sm border border-slate-200 rounded-md px-3 py-2 transition duration-300 ease focus:outline-none focus:border-slate-400 hover:border-slate-300 shadow-sm focus:shadow" placeholder="Enter destination sub inventory /">
                    </div>



                    <!--                     
                    <div class="">
                        <label
                            class="w-40 inline-block mb-2 font-bold text-xs font-medium text-gray-900 dark:text-white">Date
                            Required
                            Subinv
                            : </label>
                        <input type="date"
                            name="date_required_sub_inventory"
                            class="w-40 rounded-md border text-xs border-gray-500 bg-white py-3 pl-2 text-[#6B7280] h-6 outline-none focus:border-[#6A64F1] focus:shadow-md" />

                    </div> -->



                    <div

                        style="min-width: 150px;max-width:200px"
                        class="w-full max-w-sm min-w-[200px]">
                        <label class="block mb-2 text-sm font-medium text-slate-600">
                            Required Subinv :
                        </label>
                        <input name="required_sub_inventory" class="w-full bg-transparent placeholder:text-slate-400 text-slate-700 text-sm border border-slate-200 rounded-md px-3 py-2 transition duration-300 ease focus:outline-none focus:border-slate-400 hover:border-slate-300 shadow-sm focus:shadow" placeholder="required_sub_inventory" />
                    </div>


                </div>
            </div>


        </form>


        <div class="border  mt-5 p-5">
            <div class="mb-4 border-b border-gray-200 dark:border-gray-700">
                <ul class="flex flex-wrap -mb-px text-sm font-medium text-center" id="default-styled-tab"
                    data-tabs-toggle="#default-styled-tab-content"
                    data-tabs-active-classes="text-purple-600 hover:text-purple-600 dark:text-purple-500 dark:hover:text-purple-500 border-purple-600 dark:border-purple-500"
                    data-tabs-inactive-classes="dark:border-transparent text-gray-500 hover:text-gray-600 dark:text-gray-400 border-gray-100 hover:border-gray-300 dark:border-gray-700 dark:hover:text-gray-300"
                    role="tablist">
                    <li class="me-2" role="presentation">
                        <button class="inline-block p-4 border-b-2 rounded-t-lg" id="profile-styled-tab"
                            data-tabs-target="#styled-profile" type="button" role="tab" aria-controls="profile"
                            aria-selected="false">Item list's</button>
                    </li>
                    <!-- <li class="me-2" role="presentation">
                        <button
                            class="inline-block p-4 border-b-2 rounded-t-lg hover:text-gray-600 hover:border-gray-300 dark:hover:text-gray-300"
                            id="dashboard-styled-tab" data-tabs-target="#styled-dashboard" type="button" role="tab"
                            aria-controls="dashboard" aria-selected="false">Indirect Responsibilites</button>
                    </li>
                    <li class="me-2" role="presentation">
                        <button
                            class="inline-block p-4 border-b-2 rounded-t-lg hover:text-gray-600 hover:border-gray-300 dark:hover:text-gray-300"
                            id="settings-styled-tab" data-tabs-target="#styled-settings" type="button" role="tab"
                            aria-controls="settings" aria-selected="false">Securring Attributes</button>
                    </li> -->
                </ul>
            </div>
            <!-- <div id="default-styled-tab-content">

                <div class="hidden p-4 rounded-lg bg-gray-50 dark:bg-gray-800" id="styled-profile" role="tabpanel"
                    aria-labelledby="profile-tab">
                    <div class="flex flex-wrap justify-between">
                        <div class="">
                            <label class="block mb-2 font-bold text-xs font-medium text-gray-900 dark:text-white">Line
                                : </label>
                            <input type="text"
                                class="w-40 rounded-md border text-xs mb-3 border-gray-500 bg-white py-3 pl-2 text-[#6B7280] h-6 outline-none focus:border-[#6A64F1] focus:shadow-md" />
                        </div>

                        <div class="">
                            <label class="block mb-2 font-bold text-xs font-medium text-gray-900 dark:text-white">Item
                                : </label>
                            <input type="text"
                                class="w-40 rounded-md border text-xs border-gray-500 bg-white py-3 pl-2 text-[#6B7280] h-6 outline-none focus:border-[#6A64F1] focus:shadow-md" />
                        </div>
                        <div class="">
                            <label
                                class="block mb-2 font-bold text-xs font-medium text-gray-900 dark:text-white">Process
                                Seq: </label>
                            <input type="text"
                                class="w-40 rounded-md border text-xs mb-3 border-gray-500 bg-white py-3 pl-2 text-[#6B7280] h-6 outline-none focus:border-[#6A64F1] focus:shadow-md" />
                        </div>
                        <div class="">
                            <label
                                class="block mb-2 font-bold text-xs font-medium text-gray-900 dark:text-white">Transaction
                                Type : </label>
                            <input type="text"
                                class="rounded-md border text-xs border-gray-500 bg-white py-3 pl-2 text-[#6B7280] h-6 outline-none focus:border-[#6A64F1] focus:shadow-md" />
                        </div>
                        <div class="">
                            <label class="block mb-2 font-bold text-xs font-medium text-gray-900 dark:text-white">
                                Date Required : </label>
                            <input type="date"
                                class="w-40 rounded-md border mb-3 text-xs border-gray-500 bg-white py-3 pl-2 text-[#6B7280] h-6 outline-none focus:border-[#6A64F1] focus:shadow-md" />
                        </div>
                        <div class="">
                            <label class="block mb-2 font-bold text-xs font-medium text-gray-900 dark:text-white">
                                UOM : </label>
                            <input type="text"
                                class="w-40 rounded-md border text-xs border-gray-500 bg-white py-3 pl-2 text-[#6B7280] h-6 outline-none focus:border-[#6A64F1] focus:shadow-md" />
                        </div>
                        <div class="">
                            <label class="block mb-2 font-bold text-xs font-medium text-gray-900 dark:text-white">
                                Qty : </label>
                            <input type="text"
                                class="w-40 rounded-md border text-xs border-gray-500 bg-white py-3 pl-2 text-[#6B7280] h-6 outline-none focus:border-[#6A64F1] focus:shadow-md" />

                            <button data-modal-target="authentication-modal" data-modal-toggle="authentication-modal"
                                id="lot_btn"
                                class="w-28 text-white border border-blue-700 bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-900 font-medium rounded-md text-xs py-2 text-center me-2 mb-2 font-bold dark:border-blue-500 dark:text-blue-500 dark:hover:text-white dark:hover:bg-blue-500 dark:focus:ring-blue-800 ">
                                Lot / Serial No
                            </button>
                        </div>

                    </div>
                </div>
                <div id="authentication-modal" tabindex="-1" aria-hidden="true"
                    class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
                    <div class="relative p-4 w-full max-w-md max-h-full">

                        <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">

                            <div
                                class="flex items-center justify-between p-4 md:p-5 border-b rounded-t dark:border-gray-600">
                                <h3 class="text-xl font-semibold text-gray-900 dark:text-white">
                                    <input name="type" type="radio" id="serial_txt"
                                        class="before:content[''] peer relative h-3 w-3 cursor-pointer appearance-none rounded-full border border-blue-gray-200 text-gray-900 transition-all before:absolute before:top-2/4 before:left-2/4 before:block before:h-12 before:w-12 before:-translate-y-2/4 before:-translate-x-2/4 before:rounded-full before:bg-blue-gray-500 before:opacity-0 before:transition-opacity checked:border-gray-900 checked:before:bg-gray-900 hover:before:opacity-10"
                                        name="no" checked />
                                    <label>Serial No / </label>

                                    <input name="type" id="lot_no" type="radio"
                                        class="before:content[''] peer relative h-3 w-3 cursor-pointer appearance-none rounded-full border border-blue-gray-200 text-gray-900 transition-all before:absolute before:top-2/4 before:left-2/4 before:block before:h-12 before:w-12 before:-translate-y-2/4 before:-translate-x-2/4 before:rounded-full before:bg-blue-gray-500 before:opacity-0 before:transition-opacity checked:border-gray-900 checked:before:bg-gray-900 hover:before:opacity-10"
                                        name="no" />
                                    <label>Lot Number</label>
                                    <button onclick="form_radio()"
                                        class="w-16 ml-3 text-white border border-blue-700 bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-900 font-medium rounded-md text-xs py-2.5 text-center me-2 mb-2 font-bold dark:border-blue-500 dark:text-blue-500 dark:hover:text-white dark:hover:bg-blue-500 dark:focus:ring-blue-800 ">Click
                                        Me</button>

                                </h3>
                                <button type="button"
                                    class="end-2.5 text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white"
                                    data-modal-hide="authentication-modal">
                                    <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                        fill="none" viewBox="0 0 14 14">
                                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                            stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
                                    </svg>
                                    <span class="sr-only">Close modal</span>
                                </button>
                            </div>























                            
                            <div class="p-4 md:p-5">
                                <form class="space-y-4" action="#">
                                    <div class="gap-x-5">
                                        <div id="pop_serial">

                                            <div>
                                                <label for="" id=""
                                                    class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Serial
                                                    Number From</label>
                                                <input type="number" name="" id=""
                                                    class="bg-gray-50 border border-gray-300 mb-3 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white"
                                                    required />
                                            </div>
                                            <div>
                                                <label for="" id=""
                                                    class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Serial
                                                    Number To</label>
                                                <input type="number" name="" id=""
                                                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white"
                                                    required />
                                            </div>
                                        </div>
                                        <div>
                                            <button type="submit" onclick="add_field()" id="add_field_btn"
                                                class="w-1/4 text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800 mt-5">Add</button>
                                        </div>
                                    </div>
                                    <div id="lot_input" style="display: none;">
                                        <label for="" id="serial_to"
                                            class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Lot
                                            Number</label>
                                        <input type="number" name=""
                                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white"
                                            required />
                                    </div>
                                    <button type="submit"
                                        class="w-full text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800 mt-5">Submit
                                        Now</button>
                                </form>
                            </div>

                            
                        </div>
                    </div>
                </div>
                <div class="hidden p-4 rounded-lg bg-gray-50 dark:bg-gray-800" id="styled-dashboard" role="tabpanel"
                    aria-labelledby="dashboard-tab">
                    <p class="text-sm text-gray-500 dark:text-gray-400">This is some placeholder content the <strong
                            class="font-medium text-gray-800 dark:text-white">Dashboard tab's associated
                            content</strong>.
                        Clicking another tab will toggle the visibility of this one for the next. The tab JavaScript
                        swaps
                        classes to control the content visibility and styling.</p>
                </div>
                <div class="hidden p-4 rounded-lg bg-gray-50 dark:bg-gray-800" id="styled-settings" role="tabpanel"
                    aria-labelledby="settings-tab">
                    <p class="text-sm text-gray-500 dark:text-gray-400">This is some placeholder content the <strong
                            class="font-medium text-gray-800 dark:text-white">Settings tab's associated
                            content</strong>.
                        Clicking another tab will toggle the visibility of this one for the next. The tab JavaScript
                        swaps
                        classes to control the content visibility and styling.</p>
                </div>
                <div class="hidden p-4 rounded-lg bg-gray-50 dark:bg-gray-800" id="styled-contacts" role="tabpanel"
                    aria-labelledby="contacts-tab">
                    <p class="text-sm text-gray-500 dark:text-gray-400">This is some placeholder content the <strong
                            class="font-medium text-gray-800 dark:text-white">Contacts tab's associated
                            content</strong>.
                        Clicking another tab will toggle the visibility of this one for the next. The tab JavaScript
                        swaps
                        classes to control the content visibility and styling.</p>
                </div>
            </div> -->


            <div
                class="relative flex flex-col w-full h-full overflow-auto text-gray-700 bg-white shadow-md rounded-xl bg-clip-border">
                <table class="w-full text-left table-auto min-w-max">
                    <thead>
                        <tr>
                            <th class="p-4 border-b border-blue-gray-100 bg-blue-gray-50">
                                <p class="block font-bold text-sm antialiased font-normal leading-none text-blue-gray-900 opacity-70">
                                    SO No.
                                </p>
                            </th>
                            <th class="p-4 border-b border-blue-gray-100 bg-blue-gray-50">
                                <p class="block font-bold text-sm antialiased font-normal leading-none text-blue-gray-900 opacity-70">
                                    Line number
                                </p>
                            </th>
                            <th class="p-4 border-b border-blue-gray-100 bg-blue-gray-50">
                                <p class="block font-bold text-sm antialiased font-normal leading-none text-blue-gray-900 opacity-70">
                                    Item code
                                </p>
                            </th>
                            <th class="p-4 border-b border-blue-gray-100 bg-blue-gray-50">
                                <p class="block font-bold text-sm antialiased font-normal leading-none text-blue-gray-900 opacity-70">
                                    Qty
                                </p>
                            </th>
                            <th class="p-4 border-b border-blue-gray-100 bg-blue-gray-50">
                                <p class="block font-bold text-sm antialiased font-normal leading-none text-blue-gray-900 opacity-70">
                                    Process seq
                                </p>
                            </th>
                            <th class="p-4 border-b border-blue-gray-100 bg-blue-gray-50">
                                <p class="block font-bold text-sm antialiased font-normal leading-none text-blue-gray-900 opacity-70">
                                    Transaction type
                                </p>
                            </th>
                            <th class="p-4 border-b border-blue-gray-100 bg-blue-gray-50">
                                <p class="block font-bold text-sm antialiased font-normal leading-none text-blue-gray-900 opacity-70">
                                    Date required
                                </p>
                            </th>
                            <th class="p-4 border-b border-blue-gray-100 bg-blue-gray-50">
                                <p class="block font-bold text-sm antialiased font-normal leading-none text-blue-gray-900 opacity-70">
                                    UOM
                                </p>
                            </th>

                            <th class="p-4 border-b border-blue-gray-100 bg-blue-gray-50">
                                <p class="block font-bold text-sm antialiased font-normal leading-none text-blue-gray-900 opacity-70"></p>
                            </th>
                        </tr>
                    </thead>
                    <tbody>






                        <?php

                        $i = 0;
                        while ($row = mysqli_fetch_assoc($result)) {
                            $i++;
                        ?>


                            <tr>

                                <td class="p-4 border-b border-blue-gray-50">
                                    <p class="block font-sans text-sm antialiased font-normal leading-normal text-blue-gray-900">
                                        <?php echo $i ?>
                                </td>
                                <td class="p-4 border-b border-blue-gray-50">


                                    <div
                                        style="max-width: 200px;"
                                        class="w-full max-w-sm min-w-[150px]">
                                        <?php echo $row['id'] ?>

                                    </div>

                                </td>
                                <td class="p-4 border-b border-blue-gray-50">
                                    <div

                                        class="w-full max-w-sm min-w-[150px]">
                                        <input
                                            style="max-width: 200px;"
                                            placeholder="item_Code"
                                            value=""
                                            class="w-full bg-transparent placeholder:text-slate-400 text-slate-700 text-sm border border-slate-200 rounded-md px-3 py-2 transition duration-300 ease focus:outline-none focus:border-slate-400 hover:border-slate-300 shadow-sm focus:shadow">
                                    </div>
                                </td>
                                <td class="p-4 border-b border-blue-gray-50">
                                    <div
                                        style="max-width: 200px;"
                                        class="w-full max-w-sm min-w-[150px]">

                                        <?php echo $row['qty'] ?>
                                    </div>
                                </td>
                                <td class="p-4 border-b border-blue-gray-50">
                                    <div
                                        style="max-width: 200px;"
                                        class="w-full max-w-sm min-w-[150px]">
                                        <input
                                            placeholder="Process seq"

                                            class="w-full bg-transparent placeholder:text-slate-400 text-slate-700 text-sm border border-slate-200 rounded-md px-3 py-2 transition duration-300 ease focus:outline-none focus:border-slate-400 hover:border-slate-300 shadow-sm focus:shadow">
                                    </div>
                                </td>
                                <td class="p-4 border-b border-blue-gray-50">
                                    <div
                                        style="max-width: 200px;"
                                        class="w-full max-w-sm min-w-[150px]">
                                        <input
                                            placeholder="Transaction type"

                                            class="w-full bg-transparent placeholder:text-slate-400 text-slate-700 text-sm border border-slate-200 rounded-md px-3 py-2 transition duration-300 ease focus:outline-none focus:border-slate-400 hover:border-slate-300 shadow-sm focus:shadow">
                                    </div>
                                </td>
                                <td class="p-4 border-b border-blue-gray-50">
                                    <div
                                        style="max-width: 200px;"
                                        class="w-full max-w-sm min-w-[150px]">
                                        <input
                                            name=rec_qty
                                            value="<?php echo $row['qty'] ?>"
                                            type="date"
                                            placeholder="Date required.."
                                            class="w-full cursor-pointer bg-transparent placeholder:text-slate-400 text-slate-700 text-sm border border-slate-200 rounded-md px-3 py-2 transition duration-300 ease focus:outline-none focus:border-slate-400 hover:border-slate-300 shadow-sm focus:shadow">
                                    </div>
                                </td>
                                <td class="p-4 border-b border-blue-gray-50">
                                    <div
                                        style="max-width: 200px;"
                                        class="w-full max-w-sm min-w-[150px]">
                                        <input
                                            placeholder="UOM"
                                            class="w-full bg-transparent placeholder:text-slate-400 text-slate-700 text-sm border border-slate-200 rounded-md px-3 py-2 transition duration-300 ease focus:outline-none focus:border-slate-400 hover:border-slate-300 shadow-sm focus:shadow">
                                    </div>
                                </td>

                            </tr>


                        <?php


                        }
                        ?>

                    </tbody>
                </table>
            </div>
        </div>


        <div class="w-full mt-5 flex justify-around">
            <button type="reset"
                class="w-28 text-white border border-blue-700 bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-md text-xs py-2.5 text-center me-2 mb-2 font-bold dark:border-blue-500 dark:text-blue-500 dark:hover:text-white dark:hover:bg-blue-500 dark:focus:ring-blue-800 ">Clear
                Form</button>
            <button type="text"
                class="w-28 text-white border border-blue-700 bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-md text-xs py-2.5 text-center me-2 mb-2 font-bold dark:border-blue-500 dark:text-blue-500 dark:hover:text-white dark:hover:bg-blue-500 dark:focus:ring-blue-800 ">On
                Hand</button>
            <div>
                <button type="text"
                    class="w-28 text-white border border-blue-700 bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-md text-xs py-2.5 text-center me-2 font-bold dark:border-blue-500 dark:text-blue-500 dark:hover:text-white dark:hover:bg-blue-500 dark:focus:ring-blue-800 ">Approve</button>
            </div>
        </div>
    </div>


    <script>
        let x = `<div class="border-t border-gray-900 mt-4 pt-2">
                                            <label for="" id=""
                                                class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Serial
                                                Number From</label>
                                            <input type="number" name="" id=""
                                                class="bg-gray-50 border mb-3 border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white"
                                                required />
                                        </div>
                                        <div>
                                            <label for="" id=""
                                                class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Serial
                                                Number To</label>
                                            <input type="number" name="" id=""
                                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white"
                                                required />
                                        </div>`


        function form_radio() {

            let y = document.getElementById("serial_txt")
            let z = document.getElementById("lot_no")
            let add_btn = document.getElementById("add_field_btn")
            let w = document.getElementById("lot_input")
            let v = document.getElementById("pop_serial")


            if (z.checked) {
                w.style.display = "block";
                v.style.display = "none"
                add_btn.style.display = "none"
            }

            if (y.checked) {
                v.style.display = "block"
                w.style.display = "none";
                add_btn.style.display = "block"
            }

            console.log("hey")
        }

        function add_field() {
            let y = document.getElementById("pop_serial")

            y.innerHTML += x;
        }
    </script>
</body>

<script src="./js/jquery.min.js"></script>
<script src="./js/moveOrderJs.js"></script>

</html>