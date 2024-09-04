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

<body>


<?php



        include("./navbar.php");





?>

    <div
        style="width: 70%; margin-top:5rem;" 
        class="relative mx-auto  overflow-x-auto shadow-md sm:rounded-lg">
        <table



            class=" text-sm mx-auto text-left rtl:text-right text-gray-500 dark:text-gray-400">
            <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                <tr>
                    <th scope="col" class="px-3 py-2">
                        item ID
                    </th>
                    <th scope="col" class="px-3 py-2">
                        Category name
                    </th>
                    <th scope="col" class="px-3 py-2">
                        sub Category
                    </th>
                    <th scope="col" class="px-3 py-2">
                        Item_code
                    </th>

                    <th scope="col" class="px-3 py-2">
                        short_description
                    </th>
                    <th scope="col" class="px-3 py-2">
                        Size
                    </th>
                    <th scope="col" class="px-3 py-2">
                        Watt
                    </th>
                    <th scope="col" class="px-3 py-2">
                        Colour
                    </th>
                    <th scope="col" class="px-3 py-2">
                        Shape
                    </th>
                    <th scope="col" class="px-3 py-2">
                        Brand
                    </th>
                    <th scope="col" class="px-3 py-2">
                        Light_output_Colour
                    </th>
                    <th scope="col" class="px-3 py-2">
                        Vendor
                    </th>
                    <th scope="col" class="px-3 py-2">
                        Description
                    </th>
                    <th scope="col" class="px-3 py-2">
                        Price
                    </th>
                    <th scope="col" class="px-3 py-2">
                        Length
                    </th>
                    <th scope="col" class="px-3 py-2">
                        Material
                    </th>
                    <th scope="col" class="px-3 py-2">
                        WireType
                    </th>
                    <th scope="col" class="px-3 py-2">
                        In_Builtswitch
                    </th>
                    <th scope="col" class="px-3 py-2">
                        Pintop
                    </th>
                    <th scope="col" class="px-3 py-2">
                        Holdertype
                    </th>
                    <th scope="col" class="px-3 py-2">
                        Discount
                    </th>
                    <th scope="col" class="px-3 py-2">
                        Images
                    </th>
                    <th scope="col" class="px-3 py-2">
                        status
                    </th>


                </tr>
            </thead>
            <tbody>



                <?php


                $sql =  " SELECT * from electrical_catinfo;";


                $result = mysqli_query($con, $sql);


                if (mysqli_num_rows($result) > 0) {


                    while ($row = mysqli_fetch_assoc($result)) {



                ?>


                        <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                            <th scope="row" class="px-3 py-2 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                <?php echo $row["S.No"]; ?>
                            </th>
                            <td class="px-3 py-2">
                                <?php echo $row["category_name"]; ?>
                            </td>
                            <td class="px-3 py-2">
                                <?php echo $row["sub_category"]; ?>
                            </td>
                            <td class="px-3 py-2">
                                <input type="text" value="<?php echo $row["Item_code"]; ?>">
                            </td>
                            <td class="px-3 py-2">
                                <?php echo $row["short_description"]; ?>
                            </td>
                            <td class="px-3 py-2">
                                <?php echo $row["Size"]; ?>
                            </td>
                            <td class="px-3 py-2">
                                <?php echo $row["Watt"]; ?>
                            </td>
                            <td class="px-3 py-2">
                                <?php echo $row["Colour"]; ?>
                            </td>
                            <td class="px-3 py-2">
                                <?php echo $row["Shape"]; ?>
                            </td>
                            <td class="px-3 py-2">
                                <?php echo $row["Brand"]; ?>
                            </td>
                            <td class="px-3 py-2">
                                <?php echo $row["Light_output_Colour"]; ?>
                            </td>
                            <td class="px-3 py-2">
                                <?php echo $row["Vendor"]; ?>
                            </td>
                            <td class="px-3 py-2">
                                <?php echo $row["Description"]; ?>
                            </td>
                            <td class="px-3 py-2">
                                <?php echo $row["Price"]; ?>
                            </td>
                            <td class="px-3 py-2">
                                <?php echo $row["Length"]; ?>
                            </td>
                            <td class="px-3 py-2">
                                <?php echo $row["Material"]; ?>
                            </td>
                            <td class="px-3 py-2">
                                <?php echo $row["WireType"]; ?>
                            </td>
                            <td class="px-3 py-2">
                                <?php echo $row["In_Builtswitch"]; ?>
                            </td>
                            <td class="px-3 py-2">
                                <?php echo $row["Pintop"]; ?>
                            </td>
                            <td class="px-3 py-2">
                                <?php echo $row["Holdertype"]; ?>
                            </td>
                            <td class="px-3 py-2">
                                <?php echo $row["Discount"]; ?>
                            </td>
                            <td class="px-3 py-2">
                                <?php echo $row["Images"]; ?>
                            </td>
                            <td class="px-3 py-2">
                                <?php echo $row["status"]; ?>
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