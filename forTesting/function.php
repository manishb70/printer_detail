
<?php

// include("../db.php");








function getLineLable($id)
{
    $con = mysqli_connect(
        "localhost",
        "root",
        "manish@123",
        "for_Office"
    );
    

    // $sql = "SELECT * FROM company_header_level_details where  company_id =$id";
    // $sql = "SELECT * FROM customer_line_label_details where  main_company_id = $id;";
    $sql = "SELECT *FROM customer_line_label_details JOIN company_banking_details ON customer_line_label_details.sub_company_id  = company_banking_details.sub_company_id where company_banking_details.main_company_id =$id;";
    // include("../db.php");
    $result = mysqli_query($con, $sql);  


    $data = [];


    while ($row = mysqli_fetch_assoc($result)) {

        $data[] = $row;
    }


    $a=[];
    $a[]="manish";

    mysqli_close($con);

    return $data;
}








if ($_SERVER['REQUEST_METHOD'] == 'GET') {

    $user_id=$_GET["find_id"];
   
   
   

   
    $data = getLineLable($user_id);



    echo json_encode($data);
}










?>