<?php
    date_default_timezone_set('asia/kolkata');
    echo date('Y-m-d h:i:s');
    echo md5();

     // echo "<pre>";
    // print_r($_SESSION);
    // die();
?>



<?php
    include('config.php');
    if(isset($_GET['id'])){
       $sql = "SELECT * FROM contacts WHERE id = '".$_GET['id']."'";

        if (mysqli_query($conn, $sql)) {
            $result = mysqli_fetch_assoc(mysqli_query($conn, $sql));
            // echo "<pre>";
            // print_r($result['name']);
            // die();

        } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
        }

        mysqli_close($conn);
    }
?>

