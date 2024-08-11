<?php



if ($_SERVER['REQUEST_METHOD'] == 'GET') {



    if (isset($_GET['categoryFields'])) {

        $catId = $_GET['catId'];

        include("db.php");


        // $sql = "SELECT * FROM requireattributeforcatname where catId= $catId  ";
        $sql = "SELECT * FROM sub_category where catId=$catId ;  ";


        $result = mysqli_query($con, $sql);
        // $row = mysqli_fetch_assoc($result);




        if ($result) {

            $data = [];

            while ($row = mysqli_fetch_assoc($result)) {
                $subCatId = $row["subCatId"];

                $requireData = [];

                $sql1 = "SELECT * FROM requireattributeforcatname where SubcatId= $subCatId ";
                $result1 = mysqli_query($con, $sql1);


                if ($result1) {
                    while ($row1 = mysqli_fetch_assoc($result1)) {


                        $requireData[] = $row1;
                        // $requireData[]= "manish";

                    }
                } else {
                    $requireData[] = "no data found";
                }




                $data[$row["name"]] = $requireData;

                // $sql = "SELECT * FROM requireattributeforcatname WHERE SubcatId =$subCatId";
                // $result= mysqli_query($con,$sql);
                // $row1 = mysqli_fetch_assoc($result);        


                // $data["name"]=$subCatId;
                // $data["name"]=$row1;


            }



            $response["success"] = true;
            $response["data"] = $data;
        } else {



            $response["success"] = false;
            $response["message"] = "erroe when data fetching from mysql";
        }






        echo json_encode($response);
    }


    if (isset($_GET["itemMasterItemcCodeGen"])) {


        include("./db.php");




        // $response["mainCatId"] = $_GET["manCatId"];
        // $response["success"] = true;
        // $response["SubCatid"] = $_GET["SubCatid"];
        // $response["itemcodegen"] = $_GET["itemMasterItemcCodeGen"];


        $itemCode = $_GET["itemCodeGenrated"];
        $catId =  $_GET["manCatId"];
        $subCatId  = $_GET["SubCatid"];

        $attr  = $_GET["attrData"];


        $sql = "INSERT into itemmasterheader (item_code,categoryId,subcatid) values('$itemCode',$catId,$subCatId)";


        $result = mysqli_query($con, $sql);


        if ($result) {

            // $response["data"] = "inserted succesfylu in item master please add attribute ";

            $lastInsertId = mysqli_insert_id($con);


            // 
            // forEach($attr as $data)

            // $sql = "INSERT INTO itemattribute (item_code,attribute_id) values($lastInsertId,"





            $sql = "INSERT INTO itemattribute (item_code,attribute_id,attribute_value) values" ;


            $values = array();

            foreach ($attr as $key => $value) {
                // Assuming $key is item_code and $value is attribute_id
                $values[] = "( $lastInsertId,$key, '$value')";
            }
            
            $sql .= implode(", ", $values );
            

            


            $result = mysqli_query($con, $sql);



            if($result){



                echo  "data inserted successfullt";


            }
            

            echo $sql;



        
















            $response["inserted id "] = $lastInsertId;
            // 
            $response["success"] = true;
        }



        // $response["attr"]=$attr;





        echo $response["success"] = false;

        echo json_encode($response);
    }
}
