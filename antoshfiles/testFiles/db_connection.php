<?php

    include("db.php");


$name = $_POST["fullname"];
$email = $_POST["email"];
$password = $_POST["password"];
$username = $_POST["username"];
$phone = $_POST["phone_number"];
$age = $_POST["age"];
$gender = $_POST["gender"];
$addressline_1 = $_POST["addresline_1"];
$addressline_2 = $_POST["addresline_2"];
$landmark = $_POST["landmark"];
$area = $_POST["area"];
$pincode = $_POST["pincode"];
$total_amount_due = $_POST["total_amount"];
$amount_recieved = $_POST["amount_recieved"];
$dob = $_POST["dob"];
$bank_name = $_POST["bank_name"];
$branch_name = $_POST["branch_name"];
$bank_account_number = $_POST["bank_account_number"];
$bank_ifsc = $_POST["bank_ifsc"];
$year = $_POST["year"];
$pan_card = $_POST["pan_card"];
$adhaar_card = $_POST["adhaar_card"];
$category = $_POST["category"];
$Membership = $_POST["membership"];
$company_name = $_POST["company_name"];
$user_type  =  $_POST["user_type"];








// $sql = "SELECT * FROM user_info";

$sql = "INSERT INTO user_info (fullname, user_email, user_phoneNumber, age, gender, address_line_1, username, password, date_birth, bank_name, bank_account_number, bank_IFSC_code, bank_branch_name, Year, pan_card_required, adhaar_number, category, membership, name_of_company, address_line_2, landmark, area, pincode, total_amount_due, total_amount_received, membership_renewed, user_type) VALUES ('$name', '$email', '$phone', '$age', '$gender',' $addressline_1', '$username','$password', '$dob', '$bank_name', '$bank_account_number', '$bank_ifsc', '$branch_name', '$year','$pan_card', '$adhaar_card', '$category', '$Membership', '$company_name', '$$addressline_2', '$landmark', '$area', '$pincode', '$total_amount_due', '$amount_recieved', 'no','$user_type')";


try {
    
    $result = mysqli_query($con, $sql);
} catch (\Throwable $th) {
    echo "Something error from database or query";
}


if (mysqli_query($con, $sql)) {
    echo "data created succesfully";
} else {
    echo "Error "  . "<br>";
};

echo "<br>";


// echo $result;
