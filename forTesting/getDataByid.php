<?php


include("../db.php");


if($_SERVER['REQUEST_METHOD']=='GET'){




    // echo "get data";
    $sql = "SELECT * FROM admin_roles";

    $result = mysqli_query($con,$sql);

    


    $row= mysqli_fetch_assoc($result);

    echo json_encode($row);






}



























?>