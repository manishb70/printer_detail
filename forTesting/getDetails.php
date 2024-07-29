<?php


include("../db.php");


$sql = "SELECT * FROM  company_header_level_details ";



$result = mysqli_query($con, $sql);





?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <?php

    while ($row = mysqli_fetch_assoc($result)) {

        $mainCompanyId  = $row["company_id"];

        echo  '<h1>' . $row["name_of_company"];

        echo "<ul>";

        $sql2 = "SELECT * FROM  customer_line_label_details Where main_company_id='$mainCompanyId'";
        $resul2 = mysqli_query($con, $sql2);

        while ($row2 = mysqli_fetch_assoc($resul2)) {
            $subCompanyId = $row2["sub_company_id"];
            echo  '<li>' . $row2["company_address"];
            echo  "<ul>";

        
            $sql3 = "SELECT * FROM company_banking_details WHERE main_company_id=$mainCompanyId and sub_company_id= $subCompanyId";

            $row3= mysqli_query($con, $sql3);
            $result_3 = mysqli_fetch_assoc($row3);
            echo  "<br> bank Name :". $result_3["bank_name"];
            echo " <br>account number".$result_3["bank_account_number"];
            echo  "<br> accoount ifsc number ".$result_3["bank_ifsc_code"];
            // echo  var_dump($result_3["bank_name"]);
            // while ($row3 = mysqli_fetch_assoc($row3)) { 
            // echo "<li>".$row3["bank_name"]."</li>";
            // echo "manish";
            // }


            echo   "</ul>";

            echo  "</li>";
        }
        echo "</ul>";
    }

    ?>
</body>

</html>