<?php


            include("./dbconnection/db.php");






        $sql = "SELECT * FROM for_office.create_query_form;";


        $result = mysqli_query($con,$sql);

            include("./navForLogged.php");




?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/flowbite@2.5.1/dist/flowbite.min.css" rel="stylesheet" />
    <script src="https://cdn.jsdelivr.net/npm/flowbite@2.5.1/dist/flowbite.min.js"></script>
    <title>Document</title>
</head>
<body>
    

    <div class="relative overflow-x-auto mt-4 mb-5 ">
        <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400 ">
            <thead class="text-xs text-gray-700 whitespace-nowrap uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                <tr>
                    <th scope="col" class="px-6 py-3">
                        S.No
                    </th>
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
                        Reminder Frequency ( day wise )
                    </th>
                    <th scope="col" class="px-6 py-3">
                    No of times
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
                    <th scope="col" class="px-6 py-3">
                        Status
                    </th>
                </tr>
            </thead>
            <tbody>

            <?php

                        $i = 0;
                    while ($row = mysqli_fetch_assoc($result)) {
                        $i++;

?>


                <tr class="bg-white border-b dark:bg-g  ray-800 dark:border-gray-700">


                    <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                        <?php echo   $i;  ?>
                    </th>
                    <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                        <?php echo  $row['created_by'] ?>
                    </th>
                    <td class="px-6 py-4">
                        <?php echo  $row['created_lead'] ?>
                    </td>
                    <td class="px-6 py-4">
                        <?php echo  $row['record_no'] ?>
                    </td>
                    <td class="px-6 py-4">
                          <?php echo  $row['contact_person_details'] ?>
                    </td>
                    <td class="px-6 py-4">
                        <?php echo  $row['lead_source'] ?>
                    </td>
                    <td class="px-6 py-4">
                        <?php echo  $row['lead_type'] ?>
                    </td>
                    <td class="px-6 py-4">
                        <?php echo  $row['assigned_to'] ?>
                    </td>
                    <td class="px-6 py-4">
                        <?php echo  $row['query_received_date'] ?>
                    </td>
                    <td class="px-6 py-4">
                        <?php echo  $row['query_start_date'] ?>
                    </td>
                    <td class="px-6 py-4">
                        <?php echo  $row['query_end_date'] ?>
                    </td>
                    <td class="px-6 py-4">
                        <?php echo  $row['follow_up'] ?>
                    </td>
                    <td class="px-6 py-4">
                        Day in 
                        <?php echo  $row['followup_reminder_frequency'] ?>
                    </td>
                    <td class="px-6 py-4">
                        <?php echo  $row['no_of_times'] ?>
                    </td>
                    <td class="px-6 py-4">
                        <?php echo  $row['re_query'] ?>
                    </td>
                    <td class="px-6 py-4">
                        <?php echo  $row['re_query_closure_date'] ?>
                    </td>
                    <td class="px-6 py-4">
                        <?php echo  $row['re_query_end_date'] ?>
                    </td>
                    <td class="px-6 py-4">
                        <?php echo  $row['status'] ?>
                    </td>
                    
                </tr>




                <?php
                    }


?>
               
            </tbody>
        </table>
    </div>
</body>
</html>