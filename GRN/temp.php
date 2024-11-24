<?php


$date = date('Ymd'); // Current date in YYYYMMDD format
$time = date('His'); // Current time in HHMMSS format
$serialNumbers = [];
$quantity=10;

for ($i = 1; $i <= $quantity; $i++) {
    // Format: MIS-YYYYMMDD-HHMMSS-### (padded to 3 digits)
    $serialNumber = "MIS-$date-$time-" . str_pad($i, 3, "0", STR_PAD_LEFT);
    $serialNumbers[] = $serialNumber;

}

var_dump($serialNumbers);















 

?>