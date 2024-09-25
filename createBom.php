<?php
session_start();
include("./navForLogged.php");

include("./dbconnection/db.php");



if ($_SERVER['REQUEST_METHOD'] == 'POST') {


    $user = $_SESSION['username'];
    $currentDateTime = date('Y-m-d H:i:s');



    $item_code = $_POST['item_name'];
    $item_name = $_POST['item_name'];
    $percentage = $_POST['percentage'];
    $warehouse_location = $_POST['warehouse_location'];
    $revision = $_POST['revision'];
    $products = $_POST['products'];
    $organizin_mapping = $_POST['organizin_mapping'];
    // $bill_to = $_POST['bill_to'];








    // $sql = "INSERT INTO `for_office`.`purchase_order_header` (`createdBy`, `created_date`) VALUES ('$user', '$currentDateTime');";

    $sql = "INSERT INTO `for_office`.`bom_hedar_detail` ( `item_name`,`item_code`, `percentage`, `wharehouse_`, `created_by`) 
    VALUES (?, ?, ?, ?, ?);";


    $stmt = $con->prepare($sql);

    $stmt->bind_param("sssss",$item_code, $item_name, $percentage, $warehouse_location, $user);







    if ($stmt->execute()) {
        $result = $stmt->get_result();
        echo "SUccess";

        $product_id = $con->insert_id;

        echo $product_id;


    } else {

        echo $stmt->error;
    }
}













?>


<!DOCTYPE html>
<html lang="en">



<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.0.4/dist/tailwind.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://code.jquery.com/ui/1.14.0/themes/base/jquery-ui.css">
    <link rel="stylesheet" href="/resources/demos/style.css">
    <script src="https://code.jquery.com/ui/1.14.0/jquery-ui.js"></script>
    <script src="https://code.jquery.com/jquery-3.7.1.js"></script>
    <script src="./js/jquery-3.7.1.min.js"></script>



    <title>Create PO Form</title>
</head>

<body>
    <div id="create_section" class="mt-5 bg-gray-100 border border-gray-900 p-5 rounded-lg mx-5">
        <h1 class="text-center underline text-3xl mb-3 font-bold">Create BOM</h1>
        <form method="POST" class="w-full border border-gray-500 p-3 rounded-md">
            <div class="flex">
                <div class="flex flex-wrap m-2 gap-10 ">
                    <div>
                        <label for="email"
                            class="block  mb-2 font-bold text-xs font-medium text-gray-900 dark:text-white">Record
                            number :
                        </label>
                        <input id="bom_id" type="text" value="<?php if (isset($product_id)) {
                            echo $product_id;
                        } ?>" disabled
                            class="w-40 rounded-md border text-xs border-gray-500 bg-white py-3 pl-2 text-[#6B7280] h-6 outline-none focus:border-[#6A64F1] focus:shadow-md" />


                    </div>

                    <div class="">
                        <label class="block w-40 mb-2 font-bold text-xs font-medium text-gray-900 dark:text-white">item
                            name
                            : </label>
                        <input type="text" name="item_name" onchange="setBomImage()" id="item_name" required value="<?php if (isset($item_name)) {
                            echo $item_name;
                        } ?>"
                            class="w-40 rounded-md border text-xs border-gray-500 bg-white py-3 pl-2 text-[#6B7280] h-6 outline-none focus:border-[#6A64F1] focus:shadow-md" />
                    </div>
                    <div class="">
                        <label
                            class="block w-40 mb-2 font-bold text-xs font-medium text-gray-900 dark:text-white">revision
                            : </label>
                        <input type="text" name="revision" required value="<?php if (isset($revision)) {
                            echo $revision;
                        } else {
                            echo 0;
                        } ?>"
                            class="w-40 rounded-md border text-xs border-gray-500 bg-white py-3 pl-2 text-[#6B7280] h-6 outline-none focus:border-[#6A64F1] focus:shadow-md" />

                    </div>
                    <div class="">
                        <label
                            class="block w-40 mb-2 font-bold text-xs font-medium text-gray-900 dark:text-white">Percantage
                            :
                        </label>
                        <input type="text" name="percentage" required value="<?php if (isset($percentage)) {
                            echo $percentage;
                        } ?>"
                            class="w-40 rounded-md border text-xs border-gray-500 bg-white py-3 pl-2 text-[#6B7280] h-6 outline-none focus:border-[#6A64F1] focus:shadow-md" />

                    </div>
                    <div class="">
                        <label
                            class="block w-40 mb-2 font-bold text-xs font-medium text-gray-900 dark:text-white">Products
                            : </label>
                        <input type="text" name="products" required value="<?php if (isset($products)) {
                            echo $products;
                        } ?>"
                            class="w-40 rounded-md border text-xs border-gray-500 bg-white py-3 pl-2 text-[#6B7280] h-6 outline-none focus:border-[#6A64F1] focus:shadow-md" />
                    </div>
                    <div class="">
                        <label
                            class="block w-40 mb-2 font-bold text-xs font-medium text-gray-900 dark:text-white">Organisation
                            mapping :
                        </label>
                        <input type="text" required value="<?php if (isset($organizin_mapping)) {
                            echo $organizin_mapping;
                        } ?>" name="organizin_mapping"
                            class="w-40 rounded-md border text-xs border-gray-500 bg-white py-3 pl-2 text-[#6B7280] h-6 outline-none focus:border-[#6A64F1] focus:shadow-md" />


                    </div>
                    <div class="">
                        <label class="block w-40 mb-2 font-bold text-xs font-medium text-gray-900 dark:text-white">
                            Upload image :
                        </label>
                        <input type="file" required

                        id="uploadImageItem"
                        onchange="setUploadedImage (event)"
                            class="w-40 rounded-md border text-xs border-gray-500 bg-white py-3  text-[#6B7280]  outline-none focus:border-[#6A64F1] focus:shadow-md" />


                    </div>
                    <div class="">
                        <label class="block w-40 mb-2 font-bold text-xs font-medium text-gray-900 dark:text-white">Ware
                            house location : </label>
                        <input type="text" required value="<?php if (isset($warehouse_location)) {
                            echo $warehouse_location;
                        } ?>" name="warehouse_location"
                            class="w-40 rounded-md border text-xs border-gray-500 bg-white py-3 pl-2 text-[#6B7280] h-6 outline-none focus:border-[#6A64F1] focus:shadow-md" />
                    </div>
                    <button type="text"
                        class="w-20  bg-blue-500 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 whitespace-nowrap font-medium text-white  rounded-md  py-2 text-center me-2 mb-2  dark:border-blue-500 dark:text-blue-500 hover:text-white dark:hover:bg-blue-500 dark:focus:ring-blue-800 ">
                        Submit</button>
                </div>




                <div class="flex border-2 flex-wrap m-2 gap-20">

                    <img src="" id="bomMainImg" alt="please uplaod" width="300px">

                </div>

            </div>
        </form>

        <?php

        if (isset($_POST)) {

            ?>
            <div class="mt-6">


                <div class="flex flex-col">
                    <div class="-m-1.5 overflow-x-auto">
                        <div class="p-1.5 min-w-full inline-block align-middle">
                            <div class="overflow-hidden">
                                <table class="min-w-full mx-auto divide-y divide-gray-200">
                                    <thead>
                                        <tr>
                                            <th scope="col"
                                                class="px-6 py-3 text-start text-xs font-medium text-gray-500 uppercase">
                                                S.no</th>
                                            <th scope="col"
                                                class="px-6 py-3 text-start text-xs font-medium text-gray-500 uppercase">
                                                Process Seq</th>
                                            <th scope="col"
                                                class="px-6 py-3 text-start text-xs font-medium text-gray-500 uppercase">
                                                Item Code</th>
                                            <th scope="col"
                                                class="px-6 py-3 text-end text-xs font-medium text-gray-500 uppercase">Item
                                                Name</th>
                                            <th scope="col"
                                                class="px-6 py-3 text-end text-xs font-medium text-gray-500 uppercase">Qty
                                            </th>
                                            <th scope="col"
                                                class="px-6 py-3 text-end text-xs font-medium text-gray-500 uppercase">
                                                Percantage
                                            </th>


                                        </tr>
                                    </thead>
                                    <tbody class="divide-y      divide-gray-200" id="poCreteTbody">
                                        <tr class="hover:bg-gray-600">
                                            <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-800">
                                                <input type="txt" id="input-email-label"
                                                    class="py-3 px-4 block w-full border-gray-200 rounded-lg text-sm focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-900 dark:border-neutral-700 dark:text-neutral-400 dark:placeholder-neutral-500 dark:focus:ring-neutral-600"
                                                    placeholder=1 disabled>
                                            </td>
                                            <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-800">
                                                <input type="txt" id="input-email-label" name="process_seq"
                                                    class="py-3 px-4 block w-full border-gray-200 rounded-lg text-sm focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-900 dark:border-neutral-700 dark:text-neutral-400 dark:placeholder-neutral-500 dark:focus:ring-neutral-600"
                                                    placeholder="Process Seq">
                                            </td>
                                            <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-800">
                                                <input type="txt" name="item_code" id="input-email-label" name="item_code"
                                                    class="py-3 px-4 block w-full border-gray-200 rounded-lg text-sm focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-900 dark:border-neutral-700 dark:text-neutral-400 dark:placeholder-neutral-500 dark:focus:ring-neutral-600"
                                                    placeholder="Item code">
                                            </td>
                                            <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-800">
                                                <input type="txt" id="input-email-label"
                                                    class="py-3 px-4 block w-full border-gray-200 rounded-lg text-sm focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-900 dark:border-neutral-700 dark:text-neutral-400 dark:placeholder-neutral-500 dark:focus:ring-neutral-600"
                                                    name="Item_name" placeholder="Item name">
                                            </td>
                                            <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-800">
                                                <input type="number" id="input-email-label" name="Qty"
                                                    class="py-3 px-4 block w-full border-gray-200 rounded-lg text-sm focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-900 dark:border-neutral-700 dark:text-neutral-400 dark:placeholder-neutral-500 dark:focus:ring-neutral-600"
                                                    placeholder="Quantity">
                                            </td>
                                            <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-800">
                                                <input type="number" id="input-email-label" name="percentage"
                                                    class="py-3 px-4 block w-full border-gray-200 rounded-lg text-sm focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-900 dark:border-neutral-700 dark:text-neutral-400 dark:placeholder-neutral-500 dark:focus:ring-neutral-600"
                                                    placeholder="percentage">
                                            </td>


                                        </tr>


                                    </tbody>
                                </table>

                                <a href="#_" disabled="disabled" onclick="addRowItem()"
                                    class="relative inline-block px-4 py-2 font-medium group">
                                    <span
                                        class="absolute inset-0 w-full h-full transition duration-200 ease-out transform translate-x-1 translate-y-1 bg-black group-hover:-translate-x-0 group-hover:-translate-y-0"></span>
                                    <span
                                        class="absolute inset-0 w-full h-full bg-white border-2 border-black group-hover:bg-black"></span>
                                    <span onclick="" class="relative text-black group-hover:text-white">+Add item</span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>

            </div>





            <div class="w-full mt-5 flex flex-wrap justify-around">
                <button type="text"
                    class="text-white border border-blue-700 bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-md text-xs px-5 py-2.5 text-center me-2 mb-2 font-bold dark:border-blue-500 dark:text-blue-500 dark:hover:text-white dark:hover:bg-blue-500 dark:focus:ring-blue-800 ">Clear
                    Form</button>



                <!-- this button is for create direct po fressh inert query -->
                <button type="text" onclick="createdBomb()" id="po-save-btn"
                    class="text-white border border-blue-700 bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-md text-xs px-5 py-2.5 text-center me-2 mb-2 font-bold dark:border-blue-500 dark:text-blue-500 dark:hover:text-white dark:hover:bg-blue-500 dark:focus:ring-blue-800 ">Submit</button>





                <!-- this button is for create direct po fressh inert query -->

                <?php if (isset($po_number)) {

                    ?>

                    <button type="text" onclick="purchaseOrderDirect()" id="po-submit-btn"
                        class="text-white border border-blue-700 bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-md text-xs px-5 py-2.5 text-center me-2 mb-2 font-bold dark:border-blue-500 dark:text-blue-500 dark:hover:text-white dark:hover:bg-blue-500 dark:focus:ring-blue-800">


                        Submit</button>


                    <?php

                } ?>

            </div>
        <?php } ?>



    </div>
</body>





<script>









    const addRowItem = () => {


        let total = document.getElementById("poCreteTbody").querySelectorAll("tr").length


        total++

        let tr = document.createElement("tr")
        tr.classList.add("hover:bg-gray-600")

        tr.innerHTML = `       
                                       
                                            <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-800">
                                                <input type="txt" id="input-email-label"
                                                    class="py-3 px-4 block w-full border-gray-200 rounded-lg text-sm focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-900 dark:border-neutral-700 dark:text-neutral-400 dark:placeholder-neutral-500 dark:focus:ring-neutral-600"
                                                    value=${total}
                                                    placeholder=1 disabled>
                                            </td>
                                            <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-800">
                                                <input type="txt" id="input-email-label" name="process_seq"
                                                    class="py-3 px-4 block w-full border-gray-200 rounded-lg text-sm focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-900 dark:border-neutral-700 dark:text-neutral-400 dark:placeholder-neutral-500 dark:focus:ring-neutral-600"
                                                    placeholder="Process Seq">
                                            </td>
                                            <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-800">
                                                <input type="txt" id="input-email-label" name="item_code"
                                                    class="py-3 px-4 block w-full border-gray-200 rounded-lg text-sm focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-900 dark:border-neutral-700 dark:text-neutral-400 dark:placeholder-neutral-500 dark:focus:ring-neutral-600"
                                                    placeholder="Item code">
                                            </td>
                                            <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-800">
                                                <input type="txt" id="input-email-label"
                                                    class="py-3 px-4 block w-full border-gray-200 rounded-lg text-sm focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-900 dark:border-neutral-700 dark:text-neutral-400 dark:placeholder-neutral-500 dark:focus:ring-neutral-600"
                                                    name="Item_name" placeholder="Item name">
                                            </td>
                                            <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-800">
                                                <input type="number" id="input-email-label" name="Qty"
                                                    class="py-3 px-4 block w-full border-gray-200 rounded-lg text-sm focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-900 dark:border-neutral-700 dark:text-neutral-400 dark:placeholder-neutral-500 dark:focus:ring-neutral-600"
                                                     placeholder="Quantity">
                                            </td>
                                            <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-800">
                                                <input type="number" id="input-email-label" name="percentage" 
                                                    class="py-3 px-4 block w-full border-gray-200 rounded-lg text-sm focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-900 dark:border-neutral-700 dark:text-neutral-400 dark:placeholder-neutral-500 dark:focus:ring-neutral-600"
                                                    placeholder="percentage">
                                            </td>
                                     

                                    
                                    

                                    `


        $("#poCreteTbody").append(tr)



    }












</script>



<script src="./js/jquery.min.js"></script>
<script src="./js/bom.js"></script>

<script src="https://code.jquery.com/ui/1.14.0/jquery-ui.js"></script>
<!-- <script src="https://code.jquery.com/jquery-3.7.1.js"></script> -->
<!-- <script src="./js/jquery-3.7.1.min.js"></script> -->

<script>
    $(function () {

        var availableTags = [
            "ActionScript",
            "AppleScript",
            "Asp",
            "BASIC",
            "C",
            "C++",
            "Clojure",
            "COBOL",
            "ColdFusion",
            "Erlang",
            "Fortran",
            "Groovy",
            "Haskell",
            "Java",
            "JavaScript",
            "Lisp",
            "Perl",
            "PHP",
            "Python",
            "Ruby",
            "Scala",
            "Scheme"
        ];


        console.log(availableTags);
        $.get("ajax.php", {
            "itemCodeInfoForPr": "itemCodeInfoForPr"
        }, function (data) {

            availableTags = JSON.parse(data);

            console.log(availableTags);
            $("input[name='item_name']").autocomplete({
                source: availableTags
            });



            
            $("input[name='Item_name']").autocomplete({
                source: availableTags
            });


            $("input[name='item_code']").autocomplete({
                source: availableTags
            });


        })

    });
</script>


<script>





function setUploadedImage (event) { 

    


    const file = event.target.files[0]; 
            
            if (file && file.type.startsWith('image/')) {
                const reader = new FileReader();
                
                reader.onload = function(e) {
                    const imagePreview = document.getElementById('bomMainImg');
                    imagePreview.src = e.target.result; 
                };
                
                reader.readAsDataURL(file); 
            } else {
                alert('Please select a valid image file.');
            }





 }



    const setBomImage = () => {





        console.log("image selected");



        // let item_code = $("#item_name").val()


        // let data = {
        //     item_code: item_code,
        //     getImgName: "getImgName"

        // }

        // $.get("ajax.php", data, function (data) {

        //     console.log(data);




        //     if(data.success){


                
                
        //         $("#bomMainImg").attr("src", `images/${data.imgpath}`);



        //     }




        // },"JSON").fail(error=>{
        //     console.log(error.responseText);
        // })














    }




</script>

</html>