<?php
session_start();
$servername = "localhost";
$username = "root";
$password = "root";
$dbname = "for_office";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
} 

// $record_no = $_POST['record_no'];
$created_by = $_SESSION["username"];
$created_date = date("Y-m-d H:i:s");
// $form_status = $_POST['form_status'];
$lead_source = $_POST['lead_source'];
$ref_By = $_POST['ref_By'];
$ref_phone_no = $_POST['ref_phone_no'];
$lead_type = $_POST['lead_type'];
$contact_person_name = $_POST['contact_person_name'];
$contact_person_phone_no = $_POST['contact_person_phone_no'];
$contact_person_email = $_POST['contact_person_email'];
$contact_person_address = $_POST['contact_person_address'];
$lead_received_date = $_POST['lead_received_date'];

// echo $form_status;

$sql= "INSERT INTO lead_details_header_form(created_by, created_date, lead_source, ref_By, ref_phone_no, lead_type, contact_person_name, contact_person_phone_no, contact_person_email, contact_person_address, lead_received_date) 
VALUES('$created_by', '$created_date', '$lead_source', '$ref_By', '$ref_phone_no', '$lead_type', '$contact_person_name', '$contact_person_phone_no', '$contact_person_email', '$contact_person_address', '$lead_received_date')";


if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
  } else {
    echo "Error: " . $sql . "<br>" . $conn->error;
  }
  
  $conn->close();


?>