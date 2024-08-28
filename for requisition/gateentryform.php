<?php

include("./db.php");


if ($_SERVER['REQUEST_METHOD']) {



    if (isset($_POST["gateentryform"])) {


        $po_number = $_POST['po_number'];
        $mode_of_transport = $_POST['mode_trans'];
        $vehicle_number = $_POST['vehicle_number'];
        $no_of_boxes = $_POST['noofboxes'];
        $weight = $_POST['weight'];
        // $frightCharge = $_POST['frightCharge'];
        $frightCharge = "hello";
        $recieved_by = $_POST['recievedBy'];
        $remarks = $_POST['remarks'];
        $invoice_number = $_POST['invoice_number'];
        $datetime = date('Y-m-d H:i:s');



        $stmt = $con->prepare("INSERT INTO `for_office`.`gate_entry_form` 
    (`invoice_number`, `no_of_boxes`, `fireght_charges`, `weight`, `recieving_datetime`, 
    `mode_of_transport`, `vehicle_number`, `recieved_by`, `remarks`, `po_number`) 
    VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?)");

        $stmt->bind_param("sissssssss", $invoice_number, $no_of_boxes, $frightCharge, $weight, $datetime, $mode_of_transport, $vehicle_number, $recieved_by, $remarks, $po_number);

        $result = $stmt->execute();

        if ($result) {
            echo "Record inserted successfully.";
        } else {
            echo "Error: " . $stmt->error;
        }

        $stmt->close();
        $con->close();





    }




}





?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.0.4/dist/tailwind.min.css" rel="stylesheet">


    <title>Document</title>
</head>

<body>

    <?php require("./navForLogged.php") ?>



    <div class="mt-24 mx-auto" style="width:80%;">

        <label class="mb-5 block text-base font-semibold text-[#07074D] sm:text-xl">
            Gate entry from
        </label>

        <div class="flex items-center justify-center p-12">
            <!-- Author: FormBold Team -->
            <div class="mx-auto w-full max-w-[550px] bg-white">
                <form action="#" method="POST">
                    <div class="-mx-3 flex flex-wrap">
                        <div class="w-full px-3 sm:w-1/2">
                            <div class="mb-5">
                                <label for="date" class="mb-3 block text-base font-medium text-[#07074D]">
                                    Enter PO number
                                </label>
                                <input type="text" <?php echo isset($_POST["gateentryform"]) ? "disabled" : ""; ?>
                                    value="<?php echo isset($_POST["gateentryform"]) ? $po_number : ""; ?>"
                                    name="po_number" id="text" placeholder="Enter PO number"
                                    class="w-full rounded-md border border-[#e0e0e0] bg-white py-3 px-6 text-base font-medium text-[#6B7280] outline-none focus:border-[#6A64F1] focus:shadow-md" />
                            </div>
                        </div>
                        <div class="w-full px-3 sm:w-1/2">
                            <div class="mb-5">
                                <label for="date" class="mb-3 block text-base font-medium text-[#07074D]">
                                    Invoice number
                                </label>
                                <input type="text" <?php echo isset($_POST["gateentryform"]) ? "disabled" : ""; ?>
                                    name="invoice_number" id="text" placeholder="Enter PO number"
                                    value="<?php echo isset($_POST["gateentryform"]) ? $_POST['invoice_number'] : ""; ?>"
                                    class="w-full rounded-md border border-[#e0e0e0] bg-white py-3 px-6 text-base font-medium text-[#6B7280] outline-none focus:border-[#6A64F1] focus:shadow-md" />
                            </div>
                        </div>

                    </div>
                    <div class="-mx-3 flex flex-wrap">
                        <div class="w-full px-3 sm:w-1/2">
                            <div class="mb-5">
                                <label for="date" class="mb-3 block text-base font-medium text-[#07074D]">
                                    Mode of transport
                                </label>
                                <input type="text" <?php echo isset($_POST["gateentryform"]) ? "disabled" : ""; ?>
                                    name="mode_trans" id="text" placeholder="Mode of transport"
                                    value="<?php echo isset($_POST["gateentryform"]) ? $mode_of_transport : ""; ?>"
                                    class="w-full rounded-md border border-[#e0e0e0] bg-white py-3 px-6 text-base font-medium text-[#6B7280] outline-none focus:border-[#6A64F1] focus:shadow-md" />
                            </div>
                        </div>
                        <div class="w-full px-3 sm:w-1/2">
                            <div class="mb-5">
                                <label for="time" class="mb-3 block text-base font-medium text-[#07074D]">
                                    Vehicle number
                                </label>
                                <input type="text" <?php echo isset($_POST["gateentryform"]) ? "disabled" : ""; ?>
                                    name="vehicle_number" id="text" placeholder="Vehicle number"
                                    value="<?php echo isset($_POST["gateentryform"]) ? $vehicle_number : ""; ?>"
                                    class="w-full rounded-md border border-[#e0e0e0] bg-white py-3 px-6 text-base font-medium text-[#6B7280] outline-none focus:border-[#6A64F1] focus:shadow-md" />
                            </div>
                        </div>
                    </div>

                    <div class="-mx-3 flex flex-wrap">
                        <div class="w-full px-3 sm:w-1/2">
                            <div class="mb-5">
                                <label for="date" class="mb-3 block text-base font-medium text-[#07074D]">
                                    No. Of boxes
                                </label>
                                <input <?php echo isset($_POST["gateentryform"]) ? "disabled" : ""; ?> type="text"
                                    name="noofboxes" id="text" placeholder="No of boxes"
                                    value="<?php echo isset($_POST["gateentryform"]) ? $no_of_boxes : ""; ?>"
                                    class="w-full rounded-md border border-[#e0e0e0] bg-white py-3 px-6 text-base font-medium text-[#6B7280] outline-none focus:border-[#6A64F1] focus:shadow-md" />
                            </div>
                        </div>
                        <div class="w-full px-3 sm:w-1/2">
                            <div class="mb-5">
                                <label for="time" class="mb-3 block text-base font-medium text-[#07074D]">
                                    Weight
                                </label>
                                <input type="text" <?php echo isset($_POST["gateentryform"]) ? "disabled" : ""; ?>
                                    value="<?php echo isset($_POST["gateentryform"]) ? $weight : ""; ?>" name="weight"
                                    id="text" placeholder=" Weight"
                                    class="w-full rounded-md border border-[#e0e0e0] bg-white py-3 px-6 text-base font-medium text-[#6B7280] outline-none focus:border-[#6A64F1] focus:shadow-md" />
                            </div>
                        </div>
                    </div>
                    <div class="-mx-3 flex flex-wrap">
                        <div class="w-full px-3 sm:w-1/2">
                            <div class="mb-5">
                                <label for="date" class="mb-3 block text-base font-medium text-[#07074D]">
                                    Fright charges
                                </label>
                                <input type="text" <?php echo isset($_POST["gateentryform"]) ? "disabled" : ""; ?>
                                    name="frightCharge" id="frightCharge" placeholder="Fright charges"
                                    value="<?php echo isset($_POST["gateentryform"]) ? $frightCharge : ""; ?>"
                                    class="w-full rounded-md border border-[#e0e0e0] bg-white py-3 px-6 text-base font-medium text-[#6B7280] outline-none focus:border-[#6A64F1] focus:shadow-md" />
                            </div>
                        </div>

                    </div>
                    <div class="-mx-3 flex flex-wrap">
                        <div class="w-full px-3 sm:w-1/2">
                            <div class="mb-5">
                                <label for="date" class="mb-3 block text-base font-medium text-[#07074D]">
                                    Received by
                                </label>
                                <input type="text" <?php echo isset($_POST["gateentryform"]) ? "disabled" : ""; ?>
                                    value="<?php echo isset($_POST["gateentryform"]) ? $recieved_by : ""; ?>"
                                    name="recievedBy" id="recievedBy" placeholder="Received by"
                                    class="w-full rounded-md border border-[#e0e0e0] bg-white py-3 px-6 text-base font-medium text-[#6B7280] outline-none focus:border-[#6A64F1] focus:shadow-md" />
                            </div>
                        </div>
                        <div class="w-full px-3 sm:w-1/2">
                            <div class="mb-5">
                                <label for="date" class="mb-3 block text-base font-medium text-[#07074D]">
                                    Remarks
                                </label>
                                <input type="text" <?php echo isset($_POST["gateentryform"]) ? "disabled" : ""; ?>
                                    name="remarks" id="remarks" placeholder="Remarks"
                                    value="<?php echo isset($_POST["gateentryform"]) ? $remarks : ""; ?>"
                                    class="w-full rounded-md border border-[#e0e0e0] bg-white py-3 px-6 text-base font-medium text-[#6B7280] outline-none focus:border-[#6A64F1] focus:shadow-md" />
                            </div>
                        </div>

                    </div>




                    <div class="flex justify-around">
                        <button type="submit" name="gateentryform" onclick="return handleSubmit();""
                            <?php echo isset($_POST["gateentryform"]) ? "disabled" : ""; ?>
                            class=" hover:shadow-form w-full bg-black rounded-md py-3 px-8 text-center text-base
                            font-semibold text-white outline-none">



                            Submit
                        </button>


                        <?php echo isset($_POST["gateentryform"]) ? '  <a  
                        onclick="reloadPage()"

                            class="hover:shadow-form w-full bg-blue-300 rounded-md bg-[#6A64F1] py-3 px-8 text-center text-base font-semibold text-white outline-none">



                            Create
                        </a>' : ""; ?>

                    </div>
                </form>
            </div>
        </div>




    </div>






</body>
<script>
    function handleSubmit() {
        // Show a confirmation dialog
        const userConfirmed = window.confirm("Are you sure you want to submit?");

        if (userConfirmed) {
            // User clicked OK, submit the form
            return true; // Proceed with form submission
        } else {
            // User clicked Cancel, reload the page
            location.reload(); // Reload the page
            return false; // Prevent form submission
        }
    }

  
function reloadPage() {
    // Reload the page from the server, bypassing the cache
    location.replace("gateentryform.php");
}


</script>


</html>