<?php
    include('config.php');
    if(isset($_POST['id'])){
        // echo "<pre>";
        // print_r($_POST);
        // die();

         $sql = "UPDATE contacts SET name = '".$_POST['name']."', email = '".$_POST['email']."', mobile = '".$_POST['mobile']."', message = '".$_POST['message']."' WHERE id = '".$_POST['id']."' "; 
       
        if (mysqli_query($conn, $sql)) {
        echo " Rcord updated successfully";
        header("Location: http://localhost/mini-project/contact-list.php");
        } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
        }

        mysqli_close($conn);
    }
?>