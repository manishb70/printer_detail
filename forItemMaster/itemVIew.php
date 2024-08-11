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



    <div class="relative overflow-x-auto shadow-md sm:rounded-lg">
        <table 

        style="width: 60%;" 

        class=" text-sm mx-auto text-left rtl:text-right text-gray-500 dark:text-gray-400">
            <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                <tr>
                    <th scope="col" class="px-6 py-3">
                        item ID
                    </th>
                    <th scope="col" class="px-6 py-3">
                        item code
                    </th>
                    <th scope="col" class="px-6 py-3">
                        item name
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Category
                    </th>

                    <th scope="col" class="px-6 py-3">
                        Sub cat name
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Status
                    </th>
                    <th scope="col" class="px-6 py-3">
                        price
                    </th>
                </tr>
            </thead>
            <tbody>



                <?php


                $sql = "select * from itemmasterheader a JOIN itemmastercategory b ON a.categoryId = b.categoryId  JOIN  sub_category c ON c.subCatId = a.subcatid ;";


                $result = mysqli_query($con, $sql);


                if (mysqli_num_rows($result) > 0) {


                    while ($row = mysqli_fetch_assoc($result)) {




                ?>


                        <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                            <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                <?php echo $row["itemid"]; ?>
                            </th>
                            <td class="px-6 py-4">
                                <?php echo $row["item_code"]; ?>
                            </td>
                            <td class="px-6 py-4">
                                <?php echo $row["item_name"]; ?>
                            </td>
                            <td class="px-6 py-4">
                                <?php echo $row["catagory_name"]; ?>
                            </td>
                            <td class="px-6 py-4">
                                <?php echo $row["name"]; ?>
                            </td>
                            <td class="px-6 py-4">
                                <?php echo $row["status"]; ?>
                            </td>
                            <td class="px-6 py-4">
                                <?php echo $row["price"]; ?>
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

</html>