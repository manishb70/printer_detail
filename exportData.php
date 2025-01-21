<?php
require 'vendor/autoload.php';
include('./dbconnection/db.php');

use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Writer\Xlsx;

if ($_SERVER['REQUEST_METHOD'] === 'GET') {
    // Database connection
    $conn = $con;

    if ($conn->connect_error) {
        die('Database connection failed: ' . $conn->connect_error);
    }

    // Fetch data from the table
    $sql = "SELECT * FROM for_office.purchase_order_header a join for_office.purchase_order_line b ON a.PO_number=b.po_number";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        // Create a new Spreadsheet
        $spreadsheet = new Spreadsheet();
        $sheet = $spreadsheet->getActiveSheet();

        // Add headers
        $headers = array_keys($result->fetch_assoc());
        $result->data_seek(0); // Reset pointer to fetch rows again
        $colIndex = 'A';
        foreach ($headers as $header) {
            $sheet->setCellValue($colIndex . '1', $header);
            $colIndex++;
        }

        // Add rows
        $rowIndex = 2; // Start from the second row for data
        while ($row = $result->fetch_assoc()) {
            $colIndex = 'A';
            foreach ($row as $cell) {
                $sheet->setCellValue($colIndex . $rowIndex, $cell);
                $colIndex++;
            }
            $rowIndex++;
        }

        // Set the file name and download headers
        $fileName = 'export_data_' . date('Y-m-d_H-i-s') . '.xlsx';
        header('Content-Type: application/vnd.openxmlformats-officedocument.spreadsheetml.sheet');
        header('Content-Disposition: attachment; filename="' . $fileName . '"');

        $writer = new Xlsx($spreadsheet);
        $writer->save('php://output');
        exit;
    } else {
        echo "No data found in the table.";
    }

    $conn->close();
}
