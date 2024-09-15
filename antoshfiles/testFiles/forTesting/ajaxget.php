<?php



include("../db.php");


// echo "djiwjojd";


$sql = "SELECT * FROM requisition_table";


$result = mysqli_query($con,$sql);


$row = mysqli_fetch_assoc($result);




echo json_encode($row);








?>