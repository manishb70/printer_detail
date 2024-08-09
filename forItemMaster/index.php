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


    <h1 style="text-align: center;" class="mx-auto text-center tw-full">Item Master Register</h1>


    <div>







        <div class="h-full bg-gray-400 dark:bg-gray-900">
            <!-- Container -->
            <div class="mx-auto">
                <div class="flex justify-center px-6 py-12">
                    <!-- Row -->
                    <div class="w-full lg:w-11/12 flex">
                        <!-- Col -->

                        <!-- Col -->
                        <div class="w-full  bg-white dark:bg-gray-700 p-5 rounded-lg lg:rounded-l-none">
                            <h1 class="py-4 text-3xl font-bold text-center text-gray-800 dark:text-white">Item add</h1>


                            <!-- <form action="#" method="POST">

                        <button type="submit" name="newRequisitionGenrate" >Genrate New Record</button>



                        </form> -->


                            <form id="" action="#" method="post" class="px-8 pt-6 pb-8 mb-4 bg-white dark:bg-gray-800 rounded">

                                <div id="rowItem">


                                    <select class="w-full px-3 py-2 text-sm leading-tight text-gray-700 dark:text-white border rounded shadow appearance-none focus:outline-none focus:shadow-outline" onchange="setRequireFieldsFromCategory()" name="" id="catId">

                                        <?php


                                        $sql = "SELECT * FROM itemmastercategory";
                                        $result = mysqli_query($con, $sql);

                                        while ($row = mysqli_fetch_array($result)) {
                                        ?>
                                            <option value="<?php echo $row["categoryId"] ?>"> <?php echo $row["catagory_name"] ?></option>
                                        <?php

                                        }

                                        ?>

                                    </select>



                                    <div id="sub_catArea" class="">


                                        <h1 class="font-bold" sub-id="DW">GLASS</h1>


                                        <div id="attrArea" class="mb-4 mt-4 border-2-black-600  md:flex-wrap   flex  flex-wrap " style="border: 2px solid;">
                                            attrr area

                                        </div>

                                    </div>





                                    <!-- <a data-modal-target="crud-modal" id="addRowBtn" data-modal-toggle="crud-modal" class="cursor-pointer"> + Add row </a> -->

                                    <div class="mb-4 mt-4 md:flex  md:justify-between">

                                        <div class="mb-6 mt-3 text-center">
                                            <a name="recordSubmit" onclick="setRequireFieldsFromCategory(event)" style=" background-color: green;" class="w-full px-4 py-2 font-bold text-white bg-blue-500 rounded-full hover:bg-blue-700 dark:bg-blue-700 dark:text-white dark:hover:bg-blue-900 focus:outline-none focus:shadow-outline" type="submit">
                                                Submit
                                            </a>
                                        </div>

                                    </div>
                                    <hr class="mb-6 border-t" />
                            </form>



                        </div>
                    </div>
                </div>
            </div>
        </div>


















    </div>
























</body>

<script src="./js/itemMaster.js"></script>
<script src="./js/jquery-3.7.1.min.js"></script>

</html>