<?php

include("../db.php");


$isEditable = true;


$sql = "select * from requisition_table";


$result = mysqli_query($con, $sql);



if ($_SERVER['REQUEST_METHOD'] == "GET") {



    if (isset($_GET["search_query"])) {
        $query = $_GET["search_query"];

        $sql = "SELECT * FROM  requisition_table  where department_name ='$query' or item_name ='$query' or status='$query'  or S_no ='$query'or department_id ='$$query%'or requisition_type ='$query'or quantity ='$query' or user_remarks ='$query' or price ='$query' or handover_over_by ='$query' or %record_id% ='$query'  ";

        $result = mysqli_query($con, $sql);

        echo "QIURY";
    }
}





if (mysqli_num_rows($result) > 0) {

    echo "is fetch successfukky";
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
    <?php require("./navForLogged.php") ?>





    <div class="" style="margin-top: 3.5rem;">


        <form class="flex items-center  max-w-lg mx-auto" method="GET">
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


            <thead class=" text-xs bg-blue-300 text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
            <tr>
                <th scope="col" class="px-6 py-3">
                    S_no
                </th>
                <th scope="col" class="px-6 py-3">
                    created_by
                </th>
                <th scope="col" class="px-6 py-3">
                    created_date
                </th>
                <th scope="col" class="px-6 py-3">
                    department_name
                </th>
                <th scope="col" class="px-6 py-3">
                    department_id
                </th>
                <th scope="col" class="px-6 py-3">
                    requisition_type
                </th>
                <th scope="col" class="px-6 py-3">
                    requisition_id
                </th>
                <th scope="col" class="px-6 py-3">
                    project_id
                </th>

                <th scope="col" class="px-6 py-3">
                    item_name
                </th>
                <th scope="col" class="px-6 py-3">
                    item_code
                </th>
                <th scope="col" class="px-6 py-3">
                    quantity
                </th>
                <th scope="col" class="px-6 py-3">
                    user_remarks
                </th>
                <th scope="col" class="px-6 py-3">
                    price
                </th>
                <th scope="col" class="px-6 py-3">
                    date_hand_hover
                </th>
                <th scope="col" class="px-6 py-3">
                    handover_over_by
                </th>
                <th scope="col" class="px-6 py-3">
                    status
                </th>
                <th scope="col" class="px-6 py-3">
                    final_remarks
                </th>
                <th scope="col" class="px-6 py-3">
                    record id
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

                <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">

                    <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                        ' . ($isEditable ? "<input class='formInputData'  name='user_id' disabled style='max-width:80px' id=" . $row["S_no"] . "  margin-left:0' value=" . $row["S_no"] . ">" : $row["S_no"]) . '
                    </th>
                    <td class=px-6 py-4">
                        ' . ($isEditable ? "<input class='formInputData' name='name_of_company' disabled style='max-width:80px'  margin-left:0' value=" . $row["created_by"] . ">" : $row["created_by"]) . '
                    </td>
                    <td class="px-6 py-4">
                    
                         ' . ($isEditable ? "<input class='formInputData' name='created_date' disabled style='max-width:80px'  margin-left:0' value=" . $row["created_date"] . ">" : $row["created_date"]) . '
                    </td>
                    <td class="px-6 py-4">
                        ' . ($isEditable ? "<input class='formInputData' name='department_name' disabled style='max-width:80px'  margin-left:0' value=" . $row["department_name"] . ">" : $row["department_name"]) . '
                    </td>
                    <td class="px-6 py-4">
                        ' . ($isEditable ? "<input class='formInputData' name='department_id' disabled style='max-width:80px'  margin-left:0' value=" . $row["department_id"] . ">" : $row["department_id"]) . '
                    </td>
                    <td class="px-6 py-4">
                         ' . ($isEditable ? "<input class='formInputData' name='requisition_type' disabled style='max-width:80px'  margin-left:0' value=" . $row["requisition_type"] . ">" : $row["requisition_type"]) . '
                    </td>
                    <td class="px-6 py-4">
                        ' . ($isEditable ? "<input  type='txt' class='formInputData' name='requisition_id' disabled style='max-width:80px'  margin-left:0' value=" . $row["requisition_id"] . ">" : $row["requisition_id"]) . '
                    </td>
                    <td class="px-6 py-4">
                       
                         ' . ($isEditable ? "<input class='formInputData' name='project_id' disabled style='max-width:80px'  margin-left:0' value=" . $row["project_id"] . ">" : $row["project_id"]) . '
                    </td>
                    <td class="px-6 py-4">
                       
                         ' . ($isEditable ? "<input class='formInputData' id='item_name' name='item_name' disabled style='max-width:80px'  margin-left:0' value=" . $row["item_name"] . ">" : $row["item_name"]) . '
                    </td>
                    <td class="px-6 py-4">
                       
                         ' . ($isEditable ? "<input class='formInputData' name='bank_branch_name' disabled style='max-width:80px'  margin-left:0' value=" . $row["item_code"] . ">" : $row["item_code"]) . '
                    </td>
                    <td class="px-6 py-4">
                       
                         ' . ($isEditable ? "<input class='formInputData' name='bank_branch_name' disabled style='max-width:80px'  margin-left:0' value=" . $row["quantity"] . ">" : $row["quantity"]) . '
                    </td>
                    <td class="px-6 py-4">
                       
                         ' . ($isEditable ? "<input class='formInputData' id='user_remarks' name='user_remarks' disabled style='max-width:80px'  margin-left:0' value=" . $row["user_remarks"] . ">" : $row["user_remarks"]) . '
                    </td>
                    <td class="px-6 py-4">
                       
                         ' . ($isEditable ? "<input class='formInputData' name='bank_branch_name' disabled style='max-width:80px'  margin-left:0' value=" . $row["price"] . ">" : $row["price"]) . '
                    </td>
                    <td class="px-6 py-4">
                       
                         ' . ($isEditable ? "<input class='formInputData' name='bank_branch_name' disabled style='max-width:80px'  margin-left:0' value=" . $row["date_hand_hover"] . ">" : $row["date_hand_hover"]) . '
                    </td>
                    <td class="px-6 py-4">
                       
                         ' . ($isEditable ? "<input class='formInputData' name='bank_branch_name' disabled style='max-width:80px'  margin-left:0' value=" . $row["handover_over_by"] . ">" : $row["handover_over_by"]) . '
                    </td>
                    <td class="px-6 py-4">
                       
                         ' . ($isEditable ? "<input class='formInputData' name='status' id='status'  disabled style='max-width:80px'  margin-left:0' value=" . $row["status"] . ">" : $row["status"]) . '
                    </td>
                    <td class="px-6 py-4">
                       
                         ' . ($isEditable ? "<input class='formInputData' name='bank_branch_name' disabled style='max-width:80px'  margin-left:0' value=" . $row["final_remarks"] . ">" : $row["final_remarks"]) . '
                    </td>
                    <td class="px-6 py-4">
                       
                         ' . ($isEditable ? "<input class='formInputData' name='bank_branch_name' disabled style='max-width:80px'  margin-left:0' value=" . $row["record_id"] . ">" : $row["record_id"]) . '
                    </td>
                
                    <td class="px-4 py-4 text-right">
                        
                    <button   id=rowId' . $row["S_no"] . '  data-modal-target="crud-modal" data-modal-toggle="crud-modal"  name="update_reqsuisition" dataId=' . $row["S_no"] . ' class=" inline-flex mr-2  items-center py-2.5 px-3 ms-2 text-sm font-medium text-white bg-blue-700 rounded-lg border border-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800" onclick="getDataOfEdit(event)">
                      Update</button>
                    </td>
                     


                    
                </tr>
                    
        
                    
                ';
                }  ?>

            </tbody>
        </table>
    </div>














    <!-- Main modal -->
    <div id="crud-modal" tabindex="-1" aria-hidden="true" class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">


        <div class="relative p-4 w-full max-w-md max-h-full">
            <!-- Modal content -->
            <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
                <!-- Modal header -->
                <div class="flex items-center justify-between p-4 md:p-5 border-b rounded-t dark:border-gray-600">
                    <h3 class="text-lg font-semibold text-gray-900 dark:text-white">
                        Create New Product
                    </h3>
                    <button type="button" class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white" data-modal-toggle="crud-modal">
                        <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
                        </svg>

                    </button>
                </div>
                <!-- Modal body -->
                <form class="p-4 md:p-5">
                    <div class="grid gap-4 mb-4 grid-cols-2">
                        <div class="col-span-2">
                            <label for="name" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Item name</label>
                            <input type="text" name="name" id="EditItemName" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" placeholder="Type product name" required="">
                        </div>

                        <div class="col-span-2 sm:col-span-1">
                            <label for="category" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Status</label>
                            <select id="stausList" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500">
                                <option selected value="PENDING">PENDING</option>
                                <option value="CANCEL">CANCEL</option>

                            </select>
                        </div>
                        <div class="col-span-2">
                            <label for="description" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Remarks</label>
                            <textarea id="editRemark" rows="4" class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder=""></textarea>
                        </div>
                    </div>
                    <button type="submit" onclick="updateDataUser(event)" id="updateButton" dataEditId="" class="text-white inline-flex items-center bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                        <svg class="me-1 -ms-1 w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd" d="M10 5a1 1 0 011 1v3h3a1 1 0 110 2h-3v3a1 1 0 11-2 0v-3H6a1 1 0 110-2h3V6a1 1 0 011-1z" clip-rule="evenodd"></path>
                        </svg>
                        Submit
                    </button>
                </form>
            </div>
        </div>
    </div>












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


        document.getElementById("roleUserId").innerText = userIsSelected


        let c_id = parseInt(userIsSelected);

        getData(c_id);

        // getData(userIsSelected);


        // i have data in current_company

    }


    const openNewAdminBox = () => {

        newUserAdmin.style.display = "block"

    }





    let current_company;


    const getData = async (id) => {

        document.getElementById("sub_company_id").innerText = ""


        try {
            const response = await fetch(`function.php?find_id=${id}`);
            const data = await response.json();
            current_company = data;
            console.log("data is fetch success");




            Array.from(current_company).forEach(element => {


                var {
                    sub_company_id,
                    company_address,
                    GST_number,
                    company_email,
                    bank_name,
                    bank_account_number,
                    bank_ifsc_code,
                    bank_branch_name,
                    category
                } = element


                returnRow(sub_company_id, company_address, GST_number, company_email, bank_name, bank_account_number, bank_ifsc_code, bank_branch_name, category);

            });

        } catch (error) {
            console.log("error when company data fetching");

        }




        // returnRow(1, "delhi", "ABC123", "MANISH@GMAIL.COM", "BANK OF INDIA", 123412, "ABC123", "SAGARPUR", "PRINTER");


    }



    function createInput(name, value) {

        var input = document.createElement("input");
        input.type = "text";
        input.id = "small-input";
        input.name = name
        input.classList.add("block", "w-full", "p-2", "text-gray-900", "border", "border-gray-300", "rounded-lg", "bg-gray-50", "text-xs", "focus:ring-blue-500", "focus:border-blue-500", "dark:bg-gray-700", "dark:border-gray-600", "dark:placeholder-gray-400", "dark:text-white", "dark:focus:ring-blue-500", "dark:focus:border-blue-500");
        input.value = value;

        return input

    }
</script>


<script src="https://cdn.jsdelivr.net/npm/flowbite@2.4.1/dist/flowbite.min.js"></script>
<script src="./js/scripts.js"></script>
<script src="./js/jquery.min.js"></script>


</html>