    <?php




if ($_SERVER['REQUEST_METHOD'] == 'POST') {



    // echo json_encode($_POST);

    if (isset($_POST['grnDataInsert'])) {

        // include('../../dconnection/db.php');
        include('../../db.php');
        // $response["data"] = $_POST;




        // $amount=$_POST['amount'];
        // $approved=$_POST['approved'];
        // $box_detail=$_POST['box_detail'];
        // $checked_by=$_POST['checked_by'];
        // $finished=$_POST['finished'];
        // $grnDataInsert=$_POST['grnDataInsert'];
        // $inventory_id=$_POST['inventory_id'];
        // $invoice_date=$_POST['invoice_date'];
        // $invoice_num=$_POST['invoice_num'];
        // $item_code=$_POST['item_code'];
        // $item_discription=$_POST['item_discription'];
        // $item_id=$_POST['item_id'];
        // $mode_of_transport=$_POST['mode_of_transport'];
        // $purchase_order_date=$_POST['purchase_order_date'];
        // $purchase_order_id=$_POST['purchase_order_id'];
        // $purchase_order_line=$_POST['purchase_order_line'];
        // $received_quantity=$_POST['received_quantity'];
        // $receiving_item=$_POST['receiving_item'];
        // $recevied_date=$_POST['recevied_date'];
        // $remarks=$_POST['remarks'];
        // $serial_number_from=$_POST['serial_number_from'];
        // $serial_number_to=$_POST['serial_number_to'];
        // $vehical_detail=$_POST['vehical_detail'];
        // $vendor_name=$_POST['vendor_name'];
        // $warehouse_code=$_POST['warehouse_code'];
        // $warehouse_location=$_POST['warehouse_location'];


        $amount = isset($_POST['amount']) ? $_POST['amount'] : null;
        $approved = isset($_POST['approved']) ? $_POST['approved'] : null;
        $box_detail = isset($_POST['box_detail']) ? $_POST['box_detail'] : null;
        $box_no = isset($_POST['box_no']) ? $_POST['box_no'] : null;
        $checked_by = isset($_POST['checked_by']) ? $_POST['checked_by'] : null;
        $finished = isset($_POST['finished']) ? $_POST['finished'] : null;
        $grnDataInsert = isset($_POST['grnDataInsert']) ? $_POST['grnDataInsert'] : null;
        $inventory_id = isset($_POST['inventory_id']) ? $_POST['inventory_id'] : null;
        $invoice_date = isset($_POST['invoice_date']) ? $_POST['invoice_date'] : null;
        $invoice_num = isset($_POST['invoice_num']) ? $_POST['invoice_num'] : null;
        $item_code = isset($_POST['item_code']) ? $_POST['item_code'] : null;
        $item_discription = isset($_POST['item_discription']) ? $_POST['item_discription'] : null;
        $item_id = isset($_POST['item_id']) ? $_POST['item_id'] : null;
        $mode_of_transport = isset($_POST['mode_of_transport']) ? $_POST['mode_of_transport'] : null;
        $purchase_order_date = isset($_POST['purchase_order_date']) ? $_POST['purchase_order_date'] : null;
        $purchase_order_id = isset($_POST['purchase_order_id']) ? $_POST['purchase_order_id'] : null;
        $purchase_order_line = isset($_POST['purchase_order_line']) ? $_POST['purchase_order_line'] : null;
        $received_quantity = isset($_POST['received_quantity']) ? $_POST['received_quantity'] : null;
        $receiving_item = isset($_POST['receiving_item']) ? $_POST['receiving_item'] : null;
        $recevied_date = isset($_POST['recevied_date']) ? $_POST['recevied_date'] : null;
        $receiving_time = isset($_POST['receiving_time']) ? $_POST['receiving_time'] : null;
        $remarks = isset($_POST['remarks']) ? $_POST['remarks'] : null;
        $serial_number_from = isset($_POST['serial_number_from']) ? $_POST['serial_number_from'] : null;
        $serial_number_to = isset($_POST['serial_number_to']) ? $_POST['serial_number_to'] : null;
        $vehical_detail = isset($_POST['vehical_detail']) ? $_POST['vehical_detail'] : null;
        $vendor_name = isset($_POST['vendor_name']) ? $_POST['vendor_name'] : null;
        $warehouse_code = isset($_POST['warehouse_code']) ? $_POST['warehouse_code'] : null;
        $warehouse_location = isset($_POST['warehouse_location']) ? $_POST['warehouse_location'] : null;
        $weight = isset($_POST['weight']) ? $_POST['weight'] : null;
        $dimension = isset($_POST['dimension']) ? $_POST['dimension'] : null;






        $sql = "INSERT INTO `for_office`.`grn_goods_receipt` (`item_id`, `item_code`, `item_discription`, `warehouse_location`, `warehouse_code`, `receiving_item`, `purchase_order_id`, `purchase_order_date`, `purchase_order_line`, `received_quantity`, `recevied_date`, `receiving_time`, `finished`, `weight`, `dimension`, `box_no`, `box_detail`, `checked_by`, `approved`, `remarks`, `serial_number_to`, `serial_number_from`, `vendor_name`, `mode_of_transport`, `vehical_detail`, `invoice_num`, `invoice_date`, `amount`) VALUES ('$item_id',
         '$item_code',
         '$item_discription',
          '$warehouse_location',
          '$warehouse_code',
          '$receiving_item',
           '$purchase_order_id',
           '$purchase_order_date', 
           '$purchase_order_line', 
          '$received_quantity', 
          '$recevied_date', 
          '$receiving_time',
           '$finished', 
           '$weight',
            '$dimension', 
            '$box_no', 
            '$box_detail',
             '$checked_by', 
            '$approved', 
            '$remarks', 
            '$serial_number_to',
             '$serial_number_from', 
             '$vendor_name',
              '$mode_of_transport',
              '$vehical_detail',
             '$invoice_num', 
             '$invoice_date', 
             '$amount');";




        $result = mysqli_query($con, $sql);


        if ($result) {



            $response["success"] = true;
        } else {
            $response["success"] = false;
        }





        echo  json_encode($response);
        // echo  "hellow";
    }
}
