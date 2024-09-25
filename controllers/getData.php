<?php




function StatusAndValue($tableNAme,  $statusColumnName)
{
    // include("../db.php");
    include('../dbconnection/db.php');
    $query = "SELECT $statusColumnName  from $tableNAme ; ";




    $result = mysqli_query($con, $query);









    if ($result) {



        $data = [];


        while ($row = mysqli_fetch_assoc($result)) {


            $data[] = $row[$statusColumnName];
        }


        $totalIndex = count($data);


        $filteredArray = array_filter($data, function ($value) {
            return is_string($value) || is_int($value);
        });



        $unicIndex = array_count_values($filteredArray);

        $response["total"] = $totalIndex;

        $response["Indexes"] = $unicIndex;


        return $response;
    } else {



        return json_encode(mysqli_error($con));
    }
}
function getRowDataById($tableNAme,  $id)
{
    // include("../db.php");
    include('../dbconnection/db.php');
    


    $query = "SELECT * FROM for_office.bom_hedar_detail a JOIN for_office.bom_line_detail  b  on a.header_id= b.bom_id   where a.header_id = $id; ";




    $result = mysqli_query($con, $query);









    if ($result) {



        $data = [];


        while ($row = mysqli_fetch_assoc($result)) {


            $data[] = $row[$statusColumnName];
        }







        $unicIndex = array_count_values($filteredArray);






        return $data;
    } else {



        return json_encode(mysqli_error($con));
    }
}
