<?php include('./navForLogged.php') ?>

<?php 

session_start();


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/flowbite@2.5.1/dist/flowbite.min.css" rel="stylesheet" />
    <script src="https://cdn.jsdelivr.net/npm/flowbite@2.5.1/dist/flowbite.min.js"></script>
    <script src="https://cdn.tailwindcss.com"></script>
    <title>Query Information</title>
</head>

<body>

    <?php






    // session_start();

    if (!isset($_SESSION["username"])) {




        header("location:login.php");




    }




    ?>




    <div class="mx-10 mt-4">
        <h1 class="text-3xl font-bold  underline text-center">Create Lead Details Form</h1>
        <form action="./phpAjax/leadHeaderAjax.php" method="post">
            <fieldset class="flex gap-x-10 border-2 border-gray-300 px-5 rounded-lg">
                <legend class="font-bold">Person Information</legend>
                <fieldset class="md:w-3/6 border-2 border-gray-300 p-5 rounded-lg mb-5">
                    <legend class="font-bold"> Information</legend>
                    <div class="flex flex-wrap gap-x-10 justify-center">

                        <div>
                            <label for="record_no" class="block mb-2 text-sm font-bold text-gray-900">Record Number
                                :
                            </label>
                            <input type="text" name="record_no"
                                class="border mb-4 border-gray-900 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-52 p-1.5"
                                placeholder="Auto Generated" disabled />
                        </div>
                        <div>
                            <label for="created_by" class="block mb-2 text-sm font-bold text-gray-900">Created By
                                :
                            </label>
                            <input type="text" name="created_by"
                                class="border mb-4 border-gray-900 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-52 p-1.5"
                                placeholder="Get Data" disabled />
                        </div>
                        <div>
                            <label for="created_date" class="block mb-2 text-sm font-bold text-gray-900">Created
                                Date :
                            </label>
                            <input type="datetime" name="created_date"
                                class="border mb-4 border-gray-900 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-52 p-1.5"
                                placeholder="" disabled />
                        </div>
                        <div>
                            <label for="status" class="block mb-2 text-sm font-bold text-gray-900">Status :
                            </label>
                            <input type="text" name="form_status"
                                class="border mb-4 border-gray-900 text-gray-900 mb-5 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-52 p-1.5"
                                placeholder="" disabled />
                        </div>
                        <div>
                            <button type="submit"
                                class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-8 py-2.5 me-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800">Disqualified</button>
                        </div>
                    </div>
                </fieldset>
                <fieldset class="md:w-5/6 border-2 border-gray-300 p-4 rounded-lg mb-5">
                    <legend class="font-bold">Lead Information</legend>
                    <div class="flex flex-wrap gap-x-10 justify-center">
                        <div>
                            <label for="lead_source" class="block mb-2 text-sm font-bold text-gray-900">Lead Source :
                            </label>
                            <select id="lead_source" name="lead_source" onchange="verifyAnswer()"
                                class=" border mb-4 border-gray-900 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-52 p-1.5">
                                <option selected disabled hidden>Choose Lead</option>
                                <option value="Email">Email</option>
                                <option value="Direct_other">Direct-other</option>
                                <option value="References">References</option>
                            </select>
                        </div>
                        <div>
                            <label for="contact_person_details" class="block mb-2 text-sm font-bold text-gray-900">Ref
                                By : </label>
                            <input type="text" id="ref_By" name="ref_By"
                                class="border mb-4 border-gray-900 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-52 p-1.5"
                                placeholder="" />
                        </div>
                        <div>
                            <label for="contact_person_details" class="block mb-2 text-sm font-bold text-gray-900">Ref
                                Phone No : </label>
                            <input type="text" id="ref_phone_no" name="ref_phone_no"
                                class="border mb-4 border-gray-900 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-52 p-1.5"
                                placeholder="" />
                        </div>
                        <div>
                            <label for="lead_type" class="block mb-2 text-sm font-bold text-gray-900">Lead Type :
                            </label>
                            <select id="lead_type" name="lead_type"
                                class=" border mb-4 border-gray-900 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-52 p-1.5">
                                <option selected>Choose Lead Type</option>
                                <option value="Dealer">Dealer</option>
                                <option value="Distributor">Distributor</option>
                                <option value="Retailer">Retailer</option>
                                <option value="Individual">Individual</option>
                            </select>
                        </div>
                        <div>
                            <label for="contact_person_details"
                                class="block mb-2 text-sm font-bold text-gray-900">Contact
                                Person Name : </label>
                            <input type="text" name="contact_person_name"
                                class="border mb-4 border-gray-900 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-52 p-1.5"
                                placeholder="Person name" required />
                        </div>
                        <div>
                            <label for="contact_person_details"
                                class="block mb-2 text-sm font-bold text-gray-900">Contact
                                Person Phone No : </label>
                            <input type="text" name="contact_person_phone_no"
                                class="border mb-4 border-gray-900 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-52 p-1.5"
                                placeholder="Person Phone no" required />
                        </div>
                        <div>
                            <label for="contact_person_details"
                                class="block mb-2 text-sm font-bold text-gray-900">Contact
                                Person Email : </label>
                            <input type="text" name="contact_person_email"
                                class="border mb-4 border-gray-900 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-52 p-1.5"
                                placeholder="Person Email" required />
                        </div>
                        <div>
                            <label for="contact_person_details"
                                class="block mb-2 text-sm font-bold text-gray-900">Contact
                                Person Address : </label>
                            <input type="text" name="contact_person_address"
                                class="border mb-4 border-gray-900 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-52 p-1.5"
                                placeholder="Person Address" required />
                        </div>
                        <div>
                            <label for="query_received_date" class="block mb-2 text-sm font-bold text-gray-900">Lead
                                Receiving Date : </label>
                            <input type="date" name="lead_received_date"
                                class="border mb-4 border-gray-900 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-52 p-1.5"
                                placeholder="" required />
                        </div>

                    </div>
                </fieldset>

            </fieldset>
            <div class="flex justify-center mt-4">
                <button type="submit"
                    class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-8 py-2.5 me-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800">Save
                    Now</button>
            </div>
        </form>
    </div>


    <div class="mx-10 mt-4">
        <form action="./phpAjax/leadGenAjax.php" method="post">
            <fieldset class="border-2 border-gray-300 p-5 rounded-lg ">
                <legend class="font-bold">Query Information</legend>
                <div class="flex flex-wrap gap-x-16 md:mx-8">
                    <div>
                        <label for="assigned_to" class="block mb-2 text-sm font-bold text-gray-900">Assigned To :
                        </label>
                        <input type="text" name="assigned_to"
                            class="border mb-4 border-gray-900 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-52 p-1.5"
                            placeholder="" required />
                    </div>

                    <div>
                        <label for="query_start_date" class="block mb-2 text-sm font-bold text-gray-900">Query Start
                            Date : </label>
                        <input type="date" name="query_start_date"
                            class="border mb-4 border-gray-900 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-52 p-1.5"
                            placeholder="" required />
                    </div>

                    <!-- 
                    <div>
                        <label for="re_query" class="block mb-2 text-sm font-bold text-gray-900">Re-query : </label>
                        <select id="countries" name="re_query"
                            class=" border mb-4 border-gray-900 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-52 p-1.5">
                            <option selected>Choose one</option>
                            <option value="Yes">Yes</option>
                            <option value="No">No</option>
                        </select>
                    </div> -->

                    <div>
                        <label for="follow_up" class="block mb-2 text-sm font-bold text-gray-900">Follow Up : </label>
                        <input type="text" name="follow_up"
                            class="border mb-4 border-gray-900 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-52 p-1.5"
                            placeholder="" required />
                    </div>
                    <div>
                        <label for="followup_reminder_frequency" name="followup_reminder_frequency"
                            class="block mb-2 text-sm font-bold text-gray-900">Follow Up Reminder (In days) : </label>
                        <input type="date" name="followup_reminder_frequency"
                            class="border mb-4 border-gray-900 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-52 p-1.5"
                            placeholder="" required />
                    </div>
                    <div>
                        <label for="no_of_times" class="block mb-2 text-sm font-bold text-gray-900">No of times :
                        </label>
                        <input type="number" name="no_of_times" id="no_of_times"
                            class="border mb-4 border-gray-900 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-52 p-1.5"
                            placeholder="" required />
                    </div>
                    <!-- <div>
                        <label for="re_query_closure_date" class="block mb-2 text-sm font-bold text-gray-900">Re-query
                            closure Date : </label>
                        <input type="date" name="re_query_closure_date"
                            class="border mb-4 border-gray-900 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-52 p-1.5"
                            placeholder="" required />
                    </div> -->
                    <!-- <div>
                        <label for="re_query_end_date" class="block mb-2 text-sm font-bold text-gray-900">Re-query End
                            Date : </label>
                        <input type="date" name="re_query_end_date"
                            class="border mb-4 border-gray-900 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-52 p-1.5"
                            placeholder="" required />
                    </div>   -->
                    <div>
                        <label for="query_end_date" class="block mb-2 text-sm font-bold text-gray-900">Query End Date :
                        </label>
                        <input type="date" name="query_end_date"
                            class="border mb-4 border-gray-900 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-52 p-1.5"
                            placeholder="" required />
                    </div>
                    <div>
                        <label for="installation_required"
                            class="block mb-2 text-sm font-bold text-gray-900">Installation
                            required :
                        </label>
                        <select id="installation_required" name="installation_required"
                            onchange="installationRequired()"
                            class=" border mb-4 border-gray-900 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-52 p-1.5">
                            <option selected disabled hidden>Choose one</option>
                            <option value="Yes">Yes</option>
                            <option value="No">No</option>
                        </select>
                    </div>
                    <div>
                        <label for="tentative_installation" class="block mb-2 text-sm font-bold text-gray-900">Tentative
                            Installation Date :
                        </label>
                        <input type="date" name="tentative_installation" id="tentative_installation"
                            class="border mb-4 border-gray-900 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-52 p-1.5"
                            placeholder="" required disabled />
                    </div>
                    <div>
                        <label for="tentative_delivery" class="block mb-2 text-sm font-bold text-gray-900">Tentative
                            Install. Delivery Date:
                        </label>
                        <input type="date" name="tentative_delivery" id="tentative_delivery"
                            class="border mb-4 border-gray-900 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-52 p-1.5"
                            placeholder="" required />
                    </div>
                </div>
                <div>
                    <button type="submit"
                        class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-8 py-2.5 me-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800">Disqualified</button>
                </div>
                <div>


                    <div class="relative overflow-x-auto md:mx-8 mt-4">
                        <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
                            <thead
                                class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                                <tr>
                                    <th scope="col" class="px-6 py-3">
                                        Serial No
                                    </th>
                                    <th scope="col" class="px-6 py-3">
                                        Follow up Start Date
                                    </th>
                                    <th scope="col" class="px-6 py-3">
                                        Follow up End Date
                                    </th>
                                    <th scope="col" class="px-6 py-3">
                                        Remarks
                                    </th>
                                    <th scope="col" class="px-6 py-3">
                                        Remind Date
                                    </th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                                    <th scope="row"
                                        class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                        1
                                    </th>
                                    <td class="px-6 py-4">
                                        22/02/2025
                                    </td>
                                    <td class="px-6 py-4">
                                        31/01/2045
                                    </td>
                                    <td class="px-6 py-4">
                                        abc
                                    </td>
                                    <td class="px-6 py-4">
                                        31/01/2045
                                    </td>
                                </tr>
                                <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                                    <th scope="row"
                                        class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                        2
                                    </th>
                                    <td class="px-6 py-4">
                                        22/02/2025
                                    </td>
                                    <td class="px-6 py-4">
                                        31/01/2045
                                    </td>
                                    <td class="px-6 py-4">
                                        abc
                                    </td>
                                    <td class="px-6 py-4">
                                        31/01/2045
                                    </td>
                                </tr>
                                <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                                    <th scope="row"
                                        class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                        3
                                    </th>
                                    <td class="px-6 py-4">
                                        22/02/2025
                                    </td>
                                    <td class="px-6 py-4">
                                        31/01/2045
                                    </td>
                                    <td class="px-6 py-4">
                                        jkl
                                    </td>
                                    <td class="px-6 py-4">
                                        31/01/2045
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>

                </div>
                <div class="flex justify-center mt-4">
                    <button type="submit"
                        class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-8 py-2.5 me-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800">Save
                        Now</button>
                </div>
            </fieldset>
        </form>
        <fieldset class="p-5 border-2 rounded-md border-gray-300 mt-5">
            <legend class="font-bold">Item Information</legend>
            <div class="flex justify-between flex-wrap">
                <div class="w-full">
                    <div>
                        <input type="radio" name="goods" checked id="">
                        <span class="text-xs font-bold">Finish Goods</span>
                    </div>

                    <div class="flex flex-wrap items-center border gap-x-5 border-gray-900 w-full p-2 rounded-lg mt-2">
                        <div>
                            <input id="default-checkbox" type="checkbox" value=""
                                class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:border-gray-600">
                        </div>
                        <div>
                            <label class="block text-sm">S. No : </label>
                            <input type="text" name="item_serial_no"
                                class="w-12 rounded-md border text-xs border-gray-500 bg-white py-2 pl-2 text-[#6B7280] h-6 outline-none focus:border-[#6A64F1] focus:shadow-md"
                                style="border-color: #C8A1E0;" /><br>
                        </div>
                        <div>
                            <label class="block text-sm">Item Name : </label>
                            <input type="text" name="item_name"
                                class="md:w-32 w-40 rounded-md border text-xs border-gray-500 bg-white py-2 pl-2 text-[#6B7280] h-6 outline-none focus:border-[#6A64F1] focus:shadow-md"
                                style="border-color: #C8A1E0;" /><br>
                        </div>
                        <div>
                            <label class="block text-sm">Item Qty : </label>
                            <input type="number" name="item_qty"
                                class="w-24 rounded-md border text-xs border-gray-500 bg-white text-[#6B7280] h-6 outline-none focus:border-[#6A64F1] focus:shadow-md"
                                style="border-color: #C8A1E0;" /><br>
                        </div>
                        <div>
                            <label class="block text-sm">Rate : </label>
                            <input type="number" name="item_rate"
                                class="w-24 rounded-md border text-xs border-gray-500 bg-white text-[#6B7280] h-6 outline-none focus:border-[#6A64F1] focus:shadow-md"
                                style="border-color: #C8A1E0;" /><br>
                        </div>
                        <div>
                            <label class="block text-sm">Total : </label>
                            <input type="number" name="item_total"
                                class="w-28 rounded-md border text-xs border-gray-500 bg-white text-[#6B7280] h-6 outline-none focus:border-[#6A64F1] focus:shadow-md"
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
                            <label class="block text-sm">SO Number : </label>
                            <input type="number" name="item_so_number"
                                class="w-24 rounded-md border text-xs border-gray-500 bg-white text-[#6B7280] h-6 outline-none focus:border-[#6A64F1] focus:shadow-md"
                                style="border-color: #C8A1E0;" /><br>
                        </div>
                        <div>
                            <label class="block text-sm">Created By : </label>
                            <input type="text" name="item_so_number"
                                class="w-28 rounded-md border text-xs border-gray-500 bg-white text-[#6B7280] h-6 outline-none focus:border-[#6A64F1] focus:shadow-md"
                                style="border-color: #C8A1E0;" /><br>
                        </div>
                        <div>
                            <label class="block text-sm">Status : </label>
                            <input type="text" name="item_so_number"
                                class="w-24 rounded-md border text-xs border-gray-500 bg-white text-[#6B7280] h-6 outline-none focus:border-[#6A64F1] focus:shadow-md"
                                style="border-color: #C8A1E0;" /><br>
                        </div>
                        <div>
                            <button
                                class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-1.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800"
                                type="button">
                                Create SO
                            </button>
                        </div>
                    </div>
                    <!-- <div class="mt-3">
                        <button data-modal-target="extralarge-modal" data-modal-toggle="extralarge-modal"
                            class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-1.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800"
                            type="button">
                            Update BOM
                        </button>
                    </div> -->
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
                                    <input id="default-checkbox" type="checkbox" value=""
                                        class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:border-gray-600">
                                </div>
                                <div>
                                    <label class="block text-sm">S. No : </label>
                                    <input type="text" name="item_serial_no"
                                        class="w-12 rounded-md border text-xs border-gray-500 bg-white py-2 pl-2 text-[#6B7280] h-6 outline-none focus:border-[#6A64F1] focus:shadow-md"
                                        style="border-color: #C8A1E0;" /><br>
                                </div>
                                <div>
                                    <label class="block text-sm">Item Name : </label>
                                    <input type="text" name="item_name"
                                        class="md:w-32 w-40 rounded-md border text-xs border-gray-500 bg-white py-2 pl-2 text-[#6B7280] h-6 outline-none focus:border-[#6A64F1] focus:shadow-md"
                                        style="border-color: #C8A1E0;" /><br>
                                </div>
                                <div>
                                    <label class="block text-sm">Item Qty : </label>
                                    <input type="number" name="item_qty"
                                        class="w-24 rounded-md border text-xs border-gray-500 bg-white text-[#6B7280] h-6 outline-none focus:border-[#6A64F1] focus:shadow-md"
                                        style="border-color: #C8A1E0;" /><br>
                                </div>
                                <div>
                                    <label class="block text-sm">Rate : </label>
                                    <input type="number" name="item_rate"
                                        class="w-24 rounded-md border text-xs border-gray-500 bg-white text-[#6B7280] h-6 outline-none focus:border-[#6A64F1] focus:shadow-md"
                                        style="border-color: #C8A1E0;" /><br>
                                </div>
                                <div>
                                    <label class="block text-sm">Total : </label>
                                    <input type="number" name="item_total"
                                        class="w-28 rounded-md border text-xs border-gray-500 bg-white text-[#6B7280] h-6 outline-none focus:border-[#6A64F1] focus:shadow-md"
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
                                    <label class="block text-sm">SO Number : </label>
                                    <input type="number" name="item_so_number"
                                        class="w-24 rounded-md border text-xs border-gray-500 bg-white text-[#6B7280] h-6 outline-none focus:border-[#6A64F1] focus:shadow-md"
                                        style="border-color: #C8A1E0;" /><br>
                                </div>
                                <div>
                                    <label class="block text-sm">Created By : </label>
                                    <input type="text" name="item_so_number"
                                        class="w-28 rounded-md border text-xs border-gray-500 bg-white text-[#6B7280] h-6 outline-none focus:border-[#6A64F1] focus:shadow-md"
                                        style="border-color: #C8A1E0;" /><br>
                                </div>
                                <div>
                                    <label class="block text-sm">Status : </label>
                                    <input type="text" name="item_so_number"
                                        class="w-24 rounded-md border text-xs border-gray-500 bg-white text-[#6B7280] h-6 outline-none focus:border-[#6A64F1] focus:shadow-md"
                                        style="border-color: #C8A1E0;" /><br>
                                </div>
                                <div>
                                    <button
                                        class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-1.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800"
                                        type="button">
                                        Create SO
                                    </button>
                                </div>
                            </div><br>
                        </div>


                        <!-- Main modal -->
                        <div id="crud-modal" tabindex="-1" aria-hidden="true"
                            class="overflow-y-auto overflow-x-hidden hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
                            <div class="relative p-4 w-full max-w-md max-h-full">
                                <!-- Modal content -->
                                <div class="relative bg-white  rounded-lg shadow">
                                    <!-- Modal header -->
                                    <div
                                        class="flex items-center justify-between p-4 md:p-5 border-b rounded-t dark:border-gray-600">
                                        <h3 class="text-lg font-semibold text-gray-900 ">
                                            Add Shipping Address
                                        </h3>
                                        <button type="button"
                                            class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white"
                                            data-modal-toggle="crud-modal">
                                            <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                                fill="none" viewBox="0 0 14 14">
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
                                                <label for="" class="block mb-2 text-sm font-medium text-gray-900">User
                                                    Name : </label>
                                                <input type="text" name="user_name" id=""
                                                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:border-gray-500 dark:placeholder-gray-400 dark:focus:ring-primary-500 dark:focus:border-primary-500"
                                                    required="">
                                            </div>
                                            <div class="col-span-2 w-3/4 m-auto">
                                                <label for="" class="block mb-2 text-sm font-medium text-gray-900">User
                                                    Address : </label>
                                                <input type="text" name="user_address" id=""
                                                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:border-gray-500 dark:placeholder-gray-400 dark:focus:ring-primary-500 dark:focus:border-primary-500"
                                                    required="">
                                            </div>
                                            <div class="col-span-2 w-3/4 m-auto">
                                                <label for="" class="block mb-2 text-sm font-medium text-gray-900">User
                                                    Email : </label>
                                                <input type="text" name="user_email" id=""
                                                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:border-gray-500 dark:placeholder-gray-400  dark:focus:ring-primary-500 dark:focus:border-primary-500"
                                                    required="">
                                            </div>
                                            <div class="col-span-2 w-3/4 m-auto">
                                                <label for="name"
                                                    class="block mb-2 text-sm font-medium text-gray-900">User
                                                    Phone Number : </label>
                                                <input type="text" name="user_phone_no" id=""
                                                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:border-gray-500 dark:placeholder-gray-400 darkdark:focus:ring-primary-500 dark:focus:border-primary-500"
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

        <div id="extralarge-modal" tabindex="-1"
            class="fixed top-0 left-0 right-0 z-50 hidden w-full p-4 overflow-x-hidden overflow-y-auto md:inset-0 h-[calc(100%-1rem)] max-h-full">
            <div class="relative w-full max-w-7xl max-h-full">
                <!-- Modal content -->
                <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
                    <!-- Modal header -->
                    <div class="flex items-center justify-between p-4 md:p-5 border-b rounded-t dark:border-gray-600">
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
                                <div class="flex flex-wrap items-center border-gray-500 justify-between border-t mt-2">
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
                                <div class="flex flex-wrap items-center border-gray-500 justify-between border-t mt-2">
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
                                <div class="flex flex-wrap items-center border-gray-500 justify-between border-t mt-2">
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


        <div class="relative overflow-x-auto mt-4 mb-5">
            <table class="w-full text-sm text-left rtl:text-right text-gray-500 border border-gray-700 ">
                <thead class="text-xs text-gray-700 whitespace-nowrap uppercase bg-gray-50 border-b border-gray-900">
                    <tr>

                        <th scope="col" class="px-6 py-3">
                            Created By
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Created Lead
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Record Number
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Contact Person Deatils
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Lead Source
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Lead Type
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Assigned To
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Query Received Date
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Query Start Date
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Query End Date
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Follow Up
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Re-query
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Re-query closure Date
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Re-query End Date
                        </th>
                    </tr>
                </thead>
                <tbody>
                    <tr class="bg-white border-b dark:border-gray-700">
                        <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap">
                            admin
                        </th>
                        <td class="px-6 py-4">
                            user
                        </td>
                        <td class="px-6 py-4">
                            101
                        </td>
                        <td class="px-6 py-4">
                            92345654321
                        </td>
                        <td class="px-6 py-4">
                            xyz
                        </td>
                        <td class="px-6 py-4">
                            abc
                        </td>
                        <td class="px-6 py-4">
                            abh
                        </td>
                        <td class="px-6 py-4">
                            22/02/2021
                        </td>
                        <td class="px-6 py-4">
                            22/02/2022
                        </td>
                        <td class="px-6 py-4">
                            22/02/2023
                        </td>
                        <td class="px-6 py-4">
                            asdf
                        </td>
                        <td class="px-6 py-4">
                            Yes
                        </td>
                        <td class="px-6 py-4">
                            22/02/2025
                        </td>
                        <td class="px-6 py-4">
                            20/02/2025
                        </td>

                    </tr>
                </tbody>
            </table>

            <table class="w-full text-sm text-left rtl:text-right text-gray-500 border border-gray-700  my-5">
                <thead class="pt-5 border-b border-gray-900">
                    <tr class="text-xs text-gray-700 whitespace-nowrap uppercase bg-gray-50 ">
                        <th scope="col" class="px-6 py-3"></th>

                        </th>
                        <th scope="col" class="px-6 py-3">
                            Serial No
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Item Name
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Item Qty
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Rate
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Total
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Image Preview
                        </th>
                        <th scope="col" class="px-6 py-3">
                            SO Number
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Creadted By
                        </th>
                    </tr>
                </thead>
                <tbody>
                    <tr class="bg-white border-b dark:border-gray-700">
                        <td scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap">
                            <input id="default-checkbox" type="checkbox" value=""
                                class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:border-gray-600">
                        </td>
                        <td scope="row" class="px-6 py-4 ">
                            101
                        </td>
                        <td class="px-6 py-4">
                            bulb
                        </td>
                        <td class="px-6 py-4">
                            40
                        </td>
                        <td class="px-6 py-4">
                            3000
                        </td>
                        <td class="px-6 py-4">
                            320000
                        </td>
                        <td class="px-6 py-4">
                            image
                        </td>
                        <td class="px-6 py-4">
                            132
                        </td>
                        <td class="px-6 py-4">
                            asdf
                        </td>
                    </tr>
                    <tr class="bg-white border-b dark:border-gray-700">
                        <td scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap">
                            <input id="default-checkbox" type="checkbox" value=""
                                class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:border-gray-600">
                        </td>
                        <td scope="row" class="px-6 py-4">
                            102
                        </td>
                        <td class="px-6 py-4">
                            wire
                        </td>
                        <td class="px-6 py-4">
                            30
                        </td>
                        <td class="px-6 py-4">
                            4000
                        </td>
                        <td class="px-6 py-4">
                            420000
                        </td>
                        <td class="px-6 py-4">
                            image
                        </td>
                        <td class="px-6 py-4">
                            170
                        </td>
                        <td class="px-6 py-4">
                            jkl
                        </td>
                    </tr>
                </tbody>

            </table>
        </div>


        <center>
            <button type="button"
                class="text-white bg-blue-600 hover:bg-blue-700  font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2 focus:outline-none ">Submit
                Now</button>
        </center>

    </div>











    <script>
        let count = 1;

        function finish_field() {
            let y = document.getElementById("finish_field");

            if (y) {
                let x = `<div id="raw_field_${count}" class="flex flex-wrap items-center border gap-x-5 border-gray-900 w-full p-2 rounded-lg mt-2">
                        <div>
                            <input id="default-checkbox" type="checkbox" value=""
                                class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:border-gray-600">
                        </div>
                        <div>
                            <label class="block text-sm">S. No : </label>
                            <input type="text" name="item_serial_no"
                                class="w-12 rounded-md border text-xs border-gray-500 bg-white py-2 pl-2 text-[#6B7280] h-6 outline-none focus:border-[#6A64F1] focus:shadow-md"
                                style="border-color: #C8A1E0;" /><br>
                        </div>
                        <div>
                            <label class="block text-sm">Item Name : </label>
                            <input type="text" name="item_name"
                                class="md:w-32 w-40 rounded-md border text-xs border-gray-500 bg-white py-2 pl-2 text-[#6B7280] h-6 outline-none focus:border-[#6A64F1] focus:shadow-md"
                                style="border-color: #C8A1E0;" /><br>
                        </div>
                        <div>
                            <label class="block text-sm">Item Qty : </label>
                            <input type="number" name="item_qty"
                                class="w-24 rounded-md border text-xs border-gray-500 bg-white text-[#6B7280] h-6 outline-none focus:border-[#6A64F1] focus:shadow-md"
                                style="border-color: #C8A1E0;" /><br>
                        </div>
                        <div>
                            <label class="block text-sm">Rate : </label>
                            <input type="number" name="item_rate"
                                class="w-24 rounded-md border text-xs border-gray-500 bg-white text-[#6B7280] h-6 outline-none focus:border-[#6A64F1] focus:shadow-md"
                                style="border-color: #C8A1E0;" /><br>
                        </div>
                        <div>
                            <label class="block text-sm">Total : </label>
                            <input type="number" name="item_total"
                                class="w-28 rounded-md border text-xs border-gray-500 bg-white text-[#6B7280] h-6 outline-none focus:border-[#6A64F1] focus:shadow-md"
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
                            <label class="block text-sm">SO Number : </label>
                            <input type="number" name="item_so_number"
                                class="w-24 rounded-md border text-xs border-gray-500 bg-white text-[#6B7280] h-6 outline-none focus:border-[#6A64F1] focus:shadow-md"
                                style="border-color: #C8A1E0;" /><br>
                        </div>
                        <div>
                            <label class="block text-sm">Created By : </label>
                            <input type="text" name="item_so_number"
                                class="w-28 rounded-md border text-xs border-gray-500 bg-white text-[#6B7280] h-6 outline-none focus:border-[#6A64F1] focus:shadow-md"
                                style="border-color: #C8A1E0;" /><br>
                        </div>
                        <div>
                            <label class="block text-sm">Status : </label>
                            <input type="text" name="item_so_number"
                                class="w-24 rounded-md border text-xs border-gray-500 bg-white text-[#6B7280] h-6 outline-none focus:border-[#6A64F1] focus:shadow-md"
                                style="border-color: #C8A1E0;" /><br>
                        </div>
                        <div>
                            <button
                                class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-1.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800"
                                type="button">
                                Create SO
                            </button>
                        </div>
                    </div>`;

                y.innerHTML += x;

                count++;
            } else {
                console.error("Element with ID 'finish_field' not found.");
            }
        }






        document.getElementById('remove_btn').addEventListener('click', function () {
            var finish_field = document.getElementById('finish_field');

            // Remove the last child of the container
            if (finish_field.lastElementChild) {
                finish_field.removeChild(finish_field.lastElementChild);
            }
        });


        function raw_field() {
            let y = document.getElementById("raw_field");

            if (y) {
                let x = `<div id="raw_field_${count}" class="flex flex-wrap items-center border gap-x-5 border-gray-900 w-full p-2 rounded-lg mt-2">
                        <div>
                            <input id="default-checkbox" type="checkbox" value=""
                                class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:border-gray-600">
                        </div>
                        <div>
                            <label class="block text-sm">S. No : </label>
                            <input type="text" name="item_serial_no"
                                class="w-12 rounded-md border text-xs border-gray-500 bg-white py-2 pl-2 text-[#6B7280] h-6 outline-none focus:border-[#6A64F1] focus:shadow-md"
                                style="border-color: #C8A1E0;" /><br>
                        </div>
                        <div>
                            <label class="block text-sm">Item Name : </label>
                            <input type="text" name="item_name"
                                class="md:w-32 w-40 rounded-md border text-xs border-gray-500 bg-white py-2 pl-2 text-[#6B7280] h-6 outline-none focus:border-[#6A64F1] focus:shadow-md"
                                style="border-color: #C8A1E0;" /><br>
                        </div>
                        <div>
                            <label class="block text-sm">Item Qty : </label>
                            <input type="number" name="item_qty"
                                class="w-24 rounded-md border text-xs border-gray-500 bg-white text-[#6B7280] h-6 outline-none focus:border-[#6A64F1] focus:shadow-md"
                                style="border-color: #C8A1E0;" /><br>
                        </div>
                        <div>
                            <label class="block text-sm">Rate : </label>
                            <input type="number" name="item_rate"
                                class="w-24 rounded-md border text-xs border-gray-500 bg-white text-[#6B7280] h-6 outline-none focus:border-[#6A64F1] focus:shadow-md"
                                style="border-color: #C8A1E0;" /><br>
                        </div>
                        <div>
                            <label class="block text-sm">Total : </label>
                            <input type="number" name="item_total"
                                class="w-28 rounded-md border text-xs border-gray-500 bg-white text-[#6B7280] h-6 outline-none focus:border-[#6A64F1] focus:shadow-md"
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
                            <label class="block text-sm">SO Number : </label>
                            <input type="number" name="item_so_number"
                                class="w-24 rounded-md border text-xs border-gray-500 bg-white text-[#6B7280] h-6 outline-none focus:border-[#6A64F1] focus:shadow-md"
                                style="border-color: #C8A1E0;" /><br>
                        </div>
                        <div>
                            <label class="block text-sm">Created By : </label>
                            <input type="text" name="item_so_number"
                                class="w-28 rounded-md border text-xs border-gray-500 bg-white text-[#6B7280] h-6 outline-none focus:border-[#6A64F1] focus:shadow-md"
                                style="border-color: #C8A1E0;" /><br>
                        </div>
                        <div>
                            <label class="block text-sm">Status : </label>
                            <input type="text" name="item_so_number"
                                class="w-24 rounded-md border text-xs border-gray-500 bg-white text-[#6B7280] h-6 outline-none focus:border-[#6A64F1] focus:shadow-md"
                                style="border-color: #C8A1E0;" /><br>
                        </div>
                        <div>
                            <button
                                class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-1.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800"
                                type="button">
                                Create SO
                            </button>
                        </div>
                    </div>`;

                y.innerHTML += x;

                count++;
            } else {
                console.error("Element with ID 'finish_field' not found.");
            }
        }

        document.getElementById('raw_remove').addEventListener('click', function () {
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

        function verifyAnswer() {


            let lead_source = document.getElementById('lead_source')
            var result = lead_source.options[lead_source.selectedIndex].text;

            console.log(result);

            if (result == "References") {

                document.getElementById('ref_By').disabled = false;
                document.getElementById('ref_By').placeholder = "Person Name";
                document.getElementById('ref_By').required = true;
                document.getElementById('ref_phone_no').disabled = false;
                document.getElementById('ref_phone_no').placeholder = "Person Phone No";
                document.getElementById('ref_phone_no').required = true;
            }
            // else {
            //     document.getElementById('ref_By').disabled = true;
            //     document.getElementById('ref_By').placeholder = " ";
            //     document.getElementById('ref_By').value = "";
            //     document.getElementById('ref_phone_no').disabled = true;
            //     document.getElementById('ref_phone_no').placeholder = " ";
            //     document.getElementById('ref_phone_no').value = "";

            // }

        }


        function installationRequired() {


            let installation_required = document.getElementById('installation_required')
            var result = installation_required.options[installation_required.selectedIndex].text;

            console.log(result);

            if (result == "Yes") {

                document.getElementById('tentative_installation').disabled = false;
                document.getElementById('tentative_installation').placeholder = "Enter Installtion";
                // document.getElementById('tentative_installation').value = "";
            } else {
                document.getElementById('tentative_installation').disabled = true;
                document.getElementById('tentative_installation').placeholder = "";
                document.getElementById('tentative_installation').value = "";



            }

        }
    </script>
</body>

</html>