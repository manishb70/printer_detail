<?php
session_start();
include '../controllers/db_functions.php';

$current_date = date('Y-m-d');
$current_user = $_SESSION['username'];

if ($_SERVER['REQUEST_METHOD'] == 'POST') {







    if ($_POST['issueItems']) {

        $so_line_id = $_POST['so_line_id'];

        $response['status'] = true;
        $response['data'] = $_POST;



        $table_data = getTableDataById("sale_order_items_lines", "id", $so_line_id);



        if ($table_data["success"]) {


            if ($table_data['data'] > 0) {

                $row  = $table_data['data'][0];


                $item_code  = $row['item_code'];
                $total_qty  = (int) $_POST['qty'];
                $so_head_id = (int) $row['so_number'];









                $query = "INSERT INTO `for_office`.`project_status_table` (`item_code`, `total_qty`, `so_head_id`, `so_line_id`,`created_date` ,`created_by` ) VALUES (?, ?, ?, ? , ? ,?);";



                $stmt = $con->prepare($query);
                $stmt->bind_param("siiiss", $item_code, $total_qty, $so_head_id, $so_line_id, $current_date, $current_user);

                if ($stmt->execute()) {

                    $quer_for_update_so_line =  "UPDATE `for_office`.`sale_order_items_lines` SET `work_in_progress_qty` = work_in_progress_qty+$total_qty WHERE (`id` = $so_line_id);";

                    if (mysqli_query($con, $quer_for_update_so_line)) {




                        $process_qty = $total_qty;
                        while ($process_qty > 0) {


                            $sql = mysqli_query($con, "SELECT  * FROM for_office.mtl_inventory_transactions  where item_code='$item_code'  order by item_qty desc limit 1");

                            $result = mysqli_fetch_assoc($sql);
                            $current_id = (int) $result['id'];

                            $qty = (int) $result['item_qty'];


                            if ($process_qty <= $qty) {




                                $sql = "UPDATE `for_office`.`mtl_inventory_transactions` SET `item_qty` = item_qty-$process_qty, `hold_qty` = hold_qty+$process_qty WHERE (`id` = '$current_id')";

                                if (mysqli_query($con, $sql)) {

                                    $response['message'] = "transaction completed successfully ";
                                    $process_qty = 0;
                                } else {


                                    echo mysqli_error($con);
                                    $response['message'] = "transaction is not something went wrong !!! ";
                                }
                            } else {



                                $sql = "UPDATE `for_office`.`mtl_inventory_transactions` SET `item_qty` = item_qty-$qty, `hold_qty` = hold_qty+$qty WHERE (`id` = '$current_id')";




                                if (mysqli_query($con, $sql)) {

                                    $response['message'] = "transaction completed successfully ";
                                    $process_qty = $process_qty - $qty;

                                    $response['new_qty'] = $total_qty;

                                } else {

                                    echo mysqli_error($con);
                                    $response['message'] = "transaction is not something went wrong!!! ";

                                    exit(1);
                                }




                                $response['message_2'] = "need quantity is greater than quantity in store";
                            }


                            // break;
                        }











                        $response['success'] = true;
                    } else {
                        $response['message'] = "Error while inserting issue items";
                        $response['success'] = false;
                        $response['error'] = $stmt->error;
                    }
                } else {
                    $response['message'] = "Error while inserting issue items";
                    $response['success'] = false;
                    $response['error'] = $stmt->error;
                }
            } else {
                $response['message'] = "data not found";
            }
        } else {
            $response['message'] = "error while fetching data";
        }






        $response['data'] = $_POST;

        echo json_encode($response);
    }
}
