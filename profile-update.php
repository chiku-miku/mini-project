<?php
    include('config.php');
    if(isset($_POST['id'])){
        // echo "<pre>";
        // print_r($_POST['id']);
        // die();

        $sql = "UPDATE users SET first_name = '".$_POST['first_name']."', last_name = '".$_POST['last_name']."', date_of_birth = '".$_POST['date_of_birth']."', mobile_no = '".$_POST['mobile_no']."' WHERE id = '".$_POST['id']."'";

        if (mysqli_query($conn, $sql)) {
            
            header("Location: http://localhost/mini-project/profile.php");
        } else {
            echo "Error: " . $sql . "<br>" . mysqli_error($conn);
        }

        mysqli_close($conn);
    }
?>