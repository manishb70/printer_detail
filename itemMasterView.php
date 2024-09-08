<?php
// include("../db.php");
include('./dbconnection/db.php');


// $sql =  "SELECT * FROM for_office.electrical_catinfo a
// join for_office.itemmastercategory b ON a.category_name = b.categoryId 
// join for_office.sub_category c ON a.sub_category = c.subCatId; ";


// $sql = "SELECT * FROM for_office.item_master_temp a
// join for_office.itemmastercategory b ON a.Item_Category = b.categoryId 
// join for_office.sub_category c ON a.sub_category = c.subCatId;";


$sql = "SELECT * FROM for_office.item_master_temp ;";



$result = mysqli_query($con, $sql);








if ($_SERVER['REQUEST_METHOD'] == 'GET') {


    if (isset($_GET["search_query"])) {


        $search_query = $_GET['search_query'];






        // $sql ="SELECT * FROM for_office.electrical_catinfo a
        //         join for_office.itemmastercategory b ON a.category_name = b.categoryId 
        //         join for_office.sub_category c ON a.sub_category = c.subCatId 
        //         where 
        //         S.No='$search_query' or category_name ='$search_query' or sub_category='$search_query' or

        //         Item_code='$search_query' or short_description='$search_query' or Size='$search_query' or Watt='$search_query' or 
        //         Colour = '$search_query' or Shape='$search_query' or Brand='$search_query' or Light_output_Colour='$search_query' or 
        //         Vendor='$search_query' or  Description='$search_query' or  Price='$search_query',
        //         Length='$search_query' or Material='$search_query' or  WireType='$search_query' or  In_Builtswitch='$search_query' or
        //         Pintop='$search_query' or
        //         Holdertype='$search_query'
        //         or Discount='$search_query' or  Images='$search_query' or  cat_id ='$search_query' or status='$search_query' or
        //         cut='$search_query' or  categoryId='$search_query' or catagory_name or '$search_query'or  subCatId='$search_query'
        //             or catId='$search_query' or   name='$search_query' ";



        // $sql = "SELECT * FROM for_office.electrical_catinfo a
        // JOIN for_office.itemmastercategory b ON a.category_name = b.categoryId 
        // JOIN for_office.sub_category c ON a.sub_category = c.subCatId 
        // WHERE 
        // `S.No` = '$search_query' OR 
        // a.category_name = '$search_query' OR 
        // a.sub_category = '$search_query' OR
        // Item_code = '$search_query' OR 
        // short_description = '$search_query' OR 
        // Size = '$search_query' OR 
        // Watt = '$search_query' OR 
        // Colour = '$search_query' OR 
        // Shape = '$search_query' OR 
        // Brand = '$search_query' OR 
        // Light_output_Colour = '$search_query' OR 
        // Vendor = '$search_query' OR  
        // Description = '$search_query' OR  
        // Price = '$search_query' OR
        // Length = '$search_query' OR 
        // Material = '$search_query' OR  
        // WireType = '$search_query' OR  
        // In_Builtswitch = '$search_query' OR
        // Pintop = '$search_query' OR
        // Holdertype = '$search_query' OR 
        // Discount = '$search_query' OR  
        // Images = '$search_query' OR  
        // cat_id = '$search_query' OR 
        // status = '$search_query' OR
        // cut = '$search_query' OR  
        // categoryId = '$search_query' OR 
        // category_name = '$search_query' OR
        // subCatId = '$search_query' OR  
        // catId = '$search_query' OR   
        // name = '$search_query'";


//         $sql = "SELECT * FROM for_office.item_master_temp a
// join for_office.itemmastercategory b ON a.Item_Category = b.categoryId 
// join for_office.sub_category c ON a.sub_category = c.subCatId where a.S_No=$search_query;";
        

        $sql = "SELECT * FROM for_office.item_master_temp where S_No=$search_query ";
        
        
            echo $search_query;
        $result = mysqli_query($con, $sql);
    }
}







?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.0.4/dist/tailwind.min.css" rel="stylesheet">
    <title>Document</title>
</head>

<body
    style=" margin-top:8rem;"
    class="font-sans ">


    <?php


    include("./navForLogged.php");



    ?>

    <div>


        <form class="flex items-center  mb-4  max-w-lg mx-auto" method="GET">
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


    <div
        style="width: 90%;"
        class="relative mx-auto   overflow-x-auto shadow-md sm:rounded-lg">
        <table



            class=" text-sm mx-auto text-left border-2-black rtl:text-right text-gray-500 dark:text-gray-400">
            <thead class="text-xs text-gray-700 uppercase bg-blue-300 dark:bg-gray-700 dark:text-gray-400">
                <tr>
                    <th scope="col" class="px-5 py-2">
                        S no
                    </th>
                    <th scope="col" class="px-5 py-2">
                        Item_code
                    </th>
                    <th scope="col" class="px-5 py-2">
                        Category name
                    </th>
                    <th scope="col" class="px-5 py-2">
                        sub Category
                    </th>

                    <th scope="col" class="px-5 py-2">
                        short_description
                    </th>
         
            
                    <th scope="col" class="px-5 py-2">
                        price
                    </th>
                    <th scope="col" class="px-5 py-2">
                        si_unit
                    </th>
                    <th scope="col" class="px-5 py-2">
                        Material
                    </th>
                    <th scope="col" class="px-5 py-2">
                        Design
                    </th>
                    <th scope="col" class="px-5 py-2">
                        Finish_type
                    </th>
                    <th scope="col" class="px-5 py-2">
                        Half_Full_Thread
                    </th>
                    <th scope="col" class="px-5 py-2">
                        Holder_Thread
                    </th>
                    <th scope="col" class="px-5 py-2">
                        Holder_type
                    </th>
                    <th scope="col" class="px-5 py-2">
                        Thread
                    </th>
                    <th scope="col" class="px-5 py-2">
                        Brand
                    </th>
                    <th scope="col" class="px-5 py-2">
                        Light_Output_colour
                    </th>
                    <th scope="col" class="px-5 py-2">
                        Colour
                    </th>
                    <th scope="col" class="px-5 py-2">
                        Cut
                    </th>
                    <th scope="col" class="px-5 py-2">
                        Height
                    </th>
                    <th scope="col" class="px-5 py-2">
                        Length
                    </th>
                    <th scope="col" class="px-5 py-2">
                        Breadth
                    </th>
                    <th scope="col" class="px-5 py-2">
                        Upper_Dia
                    </th>
                    <th scope="col" class="px-5 py-2">
                        Bottom_Dia
                    </th>
                    <th scope="col" class="px-5 py-2">
                        Centre_Hole_dia
                    </th>
                    <th scope="col" class="px-5 py-2">
                        Size
                    </th>
                    <th scope="col" class="px-5 py-2">
                        watt
                    </th>
                    <th scope="col" class="px-5 py-2">
                        Shape
                    </th>
                    <th scope="col" class="px-5 py-2">
                        Side_Hole_dia
                    </th>
                    <th scope="col" class="px-5 py-2">
                        Top_hole_dia
                    </th>
                    <th scope="col" class="px-5 py-2">
                        No_of_ply
                    </th>
                    <th scope="col" class="px-5 py-2">
                        Style
                    </th>
                    <th scope="col" class="px-5 py-2">
                        Thickness
                    </th>
                    <th scope="col" class="px-5 py-2">
                        Weight
                    </th>
                    <th scope="col" class="px-5 py-2">
                        Depth
                    </th>
                    <th scope="col" class="px-5 py-2">
                        Bottom_hole_dia
                    </th>
                    <th scope="col" class="px-5 py-2">
                        Bottom_hole
                    </th>
                    <th scope="col" class="px-5 py-2">
                        Bottom_hole
                    </th>
                    <th scope="col" class="px-5 py-2">
                        Core
                    </th>
                    <th scope="col" class="px-5 py-2">
                        Inner_Outer_thread
                    </th>
                    <th scope="col" class="px-5 py-2">
                        Upper_thread
                    </th>
                    <th scope="col" class="px-5 py-2">
                        Lower_thread
                    </th>
                    <th scope="col" class="px-5 py-2">
                        Thread_length
                    </th>
                    <th scope="col" class="px-5 py-2">
                        Thread_length
                    </th>
                    <th scope="col" class="px-5 py-2">
                        Indian_Imported
                    </th>
                    <th scope="col" class="px-5 py-2">
                        In_built_switch
                    </th>
                    <th scope="col" class="px-5 py-2">
                        vendor
                    </th>
                    <th scope="col" class="px-5 py-2">
                        attribute1
                    </th>
                    <th scope="col" class="px-5 py-2">
                        attribute2
                    </th>
                    <th scope="col" class="px-5 py-2">
                        attribute3
                    </th>
                    <th scope="col" class="px-5 py-2">
                        createdBy
                    </th>
                    <th scope="col" class="px-5 py-2">
                        updatedBy
                    </th>
                    <th scope="col" class="px-5 py-2">
                        departement
                    </th>
                    <th scope="col" class="px-5 py-2">
                        updatedDate
                    </th>
                    <th scope="col" class="px-5 py-2">
                        long_discription
                    </th>
                    <th scope="col" class="px-5 py-2">
                        Pintop
                    </th>
                    <th scope="col" class="px-5 py-2">
                        Discount
                    </th>
                    <th scope="col" class="px-5 py-2">
                        itemStatus
                    </th>
                    <th scope="col" class="px-5 py-2">
                        createdDate
                    </th>
                    <th scope="col" class="px-5 py-2">
                        fabric
                    </th>
                    <th scope="col" class="px-5 py-2">
                        piping
                    </th>
                    <th scope="col" class="px-5 py-2">
                        piping_color
                    </th>
                    <th scope="col" class="px-5 py-2">
                        acrylic_diffuser
                    </th>
                    <th scope="col" class="px-5 py-2">
                        gallery_heght
                    </th>
                    <th scope="col" class="px-5 py-2">
                        sheet
                    </th>
                    <th scope="col" class="px-5 py-2">
                        sheet_color
                    </th>
                    <th scope="col" class="px-5 py-2">
                        powder_coating
                    </th>
                    <th scope="col" class="px-5 py-2">
                        subCatId
                    </th>
                    <th scope="col" class="px-5 py-2">
                        Image
                    </th>
                    <th scope="col" class="px-5 py-2">
                        itemStatus
                    </th>


                </tr>
            </thead>
            <tbody>



                <?php



                if (mysqli_num_rows($result) > 0) {


                    while ($row = mysqli_fetch_assoc($result)) {



                ?>


                        <tr class=" text-black border-b dark:bg-gray-800 dark:border-gray-700">
                            <th scope="row" class="px-5 py-2 font-medium  whitespace-nowrap dark:text-white">
                                <?php echo $row["S_No"]; ?>

                            </th>
                            <td class="px-5 py-2">

                                <input
                                    name="item_code"
                                    disabled
                                    class=" bg-transparent w-auto text-blue-gray-700 font-sans font-normal outline outline-0 focus:outline-0 disabled:bg-blue-gray-50 disabled:border-0 transition-all placeholder-shown:border placeholder-shown:border-blue-gray-200 placeholder-shown:border-t-blue-gray-200 border focus:border-2 border-t-transparent focus:border-t-transparent text-sm px-5 py-2.5 rounded-[7px] border-blue-gray-200 focus:border-gray-900"
                                    value="<?php echo $row["item_code"] ?>"
                                    placeholder=" ">

                            </td>
                            <td class="px-5 py-2">

                                <input
                                    name="Item_Category"
                                    disabled
                                    class=" bg-transparent w-auto text-blue-gray-700 font-sans font-normal outline outline-0 focus:outline-0 disabled:bg-blue-gray-50 disabled:border-0 transition-all placeholder-shown:border placeholder-shown:border-blue-gray-200 placeholder-shown:border-t-blue-gray-200 border focus:border-2 border-t-transparent focus:border-t-transparent text-sm px-5 py-2.5 rounded-[7px] border-blue-gray-200 focus:border-gray-900"
                                    value="<?php echo $row["Item_Category"] ?>"
                                    placeholder=" ">

                            </td>
                            <td class="px-5 py-2">
                                <input
                                    name="sub_category"
                                    disabled
                                    class=" bg-transparent text-blue-gray-700 font-sans font-normal outline outline-0 focus:outline-0 disabled:bg-blue-gray-50 disabled:border-0 transition-all placeholder-shown:border placeholder-shown:border-blue-gray-200 placeholder-shown:border-t-blue-gray-200 border focus:border-2 border-t-transparent focus:border-t-transparent text-sm px-5 py-2.5 rounded-[7px] border-blue-gray-200 focus:border-gray-900"
                          
                                    value="<?php echo $row["sub_category"] ?>"
                                    placeholder=" ">

                            </td>
                            <td class="px-5 py-2">
                                <input
                                    name="short_discrption"
                                    disabled
                                    class=" bg-transparent text-blue-gray-700 font-sans font-normal outline outline-0 focus:outline-0 disabled:bg-blue-gray-50 disabled:border-0 transition-all placeholder-shown:border placeholder-shown:border-blue-gray-200 placeholder-shown:border-t-blue-gray-200 border focus:border-2 border-t-transparent focus:border-t-transparent text-sm px-5 py-2.5 rounded-[7px] border-blue-gray-200 focus:border-gray-900"
                                    value="<?php echo $row["short_discrption"] ?>"
                                    placeholder=" ">
                            </td>
                            <td class="px-5 py-2">
                                <input
                                    name="price"
                                    disabled
                                    class=" bg-transparent text-blue-gray-700 font-sans font-normal outline outline-0 focus:outline-0 disabled:bg-blue-gray-50 disabled:border-0 transition-all placeholder-shown:border placeholder-shown:border-blue-gray-200 placeholder-shown:border-t-blue-gray-200 border focus:border-2 border-t-transparent focus:border-t-transparent text-sm px-5 py-2.5 rounded-[7px] border-blue-gray-200 focus:border-gray-900"
                                    value="<?php echo $row["price"] ?>"
                                    placeholder=" ">

                            </td>
                            <td class="px-5 py-2">

                                <input
                                    name="si_unit"
                                    disabled
                                    class=" bg-transparent text-blue-gray-700 font-sans font-normal outline outline-0 focus:outline-0 disabled:bg-blue-gray-50 disabled:border-0 transition-all placeholder-shown:border placeholder-shown:border-blue-gray-200 placeholder-shown:border-t-blue-gray-200 border focus:border-2 border-t-transparent focus:border-t-transparent text-sm px-5 py-2.5 rounded-[7px] border-blue-gray-200 focus:border-gray-900"
                                    value="<?php echo $row["si_unit"] ?>"
                                    placeholder=" ">
                            </td>
                            <td class="px-5 py-2">

                                <input
                                    name="Material"
                                    disabled
                                    class=" bg-transparent text-blue-gray-700 font-sans font-normal outline outline-0 focus:outline-0 disabled:bg-blue-gray-50 disabled:border-0 transition-all placeholder-shown:border placeholder-shown:border-blue-gray-200 placeholder-shown:border-t-blue-gray-200 border focus:border-2 border-t-transparent focus:border-t-transparent text-sm px-5 py-2.5 rounded-[7px] border-blue-gray-200 focus:border-gray-900"
                                    value="<?php echo $row["Material"] ?>"
                                    placeholder=" ">
                            </td>
                            <td class="px-5 py-2">

                                <input
                                    name="Design"
                                    disabled
                                    class=" bg-transparent text-blue-gray-700 font-sans font-normal outline outline-0 focus:outline-0 disabled:bg-blue-gray-50 disabled:border-0 transition-all placeholder-shown:border placeholder-shown:border-blue-gray-200 placeholder-shown:border-t-blue-gray-200 border focus:border-2 border-t-transparent focus:border-t-transparent text-sm px-5 py-2.5 rounded-[7px] border-blue-gray-200 focus:border-gray-900"
                                    value="<?php echo $row["Design"] ?>"
                                    placeholder=" ">
                            </td>
                            <td class="px-5 py-2">

                                <input
                                    name="Finish_type"
                                    disabled
                                    class=" bg-transparent text-blue-gray-700 font-sans font-normal outline outline-0 focus:outline-0 disabled:bg-blue-gray-50 disabled:border-0 transition-all placeholder-shown:border placeholder-shown:border-blue-gray-200 placeholder-shown:border-t-blue-gray-200 border focus:border-2 border-t-transparent focus:border-t-transparent text-sm px-5 py-2.5 rounded-[7px] border-blue-gray-200 focus:border-gray-900"
                                    value="<?php echo $row["Finish_type"] ?>"
                                    placeholder=" ">
                            </td>
                            <td class="px-5 py-2">

                                <input
                                    name="Half_Full_Thread"
                                    disabled
                                    class=" bg-transparent text-blue-gray-700 font-sans font-normal outline outline-0 focus:outline-0 disabled:bg-blue-gray-50 disabled:border-0 transition-all placeholder-shown:border placeholder-shown:border-blue-gray-200 placeholder-shown:border-t-blue-gray-200 border focus:border-2 border-t-transparent focus:border-t-transparent text-sm px-5 py-2.5 rounded-[7px] border-blue-gray-200 focus:border-gray-900"
                                    value="<?php echo $row["Half_Full_Thread"] ?>"
                                    placeholder=" ">
                            </td>
                            <td class="px-5 py-2">

                                <input
                                    name="Holder_Thread"
                                    disabled
                                    class=" bg-transparent text-blue-gray-700 font-sans font-normal outline outline-0 focus:outline-0 disabled:bg-blue-gray-50 disabled:border-0 transition-all placeholder-shown:border placeholder-shown:border-blue-gray-200 placeholder-shown:border-t-blue-gray-200 border focus:border-2 border-t-transparent focus:border-t-transparent text-sm px-5 py-2.5 rounded-[7px] border-blue-gray-200 focus:border-gray-900"
                                    value="<?php echo $row["Holder_Thread"] ?>"
                                    placeholder=" ">
                            </td>
                            <td class="px-5 py-2">

                                <input
                                    name="Holder_type"
                                    disabled
                                    class=" bg-transparent text-blue-gray-700 font-sans font-normal outline outline-0 focus:outline-0 disabled:bg-blue-gray-50 disabled:border-0 transition-all placeholder-shown:border placeholder-shown:border-blue-gray-200 placeholder-shown:border-t-blue-gray-200 border focus:border-2 border-t-transparent focus:border-t-transparent text-sm px-5 py-2.5 rounded-[7px] border-blue-gray-200 focus:border-gray-900"
                                    value="<?php echo $row["Holder_type"] ?>"
                                    placeholder=" ">
                            </td>
                            <td class="px-5 py-2">

                                <input
                                    name="Thread"
                                    disabled
                                    class=" bg-transparent text-blue-gray-700 font-sans font-normal outline outline-0 focus:outline-0 disabled:bg-blue-gray-50 disabled:border-0 transition-all placeholder-shown:border placeholder-shown:border-blue-gray-200 placeholder-shown:border-t-blue-gray-200 border focus:border-2 border-t-transparent focus:border-t-transparent text-sm px-5 py-2.5 rounded-[7px] border-blue-gray-200 focus:border-gray-900"
                                    value="<?php echo $row["Thread"] ?>"
                                    placeholder=" ">
                            </td>
                            <td class="px-5 py-2">

                                <input
                                    name="Brand"
                                    disabled
                                    class=" bg-transparent text-blue-gray-700 font-sans font-normal outline outline-0 focus:outline-0 disabled:bg-blue-gray-50 disabled:border-0 transition-all placeholder-shown:border placeholder-shown:border-blue-gray-200 placeholder-shown:border-t-blue-gray-200 border focus:border-2 border-t-transparent focus:border-t-transparent text-sm px-5 py-2.5 rounded-[7px] border-blue-gray-200 focus:border-gray-900"
                                    value="<?php echo $row["Brand"] ?>"
                                    placeholder=" ">
                            </td>
                            <td class="px-5 py-2">

                                <input
                                    name="Light_Output_colour"
                                    disabled
                                    class=" bg-transparent text-blue-gray-700 font-sans font-normal outline outline-0 focus:outline-0 disabled:bg-blue-gray-50 disabled:border-0 transition-all placeholder-shown:border placeholder-shown:border-blue-gray-200 placeholder-shown:border-t-blue-gray-200 border focus:border-2 border-t-transparent focus:border-t-transparent text-sm px-5 py-2.5 rounded-[7px] border-blue-gray-200 focus:border-gray-900"
                                    value="<?php echo $row["Light_Output_colour"] ?>"
                                    placeholder=" ">
                            </td>
                            <td class="px-5 py-2">

                                <input
                                    name="Colour"
                                    disabled
                                    class=" bg-transparent text-blue-gray-700 font-sans font-normal outline outline-0 focus:outline-0 disabled:bg-blue-gray-50 disabled:border-0 transition-all placeholder-shown:border placeholder-shown:border-blue-gray-200 placeholder-shown:border-t-blue-gray-200 border focus:border-2 border-t-transparent focus:border-t-transparent text-sm px-5 py-2.5 rounded-[7px] border-blue-gray-200 focus:border-gray-900"
                                    value="<?php echo $row["Colour"] ?>"
                                    placeholder=" ">
                            </td>
                            <td class="px-5 py-2">

                                <input

                                    name="Cut"
                                    disabled
                                    class=" bg-transparent text-blue-gray-700 font-sans font-normal outline outline-0 focus:outline-0 disabled:bg-blue-gray-50 disabled:border-0 transition-all placeholder-shown:border placeholder-shown:border-blue-gray-200 placeholder-shown:border-t-blue-gray-200 border focus:border-2 border-t-transparent focus:border-t-transparent text-sm px-5 py-2.5 rounded-[7px] border-blue-gray-200 focus:border-gray-900"
                                    value="<?php echo $row["Cut"] ?>"
                                    placeholder=" ">
                            </td>
                            <td class="px-5 py-2">

                                <input
                                    name="Height"
                                    disabled
                                    class=" bg-transparent text-blue-gray-700 font-sans font-normal outline outline-0 focus:outline-0 disabled:bg-blue-gray-50 disabled:border-0 transition-all placeholder-shown:border placeholder-shown:border-blue-gray-200 placeholder-shown:border-t-blue-gray-200 border focus:border-2 border-t-transparent focus:border-t-transparent text-sm px-5 py-2.5 rounded-[7px] border-blue-gray-200 focus:border-gray-900"
                                    value="<?php echo $row["Height"] ?>"
                                    placeholder=" ">
                            </td>
                            <td class="px-5 py-2">

                                <input
                                    name="Length"
                                    disabled
                                    class=" bg-transparent text-blue-gray-700 font-sans font-normal outline outline-0 focus:outline-0 disabled:bg-blue-gray-50 disabled:border-0 transition-all placeholder-shown:border placeholder-shown:border-blue-gray-200 placeholder-shown:border-t-blue-gray-200 border focus:border-2 border-t-transparent focus:border-t-transparent text-sm px-5 py-2.5 rounded-[7px] border-blue-gray-200 focus:border-gray-900"
                                    value="<?php echo $row["Length"] ?>"
                                    placeholder=" ">
                            </td>
                            <td class="px-5 py-2">
                                <input
                                    name="Breadth"
                                    disabled
                                    class=" bg-transparent text-blue-gray-700 font-sans font-normal outline outline-0 focus:outline-0 disabled:bg-blue-gray-50 disabled:border-0 transition-all placeholder-shown:border placeholder-shown:border-blue-gray-200 placeholder-shown:border-t-blue-gray-200 border focus:border-2 border-t-transparent focus:border-t-transparent text-sm px-5 py-2.5 rounded-[7px] border-blue-gray-200 focus:border-gray-900"
                                    value="<?php echo $row["Breadth"] ?>"
                                    placeholder=" ">

                            </td>
                            <td class="px-5 py-2">
                                <input
                                    name="Upper_Dia"
                                    disabled
                                    class=" bg-transparent text-blue-gray-700 font-sans font-normal outline outline-0 focus:outline-0 disabled:bg-blue-gray-50 disabled:border-0 transition-all placeholder-shown:border placeholder-shown:border-blue-gray-200 placeholder-shown:border-t-blue-gray-200 border focus:border-2 border-t-transparent focus:border-t-transparent text-sm px-5 py-2.5 rounded-[7px] border-blue-gray-200 focus:border-gray-900"
                                    value="<?php echo $row["Upper_Dia"] ?>"
                                    placeholder=" ">

                            </td>

                            <td class="px-5 py-2">
                                <input
                                    name="Bottom_Dia"
                                    disabled
                                    class=" bg-transparent text-blue-gray-700 font-sans font-normal outline outline-0 focus:outline-0 disabled:bg-blue-gray-50 disabled:border-0 transition-all placeholder-shown:border placeholder-shown:border-blue-gray-200 placeholder-shown:border-t-blue-gray-200 border focus:border-2 border-t-transparent focus:border-t-transparent text-sm px-5 py-2.5 rounded-[7px] border-blue-gray-200 focus:border-gray-900"
                                    value="<?php echo $row["Bottom_Dia"] ?>"
                                    placeholder=" ">

                            </td>
                            <td class="px-5 py-2">
                                <input
                                    name="Centre_Hole_dia"
                                    disabled
                                    class=" bg-transparent text-blue-gray-700 font-sans font-normal outline outline-0 focus:outline-0 disabled:bg-blue-gray-50 disabled:border-0 transition-all placeholder-shown:border placeholder-shown:border-blue-gray-200 placeholder-shown:border-t-blue-gray-200 border focus:border-2 border-t-transparent focus:border-t-transparent text-sm px-5 py-2.5 rounded-[7px] border-blue-gray-200 focus:border-gray-900"
                                    value="<?php echo $row["Centre_Hole_dia"] ?>"
                                    placeholder=" ">

                            </td>
                            <td class="px-5 py-2">
                                <input
                                    name="Size"
                                    disabled
                                    class=" bg-transparent text-blue-gray-700 font-sans font-normal outline outline-0 focus:outline-0 disabled:bg-blue-gray-50 disabled:border-0 transition-all placeholder-shown:border placeholder-shown:border-blue-gray-200 placeholder-shown:border-t-blue-gray-200 border focus:border-2 border-t-transparent focus:border-t-transparent text-sm px-5 py-2.5 rounded-[7px] border-blue-gray-200 focus:border-gray-900"
                                    value="<?php echo $row["Size"] ?>"
                                    placeholder=" ">

                            </td>
                            <td class="px-5 py-2">
                                <input
                                    name="watt"
                                    disabled
                                    class=" bg-transparent text-blue-gray-700 font-sans font-normal outline outline-0 focus:outline-0 disabled:bg-blue-gray-50 disabled:border-0 transition-all placeholder-shown:border placeholder-shown:border-blue-gray-200 placeholder-shown:border-t-blue-gray-200 border focus:border-2 border-t-transparent focus:border-t-transparent text-sm px-5 py-2.5 rounded-[7px] border-blue-gray-200 focus:border-gray-900"
                                    value="<?php echo $row["watt"] ?>"
                                    placeholder=" ">

                            </td>
                            <td class="px-5 py-2">
                                <input
                                    name="Shape"
                                    disabled
                                    class=" bg-transparent text-blue-gray-700 font-sans font-normal outline outline-0 focus:outline-0 disabled:bg-blue-gray-50 disabled:border-0 transition-all placeholder-shown:border placeholder-shown:border-blue-gray-200 placeholder-shown:border-t-blue-gray-200 border focus:border-2 border-t-transparent focus:border-t-transparent text-sm px-5 py-2.5 rounded-[7px] border-blue-gray-200 focus:border-gray-900"
                                    value="<?php echo $row["Shape"] ?>"
                                    placeholder=" ">

                            </td>
                            <td class="px-5 py-2">
                                <input
                                    name="Side_Hole_dia"
                                    disabled
                                    class=" bg-transparent text-blue-gray-700 font-sans font-normal outline outline-0 focus:outline-0 disabled:bg-blue-gray-50 disabled:border-0 transition-all placeholder-shown:border placeholder-shown:border-blue-gray-200 placeholder-shown:border-t-blue-gray-200 border focus:border-2 border-t-transparent focus:border-t-transparent text-sm px-5 py-2.5 rounded-[7px] border-blue-gray-200 focus:border-gray-900"
                                    value="<?php echo $row["Side_Hole_dia"] ?>"
                                    placeholder=" ">

                            </td>
                            <td class="px-5 py-2">
                                <input
                                    name="Top_hole_dia"
                                    disabled
                                    class=" bg-transparent text-blue-gray-700 font-sans font-normal outline outline-0 focus:outline-0 disabled:bg-blue-gray-50 disabled:border-0 transition-all placeholder-shown:border placeholder-shown:border-blue-gray-200 placeholder-shown:border-t-blue-gray-200 border focus:border-2 border-t-transparent focus:border-t-transparent text-sm px-5 py-2.5 rounded-[7px] border-blue-gray-200 focus:border-gray-900"
                                    value="<?php echo $row["Top_hole_dia"] ?>"
                                    placeholder=" ">

                            </td>
                            <td class="px-5 py-2">
                                <input
                                    name="No_of_ply"
                                    disabled
                                    class=" bg-transparent text-blue-gray-700 font-sans font-normal outline outline-0 focus:outline-0 disabled:bg-blue-gray-50 disabled:border-0 transition-all placeholder-shown:border placeholder-shown:border-blue-gray-200 placeholder-shown:border-t-blue-gray-200 border focus:border-2 border-t-transparent focus:border-t-transparent text-sm px-5 py-2.5 rounded-[7px] border-blue-gray-200 focus:border-gray-900"
                                    value="<?php echo $row["No_of_ply"] ?>"
                                    placeholder=" ">

                            </td>
                            <td class="px-5 py-2">
                                <input
                                    name="Style"
                                    disabled
                                    class=" bg-transparent text-blue-gray-700 font-sans font-normal outline outline-0 focus:outline-0 disabled:bg-blue-gray-50 disabled:border-0 transition-all placeholder-shown:border placeholder-shown:border-blue-gray-200 placeholder-shown:border-t-blue-gray-200 border focus:border-2 border-t-transparent focus:border-t-transparent text-sm px-5 py-2.5 rounded-[7px] border-blue-gray-200 focus:border-gray-900"
                                    value="<?php echo $row["Style"] ?>"
                                    placeholder=" ">

                            </td>
                            <td class="px-5 py-2">
                                <input
                                    name="Thickness"
                                    disabled
                                    class=" bg-transparent text-blue-gray-700 font-sans font-normal outline outline-0 focus:outline-0 disabled:bg-blue-gray-50 disabled:border-0 transition-all placeholder-shown:border placeholder-shown:border-blue-gray-200 placeholder-shown:border-t-blue-gray-200 border focus:border-2 border-t-transparent focus:border-t-transparent text-sm px-5 py-2.5 rounded-[7px] border-blue-gray-200 focus:border-gray-900"
                                    value="<?php echo $row["Thickness"] ?>"
                                    placeholder=" ">

                            </td>
                            <td class="px-5 py-2">
                                <input
                                    name="Weight"
                                    disabled
                                    class=" bg-transparent text-blue-gray-700 font-sans font-normal outline outline-0 focus:outline-0 disabled:bg-blue-gray-50 disabled:border-0 transition-all placeholder-shown:border placeholder-shown:border-blue-gray-200 placeholder-shown:border-t-blue-gray-200 border focus:border-2 border-t-transparent focus:border-t-transparent text-sm px-5 py-2.5 rounded-[7px] border-blue-gray-200 focus:border-gray-900"
                                    value="<?php echo $row["Weight"] ?>"
                                    placeholder=" ">

                            </td>
                            <td class="px-5 py-2">
                                <input
                                    name="Depth"
                                    disabled
                                    class=" bg-transparent text-blue-gray-700 font-sans font-normal outline outline-0 focus:outline-0 disabled:bg-blue-gray-50 disabled:border-0 transition-all placeholder-shown:border placeholder-shown:border-blue-gray-200 placeholder-shown:border-t-blue-gray-200 border focus:border-2 border-t-transparent focus:border-t-transparent text-sm px-5 py-2.5 rounded-[7px] border-blue-gray-200 focus:border-gray-900"
                                    value="<?php echo $row["Depth"] ?>"
                                    placeholder=" ">

                            </td>
                            <td class="px-5 py-2">
                                <input
                                    name="Bottom_hole_dia"
                                    disabled
                                    class=" bg-transparent text-blue-gray-700 font-sans font-normal outline outline-0 focus:outline-0 disabled:bg-blue-gray-50 disabled:border-0 transition-all placeholder-shown:border placeholder-shown:border-blue-gray-200 placeholder-shown:border-t-blue-gray-200 border focus:border-2 border-t-transparent focus:border-t-transparent text-sm px-5 py-2.5 rounded-[7px] border-blue-gray-200 focus:border-gray-900"
                                    value="<?php echo $row["Bottom_hole_dia"] ?>"
                                    placeholder=" ">

                            </td>
                            <td class="px-5 py-2">
                                <input
                                    name="Bottom_hole"
                                    disabled
                                    class=" bg-transparent text-blue-gray-700 font-sans font-normal outline outline-0 focus:outline-0 disabled:bg-blue-gray-50 disabled:border-0 transition-all placeholder-shown:border placeholder-shown:border-blue-gray-200 placeholder-shown:border-t-blue-gray-200 border focus:border-2 border-t-transparent focus:border-t-transparent text-sm px-5 py-2.5 rounded-[7px] border-blue-gray-200 focus:border-gray-900"
                                    value="<?php echo $row["Bottom_hole"] ?>"
                                    placeholder=" ">

                            </td>
                            <td class="px-5 py-2">
                                <input
                                    name="Bottom_hole"
                                    disabled
                                    class=" bg-transparent text-blue-gray-700 font-sans font-normal outline outline-0 focus:outline-0 disabled:bg-blue-gray-50 disabled:border-0 transition-all placeholder-shown:border placeholder-shown:border-blue-gray-200 placeholder-shown:border-t-blue-gray-200 border focus:border-2 border-t-transparent focus:border-t-transparent text-sm px-5 py-2.5 rounded-[7px] border-blue-gray-200 focus:border-gray-900"
                                    value="<?php echo $row["Bottom_hole"] ?>"
                                    placeholder=" ">

                            </td>
                            <td class="px-5 py-2">
                                <input
                                    name="Core"
                                    disabled
                                    class=" bg-transparent text-blue-gray-700 font-sans font-normal outline outline-0 focus:outline-0 disabled:bg-blue-gray-50 disabled:border-0 transition-all placeholder-shown:border placeholder-shown:border-blue-gray-200 placeholder-shown:border-t-blue-gray-200 border focus:border-2 border-t-transparent focus:border-t-transparent text-sm px-5 py-2.5 rounded-[7px] border-blue-gray-200 focus:border-gray-900"
                                    value="<?php echo $row["Core"] ?>"
                                    placeholder=" ">

                            </td>
                            <td class="px-5 py-2">
                                <input
                                    name="Inner_Outer_thread"
                                    disabled
                                    class=" bg-transparent text-blue-gray-700 font-sans font-normal outline outline-0 focus:outline-0 disabled:bg-blue-gray-50 disabled:border-0 transition-all placeholder-shown:border placeholder-shown:border-blue-gray-200 placeholder-shown:border-t-blue-gray-200 border focus:border-2 border-t-transparent focus:border-t-transparent text-sm px-5 py-2.5 rounded-[7px] border-blue-gray-200 focus:border-gray-900"
                                    value="<?php echo $row["Inner_Outer_thread"] ?>"
                                    placeholder=" ">

                            </td>
                            <td class="px-5 py-2">
                                <input
                                    name="Upper_thread"
                                    disabled
                                    class=" bg-transparent text-blue-gray-700 font-sans font-normal outline outline-0 focus:outline-0 disabled:bg-blue-gray-50 disabled:border-0 transition-all placeholder-shown:border placeholder-shown:border-blue-gray-200 placeholder-shown:border-t-blue-gray-200 border focus:border-2 border-t-transparent focus:border-t-transparent text-sm px-5 py-2.5 rounded-[7px] border-blue-gray-200 focus:border-gray-900"
                                    value="<?php echo $row["Upper_thread"] ?>"
                                    placeholder=" ">

                            </td>
                            <td class="px-5 py-2">
                                <input
                                    name="Lower_thread"
                                    disabled
                                    class=" bg-transparent text-blue-gray-700 font-sans font-normal outline outline-0 focus:outline-0 disabled:bg-blue-gray-50 disabled:border-0 transition-all placeholder-shown:border placeholder-shown:border-blue-gray-200 placeholder-shown:border-t-blue-gray-200 border focus:border-2 border-t-transparent focus:border-t-transparent text-sm px-5 py-2.5 rounded-[7px] border-blue-gray-200 focus:border-gray-900"
                                    value="<?php echo $row["Lower_thread"] ?>"
                                    placeholder=" ">

                            </td>
                            <td class="px-5 py-2">
                                <input
                                    name="Thread_length"
                                    disabled
                                    class=" bg-transparent text-blue-gray-700 font-sans font-normal outline outline-0 focus:outline-0 disabled:bg-blue-gray-50 disabled:border-0 transition-all placeholder-shown:border placeholder-shown:border-blue-gray-200 placeholder-shown:border-t-blue-gray-200 border focus:border-2 border-t-transparent focus:border-t-transparent text-sm px-5 py-2.5 rounded-[7px] border-blue-gray-200 focus:border-gray-900"
                                    value="<?php echo $row["Thread_length"] ?>"
                                    placeholder=" ">

                            </td>
                            <td class="px-5 py-2">
                                <input
                                    name="Indian_Imported"
                                    disabled
                                    class=" bg-transparent text-blue-gray-700 font-sans font-normal outline outline-0 focus:outline-0 disabled:bg-blue-gray-50 disabled:border-0 transition-all placeholder-shown:border placeholder-shown:border-blue-gray-200 placeholder-shown:border-t-blue-gray-200 border focus:border-2 border-t-transparent focus:border-t-transparent text-sm px-5 py-2.5 rounded-[7px] border-blue-gray-200 focus:border-gray-900"
                                    value="<?php echo $row["Indian_Imported"] ?>"
                                    placeholder=" ">

                            </td>
                            <td class="px-5 py-2">
                                <input
                                    name="In_built_switch"
                                    disabled
                                    class=" bg-transparent text-blue-gray-700 font-sans font-normal outline outline-0 focus:outline-0 disabled:bg-blue-gray-50 disabled:border-0 transition-all placeholder-shown:border placeholder-shown:border-blue-gray-200 placeholder-shown:border-t-blue-gray-200 border focus:border-2 border-t-transparent focus:border-t-transparent text-sm px-5 py-2.5 rounded-[7px] border-blue-gray-200 focus:border-gray-900"
                                    value="<?php echo $row["In_built_switch"] ?>"
                                    placeholder=" ">

                            </td>
                            <td class="px-5 py-2">
                                <input
                                    name="Wire_type"
                                    disabled
                                    class=" bg-transparent text-blue-gray-700 font-sans font-normal outline outline-0 focus:outline-0 disabled:bg-blue-gray-50 disabled:border-0 transition-all placeholder-shown:border placeholder-shown:border-blue-gray-200 placeholder-shown:border-t-blue-gray-200 border focus:border-2 border-t-transparent focus:border-t-transparent text-sm px-5 py-2.5 rounded-[7px] border-blue-gray-200 focus:border-gray-900"
                                    value="<?php echo $row["Wire_type"] ?>"
                                    placeholder=" ">

                            </td>
                            <td class="px-5 py-2">
                                <input
                                    name="vendor"
                                    disabled
                                    class=" bg-transparent text-blue-gray-700 font-sans font-normal outline outline-0 focus:outline-0 disabled:bg-blue-gray-50 disabled:border-0 transition-all placeholder-shown:border placeholder-shown:border-blue-gray-200 placeholder-shown:border-t-blue-gray-200 border focus:border-2 border-t-transparent focus:border-t-transparent text-sm px-5 py-2.5 rounded-[7px] border-blue-gray-200 focus:border-gray-900"
                                    value="<?php echo $row["vendor"] ?>"
                                    placeholder=" ">

                            </td>
                            <td class="px-5 py-2">
                                <input
                                    name="attribute1"
                                    disabled
                                    class=" bg-transparent text-blue-gray-700 font-sans font-normal outline outline-0 focus:outline-0 disabled:bg-blue-gray-50 disabled:border-0 transition-all placeholder-shown:border placeholder-shown:border-blue-gray-200 placeholder-shown:border-t-blue-gray-200 border focus:border-2 border-t-transparent focus:border-t-transparent text-sm px-5 py-2.5 rounded-[7px] border-blue-gray-200 focus:border-gray-900"
                                    value="<?php echo $row["attribute1"] ?>"
                                    placeholder=" ">

                            </td>
                            <td class="px-5 py-2">
                                <input
                                    name="attribute2"
                                    disabled
                                    class=" bg-transparent text-blue-gray-700 font-sans font-normal outline outline-0 focus:outline-0 disabled:bg-blue-gray-50 disabled:border-0 transition-all placeholder-shown:border placeholder-shown:border-blue-gray-200 placeholder-shown:border-t-blue-gray-200 border focus:border-2 border-t-transparent focus:border-t-transparent text-sm px-5 py-2.5 rounded-[7px] border-blue-gray-200 focus:border-gray-900"
                                    value="<?php echo $row["attribute2"] ?>"
                                    placeholder=" ">

                            </td>
                            <td class="px-5 py-2">
                                <input
                                    name="attribute3"
                                    disabled
                                    class=" bg-transparent text-blue-gray-700 font-sans font-normal outline outline-0 focus:outline-0 disabled:bg-blue-gray-50 disabled:border-0 transition-all placeholder-shown:border placeholder-shown:border-blue-gray-200 placeholder-shown:border-t-blue-gray-200 border focus:border-2 border-t-transparent focus:border-t-transparent text-sm px-5 py-2.5 rounded-[7px] border-blue-gray-200 focus:border-gray-900"
                                    value="<?php echo $row["attribute3"] ?>"
                                    placeholder=" ">

                            </td>
                            <td class="px-5 py-2">
                                <input
                                    name="createdBy"
                                    disabled
                                    class=" bg-transparent text-blue-gray-700 font-sans font-normal outline outline-0 focus:outline-0 disabled:bg-blue-gray-50 disabled:border-0 transition-all placeholder-shown:border placeholder-shown:border-blue-gray-200 placeholder-shown:border-t-blue-gray-200 border focus:border-2 border-t-transparent focus:border-t-transparent text-sm px-5 py-2.5 rounded-[7px] border-blue-gray-200 focus:border-gray-900"
                                    value="<?php echo $row["createdBy"] ?>"
                                    placeholder=" ">

                            </td>
                            <td class="px-5 py-2">
                                <input
                                    name="updatedBy"
                                    disabled
                                    class=" bg-transparent text-blue-gray-700 font-sans font-normal outline outline-0 focus:outline-0 disabled:bg-blue-gray-50 disabled:border-0 transition-all placeholder-shown:border placeholder-shown:border-blue-gray-200 placeholder-shown:border-t-blue-gray-200 border focus:border-2 border-t-transparent focus:border-t-transparent text-sm px-5 py-2.5 rounded-[7px] border-blue-gray-200 focus:border-gray-900"
                                    value="<?php echo $row["updatedBy"] ?>"
                                    placeholder=" ">

                            </td>
                            <td class="px-5 py-2">
                                <input
                                    name="departement"
                                    disabled
                                    class=" bg-transparent text-blue-gray-700 font-sans font-normal outline outline-0 focus:outline-0 disabled:bg-blue-gray-50 disabled:border-0 transition-all placeholder-shown:border placeholder-shown:border-blue-gray-200 placeholder-shown:border-t-blue-gray-200 border focus:border-2 border-t-transparent focus:border-t-transparent text-sm px-5 py-2.5 rounded-[7px] border-blue-gray-200 focus:border-gray-900"
                                    value="<?php echo $row["departement"] ?>"
                                    placeholder=" ">

                            </td>
                            <td class="px-5 py-2">
                                <input
                                    name="updatedDate"
                                    disabled
                                    class=" bg-transparent text-blue-gray-700 font-sans font-normal outline outline-0 focus:outline-0 disabled:bg-blue-gray-50 disabled:border-0 transition-all placeholder-shown:border placeholder-shown:border-blue-gray-200 placeholder-shown:border-t-blue-gray-200 border focus:border-2 border-t-transparent focus:border-t-transparent text-sm px-5 py-2.5 rounded-[7px] border-blue-gray-200 focus:border-gray-900"
                                    value="<?php echo $row["updatedDate"] ?>"
                                    placeholder=" ">

                            </td>
                            <td class="px-5 py-2">
                                <input
                                    name="long_discription"
                                    disabled
                                    class=" bg-transparent text-blue-gray-700 font-sans font-normal outline outline-0 focus:outline-0 disabled:bg-blue-gray-50 disabled:border-0 transition-all placeholder-shown:border placeholder-shown:border-blue-gray-200 placeholder-shown:border-t-blue-gray-200 border focus:border-2 border-t-transparent focus:border-t-transparent text-sm px-5 py-2.5 rounded-[7px] border-blue-gray-200 focus:border-gray-900"
                                    value="<?php echo $row["long_discription"] ?>"
                                    placeholder=" ">

                            </td>
                            <td class="px-5 py-2">
                                <input
                                    name="Pintop"
                                    disabled
                                    class=" bg-transparent text-blue-gray-700 font-sans font-normal outline outline-0 focus:outline-0 disabled:bg-blue-gray-50 disabled:border-0 transition-all placeholder-shown:border placeholder-shown:border-blue-gray-200 placeholder-shown:border-t-blue-gray-200 border focus:border-2 border-t-transparent focus:border-t-transparent text-sm px-5 py-2.5 rounded-[7px] border-blue-gray-200 focus:border-gray-900"
                                    value="<?php echo $row["Pintop"] ?>"
                                    placeholder=" ">

                            </td>
                            <td class="px-5 py-2">
                                <input
                                    name="Discount"
                                    disabled
                                    class=" bg-transparent text-blue-gray-700 font-sans font-normal outline outline-0 focus:outline-0 disabled:bg-blue-gray-50 disabled:border-0 transition-all placeholder-shown:border placeholder-shown:border-blue-gray-200 placeholder-shown:border-t-blue-gray-200 border focus:border-2 border-t-transparent focus:border-t-transparent text-sm px-5 py-2.5 rounded-[7px] border-blue-gray-200 focus:border-gray-900"
                                    value="<?php echo $row["Discount"] ?>"
                                    placeholder=" ">

                            </td>
                            <td class="px-5 py-2">
                                <input
                                    name="itemStatus"
                                    disabled
                                    class=" bg-transparent text-blue-gray-700 font-sans font-normal outline outline-0 focus:outline-0 disabled:bg-blue-gray-50 disabled:border-0 transition-all placeholder-shown:border placeholder-shown:border-blue-gray-200 placeholder-shown:border-t-blue-gray-200 border focus:border-2 border-t-transparent focus:border-t-transparent text-sm px-5 py-2.5 rounded-[7px] border-blue-gray-200 focus:border-gray-900"
                                    value="<?php echo $row["itemStatus"] ?>"
                                    placeholder=" ">

                            </td>
                            <td class="px-5 py-2">
                                <input
                                    name="createdDate"
                                    disabled
                                    class=" bg-transparent text-blue-gray-700 font-sans font-normal outline outline-0 focus:outline-0 disabled:bg-blue-gray-50 disabled:border-0 transition-all placeholder-shown:border placeholder-shown:border-blue-gray-200 placeholder-shown:border-t-blue-gray-200 border focus:border-2 border-t-transparent focus:border-t-transparent text-sm px-5 py-2.5 rounded-[7px] border-blue-gray-200 focus:border-gray-900"
                                    value="<?php echo $row["createdDate"] ?>"
                                    placeholder=" ">

                            </td>
                            <td class="px-5 py-2">
                                <input
                                    name="fabric"
                                    disabled
                                    class=" bg-transparent text-blue-gray-700 font-sans font-normal outline outline-0 focus:outline-0 disabled:bg-blue-gray-50 disabled:border-0 transition-all placeholder-shown:border placeholder-shown:border-blue-gray-200 placeholder-shown:border-t-blue-gray-200 border focus:border-2 border-t-transparent focus:border-t-transparent text-sm px-5 py-2.5 rounded-[7px] border-blue-gray-200 focus:border-gray-900"
                                    value="<?php echo $row["fabric"] ?>"
                                    placeholder=" ">

                            </td>
                            <td class="px-5 py-2">
                                <input
                                    name="piping"
                                    disabled
                                    class=" bg-transparent text-blue-gray-700 font-sans font-normal outline outline-0 focus:outline-0 disabled:bg-blue-gray-50 disabled:border-0 transition-all placeholder-shown:border placeholder-shown:border-blue-gray-200 placeholder-shown:border-t-blue-gray-200 border focus:border-2 border-t-transparent focus:border-t-transparent text-sm px-5 py-2.5 rounded-[7px] border-blue-gray-200 focus:border-gray-900"
                                    value="<?php echo $row["piping"] ?>"
                                    placeholder=" ">

                            </td>
                            </td>
                            <td class="px-5 py-2">
                                <input
                                    name="piping_color"
                                    disabled
                                    class=" bg-transparent text-blue-gray-700 font-sans font-normal outline outline-0 focus:outline-0 disabled:bg-blue-gray-50 disabled:border-0 transition-all placeholder-shown:border placeholder-shown:border-blue-gray-200 placeholder-shown:border-t-blue-gray-200 border focus:border-2 border-t-transparent focus:border-t-transparent text-sm px-5 py-2.5 rounded-[7px] border-blue-gray-200 focus:border-gray-900"
                                    value="<?php echo $row["piping_color"] ?>"
                                    placeholder=" ">

                            </td>
                            </td>
                            <td class="px-5 py-2">
                                <input
                                    name="acrylic_diffuser"
                                    disabled
                                    class=" bg-transparent text-blue-gray-700 font-sans font-normal outline outline-0 focus:outline-0 disabled:bg-blue-gray-50 disabled:border-0 transition-all placeholder-shown:border placeholder-shown:border-blue-gray-200 placeholder-shown:border-t-blue-gray-200 border focus:border-2 border-t-transparent focus:border-t-transparent text-sm px-5 py-2.5 rounded-[7px] border-blue-gray-200 focus:border-gray-900"
                                    value="<?php echo $row["acrylic_diffuser"] ?>"
                                    placeholder=" ">

                            </td>
                            </td>
                            <td class="px-5 py-2">
                                <input
                                    name="gallery_heght"
                                    disabled
                                    class=" bg-transparent text-blue-gray-700 font-sans font-normal outline outline-0 focus:outline-0 disabled:bg-blue-gray-50 disabled:border-0 transition-all placeholder-shown:border placeholder-shown:border-blue-gray-200 placeholder-shown:border-t-blue-gray-200 border focus:border-2 border-t-transparent focus:border-t-transparent text-sm px-5 py-2.5 rounded-[7px] border-blue-gray-200 focus:border-gray-900"
                                    value="<?php echo $row["gallery_heght"] ?>"
                                    placeholder=" ">

                            </td>
                            </td>
                            <td class="px-5 py-2">
                                <input
                                    name="sheet"
                                    disabled
                                    class=" bg-transparent text-blue-gray-700 font-sans font-normal outline outline-0 focus:outline-0 disabled:bg-blue-gray-50 disabled:border-0 transition-all placeholder-shown:border placeholder-shown:border-blue-gray-200 placeholder-shown:border-t-blue-gray-200 border focus:border-2 border-t-transparent focus:border-t-transparent text-sm px-5 py-2.5 rounded-[7px] border-blue-gray-200 focus:border-gray-900"
                                    value="<?php echo $row["sheet"] ?>"
                                    placeholder=" ">

                            </td>
                            </td>
                            <td class="px-5 py-2">
                                <input
                                    name="sheet_color"
                                    disabled
                                    class=" bg-transparent text-blue-gray-700 font-sans font-normal outline outline-0 focus:outline-0 disabled:bg-blue-gray-50 disabled:border-0 transition-all placeholder-shown:border placeholder-shown:border-blue-gray-200 placeholder-shown:border-t-blue-gray-200 border focus:border-2 border-t-transparent focus:border-t-transparent text-sm px-5 py-2.5 rounded-[7px] border-blue-gray-200 focus:border-gray-900"
                                    value="<?php echo $row["sheet_color"] ?>"
                                    placeholder=" ">

                            </td>
                            </td>
                            <td class="px-5 py-2">
                                <input
                                    name="powder_coating"
                                    disabled
                                    class=" bg-transparent text-blue-gray-700 font-sans font-normal outline outline-0 focus:outline-0 disabled:bg-blue-gray-50 disabled:border-0 transition-all placeholder-shown:border placeholder-shown:border-blue-gray-200 placeholder-shown:border-t-blue-gray-200 border focus:border-2 border-t-transparent focus:border-t-transparent text-sm px-5 py-2.5 rounded-[7px] border-blue-gray-200 focus:border-gray-900"
                                    value="<?php echo $row["powder_coating"] ?>"
                                    placeholder=" ">

                            </td>
                            </td>
                            <td class="px-5 py-2">
                                <input
                                    name="subCatId"
                                    disabled
                                    class=" bg-transparent text-blue-gray-700 font-sans font-normal outline outline-0 focus:outline-0 disabled:bg-blue-gray-50 disabled:border-0 transition-all placeholder-shown:border placeholder-shown:border-blue-gray-200 placeholder-shown:border-t-blue-gray-200 border focus:border-2 border-t-transparent focus:border-t-transparent text-sm px-5 py-2.5 rounded-[7px] border-blue-gray-200 focus:border-gray-900"
                                    value="<?php echo $row["subCatId"] ?>"
                                    placeholder=" ">

                            </td>
                            </td>
                            <td class="px-5 py-2">
                                <!-- <input
                                    name="Images"
                                    disabled
                                    class=" bg-transparent text-blue-gray-700 font-sans font-normal outline outline-0 focus:outline-0 disabled:bg-blue-gray-50 disabled:border-0 transition-all placeholder-shown:border placeholder-shown:border-blue-gray-200 placeholder-shown:border-t-blue-gray-200 border focus:border-2 border-t-transparent focus:border-t-transparent text-sm px-5 py-2.5 rounded-[7px] border-blue-gray-200 focus:border-gray-900"
                                    value="<?php echo $row["imagePath"] ?>"
                                    placeholder=" ">
 -->


                                <img src="./images/<?php echo $row['imagePath']; ?>"


                                    style="max-width:200px;;"
                                    alt="">


                            </td>
                            <td class="px-5 py-2">
                                <select class=" bg-transparent text-blue-gray-700 font-sans font-normal outline outline-0 focus:outline-0 disabled:bg-blue-gray-50 disabled:border-0 transition-all placeholder-shown:border placeholder-shown:border-blue-gray-200 placeholder-shown:border-t-blue-gray-200 border focus:border-2 border-t-transparent focus:border-t-transparent text-sm px-5 py-2.5 rounded-[7px] border-blue-gray-200 focus:border-gray-900" name="itemStatus" id="itemStatus">
                                    <option

                                        class="text-black"

                                        <?= ($row['itemStatus'] == 'SUBMIT') ?  'selected' : ''; ?> value="SUBMIT">SUBMIT</option>
                                    <option
                                        class="text-black" <?= ($row['itemStatus'] == 'SAVE') ? 'selected' : ''; ?> value="SAVE">SAVE</option>
                                    <option
                                        <?= ($row['itemStatus'] == 'submitToItemMaster') ? 'selected' : ''; ?>
                                        class="text-black"
                                        value="submitToItemMaster">submitToItemMaster</option>
                                </select>

                            </td>
<!-- 
                            <td class="px-5 py-2">
                                <button name="update_reqsuisition" onclick="sendElectricDataToItemMaster(event)"

                                    data-item-code="<?php echo $row["item_code"];  ?>"
                                    class=" inline-flex mr-2  items-center py-2.5 px-5 ms-2 text-sm font-medium text-white bg-blue-700 rounded-lg border border-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800" onclick="getDataOfEditIssuer(event)">
                                    Update</button>
                            </td> -->


                        </tr>


                <?php


                    }
                }
                ?>
            </tbody>
        </table>
    </div>










</body>





<script src="./js/itemMaster.js"></script>
<script src="./js/jquery-3.7.1.min.js"></script>












<script>









</script>

</html>