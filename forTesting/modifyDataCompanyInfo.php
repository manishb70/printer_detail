
<?php

include("../db.php");

$isEditable= true;
$sql  = " SELECT * from company_header_level_details";


$result = mysqli_query($con,$sql);



if (mysqli_num_rows($result)> 0){


    print("data not funndl");


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
                    id
                </th>
                <th scope="col" class="px-6 py-3">
                    Company Name
                </th>
                <th scope="col" class="px-6 py-3">
                    adddres
                </th>
                <th scope="col" class="px-6 py-3">
                    Email
                </th>
                <th scope="col" class="px-6 py-3">
                    Bank name
                </th>
                <th scope="col" class="px-6 py-3">
                    Bank account number 
                </th>
                <th scope="col" class="px-6 py-3">
                    Bank IFSC number 
                </th>
                <th scope="col" class="px-6 py-3">
                    Bank branch name
                </th>

                <th scope="col" class="px-6 py-3">
                company pan card 
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
                        ' . ($isEditable ? "<input class='formInputData'  name='user_id' disabled style='max-width:80px' id=" . $row["user_id"] . "  margin-left:0' value=" . $row["user_id"] . ">" : $row["user_id"]) . '
                    </th>
                    <td class=px-6 py-4">
                        ' . ($isEditable ? "<input class='formInputData' name='username' disabled style='max-width:80px'  margin-left:0' value=" . $row["user_name"] . ">" : $row["user_name"]) . '
                    </td>
                    <td class="px-6 py-4">
                    
                         ' . ($isEditable ? "<input class='formInputData' name='password' disabled style='max-width:80px'  margin-left:0' value=" . $row["password"] . ">" : $row["password"]) . '
                    </td>
                    <td class="px-6 py-4">
                        ' . ($isEditable ? "<input class='formInputData' name='email_id' disabled style='max-width:80px'  margin-left:0' value=" . $row["email_id"] . ">" : $row["email_id"]) . '
                    </td>
                    <td class="px-6 py-4">
                        ' . ($isEditable ? "<input class='formInputData' name='mobile_number' disabled style='max-width:80px'  margin-left:0' value=" . $row["mobile_number"] . ">" : $row["mobile_number"]) . '
                    </td>
                    <td class="px-6 py-4">
                         ' . ($isEditable ? "<input class='formInputData' name='person_id' disabled style='max-width:80px'  margin-left:0' value=" . $row["person_id"] . ">" : $row["person_id"]) . '
                    </td>
                    <td class="px-6 py-4">
                        ' . ($isEditable ? "<input  type='date' class='formInputData' name='start_date' disabled style='max-width:80px'  margin-left:0' value=" . $row["start_date"] . ">" : $row["start_date"]) . '
                    </td>
                    <td class="px-6 py-4">
                       
                         ' . ($isEditable ? "<input class='formInputData' name='end_date' disabled style='max-width:80px'  margin-left:0' value=" . $row["end_date"] . ">" : $row["end_date"]) . '
                    </td>
                     <td class="px-6 py-4">
                        
                         ' . ($isEditable ? "<input class='formInputData' name='role' disabled style='max-width:80px'  margin-left:0' value=" . $row["role"] . ">" : $row["role"]) . '
                    </td>
                     <td class="px-6 py-4">
                        
                         ' . ($isEditable ? "<input class='formInputData' name='updataed_by' disabled style='max-width:80px'  margin-left:0' value=" . $row["updataed_by"] . ">" : $row["updataed_by"]) . '
                    </td> <td class="px-6 py-4">
                         ' . ($isEditable ? "<input class='formInputData' name='createdBy' disabled style='max-width:80px'  margin-left:0' value=" . $row["createdBy"] . ">" : $row["createdBy"]) . '
                    </td>  

                    <td class="px-6 py-4 text-right">
                         <a onclick ="enableItem(event,rowId' . $row["user_id"] . ')" class="font-medium text-blue-600 dark:text-blue-500 hover:underline">Edit</a>
                    <button id=rowId' . $row["user_id"] . ' name="update_data" class="hidden inline-flex mr-2 ml-20 items-center py-2.5 px-3 ms-2 text-sm font-medium text-white bg-blue-700 rounded-lg border border-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800" onclick="">
                      Update</button>
                    </td>


                     <td class="px-6 py-4 text-right">
                         <a onclick ="showRolesBox(event)" data-modal-target="authentication-modal" data-modal-toggle="authentication-modal" class="font-medium text-blue-600 dark:text-blue-500 hover:underline">Edit user roles</a>
                  
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
        document.getElementById("roleUserId").value = userIsSelected

    }


    const openNewAdminBox = () => {

        newUserAdmin.style.display = "block"



    }
</script>


<script src="https://cdn.jsdelivr.net/npm/flowbite@2.4.1/dist/flowbite.min.js"></script>


</html>