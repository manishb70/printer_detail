<?php
session_start();
// echo  $_SESSION["username"];
// echo $_SESSION["user_id"];
// echo $_SESSION["role"];







if($_SESSION["role"]=="admin"){

    // include("genrate_requisition.php");
    include("requisition.php");
}else if($_SESSION["role"]=="storemanager"){

    include("storemanager.php");
}







?>