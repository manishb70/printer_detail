<?php


include("../db.php");









?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>






    <ul>

    <?php
    $sql = "SELECT * FROM for_office.itemmastercategory;";

    $result  = mysqli_query($con, $sql);

    while ($row = mysqli_fetch_assoc($result)) {

?>      


        <li>    
        <?php echo  $row["catagory_name"]; ?>
            <ul>
                <li>
                    bulb
                </li>
               
            </ul>
        </li>



    </ul>
<?php


    }

?>
</body>

</html>