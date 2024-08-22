<?php
$servername = "localhost";
$username = "root";
$password = "manish@123";
$dbname = "for_Office";







$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {


    die("connection failed" . $conn->connect_error);
} else {
    echo "Connection success";
}
