<?php


include "../dbconnection/db.php" ;

function getTableData($tableName) {

    global $con;

    $conn = $con;


    if ($conn->connect_error) {
        error_log("Connection failed: " . $conn->connect_error);
        return ["success" => false, "message" => "Database connection failed"];
    }

    // Sanitize table name to prevent SQL injection
    $tableName = $conn->real_escape_string($tableName);

    // Query to fetch data
    $sql = "SELECT * FROM $tableName";
    $result = $conn->query($sql);

    // Check for query success
    if ($result) {
        if ($result->num_rows > 0) {
            // Fetch data and store in an array
            $data = [];
            while ($row = $result->fetch_assoc()) {
                $data[] = $row;
            }
            $conn->close();
            return ["success" => true, "data" => $data];
        } else {
            $conn->close();
            return ["success" => false, "message" => "No data found in table '$tableName'"];
        }
    } else {
        error_log("Query failed: " . $conn->error);
        $conn->close();
        return ["success" => false, "message" => "Error executing query"];
    }
}



function getTableDataById($tableName, $columnName, $id) {
    global $con;

    $conn = $con;

    if ($conn->connect_error) {
        error_log("Connection failed: " . $conn->connect_error);
        return ["success" => false, "message" => "Database connection failed"];
    }

    // Prepare and bind
    $stmt = $conn->prepare("SELECT * FROM $tableName WHERE $columnName = ?");
    if ($stmt === false) {
        error_log("Prepare failed: " . $conn->error);
        return ["success" => false, "message" => "Error preparing query"];
    }

    // Bind parameters
    $stmt->bind_param("i", $id);

    // Execute the statement
    if ($stmt->execute() === false) {
        error_log("Execute failed: " . $stmt->error);
        return ["success" => false, "message" => "Error executing query"];
    }

    // Get result
    $result = $stmt->get_result();

    // Fetch data
    if ($result->num_rows > 0) {
        $data = [];
        while ($row = $result->fetch_assoc()) {
            $data[] = $row;
        }
        $stmt->close();
        return ["success" => true, "data" => $data];
    } else {
        $stmt->close();
        return ["success" => false, "message" => "No data found in table '$tableName'"];
    }
}

function sendSerialsToAnother($serial_number, $so_head_id, $so_line_id, $inventory_id, $inventory_name)
{

    global $con;
    global $current_date;
    global $current_user;

    $table_data = getTableDataById("sale_order_items_lines", "id", $so_line_id);


    $row  = $table_data['data'][0];



    $item_code = $row['item_code'];

    // Calculate the total quantity based on the number of serial numbers
    $total_qty = count($serial_number);

    // Initialize response variables
    $quantity_to_inserted = 0;

    // Ensure the total quantity is greater than 0
    if ($total_qty > 0) {
        // Insert a new inventory transaction record
        $sql_to_create_inventory = "INSERT INTO `for_office`.`mtl_inventory_transactions` 
                                (`sub_inventory_name`, `sub_inventory_id`, `location_id`, `item_qty`, `item_code`, `so_head_id`, `created_date`, `created_by`) 
                                VALUES ('$inventory_name', '$inventory_id', '1', '$total_qty', '$item_code', '$so_head_id', '$current_date', '$current_user')";

        $result = mysqli_query($con, $sql_to_create_inventory);
        if (!$result) {
            $response['message'] = "Error while creating inventory transaction";
            $response['success'] = false;
            $response['error'] = mysqli_error($con);
            echo json_encode($response);
            exit;
        }

        // Get the last inserted ID for the transaction
        $mtnl_transaction_id = mysqli_insert_id($con);

        // Loop through each serial number and update the corresponding record
        foreach ($serial_number as $key => $value) {
            $s_number = $value;

            // Update query to set inventory ID and other fields
            $query = "UPDATE `for_office`.`mtl_serial_number` 
                  SET `inventory_id` = '$inventory_id', `updated_date` = '$current_date', `updated_by` = '$current_user', `mtnl_transaction_id` = '$mtnl_transaction_id' 
                  WHERE `serial_number` = ?";

            // Prepare the query and bind parameters
            $stmt = $con->prepare($query);
            $stmt->bind_param('s', $s_number);

            // Execute the statement and check if it succeeded
            if ($stmt->execute()) {
                $quantity_to_inserted++;
            } else {
                $response['message'] = "Error while updating serial number";
                $response['success'] = false;
                $response['error'] = $stmt->error;
                $response['num_of_created'] = $quantity_to_inserted;
                $response['at_error'] = $value;
                echo json_encode($response);
                exit;
            }
        }

        // Send success response with the number of items inserted
        $response['success'] = true;
        $response['message'] = "Successfully updated inventory and serial numbers";
        $response['num_of_created'] = $quantity_to_inserted;
        echo json_encode($response);
    } else {
        $response['success'] = false;
        $response['message'] = "No serial numbers provided";
        echo json_encode($response);
    }
}

?>
