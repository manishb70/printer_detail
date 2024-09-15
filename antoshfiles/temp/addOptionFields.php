<?php
session_start();
$_SESSION["subId"] = 1;
$_SESSION["attId"] = 27;
// $attId  = 27;

include("../db.php");


if ($_SERVER['REQUEST_METHOD'] == 'POST') {



    if (isset($_POST['subCatId'])) {

        $_SESSION["subId"] = $_POST["subCatId"];
        echo $_POST["subCatId"];
    }


    if (isset($_POST['SelectedattrId'])) {

        $_SESSION["attId"] = $_POST["SelectedattrId"];

        echo  $_POST["SelectedattrId"];
    }





    // $attId = $_POST["SelectedattrId"];



}




?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.0.4/dist/tailwind.min.css" rel="stylesheet">
</head>

<body>



    <h1>Sub Catd</h1>


    <form action="#" method="POST">

        <select id="subCatId" name="subCatId" class="block  p-2   cursor-pointer text-sm text-gray-900 border border-gray-300 rounded-lg bg-gray-50 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
            <?php

            $sql1 = "SELECT * FROM for_office.sub_category;";
            $result1 = mysqli_query($con, $sql1);

            while ($row = mysqli_fetch_array($result1)) {
            ?>
                <option value="<?php echo $row["subCatId"] ?>" class="cursor-pointer"><?php echo $row["name"]; ?></option>

            <?php

            } ?>

        </select>




        <button type="submit">Change attributes</button>



    </form>

    
    <form action="#" method="POST">
    
    
    <select name="SelectedattrId" id="SelectedattrId" class="block  p-2   cursor-pointer text-sm text-gray-900 border border-gray-300 rounded-lg bg-gray-50 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
        
        

        <?php

$sub_id = $_SESSION['subId'];

        $sql1 = "SELECT * FROM for_office.requireattributeforcatname where SubcatId=$sub_id";

        $result1 = mysqli_query($con, $sql1);
        
        
        while ($row = mysqli_fetch_array($result1)) {

        ?>


            <option value="<?php $row["attr_id"] ?>"> <?php echo $row["name"] ?> </option>



        <?php } ?>



    </select>


    
    
    <button type="submit">Click chamge attribtes</button>
    
            </form>
    

        
        <select name="" id="" class="block  p-2   cursor-pointer text-sm text-gray-900 border border-gray-300 rounded-lg bg-gray-50 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">

        <?php

        $attId =   $_SESSION["attId"];


        $sql1 = "SELECT * FROM for_office.fields_lookup where attr_id=$attId";

        $result1 = mysqli_query($con, $sql1);


        while ($row = mysqli_fetch_array($result1)) {

        ?>


            <option value="<?php $row["attr_id"] ?>"> <?php echo $row["description"] ?> </option>



        <?php } ?>


        
    </select>









    <h1>Add fiffls</h1>

    <div>
        <label for="first_name" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">First name</label>
        <input type="text" id="first_name" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block  p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="John" required />

    </div>

    <button>Add</button>

    </form>


</body>


</html>