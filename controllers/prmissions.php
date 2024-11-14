<?php


include "../dbconnection/db.php";

session_start();


$user_id = $_SESSION['user_id'];






$sql = "SELECT * FROM for_office.functions_checker a JOIN  for_office.functions_urls b on a.function_id=b.id  where a.user_id=16 ;;;";



    $result = mysqli_query($con, $sql);


    while($row = mysqli_fetch_assoc($result)){

        echo $row['function_name']."is allowed". (int)  ($row['is_allowed'])  ?? "yes is allowd "  ."<br>";

    }























?>