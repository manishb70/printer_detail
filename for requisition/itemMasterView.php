<?php

include("../db.php");


$isEditable = false;



$sql = "select * from itemmaster";










$result = mysqli_query($con, $sql);



if ($_SERVER['REQUEST_METHOD'] == "GET") {



    if (isset($_GET["search_query"])) {
        $query = $_GET["search_query"];

        $sql = "SELECT * FROM  requisition_table  where department_name ='$query' or item_name ='$query' or status='$query'  or S_no ='$query'or department_id ='$$query%'or requisition_type ='$query'or quantity ='$query' or user_remarks ='$query' or price ='$query' or handover_over_by ='$query' or record_id ='$query'  ";

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
                    item_code
                </th>
                <th scope="col" class="px-6 py-3">
                    Item_Category
                </th>
                <th scope="col" class="px-6 py-3">
                    Item_Name
                </th>
                <th scope="col" class="px-6 py-3">
                    sub_category
                </th>
                <th scope="col" class="px-6 py-3">
                    Item_Type
                </th>
                <th scope="col" class="px-6 py-3">
                    Quantity
                </th>
                <th scope="col" class="px-6 py-3">
                    Material
                </th>

                <th scope="col" class="px-6 py-3">
                    Design
                </th>
                <th scope="col" class="px-6 py-3">
                    Finish_type
                </th>
                <th scope="col" class="px-6 py-3">
                    Half_Full_Thread
                </th>
                <th scope="col" class="px-6 py-3">
                    Holder_Thread
                </th>
                <th scope="col" class="px-6 py-3">
                    Holder_type
                </th>
                <th scope="col" class="px-6 py-3">
                    Thread
                </th>
                <th scope="col" class="px-6 py-3">
                    Brand
                </th>
                <th scope="col" class="px-6 py-3">
                    Light_Output_colour
                </th>
                <th scope="col" class="px-6 py-3">
                    Colour
                </th>
                <th scope="col" class="px-6 py-3">
                    Cut
                </th>

                <th scope="col" class="px-6 py-3">
                    Height
                </th>

                <th scope="col" class="px-6 py-3">
                    Length
                </th>
                <th scope="col" class="px-6 py-3">
                    Breadth
                </th>
                <th scope="col" class="px-6 py-3">
                    Upper_Dia
                </th>
                <th scope="col" class="px-6 py-3">
                    Bottom_Dia
                </th>
                <th scope="col" class="px-6 py-3">
                    Centre_Hole_dia
                </th>
                <th scope="col" class="px-6 py-3">
                    Size
                </th>
                <th scope="col" class="px-6 py-3">
                    watt
                </th>
                <th scope="col" class="px-6 py-3">
                    Shape
                </th>
                <th scope="col" class="px-6 py-3">
                    Side_Hole_dia
                </th>
                <th scope="col" class="px-6 py-3">
                    Top_hole_dia
                </th>
                <th scope="col" class="px-6 py-3">
                    No_of_ply
                </th>
                <th scope="col" class="px-6 py-3">
                    Style
                </th>
                <th scope="col" class="px-6 py-3">
                    Thickness
                </th>
                <th scope="col" class="px-6 py-3">
                    Weight
                </th>
                <th scope="col" class="px-6 py-3">
                    Depth
                </th>
                <th scope="col" class="px-6 py-3">
                    Bottom_hole_dia
                </th>
                <th scope="col" class="px-6 py-3">
                    Bottom_hole
                </th>
                <th scope="col" class="px-6 py-3">
                    Core
                </th>
                <th scope="col" class="px-6 py-3">
                    Inner_Outer_thread
                </th>
                <th scope="col" class="px-6 py-3">
                    Upper_thread
                </th>
                <th scope="col" class="px-6 py-3">
                    Lower_thread
                </th>
                <th scope="col" class="px-6 py-3">
                    Thread_length
                </th>
                <th scope="col" class="px-6 py-3">
                    Indian_Imported
                </th>
                <th scope="col" class="px-6 py-3">
                    In_built_switch
                </th>
                <th scope="col" class="px-6 py-3">
                    Wire_type
                </th>
                <th scope="col" class="px-6 py-3">
                    vendor
                </th>
                <th scope="col" class="px-6 py-3">
                    attribute1
                </th>
                <th scope="col" class="px-6 py-3">
                    attribute2
                </th>
                <th scope="col" class="px-6 py-3">
                    attribute3
                </th>
                <th scope="col" class="px-6 py-3">
                    itemmastercol
                </th>
                <th scope="col" class="px-6 py-3">
                    imagePath
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
                        ' . ($isEditable ? "<input class='formInputData'  name='user_id' disabled style='max-width:80px' id=" . $row["S_No"] . "  margin-left:0' value=" . $row["S_No"] . ">" : $row["S_No"]) . '
                    </th>
                    <td class=px-6 py-4">
                        ' . ($isEditable ? "<input class='formInputData' name='name_of_company' disabled style='max-width:80px'  margin-left:0' value=" . $row["item_code"] . ">" : $row["item_code"]) . '
                    </td>
                    <td class="px-6 py-4">
                    
                         ' . ($isEditable ? "<input class='formInputData' name='created_date' disabled style='max-width:80px'  margin-left:0' value=" . $row["Item_Category"] . ">" : $row["Item_Category"]) . '
                    </td>
                    <td class="px-6 py-4">
                        ' . ($isEditable ? "<input class='formInputData' name='department_name' disabled style='max-width:80px'  margin-left:0' value=" . $row["Item_Name"] . ">" : $row["Item_Name"]) . '
                    </td>
                    <td class="px-6 py-4">
                        ' . ($isEditable ? "<input class='formInputData' name='department_id' disabled style='max-width:80px'  margin-left:0' value=" . $row["sub_category"] . ">" : $row["sub_category"]) . '
                    </td>
                    <td class="px-6 py-4">
                         ' . ($isEditable ? "<input class='formInputData' name='requisition_type' disabled style='max-width:80px'  margin-left:0' value=" . $row["Item_Type"] . ">" : $row["Item_Type"]) . '
                    </td>
                    <td class="px-6 py-4">
                        ' . ($isEditable ? "<input  type='txt' class='formInputData' name='requisition_id' disabled style='max-width:80px'  margin-left:0' value=" . $row["Quantity"] . ">" : $row["Quantity"]) . '
                    </td>
                    <td class="px-6 py-4">
                       
                         ' . ($isEditable ? "<input class='formInputData' name='project_id' disabled style='max-width:80px'  margin-left:0' value=" . $row["Material"] . ">" : $row["Material"]) . '
                    </td>
                    <td class="px-6 py-4">
                       
                         ' . ($isEditable ? "<input class='formInputData' id='item_name' name='item_name' disabled style='max-width:80px'  margin-left:0' value=" . $row["Design"] . ">" : $row["Design"]) . '
                    </td>
                    <td class="px-6 py-4">
                       
                         ' . ($isEditable ? "<input class='formInputData' name='bank_branch_name' disabled style='max-width:80px'  margin-left:0' value=" . $row["Finish_type"] . ">" : $row["Finish_type"]) . '
                    </td>
                    <td class="px-6 py-4">
                       
                         ' . ($isEditable ? "<input class='formInputData' name='bank_branch_name' disabled style='max-width:80px'  margin-left:0' value=" . $row["Half_Full_Thread"] . ">" : $row["Half_Full_Thread"]) . '
                    </td>
                    <td class="px-6 py-4">
                       
                         ' . ($isEditable ? "<input class='formInputData' id='user_remarks' name='user_remarks' disabled style='max-width:80px'  margin-left:0' value=" . $row["Holder_Thread"] . ">" : $row["Holder_Thread"]) . '
                    </td>
                    <td class="px-6 py-4">
                       
                         ' . ($isEditable ? "<input class='formInputData' name='bank_branch_name' disabled style='max-width:80px'  margin-left:0' value=" . $row["Holder_type"] . ">" : $row["Holder_type"]) . '
                    </td>
                    <td class="px-6 py-4">
                       
                         ' . ($isEditable ? "<input class='formInputData' name='bank_branch_name' disabled style='max-width:80px'  margin-left:0' value=" . $row["Thread"] . ">" : $row["Thread"]) . '
                    </td>
                    <td class="px-6 py-4">
                       
                         ' . ($isEditable ? "<input class='formInputData' name='bank_branch_name' disabled style='max-width:80px'  margin-left:0' value=" . $row["Brand"] . ">" : $row["Brand"]) . '
                    </td>
                    <td class="px-6 py-4">
                       
                         ' . ($isEditable ? "<input class='formInputData' name='status' id='status'  disabled style='max-width:80px'  margin-left:0' value=" . $row["Light_Output_colour"] . ">" : $row["Light_Output_colour"]) . '
                    </td>
                    <td class="px-6 py-4">
                       
                         ' . ($isEditable ? "<input class='formInputData' name='bank_branch_name' disabled style='max-width:80px'  margin-left:0' value=" . $row["Colour"] . ">" : $row["Colour"]) . '
                    </td>
                    <td class="px-6 py-4">
                       
                         ' . ($isEditable ? "<input class='formInputData' name='bank_branch_name' disabled style='max-width:80px'  margin-left:0' value=" . $row["Cut"] . ">" : $row["Cut"]) . '
                    </td>

                       <td class="px-6 py-4">
                       
                         ' . ($isEditable ? "<input class='formInputData' name='bank_branch_name' disabled style='max-width:80px'  margin-left:0' value=" . $row["Height"] . ">" : $row["Height"]) . '
                    </td>   <td class="px-6 py-4">
                       
                         ' . ($isEditable ? "<input class='formInputData' name='bank_branch_name' disabled style='max-width:80px'  margin-left:0' value=" . $row["Length"] . ">" : $row["Length"]) . '
                    </td>
                  <td class="px-6 py-4">
                       
                         ' . ($isEditable ? "<input class='formInputData' name='bank_branch_name' disabled style='max-width:80px'  margin-left:0' value=" . $row["Breadth"] . ">" : $row["Breadth"]) . '
                    </td>
                    </td>   <td class="px-6 py-4">
                       
                         ' . ($isEditable ? "<input class='formInputData' name='bank_branch_name' disabled style='max-width:80px'  margin-left:0' value=" . $row["Upper_Dia"] . ">" : $row["Upper_Dia"]) . '
                    </td>
                    </td>   <td class="px-6 py-4">
                       
                         ' . ($isEditable ? "<input class='formInputData' name='bank_branch_name' disabled style='max-width:80px'  margin-left:0' value=" . $row["Bottom_Dia"] . ">" : $row["Bottom_Dia"]) . '
                    </td>
                    </td>   <td class="px-6 py-4">
                       
                         ' . ($isEditable ? "<input class='formInputData' name='bank_branch_name' disabled style='max-width:80px'  margin-left:0' value=" . $row["Centre_Hole_dia"] . ">" : $row["Centre_Hole_dia"]) . '
                    </td>
                    </td>   <td class="px-6 py-4">
                       
                         ' . ($isEditable ? "<input class='formInputData' name='bank_branch_name' disabled style='max-width:80px'  margin-left:0' value=" . $row["Size"] . ">" : $row["Size"]) . '
                    </td>
                    </td>   <td class="px-6 py-4">
                       
                         ' . ($isEditable ? "<input class='formInputData' name='bank_branch_name' disabled style='max-width:80px'  margin-left:0' value=" . $row["watt"] . ">" : $row["watt"]) . '
                    </td>
                    </td>   <td class="px-6 py-4">
                       
                         ' . ($isEditable ? "<input class='formInputData' name='bank_branch_name' disabled style='max-width:80px'  margin-left:0' value=" . $row["Shape"] . ">" : $row["Shape"]) . '
                    </td>
                    </td>   <td class="px-6 py-4">
                       
                         ' . ($isEditable ? "<input class='formInputData' name='bank_branch_name' disabled style='max-width:80px'  margin-left:0' value=" . $row["Side_Hole_dia"] . ">" : $row["Side_Hole_dia"]) . '
                    
                    </td>   <td class="px-6 py-4">
                       
                         ' . ($isEditable ? "<input class='formInputData' name='bank_branch_name' disabled style='max-width:80px'  margin-left:0' value=" . $row["Top_hole_dia"] . ">" : $row["Top_hole_dia"]) . '
                    
                    </td>   <td class="px-6 py-4">
                       
                         ' . ($isEditable ? "<input class='formInputData' name='bank_branch_name' disabled style='max-width:80px'  margin-left:0' value=" . $row["No_of_ply"] . ">" : $row["No_of_ply"]) . '
                
                    </td>   <td class="px-6 py-4">
                       
                         ' . ($isEditable ? "<input class='formInputData' name='bank_branch_name' disabled style='max-width:80px'  margin-left:0' value=" . $row["Style"] . ">" : $row["Style"]) . '
                    </td>
                    
                     <td class="px-6 py-4">
                       
                         ' . ($isEditable ? "<input class='formInputData' name='bank_branch_name' disabled style='max-width:80px'  margin-left:0' value=" . $row["Thickness"] . ">" : $row["Thickness"]) . '
                    </td>
                    
                      <td class="px-6 py-4">
                       
                         ' . ($isEditable ? "<input class='formInputData' name='bank_branch_name' disabled style='max-width:80px'  margin-left:0' value=" . $row["Weight"] . ">" : $row["Weight"]) . '
                    </td>
                     <td class="px-6 py-4">
                       
                         ' . ($isEditable ? "<input class='formInputData' name='bank_branch_name' disabled style='max-width:80px'  margin-left:0' value=" . $row["Depth"] . ">" : $row["Depth"]) . '
                    </td>
                     <td class="px-6 py-4">
                       
                         ' . ($isEditable ? "<input class='formInputData' name='bank_branch_name' disabled style='max-width:80px'  margin-left:0' value=" . $row["Bottom_hole_dia"] . ">" : $row["Bottom_hole_dia"]) . '
                    </td>
                     <td class="px-6 py-4">
                       
                         ' . ($isEditable ? "<input class='formInputData' name='bank_branch_name' disabled style='max-width:80px'  margin-left:0' value=" . $row["Bottom_hole"] . ">" : $row["Bottom_hole"]) . '
                    </td>
                     <td class="px-6 py-4">
                       
                         ' . ($isEditable ? "<input class='formInputData' name='bank_branch_name' disabled style='max-width:80px'  margin-left:0' value=" . $row["Core"] . ">" : $row["Core"]) . '
                    </td>
                     <td class="px-6 py-4">
                       
                         ' . ($isEditable ? "<input class='formInputData' name='bank_branch_name' disabled style='max-width:80px'  margin-left:0' value=" . $row["Inner_Outer_thread"] . ">" : $row["Inner_Outer_thread"]) . '
                    </td>
                     <td class="px-6 py-4">
                       
                         ' . ($isEditable ? "<input class='formInputData' name='bank_branch_name' disabled style='max-width:80px'  margin-left:0' value=" . $row["Upper_thread"] . ">" : $row["Upper_thread"]) . '
                    </td>
                     <td class="px-6 py-4">
                       
                         ' . ($isEditable ? "<input class='formInputData' name='bank_branch_name' disabled style='max-width:80px'  margin-left:0' value=" . $row["Lower_thread"] . ">" : $row["Lower_thread"]) . '
                    </td>
                     <td class="px-6 py-4">
                       
                         ' . ($isEditable ? "<input class='formInputData' name='bank_branch_name' disabled style='max-width:80px'  margin-left:0' value=" . $row["Thread_length"] . ">" : $row["Thread_length"]) . '
                    </td>
                     <td class="px-6 py-4">
                       
                         ' . ($isEditable ? "<input class='formInputData' name='bank_branch_name' disabled style='max-width:80px'  margin-left:0' value=" . $row["Indian_Imported"] . ">" : $row["Indian_Imported"]) . '
                    </td>
                     <td class="px-6 py-4">
                       
                         ' . ($isEditable ? "<input class='formInputData' name='bank_branch_name' disabled style='max-width:80px'  margin-left:0' value=" . $row["In_built_switch"] . ">" : $row["In_built_switch"]) . '
                    </td>
                     <td class="px-6 py-4">
                       
                         ' . ($isEditable ? "<input class='formInputData' name='bank_branch_name' disabled style='max-width:80px'  margin-left:0' value=" . $row["Wire_type"] . ">" : $row["Wire_type"]) . '
                    </td>
                     <td class="px-6 py-4">
                       
                         ' . ($isEditable ? "<input class='formInputData' name='bank_branch_name' disabled style='max-width:80px'  margin-left:0' value=" . $row["vendor"] . ">" : $row["vendor"]) . '
                    </td>
                     <td class="px-6 py-4">
                       
                         ' . ($isEditable ? "<input class='formInputData' name='bank_branch_name' disabled style='max-width:80px'  margin-left:0' value=" . $row["attribute1"] . ">" : $row["attribute1"]) . '
                    </td>
                     <td class="px-6 py-4">
                       
                         ' . ($isEditable ? "<input class='formInputData' name='bank_branch_name' disabled style='max-width:80px'  margin-left:0' value=" . $row["attribute2"] . ">" : $row["attribute2"]) . '
                    </td>
                     <td class="px-6 py-4">
                       
                         ' . ($isEditable ? "<input class='formInputData' name='bank_branch_name' disabled style='max-width:80px'  margin-left:0' value=" . $row["attribute3"] . ">" : $row["attribute3"]) . '
                    </td>
                     <td class="px-6 py-4">
                       
                         ' . ($isEditable ? "<input class='formInputData' name='bank_branch_name' disabled style='max-width:80px'  margin-left:0' value=" . $row["itemmastercol"] . ">" : $row["itemmastercol"]) . '
                    </td>
                     <td class="px-6 py-4">
                       
                         ' . ($isEditable ? "<input class='formInputData' name='bank_branch_name' disabled style='max-width:80px'  margin-left:0' value=" . $row["imagePath"] . ">" : $row["imagePath"]) . '
                    </td>
                
                   
                     


                    
                </tr>
                    
        
                    
                ';
                }  ?>

            </tbody>
        </table>
    </div>
















</body>


<script src="https://cdn.jsdelivr.net/npm/flowbite@2.4.1/dist/flowbite.min.js"></script>
<script src="./js/scripts.js"></script>
<script src="./js/jquery.min.js"></script>


</html>