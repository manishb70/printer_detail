


<?php
session_start();

    if($_SERVER['REQUEST_METHOD'] == 'POST'){


        $otp = $_SESSION['otp'];

        $enteredOtp = (int) $_POST['otp'];



        if($enteredOtp===$otp){


            $responsep['otp'] = $enteredOtp;
            $responsep['message'] = 'OTP is correct';
            $responsep['success'] = true;
            

        }else{
            $responsep['message'] = 'OTP is incorrect';
            $responsep['success'] = false;
            $responsep['otp'] = $_SESSION['otp'];
            $responsep['enteredOtp'] = $enteredOtp;
        }

        


            echo json_encode($responsep);


    }





















?>