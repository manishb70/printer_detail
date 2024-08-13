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


    if (isset($_GET["itemMasterSave"])) {

        include("./db.php");

        $attr  = $_GET["attrData"];;




        $color = isset($attr["color"]) ? $attr["color"] : null;
        $subCatId  = isset($_GET["SubCatid"]) ? $_GET["SubCatid"] : null;
        $catId = isset($_GET["manCatId"]) ? $_GET["manCatId"] : null;
        $itemCode = isset($_GET["itemCodeGenrated"]) ? $_GET["itemCodeGenrated"] : null;
        $shortDiscription = isset($attr["shortDescription"]) ? $attr["shortDescription"] : null;
        $size = isset($attr["Size"]) ? $attr["Size"] : null;
        $watt = isset($attr["Watt"]) ? $attr["Watt"] : null;
        $Shape = isset($attr["shape"]) ? $attr["shape"] : null;
        $brand = isset($attr["Brand"]) ? $attr["Brand"] : null;
        $Light_Output_colour = isset($attr["Light output Colour"]) ? $attr["Light output Colour"] : null;
        $vandore = isset($attr["vendor"]) ? $attr["vendor"] : null;
        $description = isset($attr["Long_Descripition"]) ? $attr["Long_Descripition"] : null;
        $price = isset($attr["price"]) ? $attr["price"] : null;
        $length = isset($attr["length"]) ? $attr["length"] : null;
        $material = isset($attr["material"]) ? $attr["material"] : null;
        $wireType = isset($attr["wireType"]) ? $attr["wireType"] : null;
        $inBuiltSwicth  = isset($attr["inBuiltSwich"]) ? $attr["inBuiltSwich"] : null;
        $pintop  = isset($attr["pintop"]) ? $attr["pintop"] : null;
        $holer = isset($attr["Holder_type"]) ? $attr["Holder_type"] : null;
        $images  = isset($attr["Images"]) ? $attr["Images"] : null;
        $discount  = isset($attr["discount"]) ? $attr["discount"] : null;
        $price  = isset($attr["price"]) ? $attr["price"] : null;


        $itemStatus  = $_GET["currentItemStatus"];







        $sql = "INSERT into electrical_catinfo (category_name,sub_category,Item_code,short_description,Size,Watt,Colour,Shape,Brand,Light_output_Colour,Vendor,Description,Price,Length,Material,WireType,In_Builtswitch,Pintop,Holdertype,Discount,Images,status) values ('$catId','$subCatId','$itemCode','$shortDiscription','$size','$watt','$color', '$Shape' ,'$brand','$Light_Output_colour','$vandore','$description','$price','$length','$material','$wireType','$inBuiltSwicth','$pintop','$holer','$discount','$images' ,'$itemStatus')";



        $result = mysqli_query($con, $sql);







        // echo "Color: " . $color . "<br>";
        // echo "Sub Category ID: " . $subCatId . "<br>";
        // echo "Category ID: " . $catId . "<br>";
        // echo "Item Code: " . $itemCode . "<br>";
        // echo "Short Description: " . $shortDiscription . "<br>";
        // echo "Size: " . $size . "<br>";
        // echo "Watt: " . $watt . "<br>";
        // echo "Shape: " . $Shape . "<br>";
        // echo "Brand: " . $brand . "<br>";
        // echo "Light Output Colour: " . $Light_Output_colour . "<br>";
        // echo "Vendor: " . $vandore . "<br>";
        // echo "Description: " . $description . "<br>";
        // echo "Price: " . $price . "<br>";
        // echo "Length: " . $length . "<br>";
        // echo "Material: " . $material . "<br>";
        // echo "Wire Type: " . $wireType . "<br>";
        // echo "In-Built Switch: " . $inBuiltSwicth . "<br>";
        // echo "Pin Top: " . $pintop . "<br>";
        // echo "Holder Type: " . $holer . "<br>";
        // echo "Images: " . $images . "<br>";




        $response["recordId"] = mysqli_insert_id($con);
        $response["ItemCode"] = $itemCode;

        if(isset($_FILES)){

            $response["file"] = $_FILES;
        }


        $response["statuss"] = $itemStatus;

        $response["success"] = true;







        echo json_encode($response);
    } else if ((isset($_GET["getOptionAttr"]))) {


        include("./db.php");


        $attrId = $_GET["attr_id"];


        // $sql = "SELECT * from fields_lookup where attr_id=$attrId";
        // $sql = "SELECT * from fields_lookup where attr_id=$attrId";
        $sql = "SELECT * from fields_lookup;";





        $result = mysqli_query($con, $sql);


        $data = [];


        while ($row = mysqli_fetch_array($result)) {

            $data[] = $row;
        }




        $response["success"] = true;
        $response["data"] = $data;




        echo  json_encode($response);
    }
}


if ($_SERVER['REQUEST_METHOD'] == 'POST') {



    if (isset($_POST["submitDataTOItemMaster"])) {

        include("db.php");


        // $itemCode = $_POST["Item_code"];
        // $item_category = $_POST["catagory_name"];
        // $Item_Name = $_POST["Item_Name"];
        // $subCatName = $_POST["subCatName"];
        // $item_type = "";
        // $Quantity = "";
        // $Material = $_POST["Material"];
        // $Design = $_POST[""];
        // $Finish_type = '';
        // $Half_Full_Thread = "";
        // $Holder_Thread = "";
        // $Holdertype = $_POST["Holdertype"];
        // $Thread = "";
        // $Brand = $_POST["Brand"];
        // $Light_output_Colour = $_POST["Light_output_Colour"];
        // $Colour = $_POST["Colour"];
        // $cut = $_POST["cut"];
        // $height = "";
        // $Length = $_POST["Length"];
        // $Breadth = "";
        // $upperDiameter = "";
        // $Bottom_Dia = "";
        // $Centre_Hole_dia = "";
        // $Size = $_POST["Size"];
        // $Watt = $_POST["Watt"];
        // $Shape = $_POST["Shape"];
        // $Side_Hole_dia = "";
        // $Top_hole_dia = "";
        // $No_of_ply = "";
        // $style = "";
        // $thickness = "";
        // $weight="";
        // $Depth = "";
        // $Bottom_hole_dia = "";
        // $Bottom_hole_Core = "";
        // $Inner_Outer_thread = ""; 
        // $Upper_thread = ""; 
        // $Lower_thread = ""; 
        // $Thread_length= ""; 
        // $Indian_Imported= ""; 
        // $In_Builtswitch = $_POST["In_Builtswitch"];
        // $WireType = $_POST["WireType"];
        // $Vendor = $_POST["Vendor"];
        // $imagePath = $_POST["Images"];


        $itemCode = isset($_POST["Item_code"]) ? $_POST["Item_code"] : "";
        $item_category = isset($_POST["catagory_name"]) ? $_POST["catagory_name"] : "";
        $Item_Name = isset($_POST["Item_Name"]) ? $_POST["Item_Name"] : "";
        $subCatName = isset($_POST["subCatName"]) ? $_POST["subCatName"] : "";
        $item_type = "";
        $Quantity = 0;
        $Material = isset($_POST["Material"]) ? $_POST["Material"] : "";
        $Design = isset($_POST["Design"]) ? $_POST["Design"] : "";
        $Finish_type = '';
        $Half_Full_Thread = "";
        $Holder_Thread = "";
        $Holdertype = isset($_POST["Holdertype"]) ? $_POST["Holdertype"] : "";
        $Thread = "";
        $Brand = isset($_POST["Brand"]) ? $_POST["Brand"] : "";
        $Light_output_Colour = isset($_POST["Light_output_Colour"]) ? $_POST["Light_output_Colour"] : "";
        $Colour = isset($_POST["Colour"]) ? $_POST["Colour"] : "";
        $cut = isset($_POST["cut"]) ? $_POST["cut"] : "";
        $height = "";
        $Length = isset($_POST["Length"]) ? $_POST["Length"] : "";
        $Breadth = "";
        $upperDiameter = "";
        $Bottom_Dia = "";
        $Centre_Hole_dia = "";
        $Size = isset($_POST["Size"]) ? $_POST["Size"] : "";
        $Watt = isset($_POST["Watt"]) ? $_POST["Watt"] : "";
        $Shape = isset($_POST["Shape"]) ? $_POST["Shape"] : "";
        $Side_Hole_dia = "";
        $Top_hole_dia = "";
        $No_of_ply = "";
        $style = "";
        $thickness = "";
        $weight = "";
        $Depth = "";
        $Bottom_hole_dia = "";
        $Bottom_hole= "";
        $Core = "";
        $Inner_Outer_thread = "";
        $Upper_thread = "";
        $Lower_thread = "";
        $Thread_length = "";
        $Indian_Imported = "";
        $In_Builtswitch = isset($_POST["In_Builtswitch"]) ? $_POST["In_Builtswitch"] : "";
        $WireType = isset($_POST["WireType"]) ? $_POST["WireType"] : "";
        $Vendor = isset($_POST["Vendor"]) ? $_POST["Vendor"] : "";
        $imagePath = isset($_POST["Images"]) ? $_POST["Images"] : "";
        $Lower_thread = "";











            $sql = "INSERT INTO itemmaster (
            item_code,
            Item_Category,
            Item_Name,
            sub_category,
            Item_Type,
            Quantity,
            Material, 
            Design,
            Finish_type,
            Half_Full_Thread,
            Holder_Thread,
            Holder_type,
            Thread,
            Brand,
            Light_Output_colour,
            Colour,
            Cut,
            Height,
            Length,
            Breadth,
            Upper_Dia,
            Bottom_Dia,
            Centre_Hole_dia,
            Size,
            watt,
            Shape,
            Side_Hole_dia,
            Top_hole_dia,
            No_of_ply,
            Style,
            Thickness,
            Weight,
            Depth,
            Bottom_hole_dia,
            Bottom_hole,
            Core,
            Inner_Outer_thread,
            Upper_thread,
            Lower_thread,
            Thread_length,
            Indian_Imported,
            In_built_switch,
            Wire_type,
            vendor,
            imagePath)
                
                    values(
                    '$itemCode',
                    '$item_category',
                    '$Item_Name',
                    '$subCatName',
                    '$item_type',
                    $Quantity,
                    '$Material',
                    '$Design',
                    '$Finish_type',
                    '$Half_Full_Thread',
                    '$Holder_Thread',
                    '$Holdertype',
                    '$Thread',
                    '$Brand',
                    '$Light_output_Colour',
                    '$Colour',
                    '$cut',
                    '$height',
                    '$Length',
                    '$Breadth',
                    '$upperDiameter',
                    '$Bottom_Dia',
                    '$Centre_Hole_dia',
                    '$Size',
                    '$Watt',
                    '$Shape',
                    '$Side_Hole_dia',
                    '$Top_hole_dia',
                    '$No_of_ply',
                    '$style',
                    '$thickness',
                    '$weight',
                    '$Depth',
                    '$Bottom_hole_dia',
                    '$Bottom_hole',
                    '$Core',
                    '$Inner_Outer_thread',
                    '$Upper_thread',
                    '$Lower_thread',
                    '$Lower_thread',
                    '$Indian_Imported',
                    '$In_Builtswitch',
                    '$WireType',
                    '$Vendor',
                    '$imagePath'
                    )";





        $result = mysqli_query($con, $sql);


        if ($result) {

            

            $response["success"] = true;
            $response["message"] = "data inserted successfully";
        } else {
            $response["success"] = "false";
        }


















        echo json_encode($response);
    
    }
}
