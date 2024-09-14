<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.0.4/dist/tailwind.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/flowbite@2.5.1/dist/flowbite.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/flowbite@2.5.1/dist/flowbite.min.css" rel="stylesheet" />
    <title>SO Form</title>
</head>

<!-- Background COlor style="background-color: #F7EFE5;" -->

<body>
    <h1 class="text-center text-3xl mb-5 mt-2 font-bold underline">Sales Order Form</h1>
    <form action="#">
        <div class="max-w-7xl m-auto flex px-10 gap-x-7">
            <fieldset class="w-1/6 p-5 border-2 rounded-md border-gray-900" style="border-color: #674188;">
                <legend class="font-bold">Header Information</legend>
                <div class="">
                    <div>
                        <label for=""
                            class=" w-40 block mb-1 font-bold text-xs font-medium text-gray-900 dark:text-white">Sales
                            Order Number
                            :
                        </label>
                        <input type="text" name="sales_order_number"
                            class="w-40 rounded-md border mb-3 text-xs border-gray-500 bg-white py-3 pl-2 text-[#6B7280] h-6 outline-none focus:border-[#6A64F1] focus:shadow-md"
                            style="border-color: #C8A1E0;" />
                    </div>
                    <div class="">
                        <label class="w-40 block mb-1 font-bold text-xs font-medium text-gray-900 dark:text-white">User
                            Name: </label>
                        <input type="text" name="username"
                            class="w-40 rounded-md border mb-3 text-xs border-gray-500 bg-white py-3 pl-2 text-[#6B7280] h-6 outline-none focus:border-[#6A64F1] focus:shadow-md"
                            style="border-color: #C8A1E0;" />
                    </div>
                    <div class="">
                        <label class="w-40 block mb-1 font-bold text-xs font-medium text-gray-900 dark:text-white">User
                            Address: </label>
                        <input type="text" name="user_address"
                            class="w-40 rounded-md border  mb-3 text-xs border-gray-500 bg-white py-3 pl-2 text-[#6B7280] h-6 outline-none focus:border-[#6A64F1] focus:shadow-md"
                            style="border-color: #C8A1E0;" />
                    </div>
                    <div class="">
                        <label class="w-40 block mb-1 font-bold text-xs font-medium text-gray-900 dark:text-white">User
                            Phone Number:
                        </label>
                        <input type="text" name="user_phone_number"
                            class="w-40 rounded-md border  mb-3 text-xs border-gray-500 bg-white py-3 pl-2 text-[#6B7280] h-6 outline-none focus:border-[#6A64F1] focus:shadow-md"
                            style="border-color: #C8A1E0;" />
                    </div>
                    <div class="">
                        <label class="w-40 block mb-1 font-bold text-xs font-medium text-gray-900 dark:text-white">User
                            Email :
                        </label>
                        <input type="text" name="user_email"
                            class="w-40 rounded-md border text-xs border-gray-500 bg-white py-3 pl-2 text-[#6B7280] h-6 outline-none focus:border-[#6A64F1] focus:shadow-md"
                            style="border-color: #C8A1E0;" />
                    </div>
                </div>
            </fieldset>
            <fieldset class="w-5/6 p-5 border-2 rounded-md border-gray-900" style="border-color: #674188;">
                <legend class="font-bold">Item Information</legend>
                <div class="flex justify-between flex-wrap">
                    <div class="">
                        <div>
                            <input type="radio" name="goods" checked id="">
                            <span class="text-xs font-bold">Finish Goods</span>
                        </div>

                        <div
                            class="flex flex-wrap items-center border gap-x-5 border-gray-900 w-full p-2 rounded-lg mt-2">
                            <div>
                                <label class="block text-sm">S. No : </label>
                                <input type="text" name="item_serial_no"
                                    class="w-10 rounded-md border text-xs border-gray-500 bg-white py-2 pl-2 text-[#6B7280] h-6 outline-none focus:border-[#6A64F1] focus:shadow-md"
                                    style="border-color: #C8A1E0;" /><br>
                            </div>
                            <div>
                                <label class="block text-sm">Item Name : </label>
                                <input type="text" name="item_name"
                                    class="md:w-36 w-36 rounded-md border text-xs border-gray-500 bg-white py-2 pl-2 text-[#6B7280] h-6 outline-none focus:border-[#6A64F1] focus:shadow-md"
                                    style="border-color: #C8A1E0;" /><br>
                            </div>
                            <div>
                                <label class="block text-sm">Item Qty : </label>
                                <input type="number" name="item_qty"
                                    class="w-20 rounded-md border text-xs border-gray-500 bg-white py-2 text-[#6B7280] h-6 outline-none focus:border-[#6A64F1] focus:shadow-md"
                                    style="border-color: #C8A1E0;" /><br>
                            </div>
                            <div>
                                <label class="block text-sm">Rate : </label>
                                <input type="number" name="item_rate"
                                    class="w-24 rounded-md border text-xs border-gray-500 bg-white py-2 text-[#6B7280] h-6 outline-none focus:border-[#6A64F1] focus:shadow-md"
                                    style="border-color: #C8A1E0;" /><br>
                            </div>
                            <div>
                                <label class="block text-sm">Total : </label>
                                <input type="number" name="item_total"
                                    class="w-28 rounded-md border text-xs border-gray-500 bg-white py-2 text-[#6B7280] h-6 outline-none focus:border-[#6A64F1] focus:shadow-md"
                                    style="border-color: #C8A1E0;" /><br>
                            </div>
                            <div>

                                <button data-modal-target="crud-modal" data-modal-toggle="crud-modal"
                                    class="text-gray-900 mt-5  focus:outline-none border border-gray-900 px-1  font-medium rounded-lg text-xs py-1 text-center"
                                    type="button">if Ship another address </button>
                            </div>
                            <div class="w-28 h-24 border border-gray-900 rounded-md">
                                <img class="w-28 h-24 rounded-md" src="./images.png" alt="image preview">
                            </div>
                            <div>
                                <button data-modal-target="extralarge-modal" data-modal-toggle="extralarge-modal"
                                    class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-1.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800"
                                    type="button">
                                    Update BOM
                                </button>
                            </div>
                        </div>
                        <div class="block">
                            <div id="finish_field"></div>
                        </div>
                        <div class="mt-2"><button onclick="finish_field()"
                                class="text-gray-900  focus:outline-none border border-gray-900 px-2  font-medium rounded-lg text-xs py-1 text-center"
                                type="button">Add Items</button>
                            <button onclick="remove_finish_field()" id="remove_btn"
                                class="text-gray-900  focus:outline-none border border-gray-900 px-2  font-medium rounded-lg text-xs py-1 text-center"
                                type="button">Remove Items</button>

                        </div>

                        <div class=" border-t border-gray-900 mt-4 pt-2">
                            <div>
                                <input type="radio" name="goods" onclick="radio_btn()">
                                <span class="text-xs font-bold">Raw Material</span>
                            </div>

                            <div class="border border-gray-900 w-full p-2 rounded-lg mt-2" id="raw_section"
                                style="display: none;">
                                <div class="flex flex-wrap items-center gap-x-5 ">
                                    <div>
                                        <label class="block text-sm">S. No : </label>
                                        <input type="text" name="serial_no"
                                            class="w-10 rounded-md border text-xs border-gray-500 bg-white py-2 pl-2 text-[#6B7280] h-6 outline-none focus:border-[#6A64F1] focus:shadow-md"
                                            style="border-color: #C8A1E0;" /><br>
                                    </div>
                                    <div>
                                        <label class="block text-sm">Item Name : </label>
                                        <input type="text" name="item_name"
                                            class="w-36 rounded-md border text-xs border-gray-500 bg-white py-2 pl-2 text-[#6B7280] h-6 outline-none focus:border-[#6A64F1] focus:shadow-md"
                                            style="border-color: #C8A1E0;" /><br>
                                    </div>
                                    <div>
                                        <label class="block text-sm">Item Qty : </label>
                                        <input type="number" name="item_qty"
                                            class="w-20 rounded-md border text-xs border-gray-500 bg-white py-2 text-[#6B7280] h-6 outline-none focus:border-[#6A64F1] focus:shadow-md"
                                            style="border-color: #C8A1E0;" /><br>
                                    </div>
                                    <div>
                                        <label class="block text-sm">Rate : </label>
                                        <input type="number" name="rate"
                                            class="w-24 rounded-md border text-xs border-gray-500 bg-white py-2 text-[#6B7280] h-6 outline-none focus:border-[#6A64F1] focus:shadow-md"
                                            style="border-color: #C8A1E0;" /><br>
                                    </div>
                                    <div>
                                        <label class="block text-sm">Total : </label>
                                        <input type="number" name="total"
                                            class="w-28 rounded-md border text-xs border-gray-500 bg-white py-2 text-[#6B7280] h-6 outline-none focus:border-[#6A64F1] focus:shadow-md"
                                            style="border-color: #C8A1E0;" /><br>
                                    </div>
                                    <div>

                                        <button data-modal-target="crud-modal" data-modal-toggle="crud-modal"
                                            class="text-gray-900 mt-5  focus:outline-none border border-gray-900 px-1  font-medium rounded-lg text-xs py-1 text-center"
                                            type="button">if Ship another address </button>
                                    </div>
                                    <div class="w-28 h-24 border border-gray-900 rounded-md">
                                        <img class="w-28 h-24 rounded-md" src="./images.png" alt="image preview">
                                    </div>
                                </div><br>
                            </div>


                            <!-- Main modal -->
                            <div id="crud-modal" tabindex="-1" aria-hidden="true"
                                class="overflow-y-auto overflow-x-hidden hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
                                <div class="relative p-4 w-full max-w-md max-h-full">
                                    <!-- Modal content -->
                                    <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
                                        <!-- Modal header -->
                                        <div
                                            class="flex items-center justify-between p-4 md:p-5 border-b rounded-t dark:border-gray-600">
                                            <h3 class="text-lg font-semibold text-gray-900 dark:text-white">
                                                Add Shipping Address
                                            </h3>
                                            <button type="button"
                                                class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white"
                                                data-modal-toggle="crud-modal">
                                                <svg class="w-3 h-3" aria-hidden="true"
                                                    xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                                                    <path stroke="currentColor" stroke-linecap="round"
                                                        stroke-linejoin="round" stroke-width="2"
                                                        d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
                                                </svg>
                                                <span class="sr-only">Close modal</span>
                                            </button>
                                        </div>
                                        <!-- Modal body -->
                                        <form class="p-4 md:p-5">
                                            <div class="grid gap-4 mb-4 grid-cols-2 pb-5">
                                                <div class="col-span-2 w-3/4 m-auto mt-3">
                                                    <label for=""
                                                        class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">User
                                                        Name : </label>
                                                    <input type="text" name="user_name" id=""
                                                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                                                        required="">
                                                </div>
                                                <div class="col-span-2 w-3/4 m-auto">
                                                    <label for=""
                                                        class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">User
                                                        Address : </label>
                                                    <input type="text" name="user_address" id=""
                                                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                                                        required="">
                                                </div>
                                                <div class="col-span-2 w-3/4 m-auto">
                                                    <label for=""
                                                        class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">User
                                                        Email : </label>
                                                    <input type="text" name="user_email" id=""
                                                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                                                        required="">
                                                </div>
                                                <div class="col-span-2 w-3/4 m-auto">
                                                    <label for="name"
                                                        class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">User
                                                        Phone Number : </label>
                                                    <input type="number" name="user_phone_no" id=""
                                                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                                                        required="">
                                                </div>
                                                <div class="col-span-2 w-3/4 m-auto flex justify-center mt-3">
                                                    <button
                                                        class="focus:outline-none font-medium border border-gray-900 px-5 py-3  font-medium rounded-lg text-xs py-1 text-center"
                                                        type="button">Add Address</button>
                                                </div>
                                            </div>

                                        </form>
                                    </div>
                                </div>
                            </div>

                            <div id="add_btn" style="display: none;">
                                <div>
                                    <div id="raw_field"></div>
                                </div>
                                <div class="mt-2">
                                    <button onclick="raw_field()"
                                        class="focus:outline-none font-medium border border-gray-900 px-2  font-medium rounded-lg text-xs py-1 text-center"
                                        type="button">Add Items</button>
                                    <button id="raw_remove"
                                        class=" focus:outline-none font-medium border border-gray-900 px-2  font-medium rounded-lg text-xs py-1 text-center"
                                        type="button">Remove Items</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- <div class="w-40 h-40 mt-5 border border-gray-900 rounded-md">
                        <img src="" alt="item preview">
                    </div> -->
                </div>
            </fieldset>


            <!----------Bom Form------------->
            <div id="extralarge-modal" tabindex="-1"
                class="fixed top-0 left-0 right-0 z-50 hidden w-full p-4 overflow-x-hidden overflow-y-auto md:inset-0 h-[calc(100%-1rem)] max-h-full">
                <div class="relative w-full max-w-7xl max-h-full">
                    <!-- Modal content -->
                    <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
                        <!-- Modal header -->
                        <div
                            class="flex items-center justify-between p-4 md:p-5 border-b rounded-t dark:border-gray-600">
                            <h3 class="text-xl font-medium text-gray-900 dark:text-white">
                                BOM Form
                            </h3>
                            <button type="button"
                                class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white"
                                data-modal-hide="extralarge-modal">
                                <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                                    viewBox="0 0 14 14">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                        stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
                                </svg>
                                <span class="sr-only">Close modal</span>
                            </button>
                        </div>
                        <!-- Modal body -->
                        <div class="p-4 md:p-5 space-y-4">
                            <div class="flex gap-x-4">
                                <form class="w-full p-3">
                                    <div class="border border-gray-500 p-3 rounded-md">
                                        <div class="flex gap-x-9 flex-wrap">

                                            <div>
                                                <label for=""
                                                    class="block  mb-2 font-bold text-xs font-medium text-gray-900 dark:text-white">New
                                                    BOM
                                                    :
                                                </label>
                                                <input type="text" name="new_bom"
                                                    class="w-40 rounded-md mb-3 border text-xs border-gray-500 bg-white py-3 pl-2 text-[#6B7280] h-6 outline-none focus:border-[#6A64F1] focus:shadow-md"
                                                    style="border-color: #C8A1E0;" />
                                            </div>
                                            <div class="">
                                                <label
                                                    class="block w-40 mb-2 font-bold text-xs font-medium text-gray-900 dark:text-white">Item
                                                    Name : </label>
                                                <input type="text" name="bom_item_name"
                                                    class="w-40 rounded-md mb-3  border text-xs border-gray-500 bg-white py-3 pl-2 text-[#6B7280] h-6 outline-none focus:border-[#6A64F1] focus:shadow-md"
                                                    style="border-color: #C8A1E0;" />
                                            </div>
                                            <div class="">
                                                <label
                                                    class="block w-40 mb-2 font-bold text-xs font-medium text-gray-900 dark:text-white">Revison
                                                    : </label>
                                                <input type="text" name="bom_revision"
                                                    class="w-40 rounded-md mb-3  border text-xs border-gray-500 bg-white py-3 pl-2 text-[#6B7280] h-6 outline-none focus:border-[#6A64F1] focus:shadow-md"
                                                    style="border-color: #C8A1E0;" />
                                            </div>
                                            <div class="">
                                                <label
                                                    class="block w-40 mb-2 font-bold text-xs font-medium text-gray-900 dark:text-white">Percentage:
                                                </label>
                                                <input type="text" name="bom_percentage"
                                                    class="w-40 rounded-md mb-3  border text-xs border-gray-500 bg-white py-3 pl-2 text-[#6B7280] h-6 outline-none focus:border-[#6A64F1] focus:shadow-md"
                                                    style="border-color: #C8A1E0;" />
                                            </div>
                                            <div class="">
                                                <label
                                                    class="block w-40 mb-2 font-bold text-xs font-medium text-gray-900 dark:text-white">Products
                                                    :
                                                </label>
                                                <input type="text" name="bom_products"
                                                    class="w-40 rounded-md mb-3  border text-xs border-gray-500 bg-white py-3 pl-2 text-[#6B7280] h-6 outline-none focus:border-[#6A64F1] focus:shadow-md"
                                                    style="border-color: #C8A1E0;" />
                                            </div>
                                            <div class="">
                                                <label
                                                    class="block w-40 mb-2 font-bold text-xs font-medium text-gray-900 dark:text-white">Created
                                                    Date : </label>
                                                <input type="date" name="bom_created_date"
                                                    class="w-40 rounded-md mb-3  border text-xs border-gray-500 bg-white pl-2 text-[#6B7280] h-6 outline-none focus:border-[#6A64F1] focus:shadow-md"
                                                    style="border-color: #C8A1E0;" />
                                            </div>
                                            <div class="">
                                                <label
                                                    class="block w-40 mb-2 font-bold text-xs font-medium text-gray-900 dark:text-white">Created
                                                    By :
                                                </label>
                                                <input type="text" name="bom_created_by"
                                                    class="w-40 rounded-md mb-3  border text-xs border-gray-500 bg-white pl-2 text-[#6B7280] h-6 outline-none focus:border-[#6A64F1] focus:shadow-md"
                                                    style="border-color: #C8A1E0;" />
                                            </div>
                                            <div class="">
                                                <label
                                                    class="block  mb-2 font-bold text-xs font-medium text-gray-900 dark:text-white">Organization
                                                    Mapping : </label>
                                                <input type="text" name="bom_organization_mapping"
                                                    class="w-40 rounded-md mb-3 border text-xs border-gray-500 bg-white py-3 pl-2 text-[#6B7280] h-6 outline-none focus:border-[#6A64F1] focus:shadow-md"
                                                    style="border-color: #C8A1E0;" />
                                            </div>
                                            <div class="">
                                                <label
                                                    class="block w-40 mb-2 font-bold text-xs font-medium text-gray-900 dark:text-white">Warehouse
                                                    Location : </label>
                                                <input type="text" name="bom_warehouse_location"
                                                    class="w-40 rounded-md mb-3 border text-xs border-gray-500 bg-white py-3 pl-2 text-[#6B7280] h-6 outline-none focus:border-[#6A64F1] focus:shadow-md"
                                                    style="border-color: #C8A1E0;" />
                                            </div>
                                        </div>
                                    </div>
                                </form>
                                <div class="w-40 h-40 border border-gray-900 rounded-md ml-4">
                                    <img class="w-40 h-40" id="preview" alt="Item image">
                                </div>
                            </div>

                            <div class="mt-6">
                                <form class="w-full border p-3 border-gray-500 rounded-md">
                                    <div class="flex flex-wrap items-center justify-between">
                                        <div class="ml-2">
                                            <label
                                                class="block mb-2 font-bold text-xs font-medium text-gray-900 dark:text-white">Item
                                                Seq
                                                :
                                            </label>
                                            <input type="text" name="bom_item_seq" id=""
                                                class="w-40 rounded-md border text-xs border-gray-500 bg-white py-3 pl-2 text-[#6B7280] h-6 outline-none focus:border-[#6A64F1] focus:shadow-md"
                                                style="border-color: #C8A1E0;" />
                                        </div>
                                        <div class="ml-2">
                                            <label
                                                class="block mb-2 font-bold text-xs font-medium text-gray-900 dark:text-white">Process
                                                Seq:
                                            </label>
                                            <input type="text" name="bom_proccess_seq" id=""
                                                class="w-40 rounded-md border text-xs border-gray-500 bg-white py-3 pl-2 text-[#6B7280] h-6 outline-none focus:border-[#6A64F1] focus:shadow-md"
                                                style="border-color: #C8A1E0;" />
                                        </div>
                                        <div class="ml-2">
                                            <label
                                                class="block mb-2 font-bold text-xs font-medium text-gray-900 dark:text-white">Item
                                                code :
                                            </label>
                                            <input type="text" name="bom_item_code" id=""
                                                class="w-40 rounded-md border text-xs border-gray-500 bg-white py-3 pl-2 text-[#6B7280] h-6 outline-none focus:border-[#6A64F1] focus:shadow-md"
                                                style="border-color: #C8A1E0;" />
                                        </div>
                                        <div class="ml-2">
                                            <label
                                                class="block mb-2 font-bold text-xs font-medium text-gray-900 dark:text-white">
                                                Item Name :
                                            </label>
                                            <input type="text" name="bom_item_name" id=""
                                                class="w-40 rounded-md border text-xs border-gray-500 bg-white py-3 pl-2 text-[#6B7280] h-6 outline-none focus:border-[#6A64F1] focus:shadow-md"
                                                style="border-color: #C8A1E0;" />
                                        </div>
                                        <div class="ml-2">
                                            <label
                                                class="block mb-2 font-bold text-xs font-medium text-gray-900 dark:text-white">Qty
                                                :
                                            </label>
                                            <input type="text" name="bom_qty" id=""
                                                class="w-40 rounded-md border text-xs border-gray-500 bg-white py-3 pl-2 text-[#6B7280] h-6 outline-none focus:border-[#6A64F1] focus:shadow-md"
                                                style="border-color: #C8A1E0;" />
                                        </div>
                                        <div class="ml-2">
                                            <label
                                                class="block mb-2 font-bold text-xs font-medium text-gray-900 dark:text-white">Percentage
                                                :
                                            </label>
                                            <input type="number" name="bom_item_percentage" id=""
                                                class="w-40 rounded-md border text-xs border-gray-500 bg-white pl-2 text-[#6B7280] h-6 outline-none focus:border-[#6A64F1] focus:shadow-md"
                                                style="border-color: #C8A1E0;" />
                                        </div>
                                    </div>
                                    <div
                                        class="flex flex-wrap items-center border-gray-500 justify-between border-t mt-2">
                                        <div class="ml-2 mt-2">
                                            <input type="text" name="" id=""
                                                class="w-40 rounded-md border text-xs border-gray-500 bg-white py-3 pl-2 text-[#6B7280] h-6 outline-none focus:border-[#6A64F1] focus:shadow-md"
                                                style="border-color: #C8A1E0;" />
                                        </div>
                                        <div class="ml-2 mt-2">
                                            <input type="text" name="" id=""
                                                class="w-40 rounded-md border text-xs border-gray-500 bg-white py-3 pl-2 text-[#6B7280] h-6 outline-none focus:border-[#6A64F1] focus:shadow-md"
                                                style="border-color: #C8A1E0;" />
                                        </div>
                                        <div class="ml-2 mt-2">
                                            <input type="text" name="" id=""
                                                class="w-40 rounded-md border text-xs border-gray-500 bg-white py-3 pl-2 text-[#6B7280] h-6 outline-none focus:border-[#6A64F1] focus:shadow-md"
                                                style="border-color: #C8A1E0;" />
                                        </div>
                                        <div class="ml-2 mt-2">
                                            <input type="text" name="" id=""
                                                class="w-40 rounded-md border text-xs border-gray-500 bg-white py-3 pl-2 text-[#6B7280] h-6 outline-none focus:border-[#6A64F1] focus:shadow-md"
                                                style="border-color: #C8A1E0;" />
                                        </div>
                                        <div class="ml-2 mt-2">
                                            <input type="text" name="" id=""
                                                class="w-40 rounded-md border text-xs border-gray-500 bg-white py-3 pl-2 text-[#6B7280] h-6 outline-none focus:border-[#6A64F1] focus:shadow-md"
                                                style="border-color: #C8A1E0;" />
                                        </div>
                                        <div class="ml-2 mt-2">
                                            <input type="number" name="" id=""
                                                class="w-40 rounded-md border text-xs border-gray-500 bg-white pl-2 text-[#6B7280] h-6 outline-none focus:border-[#6A64F1] focus:shadow-md"
                                                style="border-color: #C8A1E0;" />
                                        </div>
                                    </div>
                                    <div
                                        class="flex flex-wrap items-center border-gray-500 justify-between border-t mt-2">
                                        <div class="ml-2 mt-2">
                                            <input type="text" name="" id=""
                                                class="w-40 rounded-md border text-xs border-gray-500 bg-white py-3 pl-2 text-[#6B7280] h-6 outline-none focus:border-[#6A64F1] focus:shadow-md"
                                                style="border-color: #C8A1E0;" />
                                        </div>
                                        <div class="ml-2 mt-2">
                                            <input type="text" name="" id=""
                                                class="w-40 rounded-md border text-xs border-gray-500 bg-white py-3 pl-2 text-[#6B7280] h-6 outline-none focus:border-[#6A64F1] focus:shadow-md"
                                                style="border-color: #C8A1E0;" />
                                        </div>
                                        <div class="ml-2 mt-2">
                                            <input type="text" name="" id=""
                                                class="w-40 rounded-md border text-xs border-gray-500 bg-white py-3 pl-2 text-[#6B7280] h-6 outline-none focus:border-[#6A64F1] focus:shadow-md"
                                                style="border-color: #C8A1E0;" />
                                        </div>
                                        <div class="ml-2 mt-2">
                                            <input type="text" name="" id=""
                                                class="w-40 rounded-md border text-xs border-gray-500 bg-white py-3 pl-2 text-[#6B7280] h-6 outline-none focus:border-[#6A64F1] focus:shadow-md"
                                                style="border-color: #C8A1E0;" />
                                        </div>
                                        <div class="ml-2 mt-2">
                                            <input type="text" name="" id=""
                                                class="w-40 rounded-md border text-xs border-gray-500 bg-white py-3 pl-2 text-[#6B7280] h-6 outline-none focus:border-[#6A64F1] focus:shadow-md"
                                                style="border-color: #C8A1E0;" />
                                        </div>
                                        <div class="ml-2 mt-2">
                                            <input type="number" name="" id=""
                                                class="w-40 rounded-md border text-xs border-gray-500 bg-white pl-2 text-[#6B7280] h-6 outline-none focus:border-[#6A64F1] focus:shadow-md"
                                                style="border-color: #C8A1E0;" />
                                        </div>
                                    </div>
                                    <div
                                        class="flex flex-wrap items-center border-gray-500 justify-between border-t mt-2">
                                        <div class="ml-2 mt-2">
                                            <input type="text" name="" id=""
                                                class="w-40 rounded-md border text-xs border-gray-500 bg-white py-3 pl-2 text-[#6B7280] h-6 outline-none focus:border-[#6A64F1] focus:shadow-md"
                                                style="border-color: #C8A1E0;" />
                                        </div>
                                        <div class="ml-2 mt-2">
                                            <input type="text" name="" id=""
                                                class="w-40 rounded-md border text-xs border-gray-500 bg-white py-3 pl-2 text-[#6B7280] h-6 outline-none focus:border-[#6A64F1] focus:shadow-md"
                                                style="border-color: #C8A1E0;" />
                                        </div>
                                        <div class="ml-2 mt-2">
                                            <input type="text" name="" id=""
                                                class="w-40 rounded-md border text-xs border-gray-500 bg-white py-3 pl-2 text-[#6B7280] h-6 outline-none focus:border-[#6A64F1] focus:shadow-md"
                                                style="border-color: #C8A1E0;" />
                                        </div>
                                        <div class="ml-2 mt-2">
                                            <input type="text" name="" id=""
                                                class="w-40 rounded-md border text-xs border-gray-500 bg-white py-3 pl-2 text-[#6B7280] h-6 outline-none focus:border-[#6A64F1] focus:shadow-md"
                                                style="border-color: #C8A1E0;" />
                                        </div>
                                        <div class="ml-2 mt-2">
                                            <input type="text" name="" id=""
                                                class="w-40 rounded-md border text-xs border-gray-500 bg-white py-3 pl-2 text-[#6B7280] h-6 outline-none focus:border-[#6A64F1] focus:shadow-md"
                                                style="border-color: #C8A1E0;" />
                                        </div>
                                        <div class="ml-2 mt-2">
                                            <input type="number" name="" id=""
                                                class="w-40 rounded-md border text-xs border-gray-500 bg-white pl-2 text-[#6B7280] h-6 outline-none focus:border-[#6A64F1] focus:shadow-md"
                                                style="border-color: #C8A1E0;" />
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                        <!-- Modal footer -->
                        <div
                            class="flex items-center p-4 md:p-5 space-x-3 rtl:space-x-reverse border-t border-gray-200 rounded-b dark:border-gray-600">
                            <button data-modal-hide="extralarge-modal" type="button"
                                class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Save
                                Changes</button>
                            <button data-modal-hide="extralarge-modal" type="button"
                                class="py-2.5 px-5 ms-3 text-sm font-medium text-gray-900 focus:outline-none bg-white rounded-lg border border-gray-200 hover:bg-gray-100 hover:text-blue-700 focus:z-10 focus:ring-4 focus:ring-gray-100 dark:focus:ring-gray-700 dark:bg-gray-800 dark:text-gray-400 dark:border-gray-600 dark:hover:text-white dark:hover:bg-gray-700">Decline</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="max-w-7xl m-auto flex px-10 gap-x-7 mt-5">
            <fieldset class="w-1/6 p-5 border-2 rounded-md border-gray-900" style="border-color: #674188;">
                <legend class="font-bold">Install Information</legend>
                <div class="">
                    <div>
                        <label for=""
                            class=" w-40 block mb-1 font-bold text-xs font-medium text-gray-900 dark:text-white">Installation
                            is required :
                        </label>
                        <input type="text" name="installation_is_required"
                            class="w-40 rounded-md border mb-3 text-xs border-gray-500 bg-white py-3 pl-2 text-[#6B7280] h-6 outline-none focus:border-[#6A64F1] focus:shadow-md"
                            style="border-color: #C8A1E0;" />
                    </div>
                    <div class="">
                        <label
                            class="w-40 block mb-1 font-bold text-xs font-medium text-gray-900 dark:text-white">Installation
                            Need By date : </label>
                        <input type="date" name="installation_need_by_date"
                            class="w-40 rounded-md border mb-3 text-xs border-gray-500 bg-white py-3 pl-2 text-[#6B7280] h-6 outline-none focus:border-[#6A64F1] focus:shadow-md"
                            style="border-color: #C8A1E0;" />
                    </div>
                    <div class="">
                        <label
                            class="w-40 block mb-1 font-bold text-xs font-medium text-gray-900 dark:text-white">Tentative
                            Installation
                            : </label>
                        <input type="text" name="tntative_installation"
                            class="w-40 rounded-md border  mb-3 text-xs border-gray-500 bg-white py-3 pl-2 text-[#6B7280] h-6 outline-none focus:border-[#6A64F1] focus:shadow-md"
                            style="border-color: #C8A1E0;" />
                    </div>
                </div>
            </fieldset>
            <div class="w-5/6">
                <fieldset class="w-full p-5 border-2 rounded-md border-gray-900" style="border-color: #674188;">
                    <legend class="font-bold">Followup Information</legend>
                    <div class="flex justify-between items-center flex-wrap">
                        <div class="">
                            <div class="flex gap-x-10 flex-wrap">
                                <!-- <div>
                                    <label for=""
                                        class=" w-40 inline-block mb-1 font-bold text-xs font-medium text-gray-900 dark:text-white">Followup
                                        :
                                    </label>
                                    <input type="text" name="followup"
                                        class="w-40 rounded-md border mb-3 text-xs border-gray-500 bg-white py-3 pl-2 text-[#6B7280] h-6 outline-none focus:border-[#6A64F1] focus:shadow-md"
                                        style="border-color: #C8A1E0;" />
                                </div> -->


                                <div>
                                    <label for=""
                                        class=" w-40 inline-block mb-1 font-bold text-xs font-medium text-gray-900 dark:text-white">Perform
                                        Invoice :
                                    </label>
                                    <input type="text" name="perform_invoice"
                                        class="w-40 rounded-md border mb-4 text-xs border-gray-500 bg-white py-3 pl-2 text-[#6B7280] h-6 outline-none focus:border-[#6A64F1] focus:shadow-md"
                                        style="border-color: #C8A1E0;" />
                                </div>

                                <div class="flex gap-x-10 flex-wrap">
                                    <div class="">
                                        <label
                                            class="w-40 inline-block mb-1 font-bold text-xs font-medium text-gray-900 dark:text-white">Quotation
                                            shared date :
                                        </label>
                                        <input type="date" name="quotation_shared_date"
                                            class="w-40 rounded-md border  mb-3 text-xs border-gray-500 bg-white py-3 pl-2 text-[#6B7280] h-6 outline-none focus:border-[#6A64F1] focus:shadow-md"
                                            style="border-color: #C8A1E0;" />
                                    </div>
                                </div>

                                <div class="">
                                    <label
                                        class="w-40 inline-block mb-1 font-bold text-xs font-medium text-gray-900 dark:text-white">Remarks
                                        :
                                    </label>
                                    <input type="text" name="remarks"
                                        class="w-40 rounded-md border mb-5 text-xs border-gray-500 bg-white py-3 pl-2 text-[#6B7280] h-6 outline-none focus:border-[#6A64F1] focus:shadow-md"
                                        style="border-color: #C8A1E0;" />
                                </div>
                            </div>

                            <div class="flex gap-x-10 flex-wrap">
                                <!-- <div class="">
                                    <label
                                        class="w-40 inline-block mb-1 font-bold text-xs font-medium text-gray-900 dark:text-white">Sample
                                        approval date :
                                    </label>
                                    <input type="date" name="sample_approval_date"
                                        class="w-40 rounded-md border mb-3 text-xs border-gray-500 bg-white py-3 pl-2 text-[#6B7280] h-6 outline-none focus:border-[#6A64F1] focus:shadow-md"
                                        style="border-color: #C8A1E0;" />
                                </div> -->

                            </div>

                            <div>
                                <input type="radio" name="name" id="" class=""><label class="pl-2 text-sm">Standard</label>
                                <input type="radio" name="name" id="" class="ml-5 "><label class="pl-2 text-sm">Customize</label>
                                <input type="radio" name="name" id="" class="ml-5 "><label class="pl-2 text-sm">Semi Customize</label>
                            </div>
                        </div>
                    </div>
                </fieldset>
                <!-- <fieldset class=" p-5 border-2 rounded-md border-gray-900" style="border-color: #674188;">
                    <legend class="font-bold">Query Information</legend>
                    <div class="flex justify-between items-center flex-wrap">
                        <div class="">
                            <div class="flex gap-x-10 flex-wrap">
                                <div>
                                    <label for=""
                                        class=" w-40 inline-block mb-1 font-bold text-xs font-medium text-gray-900 dark:text-white">Query
                                        Received
                                        :
                                    </label>
                                    <input type="text" name="query_received"
                                        class="w-40 rounded-md border mb-3 text-xs border-gray-500 bg-white py-3 pl-2 text-[#6B7280] h-6 outline-none focus:border-[#6A64F1] focus:shadow-md"
                                        style="border-color: #C8A1E0;" />
                                </div>
                                <div class="">
                                    <label
                                        class="w-40 inline-block mb-1 font-bold text-xs font-medium text-gray-900 dark:text-white">Query
                                        Start date : </label>
                                    <input type="date" name="query_start_date"
                                        class="w-40 rounded-md border mb-3 text-xs border-gray-500 bg-white py-3 pl-2 text-[#6B7280] h-6 outline-none focus:border-[#6A64F1] focus:shadow-md"
                                        style="border-color: #C8A1E0;" />
                                </div>
                            </div>
                            <div class="flex gap-x-10 flex-wrap">

                                <div class="">
                                    <label
                                        class="w-40 inline-block mb-1 font-bold text-xs font-medium text-gray-900 dark:text-white">Query
                                        updated date : </label>
                                    <input type="date" name="query_updated_date"
                                        class="w-40 rounded-md border  mb-3 text-xs border-gray-500 bg-white py-3 pl-2 text-[#6B7280] h-6 outline-none focus:border-[#6A64F1] focus:shadow-md"
                                        style="border-color: #C8A1E0;" />
                                </div>
                                <div class="">
                                    <label
                                        class="w-40 inline-block mb-1 font-bold text-xs font-medium text-gray-900 dark:text-white">Query
                                        created by :
                                    </label>
                                    <input type="text" name="query_created_by"
                                        class="w-40 rounded-md border  mb-3 text-xs border-gray-500 bg-white py-3 pl-2 text-[#6B7280] h-6 outline-none focus:border-[#6A64F1] focus:shadow-md"
                                        style="border-color: #C8A1E0;" />
                                </div>
                            </div>

                            <div class="flex gap-x-10 flex-wrap">

                                <div class="">
                                    <label
                                        class="w-40 inline-block mb-1 font-bold text-xs font-medium text-gray-900 dark:text-white">Query
                                        updated by :
                                    </label>
                                    <input type="text" name="query_updated_by"
                                        class="w-40 rounded-md border mb-3 text-xs border-gray-500 bg-white py-3 pl-2 text-[#6B7280] h-6 outline-none focus:border-[#6A64F1] focus:shadow-md"
                                        style="border-color: #C8A1E0;" />
                                </div>
                                <div class="">
                                    <label
                                        class="w-40 inline-block mb-1 font-bold text-xs font-medium text-gray-900 dark:text-white">Query
                                        end date :
                                    </label>
                                    <input type="date" name="query_end_date"
                                        class="w-40 rounded-md border mb-3 text-xs border-gray-500 bg-white py-3 pl-2 text-[#6B7280] h-6 outline-none focus:border-[#6A64F1] focus:shadow-md"
                                        style="border-color: #C8A1E0;" />
                                </div>
                                <div class="">
                                    <label
                                        class="w-40 inline-block mb-1 font-bold text-xs font-medium text-gray-900 dark:text-white">
                                        Re-query :
                                    </label>
                                    <input type="text" name="re_query"
                                        class="w-40 rounded-md border mb-3 text-xs border-gray-500 bg-white py-3 pl-2 text-[#6B7280] h-6 outline-none focus:border-[#6A64F1] focus:shadow-md"
                                        style="border-color: #C8A1E0;" />
                                </div>
                                <div class="">
                                    <label
                                        class="w-40 inline-block mb-1 font-bold text-xs font-medium text-gray-900 dark:text-white">Re-query
                                        closure date :
                                    </label>
                                    <input type="date" name="re_query_closure_date"
                                        class="w-40 rounded-md border mb-3 text-xs border-gray-500 bg-white py-3 pl-2 text-[#6B7280] h-6 outline-none focus:border-[#6A64F1] focus:shadow-md"
                                        style="border-color: #C8A1E0;" />
                                </div>
                            </div>
                        </div>
                    </div>
                </fieldset> -->
            </div>
        </div>
        <div class="max-w-7xl m-auto flex px-10 gap-x-7 mt-5">
            <fieldset class="w-1/6 p-5 border-2 rounded-md border-gray-900" style="border-color: #674188; display: none">
                <legend class="font-bold">Project Information</legend>
                <div class="">
                    <div>
                        <label for=""
                            class=" w-40 block mb-1 font-bold text-xs font-medium text-gray-900 dark:text-white">Project
                            status :
                        </label>
                        <input type="text" name="project_status"
                            class="w-40 rounded-md border mb-3 text-xs border-gray-500 bg-white py-3 pl-2 text-[#6B7280] h-6 outline-none focus:border-[#6A64F1] focus:shadow-md"
                            style="border-color: #C8A1E0;" />
                    </div>

                </div>
            </fieldset>
            <div class="w-5/6">
                <fieldset class=" p-5 border-2 rounded-md border-gray-900" style="border-color: #674188; display: none;">
                    <legend class="font-bold">Project Status</legend>
                    <div class="flex justify-between items-center flex-wrap">
                        <div class="">
                            <div class="flex gap-x-10 flex-wrap">
                                <div class="">
                                    <label
                                        class="w-40 inline-block mb-1 font-bold text-xs font-medium text-gray-900 dark:text-white">Drawing
                                        approved date : </label>
                                    <input type="date" name="shop_drawing_approved"
                                        class="w-40 rounded-md border  mb-3 text-xs border-gray-500 bg-white py-3 pl-2 text-[#6B7280] h-6 outline-none focus:border-[#6A64F1] focus:shadow-md"
                                        style="border-color: #C8A1E0;" />
                                </div>

                                <div class="">
                                    <label
                                        class="w-40 inline-block mb-1 font-bold text-xs font-medium text-gray-900 dark:text-white">Sample
                                        approved date :
                                    </label>
                                    <input type="date" name="sample_approval_start_date"
                                        class="w-40 rounded-md border mb-3 text-xs border-gray-500 bg-white py-3 pl-2 text-[#6B7280] h-6 outline-none focus:border-[#6A64F1] focus:shadow-md"
                                        style="border-color: #C8A1E0;" />
                                </div>

                                <div class="">
                                    <label
                                        class="w-40 inline-block mb-1 font-bold text-xs font-medium text-gray-900 dark:text-white">
                                        Assemble start date : </label>
                                    <input type="date" name="assemble_start_date"
                                        class="w-40 rounded-md border mb-3 text-xs border-gray-500 bg-white py-3 pl-2 text-[#6B7280] h-6 outline-none focus:border-[#6A64F1] focus:shadow-md"
                                        style="border-color: #C8A1E0;" />
                                </div>

                                <div class="">
                                    <label
                                        class="w-40 inline-block mb-1 font-bold text-xs font-medium text-gray-900 dark:text-white">Assemble
                                        completion date : </label>
                                    <input type="date" name="assemble_completion_date"
                                        class="w-40 rounded-md border  mb-4 text-xs border-gray-500 bg-white py-3 pl-2 text-[#6B7280] h-6 outline-none focus:border-[#6A64F1] focus:shadow-md"
                                        style="border-color: #C8A1E0;" />
                                </div>

                                <div class="">
                                    <label
                                        class="w-40 inline-block mb-1 font-bold text-xs font-medium text-gray-900 dark:text-white">Dismantle
                                        start date :
                                    </label>
                                    <input type="date" name="dismantle_start_date"
                                        class="w-40 rounded-md border  mb-3 text-xs border-gray-500 bg-white py-3 pl-2 text-[#6B7280] h-6 outline-none focus:border-[#6A64F1] focus:shadow-md"
                                        style="border-color: #C8A1E0;" />
                                </div>

                                <div class="">
                                    <label
                                        class="w-40 inline-block mb-1 font-bold text-xs font-medium text-gray-900 dark:text-white">Dismantle
                                        completion date :
                                    </label>
                                    <input type="date" name="dismantle_completion_date"
                                        class="w-40 rounded-md border mb-4 text-xs border-gray-500 bg-white py-3 pl-2 text-[#6B7280] h-6 outline-none focus:border-[#6A64F1] focus:shadow-md"
                                        style="border-color: #C8A1E0;" />
                                </div>

                                <div class="">
                                    <label
                                        class="w-40 inline-block mb-1 font-bold text-xs font-medium text-gray-900 dark:text-white">
                                        Packed start date :
                                    </label>
                                    <input type="date" name="pakced_start_date"
                                        class="w-40 rounded-md border mb-3 text-xs border-gray-500 bg-white py-3 pl-2 text-[#6B7280] h-6 outline-none focus:border-[#6A64F1] focus:shadow-md"
                                        style="border-color: #C8A1E0;" />
                                </div>

                                <!-- <div class="">
                                    <label
                                        class="w-40 inline-block mb-1 font-bold text-xs font-medium text-gray-900 dark:text-white">Re-query
                                        completion date :
                                    </label>
                                    <input type="date" name="re_query_completion_date"
                                        class="w-40 rounded-md border mb-3 text-xs border-gray-500 bg-white py-3 pl-2 text-[#6B7280] h-6 outline-none focus:border-[#6A64F1] focus:shadow-md"
                                        style="border-color: #C8A1E0;" />
                                </div> -->


                                <div class="">
                                    <label
                                        class="w-40 inline-block mb-1 font-bold text-xs font-medium text-gray-900 dark:text-white">Packed
                                        completion date : </label>
                                    <input type="date" name="pakced_completion_date"
                                        class="w-40 rounded-md border  mb-3 text-xs border-gray-500 bg-white py-3 pl-2 text-[#6B7280] h-6 outline-none focus:border-[#6A64F1] focus:shadow-md"
                                        style="border-color: #C8A1E0;" />
                                </div>
                            </div>
                            <div class="">
                                <label
                                    class="w-40 inline-block mb-1 font-bold text-xs font-medium text-gray-900 dark:text-white">Installation
                                    date :
                                </label>
                                <input type="date" name="installation_date"
                                    class="w-40 rounded-md border  mb-3 text-xs border-gray-500 bg-white py-3 pl-2 text-[#6B7280] h-6 outline-none focus:border-[#6A64F1] focus:shadow-md"
                                    style="border-color: #C8A1E0;" />
                            </div>
                            <div class="">

                                <button data-modal-target="extralarge-modal2" data-modal-toggle="extralarge-modal2"
                                    class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Detail
                                    Project
                                    Status</button>
                            </div>
                        </div>
                    </div>
                </fieldset>
            </div>
        </div>

        <div id="extralarge-modal2" tabindex="-1"
            class="fixed top-0 left-0 right-0 z-50 hidden w-full p-4 overflow-x-hidden overflow-y-auto md:inset-0 h-[calc(100%-1rem)] max-h-full">
            <div class="relative w-full max-w-7xl max-h-full">
                <!-- Modal content -->
                <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
                    <!-- Modal header -->
                    <div class="flex items-center justify-between p-4 md:p-5 border-b rounded-t dark:border-gray-600">
                        <h3 class="text-xl font-medium text-gray-900 dark:text-white">
                            Detail Project Status
                        </h3>
                        <button type="button"
                            class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white"
                            data-modal-hide="extralarge-modal2">
                            <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                                viewBox="0 0 14 14">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                    stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
                            </svg>
                            <span class="sr-only">Close modal</span>
                        </button>
                    </div>
                    <!-- Modal body -->
                    <div id="create_section" class="p-5 rounded-lg mx-5">
                        <h1 class="text-center underline text-3xl mb-3 font-bold">Create Assembling Line Tracking Form
                        </h1>
                        <form class=" border border-gray-500 p-5 rounded-md bg-gray-300">
                            <div class="border-b border-gray-900 ">
                                <label class="block mb-2 font-bold text-xs font-medium text-gray-900 dark:text-white">SO
                                    Number
                                    :
                                </label>
                                <input type="text" name="so_no"
                                    class="w-40 rounded-md border mb-3 text-xs border-gray-500 bg-white py-3 pl-2 text-[#6B7280] h-6 outline-none focus:border-[#6A64F1] focus:shadow-md" />
                            </div>
                            <div class="border-b border-gray-200 dark:border-gray-700 mt-4">
                                <ul class="flex flex-wrap justify-between -mb-px text-sm font-medium text-center "
                                    id="default-styled-tab" data-tabs-toggle="#default-styled-tab-content"
                                    data-tabs-active-classes="text-gray-600 text-gray-600 dark:text-gray-500 bg-gray-50 dark:text-gray-500 border-gray-600 dark:border-gray-500"
                                    data-tabs-inactive-classes="dark:border-transparent text-gray-500 text-gray-600 bg-gray-200 dark:text-gray-400 border-gray-100 border-gray-300 dark:border-gray-700 dark:text-gray-300"
                                    role="tablist">
                                    <li class="me-2" role="presentation">
                                        <button
                                            class="inline-block py-3 px-4 border-t border-r focus:outline-none border-l dark:hover:bg-gray-50 border-gray-500 rounded-t-lg"
                                            id="profile-styled-tab" data-tabs-target="#styled-profile" type="button"
                                            role="tab" aria-controls="profile" aria-selected="false">Drawing
                                            Item</button>
                                    </li>
                                    <li class="me-2" role="presentation">
                                        <button
                                            class="inline-block py-3 px-4 border-t border-r focus:outline-none border-l border-gray-500 rounded-t-lg"
                                            id="dashboard-styled-tab" data-tabs-target="#styled-sample" type="button"
                                            role="tab" aria-controls="dashboard" aria-selected="false">Sample
                                            Item</button>
                                    </li>
                                    <li class="me-2" role="presentation">
                                        <button
                                            class="inline-block py-3 px-4 border-t border-r focus:outline-none border-l border-gray-500 rounded-t-lg"
                                            id="dashboard-styled-tab" data-tabs-target="#styled-dashboard" type="button"
                                            role="tab" aria-controls="dashboard" aria-selected="false">Issue
                                            Item</button>
                                    </li>
                                    <li class="me-2" role="presentation">
                                        <button
                                            class="inline-block py-3 px-4 border-t border-r focus:outline-none border-l border-gray-500 rounded-t-lg"
                                            id="settings-styled-tab" data-tabs-target="#styled-settings" type="button"
                                            role="tab" aria-controls="settings" aria-selected="false">Assemble
                                            Item</button>
                                    </li>
                                    <li class="me-2" role="presentation">
                                        <button
                                            class="inline-block py-3 px-4 border-t border-r focus:outline-none border-l border-gray-500 rounded-t-lg"
                                            id="contacts-styled-tab" data-tabs-target="#styled-contacts" type="button"
                                            role="tab" aria-controls="contacts" aria-selected="false">Quality
                                            Check</button>
                                    </li>
                                    <li class="me-2" role="presentation">
                                        <button
                                            class="inline-block py-3 px-4 border-t border-r focus:outline-none border-l border-gray-500 rounded-t-lg"
                                            id="contacts-styled-tab" data-tabs-target="#styled-about" type="button"
                                            role="tab" aria-controls="contacts" aria-selected="false">Dismantle
                                            Item</button>
                                    </li>
                                    <li class="me-2" role="presentation">
                                        <button
                                            class="inline-block py-3 px-4 border-t border-r focus:outline-none border-l border-gray-500 rounded-t-lg"
                                            id="contacts-styled-tab" data-tabs-target="#styled-packaging" type="button"
                                            role="tab" aria-controls="contacts" aria-selected="false">Packaging</button>
                                    </li>
                                    <li class="me-2" role="presentation">
                                        <button
                                            class="inline-block py-3 px-4 border-t border-r focus:outline-none border-l border-gray-500 rounded-t-lg"
                                            id="contacts-styled-tab" data-tabs-target="#styled-gate" type="button"
                                            role="tab" aria-controls="contacts" aria-selected="false">Gate Exit</button>
                                    </li>
                                    <li role="presentation">
                                        <button
                                            class="inline-block py-3 px-4 border-t border-r focus:outline-none border-l border-gray-500 rounded-t-lg"
                                            id="contacts-styled-tab" data-tabs-target="#styled-installation"
                                            type="button" role="tab" aria-controls="contacts"
                                            aria-selected="false">Installation</button>
                                    </li>
                                </ul>
                            </div>
                            <div id="default-styled-tab-content">
                                <div class="hidden p-4 bg-gray-50 dark:bg-gray-200 border-x border-b border-gray-600 rounded-b-lg"
                                    id="styled-profile" role="tabpanel" aria-labelledby="profile-tab">

                                    <div>
                                        <table
                                            class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
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

                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                                <div class="hidden p-4 rounded-x-lg bg-gray-50 dark:bg-gray-200 border-x border-b border-gray-600 rounded-b-lg"
                                    id="styled-sample" role="tabpanel" aria-labelledby="dashboard-tab">
                                    <div>
                                        <table
                                            class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
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

                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>

                                </div>
                                <div class="hidden p-4 rounded-b-lg bg-gray-50 dark:bg-gray-200 border-x border-b border-gray-600"
                                    id="styled-dashboard" role="tabpanel" aria-labelledby="dashboard-tab">

                                    <div>
                                        <table
                                            class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
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
                                                        Issue Date
                                                    </th>
                                                    <th scope="col" class="px-6 py-3">
                                                        Remarks if any
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

                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>

                                </div>
                            </div>
                            <div class="hidden p-4 rounded-b-lg bg-gray-50 dark:bg-gray-200 border-x border-b border-gray-600"
                                id="styled-settings" role="tabpanel" aria-labelledby="settings-tab">
                                <div>
                                    <table
                                        class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
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
                                                    Item Assemble Date
                                                </th>
                                                <th scope="col" class="px-6 py-3">
                                                    Remarks if any
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

                                            </tr>
                                        </tbody>
                                    </table>
                                </div>

                            </div>
                            <div class="hidden p-4 rounded-b-lg bg-gray-50 dark:bg-gray-200 border-x border-b border-gray-600"
                                id="styled-contacts" role="tabpanel" aria-labelledby="contacts-tab">
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
                                    <table
                                        class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
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
                                                    Quality Check Date
                                                </th>
                                                <th scope="col" class="px-6 py-3">
                                                    Remarks if any
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

                                            </tr>
                                        </tbody>
                                    </table>
                                </div>

                            </div>
                            <div class="hidden p-4 rounded-b-lg bg-gray-50 dark:bg-gray-200 border-x border-b border-gray-600"
                                id="styled-about" role="tabpanel" aria-labelledby="contacts-tab">
                                <div>
                                    <table
                                        class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
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
                                                    Item Dismantle Date
                                                </th>
                                                <th scope="col" class="px-6 py-3">
                                                    Remarks if any
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

                                            </tr>
                                        </tbody>
                                    </table>
                                </div>

                            </div>
                            <div class="hidden p-4 rounded-b-lg bg-gray-50 dark:bg-gray-200 border-x border-b border-gray-600"
                                id="styled-packaging" role="tabpanel" aria-labelledby="contacts-tab">
                                <div>
                                    <table
                                        class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
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
                                                    Packaging Date
                                                </th>
                                                <th scope="col" class="px-6 py-3">
                                                    Remarks if any
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

                                            </tr>
                                        </tbody>
                                    </table>
                                </div>

                            </div>
                            <div class="hidden p-4 rounded-b-lg bg-gray-50 dark:bg-gray-200 border-x border-b border-gray-600"
                                id="styled-gate" role="tabpanel" aria-labelledby="contacts-tab">
                                <div>
                                    <table
                                        class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
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
                                                    Gate Exit Date
                                                </th>
                                                <th scope="col" class="px-6 py-3">
                                                    Remarks if any
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

                                            </tr>
                                        </tbody>
                                    </table>
                                </div>

                            </div>
                            <div class="hidden p-4 rounded-b-lg bg-gray-50 dark:bg-gray-200 border-x border-b border-gray-600"
                                id="styled-installation" role="tabpanel" aria-labelledby="contacts-tab">
                                <div>
                                    <table
                                        class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
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
                                                    Installation Date
                                                </th>
                                                <th scope="col" class="px-6 py-3">
                                                    Remarks if any
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

                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                    </div>

                    <!-- Modal footer -->
                    <!-- <div class="flex items-center p-4 md:p-5 space-x-3 rtl:space-x-reverse border-t border-gray-200 rounded-b dark:border-gray-600">
                        <button data-modal-hide="extralarge-modal" type="button" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Save Changes</button>
                        <button data-modal-hide="extralarge-modal" type="button" class="py-2.5 px-5 ms-3 text-sm font-medium text-gray-900 focus:outline-none bg-white rounded-lg border border-gray-200 hover:bg-gray-100 hover:text-blue-700 focus:z-10 focus:ring-4 focus:ring-gray-100 dark:focus:ring-gray-700 dark:bg-gray-800 dark:text-gray-400 dark:border-gray-600 dark:hover:text-white dark:hover:bg-gray-700">Decline</button>
                    </div> -->
                </div>
            </div>
        </div>
        <div
            class="flex items-center justify-center p-4 md:p-5 space-x-3 rtl:space-x-reverse border-t border-gray-200 rounded-b dark:border-gray-600">
            <button data-modal-hide="extralarge-modal" id="saleOrderSavebtn" type="button"
                class="py-2.5 px-5 ms-3 text-sm font-medium text-gray-900 focus:outline-none bg-white rounded-lg border border-gray-200 hover:bg-gray-100 hover:text-blue-700 focus:z-10 focus:ring-4 focus:ring-gray-100 dark:focus:ring-gray-700 dark:bg-gray-800 dark:text-gray-400 dark:border-gray-600 dark:hover:text-white dark:hover:bg-gray-700">Save</button>
            <button data-modal-hide="extralarge-modal" type="submit"
                class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Submit
                Now</button>
        </div>
    </form>

</body>
    <script>
        let x = ` <div
                            class="flex flex-wrap items-center border gap-x-5 border-gray-900 w-full p-2 rounded-lg mt-2">
                            <div>
                                <label class="block text-sm">S. No : </label>
                                <input type="text" name="item_serial_no"
                                    class="w-10 rounded-md border text-xs border-gray-500 bg-white py-2 pl-2 text-[#6B7280] h-6 outline-none focus:border-[#6A64F1] focus:shadow-md"
                                    style="border-color: #C8A1E0;" /><br>
                            </div>
                            <div>
                                <label class="block text-sm">Item Name : </label>
                                <input type="text" name="item_name"
                                    class="md:w-36 w-36 rounded-md border text-xs border-gray-500 bg-white py-2 pl-2 text-[#6B7280] h-6 outline-none focus:border-[#6A64F1] focus:shadow-md"
                                    style="border-color: #C8A1E0;" /><br>
                            </div>
                            <div>
                                <label class="block text-sm">Item Qty : </label>
                                <input type="number" name="item_qty"
                                    class="w-20 rounded-md border text-xs border-gray-500 bg-white py-2 text-[#6B7280] h-6 outline-none focus:border-[#6A64F1] focus:shadow-md"
                                    style="border-color: #C8A1E0;" /><br>
                            </div>
                            <div>
                                <label class="block text-sm">Rate : </label>
                                <input type="number" name="item_rate"
                                    class="w-24 rounded-md border text-xs border-gray-500 bg-white py-2 text-[#6B7280] h-6 outline-none focus:border-[#6A64F1] focus:shadow-md"
                                    style="border-color: #C8A1E0;" /><br>
                            </div>
                            <div>
                                <label class="block text-sm">Total : </label>
                                <input type="number" name="item_total"
                                    class="w-28 rounded-md border text-xs border-gray-500 bg-white py-2 text-[#6B7280] h-6 outline-none focus:border-[#6A64F1] focus:shadow-md"
                                    style="border-color: #C8A1E0;" /><br>
                            </div>
                            <div>

                                <button data-modal-target="crud-modal" data-modal-toggle="crud-modal"
                                    class="text-gray-900 mt-5  focus:outline-none border border-gray-900 px-1  font-medium rounded-lg text-xs py-1 text-center"
                                    type="button">if Ship another address </button>
                            </div>
                            <div class="w-28 h-24 border border-gray-900 rounded-md">
                                <img class="w-28 h-24 rounded-md" src="./images.png" alt="image preview">
                            </div>
                        </div>`

        function finish_field() {
            let y = document.getElementById("finish_field")

            y.innerHTML += x;
        }

        document.getElementById('remove_btn').addEventListener('click', function() {
            var finish_field = document.getElementById('finish_field');

            // Remove the last child of the container
            if (finish_field.lastElementChild) {
                finish_field.removeChild(finish_field.lastElementChild);
            }
        });


        function raw_field() {
            let y = document.getElementById("raw_field")

            y.innerHTML += x;
        }

        document.getElementById('raw_remove').addEventListener('click', function() {
            var raw_field = document.getElementById('raw_field');

            // Remove the last child of the container
            if (raw_field.lastElementChild) {
                raw_field.removeChild(raw_field.lastElementChild);
            }
        });


        function radio_btn() {
            let x = document.getElementById('add_btn')
            let y = document.getElementById('raw_section')

            y.style.display = "flex";
            x.style.display = "block";

        }
    </script>

    <script src="./js/jquery-3.7.1.min.js"></script>
    <script src="./js/sale_order.js"></script>

</html>