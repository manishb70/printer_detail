<?php 
// include("./controller/db.php");
include("../dbconnection/db.php");

// $transaction_no = $_POST["transaction_no"];
$transaction_date = isset($_POST["transaction_date"]) ? $_POST["transaction_date"] : '';
$amount_type = isset($_POST["amount_type"]) ? $_POST["amount_type"] : '';
$credit_amt = isset($_POST["credit_amt"]) ? $_POST["credit_amt"] : '';
$debit_amt = isset($_POST["debit_amt"]) ? $_POST["debit_amt"] : '';
$particuler_to = isset($_POST["particuler_to"]) ? $_POST["particuler_to"] : '';
$site = isset($_POST["site"]) ? $_POST["site"] : '';
$main_head = isset($_POST["main_head"]) ? $_POST["main_head"] : '';
$sub_head = isset($_POST["sub_head"]) ? $_POST["sub_head"] : '';
$bill_cheque_no = isset($_POST["bill_cheque_no"]) ? $_POST["bill_cheque_no"] : '';
$invoice_date = isset($_POST["invoice_date"]) ? $_POST["invoice_date"] : '';
$invoice_no = isset($_POST["invoice_no"]) ? $_POST["invoice_no"] : '';
$gst_no = isset($_POST["gst_no"]) ? $_POST["gst_no"] : '';
$remarks = isset($_POST["remarks"]) ? $_POST["remarks"] : '';

$sql = "INSERT INTO for_office.daily_txn_book(transaction_date, amount_type, credit_amt, debit_amt, particuler_to, site, main_head, sub_head, bill_cheque_no, invoice_date, invoice_no, gst_no, remarks) 
VALUES('$transaction_date', '$amount_type', '$credit_amt', '$debit_amt', '$particuler_to', '$site', '$main_head', '$sub_head', '$bill_cheque_no', '$invoice_date', '$invoice_no', '$gst_no', '$remarks')";


if ($con->query($sql) === TRUE) {
    echo "New record created successfully";
    header("location:../txnCreation.php");
  } else {
    echo "Error: " . $sql . "<br>" . $con->error;
  }
  
  $con->close();

?>