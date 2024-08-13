<?php
include("../db.php");
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.0.4/dist/tailwind.min.css" rel="stylesheet">
    <title>Document</title>
</head>

<body class="font-sans bg-blue-300">


    <?php



    include("./navForLogged.php");





    ?>

    <div
        style="width: 90%; margin-top:8rem;"
        class="relative mx-auto   overflow-x-auto shadow-md sm:rounded-lg">
        <table



            class=" text-sm mx-auto text-left border-2-black rtl:text-right text-gray-500 dark:text-gray-400">
            <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                <tr>
                    <th scope="col" class="px-5 py-2">
                        item ID
                    </th>
                    <th scope="col" class="px-5 py-2">
                        Category name
                    </th>
                    <th scope="col" class="px-5 py-2">
                        sub Category
                    </th>
                    <th scope="col" class="px-5 py-2">
                        Item_code
                    </th>

                    <th scope="col" class="px-5 py-2">
                        short_description
                    </th>
                    <th scope="col" class="px-5 py-2">
                        Size
                    </th>
                    <th scope="col" class="px-5 py-2">
                        Watt
                    </th>
                    <th scope="col" class="px-5 py-2">
                        Colour
                    </th>
                    <th scope="col" class="px-5 py-2">
                        Shape
                    </th>
                    <th scope="col" class="px-5 py-2">
                        Brand
                    </th>
                    <th scope="col" class="px-5 py-2">
                        Light_output_Colour
                    </th>
                    <th scope="col" class="px-5 py-2">
                        Vendor
                    </th>
                    <th scope="col" class="px-5 py-2">
                        Description
                    </th>
                    <th scope="col" class="px-5 py-2">
                        Price
                    </th>
                    <th scope="col" class="px-5 py-2">
                        Length
                    </th>
                    <th scope="col" class="px-5 py-2">
                        Material
                    </th>
                    <th scope="col" class="px-5 py-2">
                        WireType
                    </th>
                    <th scope="col" class="px-5 py-2">
                        In_Builtswitch
                    </th>
                    <th scope="col" class="px-5 py-2">
                        Pintop
                    </th>
                    <th scope="col" class="px-5 py-2">
                        Holdertype
                    </th>
                    <th scope="col" class="px-5 py-2">
                        Discount
                    </th>
                    <th scope="col" class="px-5 py-2">
                        Images
                    </th>
                    <th scope="col" class="px-5 py-2">
                        status
                    </th>


                </tr>
            </thead>
            <tbody>



                <?php


                $sql =  "SELECT * FROM for_office.electrical_catinfo a
                        join for_office.itemmastercategory b ON a.category_name = b.categoryId 
                        join for_office.sub_category c ON a.sub_category = c.subCatId; ";


                $result = mysqli_query($con, $sql);


                if (mysqli_num_rows($result) > 0) {


                    while ($row = mysqli_fetch_assoc($result)) {



                ?>


                        <tr class="bg-gray-800 text-white border-b dark:bg-gray-800 dark:border-gray-700">
                            <th scope="row" class="px-5 py-2 font-medium  whitespace-nowrap dark:text-white">
                                <?php echo $row["S.No"]; ?>

                            </th>
                            <td class="px-5 py-2">

                                <input
                                    name="catagory_name"
                                    disabled
                                    class=" bg-transparent text-blue-gray-700 font-sans font-normal outline outline-0 focus:outline-0 disabled:bg-blue-gray-50 disabled:border-0 transition-all placeholder-shown:border placeholder-shown:border-blue-gray-200 placeholder-shown:border-t-blue-gray-200 border focus:border-2 border-t-transparent focus:border-t-transparent text-sm px-5 py-2.5 rounded-[7px] border-blue-gray-200 focus:border-gray-900"
                                    value="<?php echo $row["catagory_name"] ?>"
                                    placeholder=" ">

                            </td>
                            <td class="px-5 py-2">
                                <input
                                    name="subCatName"
                                    disabled
                                    class=" bg-transparent text-blue-gray-700 font-sans font-normal outline outline-0 focus:outline-0 disabled:bg-blue-gray-50 disabled:border-0 transition-all placeholder-shown:border placeholder-shown:border-blue-gray-200 placeholder-shown:border-t-blue-gray-200 border focus:border-2 border-t-transparent focus:border-t-transparent text-sm px-5 py-2.5 rounded-[7px] border-blue-gray-200 focus:border-gray-900"
                                    value="<?php echo $row["name"] ?>"
                                    placeholder=" ">
                            </td>
                            <td class="px-5 py-2">
                                <input
                                    name="Item_code"
                                    disabled
                                    class=" bg-transparent text-blue-gray-700 font-sans font-normal outline outline-0 focus:outline-0 disabled:bg-blue-gray-50 disabled:border-0 transition-all placeholder-shown:border placeholder-shown:border-blue-gray-200 placeholder-shown:border-t-blue-gray-200 border focus:border-2 border-t-transparent focus:border-t-transparent text-sm px-5 py-2.5 rounded-[7px] border-blue-gray-200 focus:border-gray-900"
                                    value="<?php echo $row["Item_code"] ?>"
                                    placeholder=" ">

                            </td>
                            <td class="px-5 py-2">
                                <input
                                    name="short_description"
                                    disabled
                                    class=" bg-transparent text-blue-gray-700 font-sans font-normal outline outline-0 focus:outline-0 disabled:bg-blue-gray-50 disabled:border-0 transition-all placeholder-shown:border placeholder-shown:border-blue-gray-200 placeholder-shown:border-t-blue-gray-200 border focus:border-2 border-t-transparent focus:border-t-transparent text-sm px-5 py-2.5 rounded-[7px] border-blue-gray-200 focus:border-gray-900"
                                    value="<?php echo $row["short_description"] ?>"
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
                                    name="Watt"
                                    disabled
                                    class=" bg-transparent text-blue-gray-700 font-sans font-normal outline outline-0 focus:outline-0 disabled:bg-blue-gray-50 disabled:border-0 transition-all placeholder-shown:border placeholder-shown:border-blue-gray-200 placeholder-shown:border-t-blue-gray-200 border focus:border-2 border-t-transparent focus:border-t-transparent text-sm px-5 py-2.5 rounded-[7px] border-blue-gray-200 focus:border-gray-900"
                                    value="<?php echo $row["Watt"] ?>"
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
                                    name="Shape"
                                    disabled
                                    class=" bg-transparent text-blue-gray-700 font-sans font-normal outline outline-0 focus:outline-0 disabled:bg-blue-gray-50 disabled:border-0 transition-all placeholder-shown:border placeholder-shown:border-blue-gray-200 placeholder-shown:border-t-blue-gray-200 border focus:border-2 border-t-transparent focus:border-t-transparent text-sm px-5 py-2.5 rounded-[7px] border-blue-gray-200 focus:border-gray-900"
                                    value="<?php echo $row["Shape"] ?>"
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
                                    name="Light_output_Colour"
                                    disabled
                                    class=" bg-transparent text-blue-gray-700 font-sans font-normal outline outline-0 focus:outline-0 disabled:bg-blue-gray-50 disabled:border-0 transition-all placeholder-shown:border placeholder-shown:border-blue-gray-200 placeholder-shown:border-t-blue-gray-200 border focus:border-2 border-t-transparent focus:border-t-transparent text-sm px-5 py-2.5 rounded-[7px] border-blue-gray-200 focus:border-gray-900"
                                    value="<?php echo $row["Light_output_Colour"] ?>"
                                    placeholder=" ">
                            </td>
                            <td class="px-5 py-2">

                                <input
                                    name="Vendor"
                                    disabled
                                    class=" bg-transparent text-blue-gray-700 font-sans font-normal outline outline-0 focus:outline-0 disabled:bg-blue-gray-50 disabled:border-0 transition-all placeholder-shown:border placeholder-shown:border-blue-gray-200 placeholder-shown:border-t-blue-gray-200 border focus:border-2 border-t-transparent focus:border-t-transparent text-sm px-5 py-2.5 rounded-[7px] border-blue-gray-200 focus:border-gray-900"
                                    value="<?php echo $row["Vendor"] ?>"
                                    placeholder=" ">
                            </td>
                            <td class="px-5 py-2">

                                <input
                                    name="Description"
                                    disabled
                                    class=" bg-transparent text-blue-gray-700 font-sans font-normal outline outline-0 focus:outline-0 disabled:bg-blue-gray-50 disabled:border-0 transition-all placeholder-shown:border placeholder-shown:border-blue-gray-200 placeholder-shown:border-t-blue-gray-200 border focus:border-2 border-t-transparent focus:border-t-transparent text-sm px-5 py-2.5 rounded-[7px] border-blue-gray-200 focus:border-gray-900"
                                    value="<?php echo $row["Description"] ?>"
                                    placeholder=" ">
                            </td>
                            <td class="px-5 py-2">

                                <input
                                    name="Price"
                                    disabled
                                    class=" bg-transparent text-blue-gray-700 font-sans font-normal outline outline-0 focus:outline-0 disabled:bg-blue-gray-50 disabled:border-0 transition-all placeholder-shown:border placeholder-shown:border-blue-gray-200 placeholder-shown:border-t-blue-gray-200 border focus:border-2 border-t-transparent focus:border-t-transparent text-sm px-5 py-2.5 rounded-[7px] border-blue-gray-200 focus:border-gray-900"
                                    value="<?php echo $row["Price"] ?>"
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
                                    name="Material"
                                    disabled
                                    class=" bg-transparent text-blue-gray-700 font-sans font-normal outline outline-0 focus:outline-0 disabled:bg-blue-gray-50 disabled:border-0 transition-all placeholder-shown:border placeholder-shown:border-blue-gray-200 placeholder-shown:border-t-blue-gray-200 border focus:border-2 border-t-transparent focus:border-t-transparent text-sm px-5 py-2.5 rounded-[7px] border-blue-gray-200 focus:border-gray-900"
                                    value="<?php echo $row["Material"] ?>"
                                    placeholder=" ">
                            </td>
                            <td class="px-5 py-2">

                                <input

                                    name="WireType"
                                    disabled
                                    class=" bg-transparent text-blue-gray-700 font-sans font-normal outline outline-0 focus:outline-0 disabled:bg-blue-gray-50 disabled:border-0 transition-all placeholder-shown:border placeholder-shown:border-blue-gray-200 placeholder-shown:border-t-blue-gray-200 border focus:border-2 border-t-transparent focus:border-t-transparent text-sm px-5 py-2.5 rounded-[7px] border-blue-gray-200 focus:border-gray-900"
                                    value="<?php echo $row["WireType"] ?>"
                                    placeholder=" ">
                            </td>
                            <td class="px-5 py-2">

                                <input
                                    name="In_Builtswitch"
                                    disabled
                                    class=" bg-transparent text-blue-gray-700 font-sans font-normal outline outline-0 focus:outline-0 disabled:bg-blue-gray-50 disabled:border-0 transition-all placeholder-shown:border placeholder-shown:border-blue-gray-200 placeholder-shown:border-t-blue-gray-200 border focus:border-2 border-t-transparent focus:border-t-transparent text-sm px-5 py-2.5 rounded-[7px] border-blue-gray-200 focus:border-gray-900"
                                    value="<?php echo $row["In_Builtswitch"] ?>"
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
                                    name="Holdertype"
                                    disabled
                                    class=" bg-transparent text-blue-gray-700 font-sans font-normal outline outline-0 focus:outline-0 disabled:bg-blue-gray-50 disabled:border-0 transition-all placeholder-shown:border placeholder-shown:border-blue-gray-200 placeholder-shown:border-t-blue-gray-200 border focus:border-2 border-t-transparent focus:border-t-transparent text-sm px-5 py-2.5 rounded-[7px] border-blue-gray-200 focus:border-gray-900"
                                    value="<?php echo $row["Holdertype"] ?>"
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
                                    name="Images"
                                    disabled
                                    class=" bg-transparent text-blue-gray-700 font-sans font-normal outline outline-0 focus:outline-0 disabled:bg-blue-gray-50 disabled:border-0 transition-all placeholder-shown:border placeholder-shown:border-blue-gray-200 placeholder-shown:border-t-blue-gray-200 border focus:border-2 border-t-transparent focus:border-t-transparent text-sm px-5 py-2.5 rounded-[7px] border-blue-gray-200 focus:border-gray-900"
                                    value="<?php echo $row["Images"] ?>"
                                    placeholder=" ">
                            </td>
                            <td class="px-5 py-2">
                                <select class=" bg-transparent text-blue-gray-700 font-sans font-normal outline outline-0 focus:outline-0 disabled:bg-blue-gray-50 disabled:border-0 transition-all placeholder-shown:border placeholder-shown:border-blue-gray-200 placeholder-shown:border-t-blue-gray-200 border focus:border-2 border-t-transparent focus:border-t-transparent text-sm px-5 py-2.5 rounded-[7px] border-blue-gray-200 focus:border-gray-900" name="itemStatus" id="itemStatus">
                                    <option 
                                    
                                    class="text-black"
                                    
                                    <?= ($row['status'] == 'SUBMIT') ?  'selected' : ''; ?> value="SUBMIT">SUBMIT</option>
                                    <option 
                                    class="text-black" <?= ($row['status'] == 'SAVE') ? 'selected' : ''; ?> value="SAVE">SAVE</option>
                                    <option 
                                    <?= ($row['status'] == 'submitToItemMaster') ? 'selected' : ''; ?>
                                   class="text-black"
                                    value="submitToItemMaster">submitToItemMaster</option>
                                </select>

                            </td>

                            <td class="px-5 py-2">
                                <button name="update_reqsuisition" onclick="sendElectricDataToItemMaster(event)"

                                    data-item-code="<?php echo $row["Item_code"];  ?>"
                                    class=" inline-flex mr-2  items-center py-2.5 px-5 ms-2 text-sm font-medium text-white bg-blue-700 rounded-lg border border-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800" onclick="getDataOfEditIssuer(event)">
                                    Update</button>
                            </td>


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