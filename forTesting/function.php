
<?php

include("../db.php");







function getLineLable($id)
{

    include("../db.php");

    // $sql = "SELECT * FROM company_header_level_details where  company_id =$id";
    // $sql = "SELECT * FROM customer_line_label_details ";
    $sql = "SELECT *FROM customer_line_label_details JOIN company_banking_details ON customer_line_label_details.sub_company_id  = company_banking_details.sub_company_id where company_banking_details.main_company_id =$id;";
    $result = mysqli_query($con, $sql);


    $data = [];

    if(mysqli_num_rows($result) < 0){
        $data[]="no data found";
    }
    
    while ($row = mysqli_fetch_assoc($result)) {

        $data[] = $row;
    }

    // echo "hello";

    mysqli_close($con);

    return $data;
}








if ($_SERVER['REQUEST_METHOD'] == 'GET') {

    $user_id = $_GET["find_id"];
                                
    $int_id = intval($user_id);
    $data = getLineLable($user_id);
    echo json_encode($data);



}










?>