<?php

include("../db.php");


$isEditable = false;


$sql = "select * from requisition_table";



$result = mysqli_query($con, $sql);



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



    <div>


        <form class="flex items-center  max-w-lg mx-auto" method="POST">
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


            <thead class=" text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
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
    <form action="#" method="POST">
    
                <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">

                    <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                        ' . ($isEditable ? "<input class='formInputData'  name='user_id' disabled style='max-width:80px' id=" . $row["S_no"] . "  margin-left:0' value=" . $row["S_no"] . ">" : $row["S_no"]) . '
                    </th>
                    <td class=px-6 py-4">
                        ' . ($isEditable ? "<input class='formInputData' name='name_of_company' disabled style='max-width:80px'  margin-left:0' value=" . $row["created_by"] . ">" : $row["created_by"]) . '
                    </td>
                    <td class="px-6 py-4">
                    
                         ' . ($isEditable ? "<input class='formInputData' name='company_address' disabled style='max-width:80px'  margin-left:0' value=" . $row["created_date"] . ">" : $row["created_date"]) . '
                    </td>
                    <td class="px-6 py-4">
                        ' . ($isEditable ? "<input class='formInputData' name='company_email' disabled style='max-width:80px'  margin-left:0' value=" . $row["department_name"] . ">" : $row["department_name"]) . '
                    </td>
                    <td class="px-6 py-4">
                        ' . ($isEditable ? "<input class='formInputData' name='bank_name' disabled style='max-width:80px'  margin-left:0' value=" . $row["department_id"] . ">" : $row["department_id"]) . '
                    </td>
                    <td class="px-6 py-4">
                         ' . ($isEditable ? "<input class='formInputData' name='bank_account_number' disabled style='max-width:80px'  margin-left:0' value=" . $row["requisition_type"] . ">" : $row["requisition_type"]) . '
                    </td>
                    <td class="px-6 py-4">
                        ' . ($isEditable ? "<input  type='txt' class='formInputData' name='bank_ifsc_code' disabled style='max-width:80px'  margin-left:0' value=" . $row["requisition_id"] . ">" : $row["requisition_id"]) . '
                    </td>
                    <td class="px-6 py-4">
                       
                         ' . ($isEditable ? "<input class='formInputData' name='bank_branch_name' disabled style='max-width:80px'  margin-left:0' value=" . $row["project_id"] . ">" : $row["project_id"]) . '
                    </td>
                    <td class="px-6 py-4">
                       
                         ' . ($isEditable ? "<input class='formInputData' name='bank_branch_name' disabled style='max-width:80px'  margin-left:0' value=" . $row["item_name"] . ">" : $row["item_name"]) . '
                    </td>
                    <td class="px-6 py-4">
                       
                         ' . ($isEditable ? "<input class='formInputData' name='bank_branch_name' disabled style='max-width:80px'  margin-left:0' value=" . $row["item_code"] . ">" : $row["item_code"]) . '
                    </td>
                    <td class="px-6 py-4">
                       
                         ' . ($isEditable ? "<input class='formInputData' name='bank_branch_name' disabled style='max-width:80px'  margin-left:0' value=" . $row["quantity"] . ">" : $row["quantity"]) . '
                    </td>
                    <td class="px-6 py-4">
                       
                         ' . ($isEditable ? "<input class='formInputData' name='bank_branch_name' disabled style='max-width:80px'  margin-left:0' value=" . $row["user_remarks"] . ">" : $row["user_remarks"]) . '
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
                       
                         ' . ($isEditable ? "<input class='formInputData' name='bank_branch_name' disabled style='max-width:80px'  margin-left:0' value=" . $row["status"] . ">" : $row["status"]) . '
                    </td>
                    <td class="px-6 py-4">
                       
                         ' . ($isEditable ? "<input class='formInputData' name='bank_branch_name' disabled style='max-width:80px'  margin-left:0' value=" . $row["final_remarks"] . ">" : $row["final_remarks"]) . '
                    </td>
                    <td class="px-6 py-4">
                       
                         ' . ($isEditable ? "<input class='formInputData' name='bank_branch_name' disabled style='max-width:80px'  margin-left:0' value=" . $row["record_id"] . ">" : $row["record_id"]) . '
                    </td>
                
                    <td class="px-4 py-4 text-right">
                         <a onclick ="enableItem(event,rowId' . $row["S_no"] . ')" class="font-medium text-blue-600 dark:text-blue-500 hover:underline">Edit</a>
                    <button id=rowId' . $row["S_no"] . ' name="update_data" class="hidden inline-flex mr-2  items-center py-2.5 px-3 ms-2 text-sm font-medium text-white bg-blue-700 rounded-lg border border-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800" onclick="">
                      Update</button>
                    </td>
                     


                    
                </tr>
                    
                </form>
                    
                ';
                }  ?>

            </tbody>
        </table>
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




    function returnRow(company_id, location, gst_number, email, bank_name, bank_account_number, Bank_ifsc_number, Branch_name, category) {


        var submitForm = document.createElement('form');
        submitForm.method = 'POST';
        submitForm.action = '#'; // Replace with your actual form submission URL
        submitForm.id = "my_tr"

        var newTr = document.createElement("tr");
        newTr.classList.add("bg-white", "border-b", "dark:bg-gray-800", "dark:border-gray-700");

        var td1 = document.createElement("td");
        td1.classList.add("px-6", "py-4");
        newTr.appendChild(td1)
        td1.appendChild(createInput("company_id", company_id))


        var td2 = document.createElement("td");
        td2.classList.add("px-6", "py-4");
        newTr.appendChild(td2)
        td2.appendChild(createInput("location", location))


        var td3 = document.createElement("td");
        td3.classList.add("px-6", "py-4");
        td3.appendChild(createInput("gst_number", gst_number))
        newTr.appendChild(td3)


        var td4 = document.createElement("td");
        td4.classList.add("px-6", "py-4");
        td4.appendChild(createInput("email", email))
        newTr.appendChild(td4)


        var td5 = document.createElement("td");
        td5.classList.add("px-6", "py-4");
        td5.appendChild(createInput("bank_name", bank_name))
        newTr.appendChild(td5)


        var td6 = document.createElement("td");
        td6.classList.add("px-6", "py-4");
        td6.appendChild(createInput("bank_account_number", bank_account_number))
        newTr.appendChild(td6)


        var td7 = document.createElement("td");
        td7.classList.add("px-6", "py-4");
        td7.appendChild(createInput("Bank_ifsc_number", Bank_ifsc_number))
        newTr.appendChild(td7)


        var td8 = document.createElement("td");
        td8.classList.add("px-6", "py-4");
        td8.appendChild(createInput("Branch_name", Branch_name))
        newTr.appendChild(td8)


        var td9 = document.createElement("td");
        td9.classList.add("px-6", "py-4");
        td9.appendChild(createInput("category", category))
        newTr.appendChild(td9)




        var button_s = document.createElement('button');
        button_s.classList.add('inline-flex', 'display-block', 'mx-auto', 'items-center', 'py-2.5', 'px-3', 'text-sm', 'font-medium', 'text-white', 'bg-blue-700', 'rounded-lg', 'border', 'border-blue-700', 'hover:bg-blue-800', 'focus:ring-4', 'focus:outline-none', 'focus:ring-blue-300', 'dark:bg-blue-600', 'dark:hover:bg-blue-700', 'dark:focus:ring-blue-800');
        button_s.name = 'updateLocatiosOfCompany';
        button_s.type = 'submit';
        button_s.textContent = 'Update';
        // // // newTr.appendChild(button_s);

        var td10 = document.createElement("td");
        td10.classList.add("px-6", "py-4");
        td10.appendChild(button_s)
        newTr.appendChild(td10)

        // newTr.appendChild(submitForm)


        sub_company_id.appendChild(newTr)
        // document.getElementsByTagName("body").appendChildI("submitForm")
        // sub_company_id.appendChild(submitForm)

    }
</script>


<script src="https://cdn.jsdelivr.net/npm/flowbite@2.4.1/dist/flowbite.min.js"></script>


</html>