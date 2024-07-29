<?php
session_start();



if (!isset($_SESSION["NAME"])) {


    header("location: login.php");
}





echo $_SESSION["NAME"];



echo "<br> welcome ";
?>