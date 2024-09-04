<!DOCTYPE html>


<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles/addField.css">
    <!-- <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.0.4/dist/tailwind.min.css" rel="stylesheet"> -->
    <title>Add Field</title>
</head>

<body>
    <div class="main_div">
        <div class="form_div">
            <div id="form1">
                <h1>Update Existing Category</h1>
                <div id="category1">
                    <label>Select Category</label>
                    <select onchange="setSubCatNameToOption()" name="" id="maincategory">

                        <option value="" selected disabled>Choose One</option>

                        <?php
                        include("./db.php");

                        $sql = "SELECT * FROM for_office.itemmastercategory;";

                        $result = mysqli_query($con, $sql);
                        while ($row = mysqli_fetch_assoc($result)) {


                        ?>

                            <option value="<?php echo  $row["categoryId"]   ?>"><?php echo  $row["catagory_name"]   ?></option>


                        <?php
                        }

                        ?>

                    </select>
                </div>
                <label>Enter Sub-Category</label>
                <select name="" id="subCateGory">

                                    <option value="" s>select</option>



                </select>
                <label>Select Attributes</label>
                <div class="inner_attribute">
                    <select name="" id="subCatField">
                    <option value="" selected disabled>Choose One</option>
                    <option value="" selected disabled>Choose One</option>
                        <option value="Material">Material</option>
                        <option value="Design">Design</option>
                        <option value="Finish Type">Finish Type</option>
                        <option value="Short Description">Short Description</option>
                        <option value="Half Full Thread">Half Full Thread</option>
                        <option value="Holder Thread">Holder Thread</option>
                        <option value="Holder Type">Holder Type</option>
                        <option value="Thread">Thread</option>
                        <option value="Brand">Brand</option>
                        <option value="Light Output Colour">Light Output Colour</option>
                        <option value="Colour">Colour</option>
                        <option value="Cut">Cut</option>
                        <option value="Height">Height</option>
                        <option value="Length">Length</option>
                        <option value="Breadth">Breadth</option>
                        <option value="Upper Diameter">Upper Diameter</option>
                        <option value="Bottom Diameter">Bottom Diameter</option>
                        <option value="Centre Hole Diameter">Centre Hole Diameter</option>
                        <option value="Size">Size</option>
                        <option value="watt">Watt</option>
                        <option value="Shape">Shape</option>
                        <option value="Side Hole Diameter">Side Hole Diameter</option>
                        <option value="Top Hole Diameter">Top Hole Diameter</option>
                        <option value="Number of Ply">Number of Ply</option>
                        <option value="Style">Style</option>
                        <option value="Thickness">Thickness</option>
                        <option value="Weight">Weight</option>
                        <option value="Depth">Depth</option>
                        <option value="Bottom Hole Diameter">Bottom Hole Diameter</option>
                        <option value="Bottom Hole">Bottom Hole</option>
                        <option value="Core">Core</option>
                        <option value="Inner Outer Thread">Inner Outer Thread</option>
                        <option value="Upper Thread">Upper Thread</option>
                        <option value="Lower Thread">Lower Thread</option>
                        <option value="Thread Length">Thread Length</option>
                        <option value="Indian Imported">Indian Imported</option>
                        <option value="In Built Switch">In Built Switch</option>
                        <option value="Wire Type">Wire Type</option>
                        <option value="Vendor">Vendor</option>
                        <option value="Item Master Col">Item Master Col</option>
                        <option value="Image Path">Image Path</option>
                        <option value="Created By">Created By</option>
                        <option value="Updated By">Updated By</option>
                        <option value="Department">Department</option>
                        <option value="Created Date">Created Date</option>
                        <option value="Updated Date">Updated Date</option>
                        <option value="Long Discription">Long Discription</option>
                        <option value="Pintop">Pintop</option>
                        <option value="Discount">Discount</option>
                        <option value="Status">Status</option>

                    </select>
                    <button onclick="addAtrr()">Add</button><br>
                </div>

                <div class="inner_attribute">
                    <select name="" id="attributes">
                        <option value="" selected disabled>Choose One</option>

                    </select>
                    <button onclick="addAtrr()">Add</button><br>
                </div>



                <button onclick="addField1()">Add Field</button>





                <table>
                    <tr>
                        <th>Category</th>
                        <th>Sub Category</th>
                        <th>Attribute</th>
                    </tr>
                    <tr>
                        <td><span class="output1"></span></td>
                        <td><span class="output2"></span></td>
                        <td><span id="output3" class="output3"></span></td>
                    </tr>
                </table>

            </div>

        </div>
    </div>




    <script src="./js/mangecategory.js" >  </script>
    <script src="./js/jquery.min.js" >  </script>
    <script>
        function myFunction1() {
            var x = document.getElementById("form1");
            x.style.display = "none";

            var x = document.getElementById("form2");
            x.style.display = "block";


            var x = document.getElementById("btn2");
            x.style.display = "none";
        }

        // function myFunction1() {
        //     var x = document.getElementById("category1");
        //     var y = document.getElementById("category2");
        //     var z = document.getElementById("btn2");
        //     if (x.style.display === "none") {
        //         x.style.display = "block";
        //     } else {
        //         x.style.display = "none";
        //     }

        //     y.style.display = "block"
        //     z.style.display = "none"
        // }


        let attrList = [];

        const addAtrr = () => {
            document.getElementById("output3").innerText = ""
            let attr = document.getElementById("attributes").value

            // attrList.pop(attr)
            attrList.push(attr)
            let i = 1;
            attrList.forEach(Element => {

                document.getElementById("output3").innerText += " " + i + ". " + Element
                i++

                document.getElementById("output3").innerHTML += "<br>"
            })




        }


        let attrList1 = [];

        const addAtrr1 = () => {
            document.getElementById("newAttributes1").innerText = ""
            let attr1 = document.getElementById("newAttributes").value

            // attrList1.pop(attr1)
            attrList1.push(attr1)

            let i = 1;
            attrList1.forEach(Element => {

                document.getElementById("newAttributes1").innerText += " " + i + ". " + Element
                i++

                document.getElementById("newAttributes1").innerHTML += "<br>"
            })



        }



        function addField1() {
            var category = document.getElementById("category");
            var value = category.value;
            document.querySelector('.output1').textContent = value;

            var subCategory = document.getElementById("subCategory");
            var value = subCategory.value;
            document.querySelector('.output2').textContent = value;

            // var attributes = document.getElementById("attributes");
            // var value = attributes.value;
            // document.querySelector('.output3').textContent = value;
        }

        function addField2() {
            var newCategory = document.getElementById("newCategory");
            var value = newCategory.value;
            document.querySelector('.newCategory').textContent = value;

            var newSubCategory = document.getElementById("newSubCategory");
            var value = newSubCategory.value;
            document.querySelector('.newSubCategory').textContent = value;

            // var newAttributes = document.getElementById("newAttributes");
            // var value = newAttributes.value;
            // document.querySelector('.newAttributes').textContent = value;
        }

        let attributes = [];
    </script>
</body>

</html>