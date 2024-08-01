<?php







if($_SERVER['REQUEST_METHOD']=='POST'){


    echo "hello from post server";




$item_code = $_POST["item_code"];
$Item_Category = $_POST["Item_Category"];
$Item_Name = $_POST["Item_Name"];
$Category = $_POST["Category"];
$Item_Type = $_POST["Item_Type"];
$Components = $_POST["Components"];
$Quantity = $_POST["Quantity"];
$Material = $_POST["Material"];
$Design = $_POST["Design"];
$Finish_type = $_POST["Finish_type"];
$Half_Full_Thread = $_POST["Half_Full_Thread"];
$Holder_Thread = $_POST["Holder_Thread"];
$Holder_type = $_POST["Holder_type"];
$Thread = $_POST["Thread"];
$Brand = $_POST["Brand"];
$Light_Output_colour = $_POST["light_output_color"];
$Colour = $_POST["color"];
$Cut = $_POST["cut"];
$Height = $_POST["height"];
$Length = $_POST["Length"];
$Breadth = $_POST["Breadth"];
$Upper_Dia = $_POST["Upper_Dia"];
$Bottom_Dia = $_POST["Bottom_Dia"];
$Centre_Hole_dia = $_POST["Centre_Hole_dia"];
$Size = $_POST["Size"];
$watt = $_POST["watt"];
$Shape = $_POST["Shape"];
$Side_Hole_dia = $_POST["Side_Hole_dia"];
$Top_hole_dia = $_POST["Top_hole_dia"];
$No_of_ply = $_POST["No_of_ply"];
$Style = $_POST["Style"];
$Thickness = $_POST["Thickness"];
$Weight = $_POST["Weight"];
$Depth = $_POST["Depth"];
$Bottom_hole_dia = $_POST["Bottom_hole_dia"];
$Bottom_hole = $_POST["Bottom_hole"];
$Core = $_POST["Core"];
$Inner_Outer_thread = $_POST["Inner_Outer_thread"];
$Upper_thread = $_POST["Upper_thread"];
$Lower_thread = $_POST["Lower_thread"];
$Thread_length = $_POST["Thread_length"];
$Indian_Imported = $_POST["Indian_Imported"];
$In_built_switch = $_POST["In_built_switch"];
$Wire_type = $_POST["Wire_type"];
$vendor = $_POST["vendor"];





echo "Item Code: $item_code<br>";
echo "Item Category: $Item_Category<br>";
echo "Item Name: $Item_Name<br>";
echo "Category: $Category<br>";
echo "Item Type: $Item_Type<br>";
echo "Components: $Components<br>";
echo "Quantity: $Quantity<br>";
echo "Material: $Material<br>";
echo "Design: $Design<br>";
echo "Finish Type: $Finish_type<br>";
echo "Half Full Thread: $Half_Full_Thread<br>";
echo "Holder Thread: $Holder_Thread<br>";
echo "Holder Type: $Holder_type<br>";
echo "Thread: $Thread<br>";
echo "Brand: $Brand<br>";
echo "Light Output Colour: $Light_Output_colour<br>";
echo "Colour: $Colour<br>";
echo "Cut: $Cut<br>";
echo "Height: $Height<br>";
echo "Length: $Length<br>";
echo "Breadth: $Breadth<br>";
echo "Upper Dia: $Upper_Dia<br>";
echo "Bottom Dia: $Bottom_Dia<br>";
echo "Centre Hole Dia: $Centre_Hole_dia<br>";
echo "Size: $Size<br>";
echo "Watt: $watt<br>";
echo "Shape: $Shape<br>";
echo "Side Hole Dia: $Side_Hole_dia<br>";
echo "Top Hole Dia: $Top_hole_dia<br>";
echo "No of Ply: $No_of_ply<br>";
echo "Style: $Style<br>";
echo "Thickness: $Thickness<br>";
echo "Weight: $Weight<br>";
echo "Depth: $Depth<br>";
echo "Bottom Hole Dia: $Bottom_hole_dia<br>";
echo "Bottom Hole: $Bottom_hole<br>";
echo "Core: $Core<br>";
echo "Inner Outer Thread: $Inner_Outer_thread<br>";
echo "Upper Thread: $Upper_thread<br>";
echo "Lower Thread: $Lower_thread<br>";
echo "Thread Length: $Thread_length<br>";
echo "Indian Imported: $Indian_Imported<br>";
echo "In Built Switch: $In_built_switch<br>";
echo "Wire Type: $Wire_type<br>";
echo "Vendor: $vendor<br>";





}




















?>




<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.0.4/dist/tailwind.min.css" rel="stylesheet">
</head>

<body>






    <div class="h-full bg-gray-400 dark:bg-gray-900">
        <!-- Container -->
        <div class="mx-auto">
            <div class="flex justify-center px-6 py-12">
                <!-- Row -->
                <div class="w-full xl:w-3/4 lg:w-11/12 flex">
                    <!-- Col -->
                    <div class="w-full h-auto bg-gray-400 dark:bg-gray-800 hidden lg:block lg:w-5/12 bg-cover rounded-l-lg" style="background-image: url('https://source.unsplash.com/Mv9hjnEUHR4/600x800')"></div>
                    <!-- Col -->
                    <di class="w-full lg:w-7/12 bg-white dark:bg-gray-700 p-5 rounded-lg lg:rounded-l-none">
                        <h3 class="py-4 text-2xl text-center text-gray-800 dark:text-white">item master!</h3>




                        <form action="#" method="post" class="px-8 pt-6 pb-8 mb-4 bg-white dark:bg-gray-800 rounded">
                            <div class="mb-4 md:flex md:justify-between">
                                <div class="mb-4">
                                    <label class="block mb-2 text-sm font-bold text-gray-700 dark:text-white" for="item_code">
                                        Item Code
                                    </label>
                                    <input name="item_code" class="w-full px-3 py-2 text-sm leading-tight text-gray-700 dark:text-white border rounded shadow appearance-none focus:outline-none focus:shadow-outline" id="item_code" type="text" placeholder="Item Code" />
                                </div>

                                <div class="mb-4">
                                    <label class="block mb-2 text-sm font-bold text-gray-700 dark:text-white" for="Item_Category">
                                        Item Category
                                    </label>
                                    <input name="Item_Category" class="w-full px-3 py-2 text-sm leading-tight text-gray-700 dark:text-white border rounded shadow appearance-none focus:outline-none focus:shadow-outline" id="Item_Category" type="text" placeholder="Item Category" />
                                </div>
                            </div>

                            <div class="mb-4 md:flex md:justify-between">
                                <div class="mb-4">
                                    <label class="block mb-2 text-sm font-bold text-gray-700 dark:text-white" for="Item_Name">
                                        Item Name
                                    </label>
                                    <input name="Item_Name" class="w-full px-3 py-2 text-sm leading-tight text-gray-700 dark:text-white border rounded shadow appearance-none focus:outline-none focus:shadow-outline" id="Item_Name" type="text" placeholder="Item Name" />
                                </div>

                                <div class="mb-4">
                                    <label class="block mb-2 text-sm font-bold text-gray-700 dark:text-white" for="Category">
                                        Category
                                    </label>
                                    <input name="Category" class="w-full px-3 py-2 text-sm leading-tight text-gray-700 dark:text-white border rounded shadow appearance-none focus:outline-none focus:shadow-outline" id="Category" type="text" placeholder="Category" />
                                </div>
                            </div>

                            <div class="mb-4 md:flex md:justify-between">
                                <div class="mb-4">
                                    <label class="block mb-2 text-sm font-bold text-gray-700 dark:text-white" for="Item_Type">
                                        Item Type
                                    </label>
                                    <input name="Item_Type" class="w-full px-3 py-2 text-sm leading-tight text-gray-700 dark:text-white border rounded shadow appearance-none focus:outline-none focus:shadow-outline" id="Item_Type" type="text" placeholder="Item Type" />
                                </div>

                                <div class="mb-4">
                                    <label class="block mb-2 text-sm font-bold text-gray-700 dark:text-white" for="Components">
                                        Components
                                    </label>
                                    <input name="Components" class="w-full px-3 py-2 text-sm leading-tight text-gray-700 dark:text-white border rounded shadow appearance-none focus:outline-none focus:shadow-outline" id="Components" type="text" placeholder="Components" />
                                </div>
                            </div>

                            <div class="mb-4 md:flex md:justify-between">
                                <div class="mb-4">
                                    <label class="block mb-2 text-sm font-bold text-gray-700 dark:text-white" for="Quantity">
                                        Quantity
                                    </label>
                                    <input name="Quantity" class="w-full px-3 py-2 text-sm leading-tight text-gray-700 dark:text-white border rounded shadow appearance-none focus:outline-none focus:shadow-outline" id="Quantity" type="number" placeholder="Quantity" />
                                </div>

                                <div class="mb-4">
                                    <label class="block mb-2 text-sm font-bold text-gray-700 dark:text-white" for="Material">
                                        Material
                                    </label>
                                    <input name="Material" class="w-full px-3 py-2 text-sm leading-tight text-gray-700 dark:text-white border rounded shadow appearance-none focus:outline-none focus:shadow-outline" id="Material" type="text" placeholder="Material" />
                                </div>
                            </div>

                            <div class="mb-4 md:flex md:justify-between">
                                <div class="mb-4">
                                    <label class="block mb-2 text-sm font-bold text-gray-700 dark:text-white" for="Design">
                                        Design
                                    </label>
                                    <input name="Design" class="w-full px-3 py-2 text-sm leading-tight text-gray-700 dark:text-white border rounded shadow appearance-none focus:outline-none focus:shadow-outline" id="Design" type="text" placeholder="Design" />
                                </div>

                                <div class="mb-4">
                                    <label class="block mb-2 text-sm font-bold text-gray-700 dark:text-white" for="Finish_type">
                                        Finish Type
                                    </label>
                                    <input name="Finish_type" class="w-full px-3 py-2 text-sm leading-tight text-gray-700 dark:text-white border rounded shadow appearance-none focus:outline-none focus:shadow-outline" id="Finish_type" type="text" placeholder="Finish Type" />
                                </div>
                            </div>

                            <div class="mb-4 md:flex md:justify-between">
                                <div class="mb-4">
                                    <label class="block mb-2 text-sm font-bold text-gray-700 dark:text-white" for="Half_Full_Thread">
                                        Half/Full Thread
                                    </label>
                                    <input name="Half_Full_Thread" class="w-full px-3 py-2 text-sm leading-tight text-gray-700 dark:text-white border rounded shadow appearance-none focus:outline-none focus:shadow-outline" id="Half_Full_Thread" type="text" placeholder="Half/Full Thread" />
                                </div>

                                <div class="mb-4">
                                    <label class="block mb-2 text-sm font-bold text-gray-700 dark:text-white" for="Holder_Thread">
                                        Holder Thread
                                    </label>
                                    <input name="Holder_Thread" class="w-full px-3 py-2 text-sm leading-tight text-gray-700 dark:text-white border rounded shadow appearance-none focus:outline-none focus:shadow-outline" id="Holder_Thread" type="text" placeholder="Holder Thread" />
                                </div>
                            </div>

                            <div class="mb-4 md:flex md:justify-between">
                                <div class="mb-4">
                                    <label class="block mb-2 text-sm font-bold text-gray-700 dark:text-white" for="Holder_type">
                                        Holder Type
                                    </label>
                                    <input name="Holder_type" class="w-full px-3 py-2 text-sm leading-tight text-gray-700 dark:text-white border rounded shadow appearance-none focus:outline-none focus:shadow-outline" id="Holder_type" type="text" placeholder="Holder Type" />
                                </div>

                                <div class="mb-4">
                                    <label class="block mb-2 text-sm font-bold text-gray-700 dark:text-white" for="Thread">
                                        Thread
                                    </label>
                                    <input name="Thread" class="w-full px-3 py-2 text-sm leading-tight text-gray-700 dark:text-white border rounded shadow appearance-none focus:outline-none focus:shadow-outline" id="Thread" type="text" placeholder="Thread" />
                                </div>
                            </div>

                            <div class="mb-4 md:flex md:justify-between">
                                <div class="mb-4">
                                    <label class="block mb-2 text-sm font-bold text-gray-700 dark:text-white" for="Brand">
                                        Brand
                                    </label>
                                    <input name="Brand" class="w-full px-3 py-2 text-sm leading-tight text-gray-700 dark:text-white border rounded shadow appearance-none focus:outline-none focus:shadow-outline" id="Brand" type="text" placeholder="Brand" />
                                </div>

                                <div class="mb-4">
                                    <label class="block mb-2 text-sm font-bold text-gray-700 dark:text-white" for="item_price">
                                        light output color
                                    </label>
                                    <input name="light_output_color" class="w-full px-3 py-2 text-sm leading-tight text-gray-700 dark:text-white border rounded shadow appearance-none focus:outline-none focus:shadow-outline" id="item_price" type="txt" placeholder="Item Price" />
                                </div>
                            </div>
                            <div class="mb-4 md:flex md:justify-between">
                                <div class="mb-4">
                                    <label class="block mb-2 text-sm font-bold text-gray-700 dark:text-white" for="Brand">
                                        color
                                    </label>
                                    <input name="color" class="w-full px-3 py-2 text-sm leading-tight text-gray-700 dark:text-white border rounded shadow appearance-none focus:outline-none focus:shadow-outline" id="Brand" type="text" placeholder="Brand" />
                                </div>

                                <div class="mb-4">
                                    <label class="block mb-2 text-sm font-bold text-gray-700 dark:text-white" for="item_price">
                                        Cut
                                    </label>
                                    <input name="cut" class="w-full px-3 py-2 text-sm leading-tight text-gray-700 dark:text-white border rounded shadow appearance-none focus:outline-none focus:shadow-outline" id="item_price" type="number" placeholder="Item Price" />
                                </div>
                            </div>
                            <div class="mb-4 md:flex md:justify-between">
                                <div class="mb-4">
                                    <label class="block mb-2 text-sm font-bold text-gray-700 dark:text-white" for="Brand">
                                        Height
                                    </label>
                                    <input name="height" class="w-full px-3 py-2 text-sm leading-tight text-gray-700 dark:text-white border rounded shadow appearance-none focus:outline-none focus:shadow-outline" id="Brand" type="text" placeholder="Brand" />
                                </div>

                                <div class="mb-4">
                                    <label class="block mb-2 text-sm font-bold text-gray-700 dark:text-white" for="item_price">
                                        Length
                                    </label>
                                    <input name="Length" class="w-full px-3 py-2 text-sm leading-tight text-gray-700 dark:text-white border rounded shadow appearance-none focus:outline-none focus:shadow-outline" id="item_price" type="number" placeholder="Item Price" />
                                </div>
                            </div>

                            <div class="mb-4 md:flex md:justify-between">
                                <div class="mb-4">
                                    <label class="block mb-2 text-sm font-bold text-gray-700 dark:text-white" for="Breadth">
                                        Breadth
                                    </label>
                                    <input name="Breadth" id="Breadth" type="number" step="0.01" placeholder="Breadth" class="w-full px-3 py-2 text-sm leading-tight text-gray-700 dark:text-white border rounded shadow appearance-none focus:outline-none focus:shadow-outline" />
                                </div>

                                <div class="mb-4">
                                    <label class="block mb-2 text-sm font-bold text-gray-700 dark:text-white" for="Upper_Dia">
                                        Upper Diameter
                                    </label>
                                    <input name="Upper_Dia" id="Upper_Dia" type="number" step="0.01" placeholder="Upper Diameter" class="w-full px-3 py-2 text-sm leading-tight text-gray-700 dark:text-white border rounded shadow appearance-none focus:outline-none focus:shadow-outline" />
                                </div>
                            </div>
                             <div class="mb-4 md:flex md:justify-between">
                                <div class="mb-4">
                                    <label class="block mb-2 text-sm font-bold text-gray-700 dark:text-white" for="Bottom_Dia">
                                        Bottom Diameter
                                    </label>
                                    <input name="Bottom_Dia" id="Bottom_Dia" type="number" step="0.01" placeholder="Bottom Diameter" class="w-full px-3 py-2 text-sm leading-tight text-gray-700 dark:text-white border rounded shadow appearance-none focus:outline-none focus:shadow-outline" />
                                </div>

                                <div class="mb-4">
                                    <label class="block mb-2 text-sm font-bold text-gray-700 dark:text-white" for="Centre_Hole_dia">
                                        Centre Hole Diameter
                                    </label>
                                    <input name="Centre_Hole_dia" id="Centre_Hole_dia" type="number" step="0.01" placeholder="Centre Hole Diameter" class="w-full px-3 py-2 text-sm leading-tight text-gray-700 dark:text-white border rounded shadow appearance-none focus:outline-none focus:shadow-outline" />
                                </div>
                            </div>
                                <div class="mb-4">
                                    <label class="block mb-2 text-sm font-bold text-gray-700 dark:text-white" for="Size">
                                        Size
                                    </label>
                                    <input name="Size" id="Size" type="text" placeholder="Size" class="w-full px-3 py-2 text-sm leading-tight text-gray-700 dark:text-white border rounded shadow appearance-none focus:outline-none focus:shadow-outline" />
                                </div>

                                <div class="mb-4">
                                    <label class="block mb-2 text-sm font-bold text-gray-700 dark:text-white" for="watt">
                                        Watt
                                    </label>
                                    <input name="watt" id="watt" type="number" step="0.01" placeholder="Watt" class="w-full px-3 py-2 text-sm leading-tight text-gray-700 dark:text-white border rounded shadow appearance-none focus:outline-none focus:shadow-outline" />
                                </div>

                                <div class="mb-4">
                                    <label class="block mb-2 text-sm font-bold text-gray-700 dark:text-white" for="Shape">
                                        Shape
                                    </label>
                                    <input name="Shape" id="Shape" type="text" placeholder="Shape" class="w-full px-3 py-2 text-sm leading-tight text-gray-700 dark:text-white border rounded shadow appearance-none focus:outline-none focus:shadow-outline" />
                                </div>

                                <div class="mb-4">
                                    <label class="block mb-2 text-sm font-bold text-gray-700 dark:text-white" for="Side_Hole_dia">
                                        Side Hole Diameter
                                    </label>
                                    <input name="Side_Hole_dia" id="Side_Hole_dia" type="number" step="0.01" placeholder="Side Hole Diameter" class="w-full px-3 py-2 text-sm leading-tight text-gray-700 dark:text-white border rounded shadow appearance-none focus:outline-none focus:shadow-outline" />
                                </div>

                                <div class="mb-4">
                                    <label class="block mb-2 text-sm font-bold text-gray-700 dark:text-white" for="Top_hole_dia">
                                        Top Hole Diameter
                                    </label>
                                    <input name="Top_hole_dia" id="Top_hole_dia" type="number" step="0.01" placeholder="Top Hole Diameter" class="w-full px-3 py-2 text-sm leading-tight text-gray-700 dark:text-white border rounded shadow appearance-none focus:outline-none focus:shadow-outline" />
                                </div>

                                <div class="mb-4">
                                    <label class="block mb-2 text-sm font-bold text-gray-700 dark:text-white" for="No_of_ply">
                                        Number of Ply
                                    </label>
                                    <input name="No_of_ply" id="No_of_ply" type="number" placeholder="Number of Ply" class="w-full px-3 py-2 text-sm leading-tight text-gray-700 dark:text-white border rounded shadow appearance-none focus:outline-none focus:shadow-outline" />
                                </div>

                                <div class="mb-4">
                                    <label class="block mb-2 text-sm font-bold text-gray-700 dark:text-white" for="Style">
                                        Style
                                    </label>
                                    <input name="Style" id="Style" type="text" placeholder="Style" class="w-full px-3 py-2 text-sm leading-tight text-gray-700 dark:text-white border rounded shadow appearance-none focus:outline-none focus:shadow-outline" />
                                </div>

                                <div class="mb-4">
                                    <label class="block mb-2 text-sm font-bold text-gray-700 dark:text-white" for="Thickness">
                                        Thickness
                                    </label>
                                    <input name="Thickness" id="Thickness" type="txt" step="0.01" placeholder="Thickness" class="w-full px-3 py-2 text-sm leading-tight text-gray-700 dark:text-white border rounded shadow appearance-none focus:outline-none focus:shadow-outline" />
                                </div>

                                <div class="mb-4">
                                    <label class="block mb-2 text-sm font-bold text-gray-700 dark:text-white" for="Weight">
                                        Weight
                                    </label>
                                    <input name="Weight" id="Weight" type="number" step="0.01" placeholder="Weight" class="w-full px-3 py-2 text-sm leading-tight text-gray-700 dark:text-white border rounded shadow appearance-none focus:outline-none focus:shadow-outline" />
                                </div>
                                <div class="mb-4">
                                    <label class="block mb-2 text-sm font-bold text-gray-700 dark:text-white" for="Weight">
                                        Depth
                                    </label>
                                    <input name="Depth" id="Weight" type="txt" step="0.01" placeholder="Weight" class="w-full px-3 py-2 text-sm leading-tight text-gray-700 dark:text-white border rounded shadow appearance-none focus:outline-none focus:shadow-outline" />
                                </div>


                                <div class="mb-4">
                                    <label class="block mb-2 text-sm font-bold text-gray-700 dark:text-white" for="Weight">
                                        bottom hole dia
                                    </label>
                                    <input name="Bottom_hole_dia" id="Weight" type="number" step="0.01" placeholder="Weight" class="w-full px-3 py-2 text-sm leading-tight text-gray-700 dark:text-white border rounded shadow appearance-none focus:outline-none focus:shadow-outline" />
                                </div>
                                <div class="mb-4">
                                    <label class="block mb-2 text-sm font-bold text-gray-700 dark:text-white" for="Weight">
                                        bottom hole
                                    </label>
                                    <input name="Bottom_hole" id="Weight" type="txt" step="0.01" placeholder="Weight" class="w-full px-3 py-2 text-sm leading-tight text-gray-700 dark:text-white border rounded shadow appearance-none focus:outline-none focus:shadow-outline" />
                                </div>

                                <div class="mb-4">
                                    <label class="block mb-2 text-sm font-bold text-gray-700 dark:text-white" for="Weight">
                                        Core
                                    </label>
                                    <input name="Core" id="Weight" type="txt" step="0.01" placeholder="Weight" class="w-full px-3 py-2 text-sm leading-tight text-gray-700 dark:text-white border rounded shadow appearance-none focus:outline-none focus:shadow-outline" />
                                </div>
                                <div class="mb-4">
                                    <label class="block mb-2 text-sm font-bold text-gray-700 dark:text-white" for="Weight">
                                        inner outer thread
                                    </label>
                                    <input name="Inner_Outer_thread" id="Weight" type="txt" step="0.01" placeholder="Weight" class="w-full px-3 py-2 text-sm leading-tight text-gray-700 dark:text-white border rounded shadow appearance-none focus:outline-none focus:shadow-outline" />
                                </div>

                                <div class="mb-4">
                                    <label class="block mb-2 text-sm font-bold text-gray-700 dark:text-white" for="Weight">
                                        Upper thread
                                    </label>
                                    <input name="Upper_thread" id="Weight" type="txt" step="0.01" placeholder="Weight" class="w-full px-3 py-2 text-sm leading-tight text-gray-700 dark:text-white border rounded shadow appearance-none focus:outline-none focus:shadow-outline" />
                                </div>

                                <div class="mb-4">
                                    <label class="block mb-2 text-sm font-bold text-gray-700 dark:text-white" for="Weight">
                                        Lower_thread
                                    </label>
                                    <input name="Lower_thread" id="Lower_thread" type="txt" step="0.01" placeholder="Lower_thread" class="w-full px-3 py-2 text-sm leading-tight text-gray-700 dark:text-white border rounded shadow appearance-none focus:outline-none focus:shadow-outline" />
                                </div>

                                <div class="mb-4">
                                    <label class="block mb-2 text-sm font-bold text-gray-700 dark:text-white" for="Weight">
                                        Thread_length
                                    </label>
                                    <input name="Thread_length" id="Thread_length" type="txt" step="0.01" placeholder="Thread_length" class="w-full px-3 py-2 text-sm leading-tight text-gray-700 dark:text-white border rounded shadow appearance-none focus:outline-none focus:shadow-outline" />
                                </div>

                                <div class="mb-4">
                                    <label class="block mb-2 text-sm font-bold text-gray-700 dark:text-white" for="Weight">
                                        indian imported
                                    </label>
                                    <input name="Indian_Imported" id="Indian_Imported" type="txt" step="0.01" placeholder="Weight" class="w-full px-3 py-2 text-sm leading-tight text-gray-700 dark:text-white border rounded shadow appearance-none focus:outline-none focus:shadow-outline" />
                                </div>


                                <div class="mb-4">
                                    <label class="block mb-2 text-sm font-bold text-gray-700 dark:text-white" for="Weight">
                                        In_built_switch
                                    </label>
                                    <input name="In_built_switch" id="In_built_switch" type="txt" step="0.01" placeholder="In_built_switch" class="w-full px-3 py-2 text-sm leading-tight text-gray-700 dark:text-white border rounded shadow appearance-none focus:outline-none focus:shadow-outline" />
                                </div>

                                <div class="mb-4">
                                    <label class="block mb-2 text-sm font-bold text-gray-700 dark:text-white" for="Weight">
                                        wire type
                                    </label>
                                    <input name="Wire_type" id="Wire_type" type="txt" step="0.01" placeholder="Weight" class="w-full px-3 py-2 text-sm leading-tight text-gray-700 dark:text-white border rounded shadow appearance-none focus:outline-none focus:shadow-outline" />
                                </div>

                                <div class="mb-4">
                                    <label class="block mb-2 text-sm font-bold text-gray-700 dark:text-white" for="Weight">
                                        Vendore
                                    </label>
                                    <input name="vendor" id="vendor" type="txt" step="0.01" placeholder="Weight" class="w-full px-3 py-2 text-sm leading-tight text-gray-700 dark:text-white border rounded shadow appearance-none focus:outline-none focus:shadow-outline" />
                                </div>


                                <div class="mb-4 text-center">
                                    <button type="submit" class="w-full px-4 py-2 font-bold text-white bg-blue-500 rounded hover:bg-blue-700 focus:outline-none focus:shadow-outline">
                                        Submit
                                    </button>
                                </div>
                        </form>

                </div>
            </div>
        </div>
    </div>
    </div>

</body>

</html>