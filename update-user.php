<?php
    include('config.php');
    if(isset($_SESSION['id'])){
        // echo "<pre>";
        // print_r($_POST['id']);
        // die();

        $sql = "UPDATE users SET first_name = '".$_POST['first_name']."', middle_name = '".$_POST['middle_name']."', last_name = '".$_POST['last_name']."', gender = '".$_POST['gender']."', date_of_birth = '".$_POST['date_of_birth']."', email_id = '".$_POST['email_id']."', mobile_no = '".$_POST['mobile_no']."', caste = '".$_POST['caste']."' WHERE id = '".$_POST['id']."'";

        if (mysqli_query($conn, $sql)) {
            // $_SESSION['success_message'] = 'record updated successfully'; 
            // header("Location: http://localhost/mini-project/edit-user.php");
          echo  "<script> alert('record updated successfully');window.location='edit-user.php'</script>";
        } else {
            echo "Error: " . $sql . "<br>" . mysqli_error($conn);
        }

        mysqli_close($conn);
    }
?>