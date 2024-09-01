<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./styles/item_category.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css"
        integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>Item Category</title>
</head>

<body>
    <div class="main_div">
        <h1>Item Master</h1>
        <div class="select_section">
            <input class="search_section" type="search" placeholder="Search Item Code">
            <!-- <label>Select Category : </label>
            <select name="" id="">
                <option selected disabled>Select One</option>
                <option value="">Electrical</option>
                <option value="">Glass</option>
                <option value="">Metal</option>
                <option value="">Stationary</option>
                <option value="">Shades</option>
                <option value="">Acryalic</option>
                <option value="">Crystal</option>
                <option value="">Packaging</option>
                <option value="">Consubale Installation</option>
                <option value="">Tools </option>
            </select> -->
        </div>

        <div class="electrical_options">
            <h2 onclick="electricalTxt()">Electrical Field</h2>
            <div id="electrical_txt">
                <div class="holder_section">
                    <h3>Holder
                        <button onclick="myFunction1()"><i class="fa-solid fa-plus"></i></button>
                    </h3>
                    <div class="inner_holder" id="dropdown1">
                        <label>S. No</label>
                        <input type="number" name="" id="" placeholder="Enter serial number">
                        <label>Category</label>
                        <input type="text" placeholder="Electrical" disabled>
                        <label>Sub Category</label>
                        <input type="text" name="" id="" placeholder="Holder" disabled>
                        <label>Item Code</label>
                        <input type="text" name="" id="" placeholder="Enter item code">
                        <!-- <select name="" id="">
                        <option value="">231</option>
                        <option value="">232</option>
                        <option value="">233</option>
                        <option value="">234</option>
                    </select> -->
                        <label>Short description(item name)</label>
                        <input type="text" name="" id="" placeholder="Enter short description">
                        <label>SI Unit</label>
                        <input type="text" name="" id="" placeholder="Enter si unit">
                        <label>Material</label>
                        <!-- <select name="" id="">
                        <option value="">Porcelin</option>
                        <option value="">Metal</option>
                        <option value="">Plastic</option>
                    </select> -->
                        <input type="text" name="" id="" placeholder="Enter material">
                        <label>Holder Type</label>
                        <input type="text" name="" id="" placeholder="Enter holder type">
                        <!-- <select name="" id="">
                        <option value="">E-14</option>
                        <option value="">E-27</option>
                        <option value="">G-9</option>
                    </select> -->
                        <label>Colour</label>
                        <input type="text" name="" id="" placeholder="Enter colour">
                        <!-- <select name="" id="">
                        <option value="">Black</option>
                        <option value="">White</option>
                        <option value="">Black antique</option>
                        <option value="">Off White</option>
                    </select> -->
                        <label>Size</label>
                        <input type="text" name="" id="" placeholder="Enter size">
                        <!-- <select name="" id="">
                        <option value="">2.5</option>
                        <option value="">2</option>
                    </select> -->
                        <label>Vendor</label>
                        <input type="text" name="" id="" placeholder="Enter vendor">
                        <!-- <select name="" id="">
                        <option value="">Xyz</option>
                        <option value="">Abc</option>
                        <option value="">Fgh</option>
                    </select> -->
                        <label>Brand</label>
                        <input type="text" name="" id="" placeholder="Enter brand">
                        <label>Long Description</label>
                        <input type="text" name="" id="" placeholder="Enter long description">
                        <label>Price</label>
                        <input type="text" name="" id="" placeholder="Enter price">
                        <!-- <select name="" id="">
                        <option value="">70</option>
                        <option value="">65</option>
                        <option value="">90</option>
                        <option value="">75</option>
                    </select> -->
                        <label>Discount</label>
                        <input type="text" name="" id="" placeholder="Enter discount">
                        <!-- <select name="" id="">
                        <option value="">2%</option>
                        <option value="">3%</option>
                        <option value="">2.5%</option>
                    </select> -->
                        <label>Images</label>
                        <input type="file" accept="image/*" onchange="previewImage1(event)">
                        <img id="preview1" alt="Preview Image">
                    </div>
                </div>
                <div class="wire_section">
                    <h3>Wire
                        <button onclick="myFunction2()"><i class="fa-solid fa-plus"></i></button>
                    </h3>
                    <div class="inner_wire" id="dropdown2">
                        <label>S. No</label>
                        <input type="number" name="" id="" placeholder="Enter serial number">
                        <label>Category</label>
                        <input type="text" placeholder="Electrical" disabled>
                        <label>Sub Category</label>
                        <input type="text" name="" id="" placeholder="Wire" disabled>
                        <label>Item Code</label>
                        <input type="text" name="" id="" placeholder="Enter item code">
                        <label>Short description(item name)</label>
                        <input type="text" name="" id="" placeholder="Enter short description">
                        <label>SI Unit</label>
                        <input type="text" name="" id="" placeholder="Enter si unit">
                        <label>Size</label>
                        <input type="text" name="" id="" placeholder="Enter size">
                        <label>Lenght</label>
                        <input type="text" name="" id="" placeholder="Enter length">
                        <label>Material</label>
                        <input type="text" name="" id="" placeholder="Enter material ">
                        <label>Wire Type</label>
                        <input type="text" name="" id="" placeholder="Enter wire type">
                        <label>Colour</label>
                        <input type="text" name="" id="" placeholder="Enter colour">
                        <label>In-Built</label>
                        <input type="text" name="" id="" placeholder="Enter in-build">
                        <label>Pintop</label>
                        <input type="text" name="" id="" placeholder="Enter pintop">
                        <label>Vendor</label>
                        <input type="text" name="" id="" placeholder="Enter vendor">
                        <label>Brand</label>
                        <input type="text" name="" id="" placeholder="Enter brand">
                        <label>Long Description</label>
                        <input type="text" name="" id="" placeholder="Enter long description">
                        <label>Price</label>
                        <input type="text" name="" id="" placeholder="Enter price">
                        <label>Discount</label>
                        <input type="text" name="" id="" placeholder="Enter discount">
                        <label>Images</label>
                        <input type="file" accept="image/*" onchange="previewImage2(event)">
                        <img id="preview2" alt="Preview Image">
                    </div>
                </div>
                <div class="bulb_section">
                    <h3>Bulb
                        <button onclick="myFunction3()"><i class="fa-solid fa-plus"></i></button>
                    </h3>
                    <div class="inner_bulb" id="dropdown3">
                        <label>S. No</label>
                        <input type="number" name="" id="" placeholder="Enter serial number">
                        <label>Category</label>
                        <input type="text" placeholder="Electrical" disabled>
                        <label>Sub Category</label>
                        <input type="text" name="" id="" placeholder="Bulb" disabled>
                        <label>Item Code</label>
                        <input type="text" name="" id="" placeholder="Enter item code">
                        <label>Short description(item name)</label>
                        <input type="text" name="" id="" placeholder="Enter short description">
                        <label>SI Unit</label>
                        <input type="text" name="" id="" placeholder="Enter si unit">
                        <label>Size</label>
                        <input type="text" name="" id="" placeholder="Enter size">
                        <label>Watt</label>
                        <input type="text" name="" id="" placeholder="Enter watt">
                        <label>Colour</label>
                        <input type="text" name="" id="" placeholder="Enter colour">
                        <label>Shape</label>
                        <input type="text" name="" id="" placeholder="Enter shape">
                        <label>Brand</label>
                        <input type="text" name="" id="" placeholder="Enter brand">
                        <label>Light output Colour</label>
                        <input type="text" name="" id="" placeholder="Enter output colour">
                        <label>Vendor</label>
                        <input type="text" name="" id="" placeholder="Enter vendor">
                        <label>Long Description</label>
                        <input type="text" name="" id="" placeholder="Enter long description">
                        <label>Price</label>
                        <input type="text" name="" id="" placeholder="Enter price">
                        <label>Discount</label>
                        <input type="text" name="" id="" placeholder="Enter discount"><br>
                        <label>Images</label>
                        <input type="file" accept="image/*" onchange="previewImage3(event)">
                        <img id="preview3" alt="Preview Image">
                    </div>
                </div>
            </div>
        </div>

        <div class="glass_options">
            <h2 onclick="glassTxt()">Glass Field</h2>
            <div id="glass_txt">
                <div class="urn_section">
                    <h3>Urn
                        <button onclick="myFunction4()"><i class="fa-solid fa-plus"></i></button>
                    </h3>
                    <div class="inner_urn" id="dropdown4">
                        <label>S. No</label>
                        <input type="number" name="" id="" placeholder="Enter serial number">
                        <label>Category</label>
                        <input type="text" placeholder="Glass" disabled>
                        <label>Sub Category</label>
                        <input type="text" name="" id="" placeholder="Urn" disabled>
                        <label>Item Code</label>
                        <input type="text" name="" id="" placeholder="Enter item code">
                        <label>Short description(item name)</label>
                        <input type="text" name="" id="" placeholder="Enter short description">
                        <label>SI Unit</label>
                        <input type="text" name="" id="" placeholder="Enter si unit">
                        <label>Colour</label>
                        <input type="text" name="" id=""
                        placeholder="Enter colour">
                        <label>Finish</label>
                        <input type="text" name="" id="" placeholder="Enter finish">
                        <label>Shape</label>
                        <input type="text" name="" id="" placeholder="Enter shape">
                        <label>Cut</label>
                        <input type="text" name="" id="" placeholder="Enter cut">
                        <label>Height</label>
                        <input type="text" name="" id="" placeholder="Enter height">
                        <label>Weight</label>
                        <input type="text" name="" id="" placeholder="Enter Weight">
                        <label>Upper Diameter</label>
                        <input type="text" name="" id="" placeholder="Enter upper diameter">
                        <label>Bottom Diameter</label>
                        <input type="text" name="" id="" placeholder="Enter bottom diameter">
                        <label>Style</label>
                        <input type="text" name="" id="" placeholder="Enter style">
                        <label>No. Of Ply</label>
                        <input type="text" name="" id="" placeholder="Enter number of ply">
                        <label>Vendor</label>
                        <input type="text" name="" id="" placeholder="Enter vendor">
                        <label>Long Description</label>
                        <input type="text" name="" id="" placeholder="Enter long description">
                        <label>Price</label>
                        <input type="number" name="" id="" placeholder="Enter price">
                        <label>Discount</label>
                        <input type="number" name="" id="" placeholder="Enter discount">
                        <div>
                            <label>Images</label>
                            <input type="file" accept="image/*" onchange="previewImage4(event)">
                            <img id="preview4" alt="Preview Image">
                        </div>
                    </div>
                </div>
                <div class="pipe_section">
                    <h3>Pipe
                        <button onclick="myFunction5()"><i class="fa-solid fa-plus"></i></button>
                    </h3>
                    <div class="inner_pipe" id="dropdown5">
                        <label>S. No</label>
                        <input type="number" name="" id="" placeholder="Enter serial number">
                        <label>Category</label>
                        <input type="text" placeholder="Glass" disabled>
                        <label>Sub Category</label>
                        <input type="text" name="" id="" placeholder="Pipe" disabled>
                        <label>Item Code</label>
                        <input type="text" name="" id="" placeholder="Enter item type">
                        <label>Short description(item name)</label>
                        <input type="text" name="" id="" placeholder="Enter short description">
                        <label>SI Unit</label>
                        <input type="text" name="" id="" placeholder="Enter si unit">
                        <label>Colour</label>
                        <input type="text" name="" id="" placeholder="Enter colour">
                        <label>Finish</label>
                        <input type="text" name="" id="" placeholder="Enter finish">
                        <label>Shape</label>
                        <input type="text" name="" id="" placeholder="Enter shape">
                        <label>Cut</label>
                        <input type="text" name="" id="" placeholder="Enter cut">
                        <label>Height</label>
                        <input type="text" name="" id="" placeholder="Enter height">
                        <label>Weight</label>
                        <input type="text" name="" id="" placeholder="Enter weight">
                        <label>Upper Diameter</label>
                        <input type="text" name="" id="" placeholder="Enter upper diameter">
                        <label>Bottom Diameter</label>
                        <input type="text" name="" id="" placeholder="Enter bottom diameter">
                        <label>Style</label>
                        <input type="text" name="" id="" placeholder="Enter style">
                        <label>No. Of Ply</label>
                        <input type="text" name="" id="" placeholder="Enter number of ply">
                        <label>Vendor</label>
                        <input type="text" name="" id="" placeholder="Enter vendor">
                        <label>Long Description</label>
                        <input type="text" name="" id="" placeholder="Enter long description">
                        <label>Price</label>
                        <input type="number" name="" id="" placeholder="Enter price">
                        <label>Discount</label>
                        <input type="number" name="" id="" placeholder="Enter discount">
                        <div>
                            <label>Images</label>
                            <input type="file" accept="image/*" onchange="previewImage5(event)">
                            <img id="preview5" alt="Preview Image">
                        </div>
                    </div>
                </div>
                <div class="arm_section">
                    <h3>Arm
                        <button onclick="myFunction6()"><i class="fa-solid fa-plus"></i></button>
                    </h3>
                    <div class="inner_arm" id="dropdown6">
                        <label>S. No</label>
                        <input type="number" name="" id="" placeholder="Enter serial number">
                        <label>Category</label>
                        <input type="text" placeholder="Glass" disabled>
                        <label>Sub Category</label>
                        <input type="text" name="" id="" placeholder="Arm" disabled>
                        <label>Item Code</label>
                        <input type="text" name="" id="" placeholder="Enter item code">
                        <label>Short description(item name)</label>
                        <input type="text" name="" id="" placeholder="Enter short description">
                        <label>SI Unit</label>
                        <input type="text" name="" id="" placeholder="Enter si unit">
                        <label>Colour</label>
                        <input type="text" name="" id="" placeholder="Enter colour">
                        <label>Finish</label>
                        <input type="text" name="" id="" placeholder="Enter finish">
                        <label>Shape</label>
                        <input type="text" name="" id="" placeholder="Enter shape">
                        <label>Cut</label>
                        <input type="text" name="" id="" placeholder="Enter cut">
                        <label>Height</label>
                        <input type="text" name="" id="" placeholder="Enter height">
                        <label>Weight</label>
                        <input type="text" name="" id="" placeholder="Enter weight">
                        <label>Upper Diameter</label>
                        <input type="text" name="" id="" placeholder="Enter upper diameter">
                        <label>Bottom Diameter</label>
                        <input type="text" name="" id="" placeholder="Enter bottom diameter">
                        <label>Style</label>
                        <input type="text" name="" id="" placeholder="Enter style">
                        <label>No. Of Ply</label>
                        <input type="text" name="" id="" placeholder="Enter number of supply">
                        <label>Vendor</label>
                        <input type="text" name="" id="" placeholder="Enter vendor">
                        <label>Long Description</label>
                        <input type="text" name="" id="" placeholder="Enter long description">
                        <label>Price</label>
                        <input type="number" name="" id="" placeholder="Enter price">
                        <label>Discount</label>
                        <input type="number" name="" id="" placeholder="Enter discount">
                        <div>
                            <label>Images</label>
                            <input type="file" accept="image/*" onchange="previewImage6(event)">
                            <img id="preview6" alt="Preview Image">
                        </div>
                    </div>
                </div>
                <div class="shade_section">
                    <h3>Shade
                        <button onclick="myFunction7()"><i class="fa-solid fa-plus"></i></button>
                    </h3>
                    <div class="inner_arm" id="dropdown7">
                        <label>S. No</label>
                        <input type="number" name="" id="" placeholder="Enter serial number">
                        <label>Category</label>
                        <input type="text" placeholder="Glass" disabled>
                        <label>Sub Category</label>
                        <input type="text" name="" id="" placeholder="Shade" disabled>
                        <label>Item Code</label>
                        <input type="text" name="" id="" placeholder="Enter item code">
                        <label>Short description(item name)</label>
                        <input type="text" name="" id="" placeholder="short description">
                        <label>SI Unit</label>
                        <input type="text" name="" id="" placeholder="Enter si unit">
                        <label>Colour</label>
                        <input type="text" name="" id="" placeholder="Enter colour">
                        <label>Finish</label>
                        <input type="text" name="" id="" placeholder="Enter finish">
                        <label>Shape</label>
                        <input type="text" name="" id="" placeholder="Enter shape">
                        <label>Cut</label>
                        <input type="text" name="" id="" placeholder="Enter cut">
                        <label>Height</label>
                        <input type="text" name="" id="" placeholder="Enter height">
                        <label>Weight</label>
                        <input type="text" name="" id="" placeholder="Enter weight">
                        <label>Upper Diameter</label>
                        <input type="text" name="" id="" placeholder="Enter upper diameter">
                        <label>Bottom Diameter</label>
                        <input type="text" name="" id="" placeholder="Enter bottom diameter">
                        <label>Style</label>
                        <input type="text" name="" id="" placeholder="Enter style">
                        <label>No. Of Ply</label>
                        <input type="text" name="" id="" placeholder="Enter number of ply">
                        <label>Vendor</label>
                        <input type="text" name="" id="" placeholder="Enter vendor">
                        <label>Long Description</label>
                        <input type="text" name="" id="" placeholder="Enter long description">
                        <label>Price</label>
                        <input type="number" name="" id="" placeholder="Enter price">
                        <label>Discount</label>
                        <input type="number" name="" id="" placeholder="Enter discount">
                        <div>
                            <label>Images</label>
                            <input type="file" accept="image/*" onchange="previewImage7(event)">
                            <img id="preview7" alt="Preview Image">
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="metal_options">
            <h2 onclick="metalTxt()">Metal Field</h2>
            <div id="metal_txt">
                <div class="plate_section">
                    <h3>Plate
                        <button onclick="myFunction8()"><i class="fa-solid fa-plus"></i></button>
                    </h3>
                    <div class="inner_plate" id="dropdown8">
                        <label>S. No</label>
                        <input type="number" name="" id="" placeholder="Enter serial number">
                        <label>Category</label>
                        <input type="text" placeholder="Metal" disabled>
                        <label>Sub Category</label>
                        <input type="text" name="" id="" placeholder="Plate" disabled>
                        <label>Item Code</label>
                        <input type="text" name="" id="" placeholder="Enter serial number">
                        <label>Short description(item name)</label>
                        <input type="text" name="" id="" placeholder="Enter short description">
                        <label>SI Unit</label>
                        <input type="text" name="" id="" placeholder="Enter si unit">
                        <label>Material</label>
                        <input type="text" name="" id="" placeholder="Enter material">
                        <label>Design</label>
                        <input type="text" name="" id="" placeholder="Enter design">
                        <label>Finish Type</label>
                        <input type="text" name="" id="" placeholder="Enter finish type">
                        <label>Thread</label>
                        <input type="text" name="" id="" placeholder="Enter thread">
                        <label>Height</label>
                        <input type="text" name="" id="" placeholder="Enter height">
                        <label>Length</label>
                        <input type="text" name="" id="" placeholder="Enter length">
                        <label>Breadth</label>
                        <input type="text" name="" id="" placeholder="Enter breadth">
                        <label>Upper Diameter</label>
                        <input type="text" name="" id="" placeholder="Enter upper diameter">
                        <label>Bottom Diameter</label>
                        <input type="text" name="" id="" placeholder="Enter button diameter">
                        <label>Center Hole</label>
                        <input type="text" name="" id="" placeholder="Enter center hole">
                        <label>Shape</label>
                        <input type="text" name="" id="" placeholder="Enter shape">
                        <label>Inner/Outer Thread</label>
                        <input type="text" name="" id="" placeholder="Enter inner/outer thread">
                        <label>Upper Thread</label>
                        <input type="text" name="" id="" placeholder="Enter upper thread">
                        <label>Lower Thread</label>
                        <input type="text" name="" id="" placeholder="Enter lower thread">
                        <label>Thread Length</label>
                        <input type="text" name="" id="" placeholder="Enter thread length">
                        <label>Vendor</label>
                        <input type="text" name="" id="" placeholder="Enter vendor">
                        <label>Price</label>
                        <input type="number" name="" id="" placeholder="Enter vendor">
                        <label>Discount</label>
                        <input type="number" name="" id="" placeholder="Enter discount">
                        <label>Long Description</label>
                        <input type="text" name="" id="" placeholder="Enter description">
                        <div>
                            <label>Images</label>
                            <input type="file" accept="image/*" onchange="previewImage8(event)">
                            <img id="preview8" alt="Preview Image">
                        </div>
                    </div>
                </div>
                <div class="centre_pipe_section">
                    <h3>Centre pipe
                        <button onclick="myFunction9()"><i class="fa-solid fa-plus"></i></button>
                    </h3>
                    <div class="inner_centre_pipe" id="dropdown9">
                        <label>S. No</label>
                        <input type="number" name="" id="" placeholder="Enter serial number">
                        <label>Category</label>
                        <input type="text" placeholder="Metal" disabled>
                        <label>Sub Category</label>
                        <input type="text" name="" id="" placeholder="Centre pipe" disabled>
                        <label>Item Code</label>
                        <input type="text" name="" id="" placeholder="Enter item code">
                        <label>Short description(item name)</label>
                        <input type="text" name="" id="" placeholder="Enter short description">
                        <label>SI Unit</label>
                        <input type="text" name="" id="" placeholder="Enter si unit">
                        <label>Material</label>
                        <input type="text" name="" id="" placeholder="Enter material">
                        <label>Design</label>
                        <input type="text" name="" id="" placeholder="Enter design">
                        <label>Finish Type</label>
                        <input type="text" name="" id="" placeholder="finish type">
                        <label>Thread</label>
                        <input type="text" name="" id="" placeholder="Enter thread">
                        <label>Height</label>
                        <input type="text" name="" id="" placeholder="Enter height">
                        <label>Length</label>
                        <input type="text" name="" id="" placeholder="Enter length">
                        <label>Breadth</label>
                        <input type="text" name="" id="" placeholder="Enter breadth">
                        <label>Upper Diameter</label>
                        <input type="text" name="" id="" placeholder="Enter upper diameter">
                        <label>Bottom Diameter</label>
                        <input type="text" name="" id="" placeholder="Enter bottom diameter">
                        <label>Center Hole</label>
                        <input type="text" name="" id="" placeholder="Enter center hole">
                        <label>Shape</label>
                        <input type="text" name="" id="" placeholder="Enter shape">
                        <label>Inner/Outer Thread</label>
                        <input type="text" name="" id="" placeholder="Enter inner/outer thread">
                        <label>Upper Thread</label>
                        <input type="text" name="" id="" placeholder="Enter upper thread">
                        <label>Lower Thread</label>
                        <input type="text" name="" id="" placeholder="Enter lower thread">
                        <label>Thread Length</label>
                        <input type="text" name="" id="" placeholder="thread length">
                        <label>Vendor</label>
                        <input type="text" name="" id="" placeholder="Enter vendor">
                        <label>Price</label>
                        <input type="number" name="" id="" placeholder="Enter price">
                        <label>Discount</label>
                        <input type="number" name="" id="" placeholder="Enter discount">
                        <label>Long Description</label>
                        <input type="text" name="" id="" placeholder="Enter long description">
                        <div>
                            <label>Images</label>
                            <input type="file" accept="image/*" onchange="previewImage9(event)">
                            <img id="preview9" alt="Preview Image">
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="stationary_options">
            <h2 onclick="stationaryTxt()">Stationary Field</h2>
            <div id="stationary_txt">
                <div class="paper_section">
                    <h3>Paper
                        <button onclick="myFunction10()"><i class="fa-solid fa-plus"></i></button>
                    </h3>
                    <div class="inner_paper" id="dropdown10">
                        <label>S. No</label>
                        <input type="number" name="" id="" placeholder="Enter serial number">
                        <label>Category</label>
                        <input type="text" placeholder="Stationary" disabled>
                        <label>Sub Category</label>
                        <input type="text" name="" id="" placeholder="Paper" disabled>
                        <label>Item Code</label>
                        <input type="text" name="" id="" placeholder="Enter item code">
                        <label>Short description(item name)</label>
                        <input type="text" name="" id="" placeholder="Enter short description">
                        <label>SI Unit</label>
                        <input type="text" name="" id="" placeholder="Enter si unit">
                        <label>Colour</label>
                        <input type="text" name="" id="" placeholder="Enter colour">
                        <label>Ink type</label>
                        <input type="text" name="" id="" placeholder="Enter ink type">
                        <label>Size</label>
                        <input type="text" name="" id="" placeholder="Enter size">
                        <label>Brand</label>
                        <input type="text" name="" id="" placeholder="Enter brand">
                        <label>Vendor</label>
                        <input type="text" name="" id="" placeholder="Enter vendor">
                        <label>Price</label>
                        <input type="number" name="" id="" placeholder="Enter price">
                        <label>Discount</label>
                        <input type="number" name="" id="" placeholder="Enter discount">
                        <label>Long Description</label>
                        <input type="text" name="" id="" placeholder="Enter long description">
                        <div>
                            <label>Images</label>
                            <input type="file" accept="image/*" onchange="previewImage10(event)">
                            <img id="preview10" alt="Preview Image">
                        </div>
                    </div>
                </div>
                <div class="ball_pen_section">
                    <h3>Ball Pen
                        <button onclick="myFunction11()"><i class="fa-solid fa-plus"></i></button>
                    </h3>
                    <div class="inner_ball_pen" id="dropdown11">
                        <label>S. No</label>
                        <input type="number" name="" id="" placeholder="Enter serial number">
                        <label>Category</label>
                        <input type="text" placeholder="Stationary" disabled>
                        <label>Sub Category</label>
                        <input type="text" name="" id="" placeholder="Ball Pen" disabled>
                        <label>Item Code</label>
                        <input type="text" name="" id="" placeholder="Enter item code">
                        <label>Short description(item name)</label>
                        <input type="text" name="" id="" placeholder="Enter short description">
                        <label>SI Unit</label>
                        <input type="text" name="" id="" placeholder="Enter si unit">
                        <label>Colour</label>
                        <input type="text" name="" id="" placeholder="Enter colour">
                        <label>Ink type</label>
                        <input type="text" name="" id="" placeholder="Enter ink type">
                        <label>Size</label>
                        <input type="text" name="" id="" placeholder="Enter size">
                        <label>Brand</label>
                        <input type="text" name="" id="" placeholder="Enter brand">
                        <label>Vendor</label>
                        <input type="text" name="" id="" placeholder="Enter vendor">
                        <label>Price</label>
                        <input type="number" name="" id="" placeholder="Enter price">
                        <label>Discount</label>
                        <input type="number" name="" id="" placeholder="Enter discount">
                        <label>Long Description</label>
                        <input type="text" name="" id="" placeholder="Enter description">
                        <div>
                            <label>Images</label>
                            <input type="file" accept="image/*" onchange="previewImage11(event)">
                            <img id="preview11" alt="Preview Image">
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="shades_options">
            <h2 onclick="shadesTxt()">Shades Field</h2>
            <div id="shades_txt">
                <div class="wall_light_section">
                    <h3>Wall light
                        <button onclick="myFunction12()"><i class="fa-solid fa-plus"></i></button>
                    </h3>
                    <div class="inner_wall_light" id="dropdown12">
                        <label>S. No</label>
                        <input type="number" name="" id="" placeholder="Enter serial number">
                        <label>Category</label>
                        <input type="text" placeholder="Shades" disabled>
                        <label>Sub Category</label>
                        <input type="text" name="" id="" placeholder="Wall light" disabled>
                        <label>Item Code</label>
                        <input type="text" name="" id="" placeholder="Enter item code">
                        <label>Short description(item name)</label>
                        <input type="text" name="" id="" placeholder="Enter short description">
                        <label>SI Unit</label>
                        <input type="text" name="" id="" placeholder="Enter si unit">
                        <label>Style</label>
                        <input type="text" name="" id="" placeholder="Enter style">
                        <label>Top Dia</label>
                        <input type="text" name="" id="" placeholder="Enter top dia">
                        <label>Bottom Dia</label>
                        <input type="text" name="" id="" placeholder="Enter bottom dia">
                        <label>Height</label>
                        <input type="text" name="" id="" placeholder="Enter height">
                        <label>Fabric</label>
                        <input type="text" name="" id="" placeholder="Enter fabric">
                        <label>Fabric Colour</label>
                        <input type="text" name="" id="" placeholder="Enter fabric colour">
                        <label>Piping</label>
                        <input type="text" name="" id="" placeholder="Enter piping">
                        <label>Piping Colour</label>
                        <input type="text" name="" id="" placeholder="Enter piping colour">
                        <label>Gallery Dimmer</label>
                        <input type="text" name="" id="" placeholder="Enter gallery dimmer">
                        <label>Acrylic diffuser</label>
                        <input type="text" name="" id="" placeholder="Enter acrylic diffuser">
                        <label>Gallery height</label>
                        <input type="text" name="" id="" placeholder="Enter gallery height">
                        <label>Sheet</label>
                        <input type="text" name="" id="" placeholder="Enter sheet">
                        <label>Sheet Colour</label>
                        <input type="text" name="" id="" placeholder="Enter sheet colour">
                        <label>Frame Powder Coating</label>
                        <input type="text" name="" id="" placeholder="Enter powder coating">
                        <label>Vendor</label>
                        <input type="text" name="" id="" placeholder="Enter vendor">
                        <label>Price</label>
                        <input type="number" name="" id="" placeholder="Enter price">
                        <label>Discount</label>
                        <input type="number" name="" id="" placeholder="Enter discount">
                        <label>Long Description</label>
                        <input type="text" name="" id="" placeholder="Enter long description">
                        <div>
                            <label>Images</label>
                            <input type="file" accept="image/*" onchange="previewImage12(event)">
                            <img id="preview12" alt="Preview Image">
                        </div>
                    </div>
                </div>
                <div class="chandelier_section">
                    <h3>Chandelier
                        <button onclick="myFunction13()"><i class="fa-solid fa-plus"></i></button>
                    </h3>
                    <div class="inner_chandelier" id="dropdown13">
                        <label>S. No</label>
                        <input type="number" name="" id="" placeholder="Enter serial number">
                        <label>Category</label>
                        <input type="text" placeholder="Shades" disabled>
                        <label>Sub Category</label>
                        <input type="text" name="" id="" placeholder="Chandelier" disabled>
                        <label>Item Code</label>
                        <input type="text" name="" id="" placeholder="Enter item code">
                        <label>Short description(item name)</label>
                        <input type="text" name="" id="" placeholder="Enter short description">
                        <label>SI Unit</label>
                        <input type="text" name="" id="" placeholder="Enter si unit">
                        <label>Style</label>
                        <input type="text" name="" id="" placeholder="Enter style">
                        <label>Top Dia</label>
                        <input type="text" name="" id="" placeholder="Enter top dia">
                        <label>Bottom Dia</label>
                        <input type="text" name="" id="" placeholder="Enter bottom dia">
                        <label>Height</label>
                        <input type="text" name="" id="" placeholder="Enter height">
                        <label>Fabric</label>
                        <input type="text" name="" id="" placeholder="Enter fabric">
                        <label>Fabric Colour</label>
                        <input type="text" name="" id="" placeholder="Enter fabric colour">
                        <label>Piping</label>
                        <input type="text" name="" id="" placeholder="Enter piping">
                        <label>Piping Colour</label>
                        <input type="text" name="" id="" class="Enter piping colour">
                        <label>Gallery Dimmer</label>
                        <input type="text" name="" id="" placeholder="Enter gallery dimmer">
                        <label>Acrylic diffuser</label>
                        <input type="text" name="" id="" placeholder="Enter acrylic diffuser">
                        <label>Gallery height</label>
                        <input type="text" name="" id="" placeholder="Enter gallery height">
                        <label>Sheet</label>
                        <input type="text" name="" id="" placeholder="Enter sheet">
                        <label>Sheet Colour</label>
                        <input type="text" name="" id="" placeholder="Enter sheet colour">
                        <label>Frame Powder Coating</label>
                        <input type="text" name="" id="" placeholder="Enter powder coating">
                        <label>Vendor</label>
                        <input type="text" name="" id="" placeholder="Enter vendor">
                        <label>Price</label>
                        <input type="number" name="" id="" placeholder="Enter price">
                        <label>Discount</label>
                        <input type="number" name="" id="" placeholder="discount">
                        <label>Long Description</label>
                        <input type="text" name="" id="" placeholder="Enter long description">
                        <div>
                            <label>Images</label>
                            <input type="file" accept="image/*" onchange="previewImage13(event)">
                            <img id="preview13" alt="Preview Image">
                        </div>
                    </div>
                </div>
                <div class="table_lamp_section">
                    <h3>Table lamps
                        <button onclick="myFunction14()"><i class="fa-solid fa-plus"></i></button>
                    </h3>
                    <div class="inner_table_lamp" id="dropdown14">
                        <label>S. No</label>
                        <input type="number" name="" id="" placeholder="Enter serial number">
                        <label>Category</label>
                        <input type="text" placeholder="Shades" disabled>
                        <label>Sub Category</label>
                        <input type="text" name="" id="" placeholder="Table lamps" disabled>
                        <label>Item Code</label>
                        <input type="text" name="" id="" placeholder="Enter item code">
                        <label>Short description(item name)</label>
                        <input type="text" name="" id="" placeholder="Enter short description">
                        <label>SI Unit</label>
                        <input type="text" name="" id="" placeholder="Enter si unit">
                        <label>Style</label>
                        <input type="text" name="" id="" placeholder="Enter style">
                        <label>Top Diame</label>
                        <input type="text" name="" id="" placeholder="Enter top diameter">
                        <label>Bottom Dia</label>
                        <input type="text" name="" id="" placeholder="Enter button diameter">
                        <label>Height</label>
                        <input type="text" name="" id="" placeholder="Enter height">
                        <label>Fabric</label>
                        <input type="text" name="" id="" placeholder="Enter fabric">
                        <label>Fabric Colour</label>
                        <input type="text" name="" id="" placeholder="Enter fabric  colour">
                        <label>Piping</label>
                        <input type="text" name="" id="" placeholder="Enter piping">
                        <label>Piping Colour</label>
                        <input type="text" name="" id="" placeholder="Enter piping colour">
                        <label>Gallery Dimmer</label>
                        <input type="text" name="" id="" placeholder="Enter gallery dimmer">
                        <label>Acrylic diffuser</label>
                        <input type="text" name="" id="" placeholder="Enter acrylic diffuser">
                        <label>Gallery height</label>
                        <input type="text" name="" id="" placeholder="Enter gallery height">
                        <label>Sheet</label>
                        <input type="text" name="" id="" placeholder="Enter sheet">
                        <label>Sheet Colour</label>
                        <input type="text" name="" id="" placeholder="Enter sheet colour">
                        <label>Frame Powder Coating</label>
                        <input type="text" name="" id="" placeholder="Enter power coating">
                        <label>Vendor</label>
                        <input type="text" name="" id="" placeholder="Enter vendor">
                        <label>Price</label>
                        <input type="number" name="" id="" placeholder="Enter price">
                        <label>Discount</label>
                        <input type="number" name="" id="" placeholder="Enter discount"> 
                        <label>Long Description</label>
                        <input type="text" name="" id="" placeholder="Enter long description">
                        <div>
                            <label>Images</label>
                            <input type="file" accept="image/*" onchange="previewImage14(event)">
                            <img id="preview14" alt="Preview Image">
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="acrylic_options">
            <h2 onclick="acrylicTxt()">Acrylic Field</h2>
            <div id="acrylic_txt">
                <div class="acrylic_section">
                    <h3>Shades
                        <button onclick="myFunction15()"><i class="fa-solid fa-plus"></i></button>
                    </h3>
                    <div class="inner_acrylic" id="dropdown15">
                        <label>S. No</label>
                        <input type="number" name="" id="" placeholder="Enter serial number">
                        <label>Category</label>
                        <input type="text" placeholder="Acrylic Field" disabled>
                        <label>Sub Category</label>
                        <input type="text" name="" id="" placeholder="Shades" disabled>
                        <label>Item Code</label>
                        <input type="text" name="" id="" placeholder="Enter item code">
                        <label>Short description(item name)</label>
                        <input type="text" name="" id="" placeholder="Enter short description">
                        <label>SI Unit</label>
                        <input type="text" name="" id="" placeholder="Enter si unit">
                        <label>Colour</label>
                        <input type="text" name="" id="" placeholder="Enter colour">
                        <label>Size</label>
                        <input type="text" name="" id="" placeholder="Enter size">
                        <label>Shape</label>
                        <input type="text" name="" id="" placeholder="Enter shape">
                        <label>Centre Hole</label>
                        <input type="text" name="" id="" placeholder="Enter center hole">
                        <label>Transparent</label>
                        <input type="text" name="" id="" placeholder="Enter transparent">
                        <label>Special attributes if any</label>
                        <input type="text" name="" id="" placeholder="Enter special attributes">
                        <label>Vendor</label>
                        <input type="text" name="" id="" placeholder="Enter vendor">
                        <label>Long Description</label>
                        <input type="text" name="" id="" placeholder="Enter long description">
                        <div>
                            <label>Images</label>
                            <input type="file" accept="image/*" onchange="previewImage15(event)">
                            <img id="preview15" alt="Preview Image">
                        </div>
                    </div>
                </div>
                <div class="acrylic_pipe_section">
                    <h3>Pipe
                        <button onclick="myFunction16()"><i class="fa-solid fa-plus"></i></button>
                    </h3>
                    <div class="inner_acrylic_pipe" id="dropdown16">
                        <label>S. No</label>
                        <input type="number" name="" id="" placeholder="Enter serial number">
                        <label>Category</label>
                        <input type="text" placeholder="Acrylic Field" disabled>
                        <label>Sub Category</label>
                        <input type="text" name="" id="" placeholder="Pipe" disabled>
                        <label>Item Code</label>
                        <input type="text" name="" id="" placeholder="Enter item code">
                        <label>Short description(item name)</label>
                        <input type="text" name="" id="" placeholder="Enter short description">
                        <label>SI Unit</label>
                        <input type="text" name="" id="" placeholder="Enter si unit">
                        <label>Colour</label>
                        <input type="text" name="" id="" placeholder="Enter colour">
                        <label>Size</label>
                        <input type="text" name="" id="" placeholder="Enter size">
                        <label>Shape</label>
                        <input type="text" name="" id="" placeholder="Enter shape">
                        <label>Centre Hole</label>
                        <input type="text" name="" id="" placeholder="Enter center hole">
                        <label>Transparent</label>
                        <input type="text" name="" id="" placeholder="Enter transparent">
                        <label>Special attributes if any</label>
                        <input type="text" name="" id="" placeholder="Enter special attributes">
                        <label>Vendor</label>
                        <input type="text" name="" id="" placeholder="Enter vendor">
                        <label>Long Description</label>
                        <input type="text" name="" id="" placeholder="Enter long description">
                        <div>
                            <label>Images</label>
                            <input type="file" accept="image/*" onchange="previewImage16(event)">
                            <img id="preview16" alt="Preview Image">
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="crystal_options">
            <h2 onclick="crystalTxt()">Crystal Field</h2>
            <div id="crystal_txt">
                <div class="acrylic_section">
                    <h3>Chandelier
                        <button onclick="myFunction17()"><i class="fa-solid fa-plus"></i></button>
                    </h3>
                    <div class="inner_crystal" id="dropdown17">
                        <label>S. No</label>
                        <input type="number" name="" id="" placeholder="Enter serial number">
                        <label>Category</label>
                        <input type="text" placeholder="Crystal" disabled>
                        <label>Sub Category</label>
                        <input type="text" name="" id="" placeholder="Chandelier" disabled>
                        <label>Item Code</label>
                        <input type="text" name="" id="" placeholder="Enter item code">
                        <label>Short description(item name)</label>
                        <input type="text" name="" id="" placeholder="Enter short description">
                        <label>SI Unit</label>
                        <input type="text" name="" id="" placeholder="Enter si unit">
                        <label>Colour</label>
                        <input type="text" name="" id="" placeholder="Enter colour">
                        <label>Material</label>
                        <input type="text" name="" id="" placeholder="Enter material">
                        <label>Shape</label>
                        <input type="text" name="" id="" placeholder="Enter shape">
                        <label>Cut</label>
                        <input type="text" name="" id="" placeholder="Enter cut">
                        <label>Height</label>
                        <input type="text" name="" id="" placeholder="Enter height">
                        <label>Weight</label>
                        <input type="text" name="" id="" placeholder="Enter weight">
                        <label>Upper Diameter</label>
                        <input type="text" name="" id="" placeholder="Enter upper diameter">
                        <label>Bottom Diameter</label>
                        <input type="text" name="" id="" placeholder="Enter bottom diameter">
                        <label>Shape</label>
                        <input type="text" name="" id="" placeholder="Enter shade">
                        <label>Style</label>
                        <input type="text" name="" id="" placeholder="Enter style">
                        <label>No. of Ply</label>
                        <input type="text" name="" id="" placeholder="Enter number of ply">
                        <label>Vendor</label>
                        <input type="text" name="" id="" placeholder="Enter vendor">
                        <label>Long Description</label>
                        <input type="text" name="" id="" placeholder="Enter long description">
                        <label>Price</label>
                        <input type="text" name="" id="" placeholder="Enter price">
                        <label>Discount</label>
                        <input type="text" name="" id="" placeholder="Enter discount">
                        <div>
                            <label>Images</label>
                            <input type="file" accept="image/*" onchange="previewImage17(event)">
                            <img id="preview17" alt="Preview Image">
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="packaging_options">
            <h2 onclick="packagingTxt()">Packaging Field</h2>
            <div id="packaging_txt">
                <div class="carton_section">
                    <h3>Carton
                        <button onclick="myFunction18()"><i class="fa-solid fa-plus"></i></button>
                    </h3>
                    <div class="inner_carton" id="dropdown18">
                        <label>S. No</label>
                        <input type="number" name="" id="" placeholder="Enter serial number">
                        <label>Category</label>
                        <input type="text" placeholder="Packaging" disabled>
                        <label>Sub Category</label>
                        <input type="text" name="" id="" placeholder="Carton" disabled>
                        <label>Item Code</label>
                        <input type="text" name="" id="" placeholder="Enter item code">
                        <label>Short description(item name)</label>
                        <input type="text" name="" id="" placeholder="Enter short description">
                        <label>SI Unit</label>
                        <input type="text" name="" id="" placeholder="Enter si unit">
                        <label>Length</label>
                        <input type="text" name="" id="" placeholder="Enter length">
                        <label>Breadth</label>
                        <input type="text" name="" id="" placeholder="Enter breadth">
                        <label>Height</label>
                        <input type="text" name="" id="" placeholder="Enter height">
                        <label>Ply</label>
                        <input type="text" name="" id="" placeholder="Enter ply">
                        <label>Opening</label>
                        <input type="text" name="" id="" placeholder="Enter opening">
                        <label>Vendor</label>
                        <input type="text" name="" id="" placeholder="Enter vendor">
                        <label>Long Description</label>
                        <input type="text" name="" id="" placeholder="Enter long description">
                        <div>
                            <label>Images</label>
                            <input type="file" accept="image/*" onchange="previewImage18(event)">
                            <img id="preview18" alt="Preview Image">
                        </div>
                    </div>
                </div>
                <div class="air_bubble_section">
                    <h3>Air Bubble
                        <button onclick="myFunction19()"><i class="fa-solid fa-plus"></i></button>
                    </h3>
                    <div class="inner_air_bubble" id="dropdown19">
                        <label>S. No</label>
                        <input type="number" name="" id="" placeholder="Enter serial number">
                        <label>Category</label>
                        <input type="text" placeholder="Packaging" disabled>
                        <label>Sub Category</label>
                        <input type="text" name="" id="" placeholder="Air Bubble" disabled>
                        <label>Item Code</label>
                        <input type="text" name="" id="" placeholder="Enter item code">
                        <label>Short description(item name)</label>
                        <input type="text" name="" id="" placeholder="Enter short description">
                        <label>SI Unit</label>
                        <input type="text" name="" id="" placeholder="Enter short description">
                        <label>Length</label>
                        <input type="text" name="" id="" placeholder="Enter length">
                        <label>Breadth</label>
                        <input type="text" name="" id="" placeholder="Enter breadth">
                        <label>Height</label>
                        <input type="text" name="" id="" placeholder="Enter height">
                        <label>Ply</label>
                        <input type="text" name="" id="" placeholder="Enter ply">
                        <label>Opening</label>
                        <input type="text" name="" id="" placeholder="Enter opening">
                        <label>Vendor</label>
                        <input type="text" name="" id="" placeholder="Enter vendor">
                        <label>Long Description</label>
                        <input type="text" name="" id="" placeholder="Enter long description">
                        <div>
                            <label>Images</label>
                            <input type="file" accept="image/*" onchange="previewImage19(event)">
                            <img id="preview19" alt="Preview Image">
                        </div>
                    </div>
                </div>
                <div class="thermocol_section">
                    <h3>Thermocol
                        <button onclick="myFunction20()"><i class="fa-solid fa-plus"></i></button>
                    </h3>
                    <div class="inner_thermocol" id="dropdown20">
                        <label>S. No</label>
                        <input type="number" name="" id="" placeholder="Enter serial number">
                        <label>Category</label>
                        <input type="text" placeholder="Packaging" disabled>
                        <label>Sub Category</label>
                        <input type="text" name="" id="" placeholder="Thermocol" disabled>
                        <label>Item Code</label>
                        <input type="text" name="" id="" placeholder="Enter item code">
                        <label>Short description(item name)</label>
                        <input type="text" name="" id="" placeholder="Enter short description">
                        <label>SI Unit</label>
                        <input type="text" name="" id="" placeholder="Enter si unit">
                        <label>Length</label>
                        <input type="text" name="" id="" placeholder="Enter length">
                        <label>Breadth</label>
                        <input type="text" name="" id="" placeholder="Enter breadth">
                        <label>Height</label>
                        <input type="text" name="" id="" placeholder="Enter height">
                        <label>Ply</label>
                        <input type="text" name="" id="" placeholder="Enter ply">
                        <label>Opening</label>
                        <input type="text" name="" id="" placeholder="Enter opening">
                        <label>Vendor</label>
                        <input type="text" name="" id="" placeholder="Enter vendor">
                        <label>Long Description</label>
                        <input type="text" name="" id="" placeholder="Enter long description">
                        <div>
                            <label>Images</label>
                            <input type="file" accept="image/*" onchange="previewImage20(event)">
                            <img id="preview20" alt="Preview Image">
                        </div>
                    </div>
                </div>
                <div class="tape_section">
                    <h3>Self Adhesive Tapes
                        <button onclick="myFunction21()"><i class="fa-solid fa-plus"></i></button>
                    </h3>
                    <div class="inner_tape" id="dropdown21">
                        <label>S. No</label>
                        <input type="number" name="" id="" placeholder="Enter serial number">
                        <label>Category</label>
                        <input type="text" placeholder="Packaging" disabled>
                        <label>Sub Category</label>
                        <input type="text" name="" id="" placeholder="Self Adhesive Tapes" disabled>
                        <label>Item Code</label>
                        <input type="text" name="" id="" placeholder="Enter item code">
                        <label>Short description(item name)</label>
                        <input type="text" name="" id="" placeholder="Enter short description">
                        <label>SI Unit</label>
                        <input type="text" name="" id="" placeholder="Enter si unit">
                        <label>Length</label>
                        <input type="text" name="" id="" placeholder="Enter length">
                        <label>Breadth</label>
                        <input type="text" name="" id="" placeholder="Enter breadth">
                        <label>Height</label>
                        <input type="text" name="" id="" placeholder="Enter height">
                        <label>Ply</label>
                        <input type="text" name="" id="" placeholder="Enter ply">
                        <label>Opening</label>
                        <input type="text" name="" id="" placeholder="Enter opening">
                        <label>Vendor</label>
                        <input type="text" name="" id="" placeholder="Enter vendor">
                        <label>Long Description</label>
                        <input type="text" name="" id="" placeholder="Enter long description">
                        <div>
                            <label>Images</label>
                            <input type="file" accept="image/*" onchange="previewImage21(event)">
                            <img id="preview21" alt="Preview Image">
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="consubale_options">
            <h2 onclick="consubaleTxt()">Consubale Installation</h2>
            <div id="consubale_txt">
                <div class="fasteners_section">
                    <h3>Fasteners
                        <button onclick="myFunction22()"><i class="fa-solid fa-plus"></i></button>
                    </h3>
                    <div class="inner_fasteners" id="dropdown22">
                        <label>S. No</label>
                        <input type="number" name="" id="" placeholder="Enter serial number">
                        <label>Category</label>
                        <input type="text" placeholder="Consubale Installation" disabled>
                        <label>Sub Category</label>
                        <input type="text" name="" id="" placeholder="Fasteners" disabled>
                        <label>Item Code</label>
                        <input type="text" name="" id="" placeholder="Enter item code">
                        <label>Short description(item name)</label>
                        <input type="text" name="" id="" placeholder="Enter short description">
                        <label>SI Unit</label>
                        <input type="text" name="" id="" placeholder="Enter si unit">
                        <label>Type</label>
                        <input type="text" name="" id="" placeholder="Enter type">
                        <label>Size</label>
                        <input type="text" name="" id="" placeholder="Enter size">
                        <label>Hole size</label>
                        <input type="text" name="" id="" placeholder="Enter hole size">
                        <label>Finish</label>
                        <input type="text" name="" id="" placeholder="Enter finish">
                        <label>Thread type </label>
                        <input type="text" name="" id="" placeholder="Enter thread type">
                        <label>Head type</label>
                        <input type="text" name="" id="" placeholder="Enter head type">
                        <label>Diameter</label>
                        <input type="text" name="" id="" placeholder="Enter diameter">
                        <label>Length</label>
                        <input type="text" name="" id="" placeholder="Enter length">
                        <label>Thread pitch</label>
                        <input type="text" name="" id="" placeholder="Enter thread pitch">
                        <label>Vendor</label>
                        <input type="text" name="" id="" placeholder="Enter vendor">
                        <label>Long Description</label>
                        <input type="text" name="" id="" placeholder="Enter long description">
                        <div>
                            <label>Images</label>
                            <input type="file" accept="image/*" onchange="previewImage22(event)">
                            <img id="preview22" alt="Preview Image">
                        </div>
                    </div>
                </div>
                <div class="screw_section">
                    <h3>Screw Fasteners
                        <button onclick="myFunction23()"><i class="fa-solid fa-plus"></i></button>
                    </h3>
                    <div class="inner_screw" id="dropdown23">
                        <label>S. No</label>
                        <input type="number" name="" id="" placeholder="Enter serial number">
                        <label>Category</label>
                        <input type="text" placeholder="Consubale Installation" disabled>
                        <label>Sub Category</label>
                        <input type="text" name="" id="" placeholder="Screw Fasteners" disabled>
                        <label>Item Code</label>
                        <input type="text" name="" id="" placeholder="Enter item code">
                        <label>Short description(item name)</label>
                        <input type="text" name="" id="" placeholder="Enter short description">
                        <label>SI Unit</label>
                        <input type="text" name="" id="" placeholder="Enter si unit">
                        <label>Type</label>
                        <input type="text" name="" id="" placeholder="Enter type">
                        <label>Size</label>
                        <input type="text" name="" id="" placeholder="Enter size">
                        <label>Hole size</label>
                        <input type="text" name="" id="" placeholder="Enter hole size">
                        <label>Finish</label>
                        <input type="text" name="" id="" placeholder="Enter finish">
                        <label>Thread type </label>
                        <input type="text" name="" id="" placeholder="Enter thread type">
                        <label>Head type</label>
                        <input type="text" name="" id="" placeholder="Enter head type">
                        <label>Diameter</label>
                        <input type="text" name="" id="" placeholder="Enter diameter">
                        <label>Length</label>
                        <input type="text" name="" id="" placeholder="Enter length">
                        <label>Thread pitch</label>
                        <input type="text" name="" id="" placeholder="Enter thread pitch">
                        <label>Vendor</label>
                        <input type="text" name="" id="" placeholder="Enter vendor">
                        <label>Long Description</label>
                        <input type="text" name="" id="" placeholder="Enter long description">
                        <div>
                            <label>Images</label>
                            <input type="file" accept="image/*" onchange="previewImage23(event)">
                            <img id="preview23" alt="Preview Image">
                        </div>
                    </div>
                </div>
                <div class="concrete_section">
                    <h3>Concrete Screw 
                        <button onclick="myFunction24()"><i class="fa-solid fa-plus"></i></button>
                    </h3>
                    <div class="inner_concrete" id="dropdown24">
                        <label>S. No</label>
                        <input type="number" name="" id="" placeholder="Enter serial number">
                        <label>Category</label>
                        <input type="text" placeholder="Consubale Installation" disabled>
                        <label>Sub Category</label>
                        <input type="text" name="" id="" placeholder="Concrete Screw" disabled>
                        <label>Item Code</label>
                        <input type="text" name="" id="" placeholder="Enter item code">
                        <label>Short description(item name)</label>
                        <input type="text" name="" id="" placeholder="Enter short description">
                        <label>SI Unit</label>
                        <input type="text" name="" id="" placeholder="Enter si unit">
                        <label>Type</label>
                        <input type="text" name="" id="" placeholder="Enter type">
                        <label>Size</label>
                        <input type="text" name="" id="" placeholder="Enter size">
                        <label>Hole size</label>
                        <input type="text" name="" id="" placeholder="Enter hole size">
                        <label>Finish</label>
                        <input type="text" name="" id="" placeholder="Enter finish">
                        <label>Thread type </label>
                        <input type="text" name="" id="" placeholder="Enter thread type">
                        <label>Head type</label>
                        <input type="text" name="" id="" placeholder="Enter head type">
                        <label>Diameter</label>
                        <input type="text" name="" id="" placeholder="Enter diameter">
                        <label>Length</label>
                        <input type="text" name="" id="" placeholder="Enter length">
                        <label>Thread pitch</label>
                        <input type="text" name="" id="" placeholder="Enter thread pitch">
                        <label>Vendor</label>
                        <input type="text" name="" id="" placeholder="Enter vendor">
                        <label>Long Description</label>
                        <input type="text" name="" id="" placeholder="Enter long description">
                        <div>
                            <label>Images</label>
                            <input type="file" accept="image/*" onchange="previewImage24(event)">
                            <img id="preview24" alt="Preview Image">
                        </div>
                    </div>
                </div>
            </div>
        </div>




    </div>






    <!-- --------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------- -->

    <!-- Script Start Here  -->



    <script>




function electricalTxt() {

var x = document.getElementById("electrical_txt");
if (x.style.display === "block") {
    x.style.display = "none";
} else {
    x.style.display = "block";
}
}

function myFunction1() {
var x = document.getElementById("dropdown1");
if (x.style.display === "block") {
    x.style.display = "none";
} else {
    x.style.display = "block";
}
}

function myFunction2() {
var x = document.getElementById("dropdown2");
if (x.style.display === "block") {
    x.style.display = "none";
} else {
    x.style.display = "block";
}
}

function myFunction3() {
var x = document.getElementById("dropdown3");
if (x.style.display === "block") {
    x.style.display = "none";
} else {
    x.style.display = "block";
}
}

function previewImage1(event) {
var input = event.target;
var image = document.getElementById('preview1');
if (input.files && input.files[0]) {
    var reader = new FileReader();
    reader.onload = function (e) {
        image.src = e.target.result;
    }
    reader.readAsDataURL(input.files[0]);
}
}

function previewImage2(event) {
var input = event.target;
var image = document.getElementById('preview2');
if (input.files && input.files[0]) {
    var reader = new FileReader();
    reader.onload = function (e) {
        image.src = e.target.result;
    }
    reader.readAsDataURL(input.files[0]);
}
}

function previewImage3(event) {
var input = event.target;
var image = document.getElementById('preview3');
if (input.files && input.files[0]) {
    var reader = new FileReader();
    reader.onload = function (e) {
        image.src = e.target.result;
    }
    reader.readAsDataURL(input.files[0]);
}
}



// ------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------


// Glass Text Script 
function glassTxt() {
var x = document.getElementById("glass_txt");
if (x.style.display === "block") {
    x.style.display = "none";
} else {
    x.style.display = "block";
}
}

function myFunction4() {
var x = document.getElementById("dropdown4");
if (x.style.display === "block") {
    x.style.display = "none";
} else {
    x.style.display = "block";
}
}

function previewImage4(event) {
var input = event.target;
var image = document.getElementById('preview4');
if (input.files && input.files[0]) {
    var reader = new FileReader();
    reader.onload = function (e) {
        image.src = e.target.result;
    }
    reader.readAsDataURL(input.files[0]);
}
}

function myFunction5() {
var x = document.getElementById("dropdown5");
if (x.style.display === "block") {
    x.style.display = "none";
} else {
    x.style.display = "block";
}
}

function previewImage5(event) {
var input = event.target;
var image = document.getElementById('preview5');
if (input.files && input.files[0]) {
    var reader = new FileReader();
    reader.onload = function (e) {
        image.src = e.target.result;
    }
    reader.readAsDataURL(input.files[0]);
}
}

function myFunction6() {
var x = document.getElementById("dropdown6");
if (x.style.display === "block") {
    x.style.display = "none";
} else {
    x.style.display = "block";
}
}

function previewImage6(event) {
var input = event.target;
var image = document.getElementById('preview6');
if (input.files && input.files[0]) {
    var reader = new FileReader();
    reader.onload = function (e) {
        image.src = e.target.result;
    }
    reader.readAsDataURL(input.files[0]);
}
}

function myFunction7() {
var x = document.getElementById("dropdown7");
if (x.style.display === "block") {
    x.style.display = "none";
} else {
    x.style.display = "block";
}
}

function previewImage7(event) {
var input = event.target;
var image = document.getElementById('preview7');
if (input.files && input.files[0]) {
    var reader = new FileReader();
    reader.onload = function (e) {
        image.src = e.target.result;
    }
    reader.readAsDataURL(input.files[0]);
}
}


// --------------------------------------------------------------------------------------------------------------------------------------------------------------------------

// Metal Function Start Here 
function metalTxt() {
var x = document.getElementById("metal_txt");
if (x.style.display === "block") {
    x.style.display = "none";
} else {
    x.style.display = "block";
}
}

function myFunction8() {
var x = document.getElementById("dropdown8");
if (x.style.display === "block") {
    x.style.display = "none";
} else {
    x.style.display = "block";
}
}

function previewImage8(event) {
var input = event.target;
var image = document.getElementById('preview8');
if (input.files && input.files[0]) {
    var reader = new FileReader();
    reader.onload = function (e) {
        image.src = e.target.result;
    }
    reader.readAsDataURL(input.files[0]);
}
}

function myFunction9() {
var x = document.getElementById("dropdown9");
if (x.style.display === "block") {
    x.style.display = "none";
} else {
    x.style.display = "block";
}
}

function previewImage9(event) {
var input = event.target;
var image = document.getElementById('preview9');
if (input.files && input.files[0]) {
    var reader = new FileReader();
    reader.onload = function (e) {
        image.src = e.target.result;
    }
    reader.readAsDataURL(input.files[0]);
}
}



// --------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------


// Stationary Function Start Here 

function stationaryTxt() {
var x = document.getElementById("stationary_txt");
if (x.style.display === "block") {
    x.style.display = "none";
} else {
    x.style.display = "block";
}
}


function myFunction10() {
var x = document.getElementById("dropdown10");
if (x.style.display === "block") {
    x.style.display = "none";
} else {
    x.style.display = "block";
}
}

function previewImage10(event) {
var input = event.target;
var image = document.getElementById('preview10');
if (input.files && input.files[0]) {
    var reader = new FileReader();
    reader.onload = function (e) {
        image.src = e.target.result;
    }
    reader.readAsDataURL(input.files[0]);
}
}

function myFunction11() {
var x = document.getElementById("dropdown11");
if (x.style.display === "block") {
    x.style.display = "none";
} else {
    x.style.display = "block";
}
}

function previewImage11(event) {
var input = event.target;
var image = document.getElementById('preview11');
if (input.files && input.files[0]) {
    var reader = new FileReader();
    reader.onload = function (e) {
        image.src = e.target.result;
    }
    reader.readAsDataURL(input.files[0]);
}
}

// --------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------

// Shades Function Start Here 

function shadesTxt() {
var x = document.getElementById("shades_txt");
if (x.style.display === "block") {
    x.style.display = "none";
} else {
    x.style.display = "block";
}
}

function myFunction12() {
var x = document.getElementById("dropdown12");
if (x.style.display === "block") {
    x.style.display = "none";
} else {
    x.style.display = "block";
}
}

function previewImage12(event) {
var input = event.target;
var image = document.getElementById('preview12');
if (input.files && input.files[0]) {
    var reader = new FileReader();
    reader.onload = function (e) {
        image.src = e.target.result;
    }
    reader.readAsDataURL(input.files[0]);
}
}

function myFunction13() {
var x = document.getElementById("dropdown13");
if (x.style.display === "block") {
    x.style.display = "none";
} else {
    x.style.display = "block";
}
}

function previewImage13(event) {
var input = event.target;
var image = document.getElementById('preview13');
if (input.files && input.files[0]) {
    var reader = new FileReader();
    reader.onload = function (e) {
        image.src = e.target.result;
    }
    reader.readAsDataURL(input.files[0]);
}
}

function myFunction14() {
var x = document.getElementById("dropdown14");
if (x.style.display === "block") {
    x.style.display = "none";
} else {
    x.style.display = "block";
}
}

function previewImage14(event) {
var input = event.target;
var image = document.getElementById('preview14');
if (input.files && input.files[0]) {
    var reader = new FileReader();
    reader.onload = function (e) {
        image.src = e.target.result;
    }
    reader.readAsDataURL(input.files[0]);
}
}


// ------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------

// Acrylic Function Start Here 

function acrylicTxt() {
var x = document.getElementById("acrylic_txt");
if (x.style.display === "block") {
    x.style.display = "none";
} else {
    x.style.display = "block";
}
}


function myFunction15() {
var x = document.getElementById("dropdown15");
if (x.style.display === "block") {
    x.style.display = "none";
} else {
    x.style.display = "block";
}
}

function previewImage15(event) {
var input = event.target;
var image = document.getElementById('preview15');
if (input.files && input.files[0]) {
    var reader = new FileReader();
    reader.onload = function (e) {
        image.src = e.target.result;
    }
    reader.readAsDataURL(input.files[0]);
}
}

function myFunction16() {
var x = document.getElementById("dropdown16");
if (x.style.display === "block") {
    x.style.display = "none";
} else {
    x.style.display = "block";
}
}

function previewImage16(event) {
var input = event.target;
var image = document.getElementById('preview16');
if (input.files && input.files[0]) {
    var reader = new FileReader();
    reader.onload = function (e) {
        image.src = e.target.result;
    }
    reader.readAsDataURL(input.files[0]);
}
}


// -------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------

// Crystal Function Start Here 

function crystalTxt() {
var x = document.getElementById("crystal_txt");
if (x.style.display === "block") {
    x.style.display = "none";
} else {
    x.style.display = "block";
}
}

function myFunction17() {
var x = document.getElementById("dropdown17");
if (x.style.display === "block") {
    x.style.display = "none";
} else {
    x.style.display = "block";
}
}

function previewImage17(event) {
var input = event.target;
var image = document.getElementById('preview17');
if (input.files && input.files[0]) {
    var reader = new FileReader();
    reader.onload = function (e) {
        image.src = e.target.result;
    }
    reader.readAsDataURL(input.files[0]);
}
}


// -----------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------

// Packaging Fucntion Start Here 

function packagingTxt() {
var x = document.getElementById("packaging_txt");
if (x.style.display === "block") {
    x.style.display = "none";
} else {
    x.style.display = "block";
}
}


function myFunction18() {
var x = document.getElementById("dropdown18");
if (x.style.display === "block") {
    x.style.display = "none";
} else {
    x.style.display = "block";
}
}

function previewImage18(event) {
var input = event.target;
var image = document.getElementById('preview18');
if (input.files && input.files[0]) {
    var reader = new FileReader();
    reader.onload = function (e) {
        image.src = e.target.result;
    }
    reader.readAsDataURL(input.files[0]);
}
}


function myFunction19() {
var x = document.getElementById("dropdown19");
if (x.style.display === "block") {
    x.style.display = "none";
} else {
    x.style.display = "block";
}
}

function previewImage19(event) {
var input = event.target;
var image = document.getElementById('preview19');
if (input.files && input.files[0]) {
    var reader = new FileReader();
    reader.onload = function (e) {
        image.src = e.target.result;
    }
    reader.readAsDataURL(input.files[0]);
}
}

function myFunction20() {
var x = document.getElementById("dropdown20");
if (x.style.display === "block") {
    x.style.display = "none";
} else {
    x.style.display = "block";
}
}

function previewImage20(event) {
var input = event.target;
var image = document.getElementById('preview20');
if (input.files && input.files[0]) {
    var reader = new FileReader();
    reader.onload = function (e) {
        image.src = e.target.result;
    }
    reader.readAsDataURL(input.files[0]);
}
}

function myFunction21() {
var x = document.getElementById("dropdown21");
if (x.style.display === "block") {
    x.style.display = "none";
} else {
    x.style.display = "block";
}
}

function previewImage21(event) {
var input = event.target;
var image = document.getElementById('preview21');
if (input.files && input.files[0]) {
    var reader = new FileReader();
    reader.onload = function (e) {
        image.src = e.target.result;
    }
    reader.readAsDataURL(input.files[0]);
}
}


// ---------------------------------------------------------------------------------------------------------------------------------------------------------------------------

// Consubale Function Start Here 

function consubaleTxt() {
var x = document.getElementById("consubale_txt");
if (x.style.display === "block") {
    x.style.display = "none";
} else {
    x.style.display = "block";
}
}

function myFunction22() {
var x = document.getElementById("dropdown22");
if (x.style.display === "block") {
    x.style.display = "none";
} else {
    x.style.display = "block";
}
}

function previewImage22(event) {
var input = event.target;
var image = document.getElementById('preview22');
if (input.files && input.files[0]) {
    var reader = new FileReader();
    reader.onload = function (e) {
        image.src = e.target.result;
    }
    reader.readAsDataURL(input.files[0]);
}
}

function myFunction23() {
var x = document.getElementById("dropdown23");
if (x.style.display === "block") {
    x.style.display = "none";
} else {
    x.style.display = "block";
}
}

function previewImage23(event) {
var input = event.target;
var image = document.getElementById('preview23');
if (input.files && input.files[0]) {
    var reader = new FileReader();
    reader.onload = function (e) {
        image.src = e.target.result;
    }
    reader.readAsDataURL(input.files[0]);
}
}

function myFunction24() {
var x = document.getElementById("dropdown24");
if (x.style.display === "block") {
    x.style.display = "none";
} else {
    x.style.display = "block";
}
}

function previewImage24(event) {
var input = event.target;
var image = document.getElementById('preview24');
if (input.files && input.files[0]) {
    var reader = new FileReader();
    reader.onload = function (e) {
        image.src = e.target.result;
    }
    reader.readAsDataURL(input.files[0]);
}
}


let requireFieldsList = [dropdown1, dropdown2, dropdown3, dropdown4, dropdown5, dropdown6, dropdown7, dropdown8, dropdown9, dropdown10, dropdown11, dropdown12, dropdown13, dropdown14, dropdown15, dropdown16, dropdown17, dropdown18, dropdown19, dropdown20, dropdown21, dropdown22, dropdown23, dropdown24]


    </script>
</body>

</html>