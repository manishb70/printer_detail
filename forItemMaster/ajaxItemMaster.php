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


                        if($result1){
                            while ($row1 = mysqli_fetch_assoc($result1)) {

                                
                                $requireData[]= $row1;
                                // $requireData[]= "manish";

                            }                                  
                       
                        }else{
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
}
