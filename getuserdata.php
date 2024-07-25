    <?php
    include("db.php");










    $sql = "SELECT * FROM user_info";

    try {
        //code...
        $result = mysqli_query($con, $sql);
    } catch (\Throwable $th) {
        echo "something error";
    }




    $i = 0;

    while ($row = mysqli_fetch_assoc($result)) {

        echo $row["fullname"] . "\n<br>";
        // echo "something error";

        $i++;
        // if ($i == 10) {

        //     break;
        // }
    }

    echo "<br>";
    foreach ($result as $row) {

        echo $row["fullname"] . "\n<br>";
    }




    if (mysqli_num_rows($result) > 0) {

        echo "Data fetch successfully";
    }

    // echo array_keys($result);

    // echo  $result ;



    // for($i = 0;  $i<mysqli_num_rows($result); $i++) {


    //     $row = mysqli_fetch_assoc($result);

    //     echo var_dump($row["username"]);
    // }




    ?>














