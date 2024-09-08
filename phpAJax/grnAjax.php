<?php




if ($_SERVER['REQUEST_METHOD'] == 'POST') {




    if (isset($_POST['grnDataInsert'])) {


        // $response["data"] = $_POST;
        
        
        

        
        
        
        $response["success"] = true;




        echo  json_encode($response);

    }
}
